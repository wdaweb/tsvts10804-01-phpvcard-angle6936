<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>

<body>
    <?php
    session_start();
    ?>
    <link rel="stylesheet" type="text/css" href="../css/<?= $_SESSION['info']['layout'] ?>.css">

    <div id="main">
        <div id="title">Personal Data</div>
        <div id="photos">
            <img src="../upload/<?= $_SESSION['info']['pic'] ?>" class="pic">
        </div>
        <div id="content">
            <h2 class="clr"><?= $_SESSION['info']['user'] ?></h2>
            <h4 style="letter-spacing:10px;"><?= $_SESSION['info']['position'] ?></h4>
            <hr>
            <p><?= $_SESSION['info']['skill'] ?></p>
            <div class="box"><?= $_SESSION['info']['mail'] ?></div>
            <br>
            <div class="box"><?= $_SESSION['info']['number'] ?></div>
        </div>
    </div>
    <button class="btn" onclick="window.history.go(-1)">回頁面</button>
</body>

</html>