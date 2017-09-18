<?php
if (isset($_POST["from"]))
{
$from = date_create($_POST["from"]);
}else{
$from = date_create(date("d-m-Y"));
}
if (isset($_POST["to"]))
{
$to = date_create($_POST["to"]);
}else{
    $to = $from;
date_modify($to, 'next tuesday');
}
echo("El siguiente martes seria: ".date_format($from, 'd-m-Y'));
?>