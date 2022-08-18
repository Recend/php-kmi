<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container d-flex justify-content-center mt-4">
        <div class="card col-4">
            <div class="card-body text-center">
                <h1>KMI SKAIČIUOKLĖ</h1>
                <form action="output.php" method="post">
                    <div class="mb-2">
                        <label for="ugis"></label>
                        <input class="form-control" type="number" name="ugis" value="" placeholder="Ūgis">
                    </div>
                    <div class="mb-2">
                        <label for="svoris"></label>
                        <input class="form-control" type="number" name="svoris" value="" placeholder="Svoris">
                    </div>
                    <button class="btn btn-success" type="submit">Skaiciuoti</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>