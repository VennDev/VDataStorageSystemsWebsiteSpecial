<?php include 'layout-default.php'; ?>
<body>
    <div class="container">
        <?php include 'header.php'; ?>
        <main class="container mt-5 mb-5 blur-overlay">
            <div class="mt-2">
                <h1 class="text-center fw-bold blur-overlay">- Choose type Database -</h1>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <button id="bnt-login-mysql" class="btn btn-primary" style="width: 100px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-filetype-sql" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM0 14.841a1.13 1.13 0 0 0 .401.823q.194.162.478.252c.284.09.411.091.665.091q.507 0 .858-.158.355-.159.54-.44a1.17 1.17 0 0 0 .187-.656q0-.336-.135-.56a1 1 0 0 0-.375-.357 2 2 0 0 0-.565-.21l-.621-.144a1 1 0 0 1-.405-.176.37.37 0 0 1-.143-.299q0-.234.184-.384.187-.152.513-.152.214 0 .37.068a.6.6 0 0 1 .245.181.56.56 0 0 1 .12.258h.75a1.1 1.1 0 0 0-.199-.566 1.2 1.2 0 0 0-.5-.41 1.8 1.8 0 0 0-.78-.152q-.44 0-.776.15-.337.149-.528.421-.19.273-.19.639 0 .302.123.524t.351.367q.229.143.54.213l.618.144q.31.073.462.193a.39.39 0 0 1 .153.325q0 .165-.085.29A.56.56 0 0 1 2 15.31q-.167.07-.413.07-.176 0-.32-.04a.8.8 0 0 1-.248-.115.58.58 0 0 1-.255-.384zm6.878 1.489-.507-.739q.264-.243.401-.6.138-.358.138-.806v-.501q0-.556-.208-.967a1.5 1.5 0 0 0-.589-.636q-.383-.225-.917-.225-.527 0-.914.225-.384.223-.592.636a2.14 2.14 0 0 0-.205.967v.5q0 .554.205.965.208.41.592.636a1.8 1.8 0 0 0 .914.222 1.8 1.8 0 0 0 .6-.1l.294.422h.788ZM4.262 14.2v-.522q0-.369.114-.63a.9.9 0 0 1 .325-.398.9.9 0 0 1 .495-.138q.288 0 .495.138a.9.9 0 0 1 .325.398q.115.261.115.63v.522q0 .246-.053.445-.053.196-.155.34l-.106-.14-.105-.147h-.733l.451.65a.6.6 0 0 1-.251.047.87.87 0 0 1-.487-.147.9.9 0 0 1-.32-.404 1.7 1.7 0 0 1-.11-.644m3.986 1.057h1.696v.674H7.457v-3.999h.79z"/>
                    </svg>
                    MySQL
                </button>
                &nbsp;
                <button id="bnt-login-sqlite" class="btn btn-primary" style="width: 100px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-filetype-sql" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM0 14.841a1.13 1.13 0 0 0 .401.823q.194.162.478.252c.284.09.411.091.665.091q.507 0 .858-.158.355-.159.54-.44a1.17 1.17 0 0 0 .187-.656q0-.336-.135-.56a1 1 0 0 0-.375-.357 2 2 0 0 0-.565-.21l-.621-.144a1 1 0 0 1-.405-.176.37.37 0 0 1-.143-.299q0-.234.184-.384.187-.152.513-.152.214 0 .37.068a.6.6 0 0 1 .245.181.56.56 0 0 1 .12.258h.75a1.1 1.1 0 0 0-.199-.566 1.2 1.2 0 0 0-.5-.41 1.8 1.8 0 0 0-.78-.152q-.44 0-.776.15-.337.149-.528.421-.19.273-.19.639 0 .302.123.524t.351.367q.229.143.54.213l.618.144q.31.073.462.193a.39.39 0 0 1 .153.325q0 .165-.085.29A.56.56 0 0 1 2 15.31q-.167.07-.413.07-.176 0-.32-.04a.8.8 0 0 1-.248-.115.58.58 0 0 1-.255-.384zm6.878 1.489-.507-.739q.264-.243.401-.6.138-.358.138-.806v-.501q0-.556-.208-.967a1.5 1.5 0 0 0-.589-.636q-.383-.225-.917-.225-.527 0-.914.225-.384.223-.592.636a2.14 2.14 0 0 0-.205.967v.5q0 .554.205.965.208.41.592.636a1.8 1.8 0 0 0 .914.222 1.8 1.8 0 0 0 .6-.1l.294.422h.788ZM4.262 14.2v-.522q0-.369.114-.63a.9.9 0 0 1 .325-.398.9.9 0 0 1 .495-.138q.288 0 .495.138a.9.9 0 0 1 .325.398q.115.261.115.63v.522q0 .246-.053.445-.053.196-.155.34l-.106-.14-.105-.147h-.733l.451.65a.6.6 0 0 1-.251.047.87.87 0 0 1-.487-.147.9.9 0 0 1-.32-.404 1.7 1.7 0 0 1-.11-.644m3.986 1.057h1.696v.674H7.457v-3.999h.79z"/>
                    </svg>
                    SQLite
                </button>
            </div>
            <div class="mt-2">
                <form id="mysql-login" action="edit-page.php" method="post" enctype="multipart/form-data" style="width: 50%; margin: auto; border: 1px solid #ccc; padding: 20px; border-radius: 10px;" hidden>
                    <h2 class="text-center fw-bold blur-overlay">*MySQL*</h2>
                    <div class="form-group mt-3" hidden>
                        <label for="type-mysql" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type-mysql" name="type-mysql" value="mysql" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="host" class="form-label">Host</label>
                        <input type="text" class="form-control" id="host" name="host" value="localhost" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="root" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group mt-3">
                        <label for="database-m" class="form-label">Database</label>
                        <input type="text" class="form-control" id="database-m" name="database-m" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="port" class="form-label">Port</label>
                        <input type="number" class="form-control" id="port" name="port" value="3306" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
                <form id="sqlite-login" action="edit-page.php" method="post" enctype="multipart/form-data" style="width: 50%; margin: auto; border: 1px solid #ccc; padding: 20px; border-radius: 10px;" hidden>
                    <h2 class="text-center fw-bold blur-overlay">*SQLite*</h2>
                    <div class="form-group mt-3" hidden>
                        <label for="type-sqlite" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type-sqlite" name="type-sqlite" value="sqlite" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="database-s" class="form-label">Database</label>
                        <input type="file" class="form-control" id="database-s" name="database-s" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
            <div clas="container">&nbsp;</div>
        </main>
    </div>
