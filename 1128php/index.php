<?php
$aut = FALSE;
// $mail = '';
// $aut = FALSE;
if($_GET)
{
    require_once 'feldolgoz.php';
}
//echo $aut;
//echo $mail;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <fieldset class="ms-fldst">
    <legend>Sign Up</legend>

    <?php if(!$aut) : ?>
        <h1>Hello Kati!</h1>
    <?php endif; ?>

    <form action="" method="GET">
        <input type="email" name="mail" value="<? $mail ?>" size="20" placeholder="E-mail">
        <input type="password" name="pass" size="20" placeholder="Password">
        <button type="submit"> Commit </button>
    </form>
    <?php if(!$aut) : ?>
        <h1>Authentiction failed...</h1>
    <?php endif; ?>
    </fieldset>

</body>
</html>