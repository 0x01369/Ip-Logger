<?php
if (count($_GET)>0 || count($_POST)>0 || count($_COOKIE)>0){
    $newEntry = "
    <div class=\"card border-secondary mb-3\">
    <div class=\"card-header\">" . $_SERVER['REMOTE_ADDR'] . "</div>
    <div class=\"card-body\">";
    if (count($_GET)>0) {
    
        $newEntry.="<h4 class=\"card-title\">GET</h4><p class=\"card-text\">";
        foreach ($_GET as $key => $value) {
            $newEntry.="<div class=\"container\"><div class=\"row\"><div class=\"col\"><kbd>". htmlspecialchars($key) ."</kbd></div><div class=\"col\"><textarea class=\"form-control\">". htmlspecialchars($value) ."</textarea></div></div></div><br>";
        }
    }
    if (count($_POST)>0) {
    
        $newEntry.="<h4 class=\"card-title\">POST</h4><p class=\"card-text\">";
        foreach ($_POST as $key => $value) {
            $newEntry.="<div class=\"container\"><div class=\"row\"><div class=\"col\"><kbd>". htmlspecialchars($key) ."</kbd></div><div class=\"col\"><textarea class=\"form-control\">". htmlspecialchars($value) ."</textarea></div></div></div><br>";
        }
    }
    if (count($_COOKIE)>0) {
    
        $newEntry.="<h4 class=\"card-title\">COOKIE</h4><p class=\"card-text\">";
        foreach ($_COOKIE as $key => $value) {
            $newEntry.="<div class=\"container\"><div class=\"row\"><div class=\"col\"><kbd>". htmlspecialchars($key) ."</kbd></div><div class=\"col\"><textarea class=\"form-control\">". htmlspecialchars($value) ."</textarea></div></div></div><br>";
        }
    }
    $newEntry.="</p> <footer class=\"blockquote-footer\">".date('Y-m-d H:i:s')."</footer>";
    $newEntry.="</div></div>";
    file_put_contents (__FILE__, $newEntry, FILE_APPEND);
}
?>
<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/lux/bootstrap.min.css" rel="stylesheet" integrity="sha384-oOs/gFavzADqv3i5nCM+9CzXe3e5vXLXZ5LZ7PplpsWpTCufB7kqkTlC9FtZ5nJo" crossorigin="anonymous">
</head>
<body>
<h1>GET/POST Logger</h1>
<div class="container">
