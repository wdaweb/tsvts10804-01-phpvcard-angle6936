<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
body {
    background-image: url(../pic/bk5.gif);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
}

.main {
    margin: 5% auto;
    padding: 5px;
    text-align: center;
    width: 600px;
    background-color: rgba(255, 255, 255, 0.3);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}

.data {
    text-align: left;
    padding: 0 20px;
    margin-bottom: 20px;
}

.data p {
    min-width: 300px;
}

.btn {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 0.3rem;
    border-radius: 0.7rem;
}

.btn:hover {
    display: inline-block;
    background-color: black;
    color: white;
    font-size: 15px;
}
</style>

<body>
    <div class="main">
        <h1>樣式預覽</h1>
        <hr>
        <form action="api.php" method="post" enctype="multipart/form-data">
            <div class="data">
                <p>你的名字 ： <input type="text" name="user" value="許雅智"></p>
                <p>職位名稱 ：<input type="text" name="position" value="網頁設計師"></p>
                <p>
                    <span style="vertical-align:top">技能說明 : </span>
                    <textarea name="skill" cols=40
                        rows=20>HTML/CSS網頁概念基礎,PHP/MySQL資料處理,JS/JQ前端網頁設計,AI/PS平片影像處理,UI/UX設計規劃</textarea>
                </p>
                <p>email : <input type="text" name="mail" value="angle693643@gmail.com"></p>
                <p>手機號碼 : <input type="text" name="number" value="0970-202-693"></p>
                <hr>
                <p>人像照片 : <input type="file" name="pic"></p>
                <p>版型選擇 :
                    <select name="layout">
                        <option value="watercolor">暈染</option>
                        <option value="gradient">漸層</option>
                        <option value="geometricShape">幾何圖形</option>
                    </select>
                </p>
            </div>
            <input class="btn" type="submit" value="立即預覽">
        </form>
    </div>
</body>

</html>