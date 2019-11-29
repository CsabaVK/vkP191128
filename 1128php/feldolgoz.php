<?php 
require_once 'datas.php';
//echo $aut;
if($_GET['mail'] == $user['mail'] && $_GET['pass'] == $user['pass'])
{
$aut = TRUE;
}
echo $aut;
?>