<?php
require_once __DIR__ . '/includes/utils/functions.php';

$password_length = $_GET['number'] ?? '';

$password_length = intval($password_length);

if(!empty($password_length)){

    session_start();
    $_SESSION['password_length'] = $password_length;

    header('Location: ./success.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<?php require_once __DIR__ . '/includes/layouts/head.php' ?>

<body>
    <!-- Wrapper -->
    <div class="wrapper">
        <!-- Header -->
        <header class="text-center mt-4">
            <h1 class="">Strong Password Generator</h1>
            <h2 class="text-white mb-3 mt-2">Genera una password sicura</h2>
        </header>
        
        <div class="form-container">
            <!-- Form -->
            <form action="" method="GET">
                <div class="d-flex align-items-center justify-content-between mb-3 mt-4">
                    <label for="number" class="form-label"><strong>Lunghezza password:</strong></label>
                    <input type="number" id="number" class="form-control" name="number" min="1" max="26" placeholder="Inserisci la lunghezza">
                </div>
                <button type="submit" class="btn btn-success">Manda</button>
                <button type="reset" class="btn btn-danger">Annulla</button>
            </form>
        </div>
    </div>
</html>