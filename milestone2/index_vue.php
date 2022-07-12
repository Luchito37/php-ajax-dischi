

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ajax Dischi with PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>

<body class=" mainColor">
    <div id="app">

        <header>
            <nav class="principalColor navbar  mb-5">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="img/spotify-logo.png" alt="logo spotify" width="50" class="d-inline-block align-text-top">
                    </a>
                </div>
            </nav>
        </header>
        <div>
            <div class="container">
                <div class="row row-cols-5">
                    <div class="col mb-3" v-for="album in albums">
                        <div class="card h-100 principalColor p-2" >
                            <img :src="album.poster" alt="" />
                            <div class="card-body text-center">
                                <div class="titleColor">{{ album.title }}</div>
                                <div class="text-white-50">{{ album.author }}</div>
                                <div class="text-white-50">{{ album.year }}</div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vue.js"></script>
</body>

</html>