<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />

    <title>Se connecter autant que</title>
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

        h5 {
            color: rgb(165, 161, 161);

        }

        button {
            background-color: white;
            border-radius: 5%;
            border-width: 0px;
            color: #04649C;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            width: 300px;
        }

        button:hover {
            background-color: #679ebe;
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
                            <form id="login-form" class="form " method="POST" action="{{ route('login') }}" v-model='role_id'>

                                <h5>Se Connecter autant que :</h5>
                                <br>

                                foreach ($roles as $role) {
                                @if ($role == 1)
                                <div v-show="role_id==1">
                                    <button :active="request()->routeIs('admin.professeur.welcome')"><a href="{{ route('admin.professeur.welcome') }}">Professeur</a> </button>
                                </div>
                                @endif

                                <br>
                                @if ($role == 2)
                                <div v-show="role_id==2">
                                    <button :active="request()->routeIs('admin.chef_cedoc.welcome ')"><a href="{{ route('admin.chef_cedoc.welcome') }}">Chef de Cedoc</a></button>
                                </div>
                                @endif
                                <br>
                                @if ($role== 3)
                                <div v-show="role_id==3">
                                    <button :active="request()->routeIs('admin.directeur_these.welcome')"><a href="{{ route('admin.directeur_these.welcome') }}">Directeur de these</a></button>
                                </div>
                                @endif
                                }


                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
</body>

</html>