<?php 
include 'layout-default.php'; 

$host = $_POST['host'] ?? '';
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$database = $_POST['database-m'] ?? '';
if ($database === '') {
    $database = $_FILES['database-s']['tmp_name'] ?? '';
    if ($database !== '') {
        $file = $_FILES['database-s'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];
        $fileDestination = 'uploads/' . $fileName;
        move_uploaded_file($fileTmpName, $fileDestination) ? $database = $fileDestination : $database = '';
    }
}
$port = $_POST['port'] ?? '';
$type = $_POST['type-mysql'] ?? '';
if ($type === '') $type = $_POST['type-sqlite'] ?? '';
$tables = [];
?>
<div class="container blur-overlay">
    <?php include 'header.php'; ?>
    <div id="alert" class="mt-3"></div>
    <div id="status-database" class="text-white" style="background-color: #343a40; border-radius: 5px;">
        <div class="d-flex align-items-center justify-content-center">
            <div id="status-connect" class="mt-3 text-center" style="border: 1px solid #808080; border-radius: 5px; width: 30%;"></div>
        </div>
        <div class="mt-3 text-center">
            <b class="text-info">Type Database:&nbsp;</b><div id="type-database"><?php echo $type ?></div>
        </div>
        <div id="mysql-status" class="d-flex flex-sm-row flex-column mt-3" style="justify-content: center;">
            <b class="text-info">Host:&nbsp;</b><div id="host"><?php echo $host ?></div>&nbsp;&nbsp;
            <b class="text-info">Username:&nbsp;</b><div id="username"><?php echo $username ?></div>&nbsp;&nbsp;
            <b class="text-info">Password:&nbsp;</b><div id="password"><?php echo $password ?></div>&nbsp;&nbsp;
            <b class="text-info">Database:&nbsp;</b><div id="database"><?php echo $database ?></div>&nbsp;&nbsp;
            <b class="text-info">Port:&nbsp;</b><div id="port"><?php echo $port ?></div>
        </div>
    </div>
    <div class="row mt-4 bg-dark" style="border-radius: 5px;">
        <div class="col d-flex justify-content-start">
            <select id="tables" class="form-select bg-dark text-white" aria-label="tables" style="border: 1px solid #3d3d3d;">
                <option selected hidden class="fw-bold">Select Table</option>
            </select>
        </div>
        <div class="col d-flex justify-content-center">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="hash-data">
                <label class="form-check-label font-weight-bold text-warning" for="hash-data">
                    Is your data hashed?
                </label>
            </div>
        </div>
        <div class="col d-flex justify-content-end">
            <button id="btn-refresh" type="button" class="btn bg-dark text-white fw-bold" style="border: 1px solid #3d3d3d;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bootstrap-reboot" viewBox="0 0 16 16">
                    <path d="M1.161 8a6.84 6.84 0 1 0 6.842-6.84.58.58 0 1 1 0-1.16 8 8 0 1 1-6.556 3.412l-.663-.577a.58.58 0 0 1 .227-.997l2.52-.69a.58.58 0 0 1 .728.633l-.332 2.592a.58.58 0 0 1-.956.364l-.643-.56A6.8 6.8 0 0 0 1.16 8z"/>
                    <path d="M6.641 11.671V8.843h1.57l1.498 2.828h1.314L9.377 8.665c.897-.3 1.427-1.106 1.427-2.1 0-1.37-.943-2.246-2.456-2.246H5.5v7.352zm0-3.75V5.277h1.57c.881 0 1.416.499 1.416 1.32 0 .84-.504 1.324-1.386 1.324z"/>
                </svg>
            </button>
        </div>
    </div>
    <hr class="my-2">
    <div class="d-flex flex-sm-row flex-column bg-dark align-items-center">
        <div class="text-info h5">Theme:</div>&nbsp;
        <select id="set_theme" class="form-select bg-dark text-white" aria-label="set_theme" style="width: auto; border: 1px solid #3d3d3d;">
            <option selected hidden>dracula</option>
            <?php foreach (glob(__DIR__ . '\public\css\theme' . '\*.css') as $style) { $i = str_replace(".css", "", basename($style)); ?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php } ?>
        </select>&nbsp;&nbsp;&nbsp;
        <div class="text-info h5">Size Font:</div>&nbsp;
        <select id="set-sizes" class="form-select bg-dark text-white" aria-label="set-sizes" style="width: auto; border: 1px solid #3d3d3d;">
            <option selected hidden>25</option>
            <?php for ($i = 1; $i <= 100; $i++) { ?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="row">
        <div id="code"></div><br>
        <div class="col-md-12">
            <button id="save" type="button" class="btn btn-success fw-bold">Save Changes</button>
        </div>
    </div>
    <div class="container">&nbsp;</div>
</div>
<script src="public/js/edit-page.js"></script>
<?php include 'footer.php'; ?>