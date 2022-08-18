<?php

$ugis = $_POST['ugis'] / 100;

$svoris = $_POST['svoris'];

$kmi = $svoris / ($ugis * $ugis);

if ($kmi <= 18.5){
   $busena = "Per mažas svoris";
}elseif($kmi <= 24.9){
    $busena = "Normalus svoris";
}elseif($kmi <= 29.9){
    $busena = "Antsvoris";
}elseif($kmi <= 34.9){
    $busena = "I laipsnio nutukimas";
}elseif($kmi <= 39.9){
    $busena = "II laipsnio nutukimas";
}else{
    $busena = "III laipsnio nutukimas";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>KMI skaičiuoklė</title>
</head>

<body>
    <div class="container col-4 text-center mb-5 mt-4">
        <div class="card">
            <div class="card-body">
                <h1>Jūsų KMI</h1>
                <p class="mt-3 fs-4"><?php echo(round($kmi,1)) ; ?></p>
                <p><?php echo($busena); ?></p>
                <a class="btn btn-primary" href="input.php">Atgal</a>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
    <p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
  Būklės pagal KMI ir rizikos susirgti lentelė (spausti čia)
  </a>
</p>
</div>
<div class="collapse" id="collapseExample">
  <div class="card card-body col-4 mx-auto">
  <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">KMI</th>
                    <th scope="col">Reikšmė</th>
                    <th scope="col">Rizika</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        < 18,5</th>
                    <td>Per mažas svoris</td>
                    <td>Padidėjusi rizika</td>
                </tr>
                <tr>
                    <td>18,5–24,9</th>
                    <td>Normalus svoris</td>
                    <td>Minimali rizika</td>
                </tr>
                <tr>
                    <td>25–29,9</th>
                    <td>Antsvoris</td>
                    <td>Padidėjusi rizika</td>
                </tr>
                <tr>
                    <td>30–34,9</th>
                    <td>I laipsnio nutukimas</td>
                    <td>Didelė rizika</td>
                </tr>
                <tr>
                    <td>35–39,9</th>
                    <td>II laipsnio nutukimas</td>
                    <td>Labai didelė rizika</td>
                </tr>
                <tr>
                    <td>> 40</th>
                    <td>III laipsnio nutukimas</td>
                    <td>Itin didelė rizika</td>
                </tr>
            </tbody>
  </div>
</div>
</body>

</html>