</body>
<script>
    document.getElementById('bnt-login-mysql').addEventListener('click', function() {
        document.getElementById('mysql-login').hidden = false;
        document.getElementById('bnt-login-mysql').classList.remove('btn-primary');
        document.getElementById('bnt-login-mysql').classList.add('btn-secondary');
        if (document.getElementById('bnt-login-sqlite').classList.contains('btn-secondary')) {
            document.getElementById('bnt-login-sqlite').classList.remove('btn-secondary');
            document.getElementById('bnt-login-sqlite').classList.add('btn-primary');
        }
        if (document.getElementById('sqlite-login').hidden == false) {
            document.getElementById('sqlite-login').hidden = true;
        }
    });
    document.getElementById('bnt-login-sqlite').addEventListener('click', function() {
        document.getElementById('sqlite-login').hidden = false;
        document.getElementById('bnt-login-sqlite').classList.remove('btn-primary');
        document.getElementById('bnt-login-sqlite').classList.add('btn-secondary');
        if (document.getElementById('bnt-login-mysql').classList.contains('btn-secondary')) {
            document.getElementById('bnt-login-mysql').classList.remove('btn-secondary');
            document.getElementById('bnt-login-mysql').classList.add('btn-primary');
        }
        if (document.getElementById('mysql-login').hidden == false) {
            document.getElementById('mysql-login').hidden = true;
        }
    });
</script>
<?php include 'footer.php'; ?>