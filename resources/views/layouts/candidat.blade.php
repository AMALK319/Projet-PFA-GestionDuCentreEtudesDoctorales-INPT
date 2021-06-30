<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"> </script>

    <script src="script.js" defer></script>


    <title>Connexion</title>
    @yield("styles")
    <style>
        @import url("https://fonts.googleapis.com/css?family=Quicksand&display=swap");

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }





        footer {
            position: relative;
            bottom: 0px;
            background-color: #037CC2;
            color: #fff;
            width: 100%;
             text-align: center;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: large;
            height: 40px;
            margin-bottom: 0;
        }

        #contenu {
            min-height: 100%;
            position: relative;
        }

        html,
        body {
            height: 100%;
        }

        
    </style>
</head>

<body>

    <div id="contenu">

        <header>
            @include('partials.navbar')
        </header>




        <div class="content">
            @yield("content")

        </div>





        <footer>
            <div>
                <p class="text-footer"> &copy; 2021 Institut National des Postes et Telecommunications</p>
            </div>
        </footer>
    </div>

    @yield("scripts")
    <script>

    </script>

</body>

</html>