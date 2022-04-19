<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;500;600;700;800&display=swap" rel="stylesheet">
    <title>Bienvenido</title>
</head>

<body>
    <div class="container">
        <video src="{{URL::asset('/video//mujer-comprando.mp4')}}" muted loop autoplay></video>
        <div class="centralBox">
            <h1 class="title">Bienvenido a EliteStore</h1>
            <a class="button" href="{{ url('category/create') }}">Ingresar</a>
        </div>
    </div>
</body>

</html>

<style>
    body {
        margin: 0;
    }

    .container {
        position: relative;
        width: 100vw;
        height: 100vh;
    }

    video {
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

    .centralBox {
        position: absolute;
        z-index: 1;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .title {
        margin: 0;
        font-family: Raleway;
        color: white;
        font-size: 90px;
        margin-bottom: 40px;
    }
    .button {
        background-color: rgb(58, 131, 239);
        border: none;
        color: white;
        font-size: 18px;
        font-family: Raleway;
        text-decoration: none;
        padding: 10px 15px;
        margin: auto;
    }
    .button:hover {
        background-color: rgb(38, 87, 159);
    }
</style>