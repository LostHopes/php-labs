<?php
$config ['charset'] = 'utf-8';
$config ['default_lng'] = 'ua';
#$config_host_name=$config{'host_name'};
include_once("db.php");
$LastModified_unix = strtotime(date("D, d M Y H:i:s", filectime($_SERVER['SCRIPT_FILENAME'])));
$LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix);
echo "Last modified: $LastModified" . "<br>";

?>
<html>

<head>
    <meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
    <link rel='stylesheet' href='http://m-dutchak.zzz.com.ua/PHP/css/style.css' type='text/css'
        media='screen, projection' />
    <script type='text/javascript' src='http://m-dutchak.zzz.com.ua/PHP/js/jquery-3.6.0.min.js'></script>
    <script type='text/javascript' src='http://m-dutchak.zzz.com.ua/PHP/js/my.js'></script>
</head>
<?php
?>