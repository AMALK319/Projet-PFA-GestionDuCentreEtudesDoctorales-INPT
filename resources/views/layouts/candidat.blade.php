<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1/css/all.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"> </script>

    <script src="script.js" defer></script>


    <title>Connexion</title>
    @yield("styles")
    <style>
        @import url("https://fonts.googleapis.com/css?family=Quicksand&display=swap");

        * {
            /* box-sizing: border-box; */
            margin: 0;
            padding: 0;
        }





        footer {
            position: fixed;
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
            height: auto;
            position: relative;
        }

        body {
            height: 100%;
            overflow: visible;
        }
    </style>
</head>

<body>



    <header>
        @include('partials.navbar')
    </header>





    <main>
        @yield("content")
    </main>









    <footer>
        <div>
            <p class="text-footer"> &copy; 2021 Institut National des Postes et Telecommunications</p>
        </div>
    </footer>




    @yield("scripts")



    <script>

    </script>

</body>

</html>