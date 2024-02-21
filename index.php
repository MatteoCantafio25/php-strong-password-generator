<?php

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Matteo Cantafio">
    <meta name="description" content="PHP Hotel">
    <title>PHP Strong Password Generator</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
    <link rel='stylesheet' href='./includes/css/style.css'>
</head>


<body>
    <!-- Wrapper -->
    <div class="wrapper">
        <!-- Header -->
        <header class="text-center mt-4">
            <h1 class="">Strong Password Generator</h1>
            <h2 class="text-white mb-3 mt-2">Genera una password sicura</h2>
        </header>
            

        <!-- Alert -->
        <div class="alert alert-info" role="alert">
            La tua password è: "Pippo"
        </div>

        <!-- Form -->
        <form action="" method="GET">
        <div class="d-flex align-items-center justify-content-between mb-3 mt-4">
                <label for="number" class="form-label text-white">Lunghezza password:</label>
                <input type="number" id="number" class="form-control" name="number" min="1" max="26">
            </div>
            <button type="submit" class="btn btn-success">Manda</button>
            <button type="reset" class="btn btn-danger">Annulla</button>
        </form>
        </div>
    </div>
</html>