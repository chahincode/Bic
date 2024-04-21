<?php
include "Header.php";
if (isset($_GET['category']))
{
    if ($con->query("delete from categories where id = '$_GET[category]'"))
    {
    }
    else
        echo "error is:".$con->error;
}

if (isset($_GET['item']))
{
    if ($con->query("delete from inventeries where id = '$_GET[item]'"))
    {	echo "Done";
    }
    else
        echo "error is:".$con->error;
}

