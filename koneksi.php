<?php
$global_mysqli_conn = null;

if (!function_exists('mysql_connect')) {
    function mysql_connect($host, $user, $pass) {
        global $global_mysqli_conn;
        $global_mysqli_conn = mysqli_connect($host, $user, $pass);
        return $global_mysqli_conn;
    }

    function mysql_select_db($dbname) {
        global $global_mysqli_conn;
        return mysqli_select_db($global_mysqli_conn, $dbname);
    }

    function mysql_query($query) {
        global $global_mysqli_conn;
        return mysqli_query($global_mysqli_conn, $query);
    }

    function mysql_fetch_array($result) {
        return mysqli_fetch_array($result);
    }

    function mysql_fetch_assoc($result) {
        return mysqli_fetch_assoc($result);
    }

    function mysql_num_rows($result) {
        return mysqli_num_rows($result);
    }

    function mysql_error() {
        global $global_mysqli_conn;
        return mysqli_error($global_mysqli_conn);
    }

    function mysql_real_escape_string($string) {
        global $global_mysqli_conn;
        return mysqli_real_escape_string($global_mysqli_conn, $string);
    }
}

$host	= "localhost";
$user	= "root";
$pass	= "";
$name	= "gdive";

mysql_connect("$host", "$user", "$pass");
mysql_select_db("$name");
?>
