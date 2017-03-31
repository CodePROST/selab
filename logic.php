<?php
include('db.php');
$h="";
function Openconnection()
{
    global $h;
    $h= mysql_connect(SERVER,USERNAME,PASSWORD);
    mysql_select_db(DATABASE);
}
function Closeconnection()
{
    global $h;
    mysql_close($h);
}
function ExecuteNonQuery($query)
{
    Openconnection();
    mysql_query($query);
    return mysql_affected_rows();
}
function ExecuteQuery($query)
{
    Openconnection();
    $res=  mysql_query($query);
    return $res;
}
?>