<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />

    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #04649C;
            height: 70vh;
        }

        #login .container #login-row #login-column #login-box {
            margin-top: 45px;
            margin-left: 62px;
            max-width: 420px;

            height: 320px;

        }

        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }

        .mybtn {
            margin: auto;
            max-width: 140px;
            border-radius: 50px;
            background-color: #56A6F9;
        }

        #barre {
            height: 25vh;
            background-color: white;
        }

        h3 {
            color: #04649C;
        }
    </style>
</head>

<body>
    <div id="app">
        <div id="barre">
            <img src="" alt="logo">
            <h3 class="text-center">Gestion Du Centre d’Etudes Doctorales</h3>

        </div>
        <div id="login">


            @yield('content')

        </div>

    </div>
</body>

</html>