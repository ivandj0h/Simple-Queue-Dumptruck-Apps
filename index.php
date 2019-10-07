<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOPPER-APPS</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="./assets/img/logo.png" alt="" srcset="">
        </div>
        <b>ANTRIAN</b>
        <H1>HOPPER-5</H1>
        <div class="count">
            <div class="counter">
                <span id="show"></span>
            </div>
        </div>
        <h2 id="jam"></h2>
    </div>

    <script src="./assets/js/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function () {
            setInterval(function () {
                $('#show').load('./backend/data.php')
                $('#jam').load('./backend/jam.php')
            }, 1000);
        });
    </script>
</body>
</html>
