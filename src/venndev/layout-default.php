<!DOCTYPE html>
<html>
<head>
    <title>VDataStorageSystems</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="Editor Data by VDataStorageSystems">
    <meta name="keywords" content="Editor Data, VDataStorageSystems, VDSS">
    <meta name="author" content="VennDev">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.2/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/styles.css">
    <?php 
        foreach (glob(__DIR__ . '\public\css\theme' . '\*.css') as $style) {
            echo '<link rel="stylesheet" type="text/css" href="public/css/theme/' . basename($style) . '">';
        }
    ?>
    <link rel="icon" href="public/images/favicon.ico">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//cdn.datatables.net/2.1.2/js/dataTables.min.js"></script>
    
    <!-- CodeMirror -->
    <link rel="stylesheet" href="http://esironal.github.io/cmtouch/lib/codemirror.css">
	<link rel="stylesheet" href="http://esironal.github.io/cmtouch/addon/hint/show-hint.css">
	<script src="http://esironal.github.io/cmtouch/lib/codemirror.js"></script>
	<script src="http://esironal.github.io/cmtouch/addon/hint/show-hint.js"></script>
	<script src="http://esironal.github.io/cmtouch/addon/hint/xml-hint.js"></script>
	<script src="http://esironal.github.io/cmtouch/addon/hint/html-hint.js"></script>
	<script src="http://esironal.github.io/cmtouch/mode/xml/xml.js"></script>
	<script src="http://esironal.github.io/cmtouch/mode/javascript/javascript.js"></script>
	<script src="http://esironal.github.io/cmtouch/mode/css/css.js"></script>
	<script src="http://esironal.github.io/cmtouch/mode/htmlmixed/htmlmixed.js"></script>
	<script src="http://esironal.github.io/cmtouch/addon/selection/active-line.js"></script>
	<script src="http://esironal.github.io/cmtouch/addon/edit/matchbrackets.js"></script>
</head>
<body>