<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Résultats du quiz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .custom-button {
            border-radius: 10px;
            background-color: #06BBCC;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body text-center">
                        <h1 >Résultats du quiz</h1>
                        <div class="d-flex justify-content-between">
                            <p class="lead">Total des réponses corrects</p>
                            <h1 class="display-4">{{ $totalCorrectAnswers }}</h1>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="lead">Score</p>
                            <h1 class="display-4">{{ $score }}</h1>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end m-2">
                        <a href="/">
                            <button class="custom-button">Home page</button>
                        </a>
                    </div>


                </div>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-end">
            <button class="">next</button>

        </div> --}}

    </div>

    <!-- Ajouter le script Bootstrap JS (facultatif si vous n'utilisez pas les fonctionnalités JavaScript de Bootstrap) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
