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
    <div>
        <div id="barre">
            <img src="" alt="logo">
            <h3 class="text-center">Gestion Du Centre d’Etudes Doctorales</h3>

        </div>
        <div id="login">

            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6 ">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form " action="" method="post">

                                <h3 class="text-center text-white ">Connexion</h3>
                                <br>
                                <div class="form-group">
                                    <input id="username" v-model="form.username" type="text" name="username" class="form-control" placeholder="Entrer votre login">

                                </div>
                                <div class="form-group">
                                    <input id="password" v-model="form.password" type="password" name="password" class="form-control" placeholder="Entrer votre mot de passe">

                                </div>
                                <div class=" form-group text-right">
                                    <a href="#" class="text-white">Mot de passe oublié?</a>
                                </div>
                                <div class="col-md-12 text-center ">
                                    <Button :form="form" type="submit" class=" btn btn-block mybtn text-white  "> <strong>Se connecter</strong></Button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- <login></login> -->

    </div>
</body>

</html>