<?php

// VERIFICO SE ESISTONO I PARAMETRI
if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])){
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = (int)$_GET['age'];

    // SETTO LE CONDIZIONI PER ACCESSO RIUSCITO O NEGATO
    if(strlen($name)>=3 && str_contains($email, '@') && str_contains($email, '.') && is_int($age)) {
        echo 'Accesso riuscito!';
    }
    else {
        echo 'Accesso negato!';
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="./index.php" method="GET">
                <div class="col-6 my-4">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Età</label>
                        <input type="text" class="form-control" id="age" name="age">
                    </div>
                    <button type="submit" class="btn btn-success">Invia</button>
                </div>
                <!-- <div class="col-6 my-4">
                    <?php if(strlen($name)>=3) { ?>
                        <h3>Accesso riuscito</h3>
                    <?php } ?>
                </div> -->
            </form>
        </div>
    </div>
</body>
</html>