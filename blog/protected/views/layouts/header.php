<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="pt-br">

    <!-- BOOTSTRAP CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- BOOTSTRAP Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/form.css"> -->

    <link rel="icon" type="image/x-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.png">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    <header class="p-3  bg-light bg-gradient sticky-top border-bottom shadow-sm">
        <div class="d-flex flex-wrap align-items-center justify-content-around container">
            <a href="/<?php echo Yii::app()->request->baseUrl; ?>">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/conexa.png" alt="Conexa Coworking" class="bi me-2" role="img" aria-label="Bootstrap">
            </a>
            <nav class="navbar navbar-expand-lg ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav me-5">
                        <a href="<?= Yii::app()->request->baseUrl; ?>" class="nav-link px-2 text-black">Home</a>
                        <a href="<?= Yii::app()->request->baseUrl; ?>/categoria.php" class="nav-link px-2 text-black">Categorias</a>
                        <a href="<?= Yii::app()->request->baseUrl; ?>/sobre.php" class="nav-link px-2 text-black">Sobre</a>
                        <a href="https://conexa.app/" class="nav-link px-2 text-black">Site Oficial</a>
                    </div>

                    <div class="text-end">
                        <a class="btn btn-outline-dark me-2" href="<?php echo Yii::app()->request->baseUrl; ?>/site/login">Entrar</a>
                        <a class="btn btn-warning me-2" href="<?php echo Yii::app()->request->baseUrl; ?>/site/signup">Criar Conta</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="b-example-divider"></div>
