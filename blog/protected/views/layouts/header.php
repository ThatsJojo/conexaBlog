<?php /* @var $this Controller */
$loggedUser = User::model()->findByPk(Yii::app()->user->id);

if (isset($loggedUser)) {
    $loggedUserName = $loggedUser->user_login ?? false;
    $loggedUserAdmin = $loggedUser->isAdmin();
    $loggedUserImg = $loggedUser->getImagePath();
    $loggedUserId = $loggedUser->user_id;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="pt-br">

    <script src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery-latest.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.mask.js"></script>

    <!-- BOOTSTRAP CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- BOOTSTRAP Javascript -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">

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
                        <a href="<?= Yii::app()->request->baseUrl; ?>/" class="nav-link px-2 text-black">Home</a>
                        <a href="<?= Yii::app()->request->baseUrl; ?>/categoria" class="nav-link px-2 text-black">Categorias</a>
                        <a href="<?= Yii::app()->request->baseUrl; ?>/sobre.php" class="nav-link px-2 text-black">Sobre</a>
                        <a href="https://conexa.app/" class="nav-link px-2 text-black">Site Oficial</a>
                    </div>

                    <?php if ($loggedUserName) :  ?>
                        <div class="d-flex justify-content-evenly align-items-center" style="width: <?= strlen($loggedUserName) * 9 + 60 ?>px;">

                            <div><strong>@<?= $loggedUserName; ?></strong></div>
                            <div class="dropdown text-end">
                                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= $loggedUserImg ?>" alt="mdo" width="32" height="32" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small" style="">
                                    <li><a class="dropdown-item" href="<?= Yii::app()->request->baseUrl . '/post/create' ?>">Novo Post...</a></li>
                                    <li><a class="dropdown-item" href="<?= Yii::app()->request->baseUrl . '/siteoption/admin' ?>">Configurações</a></li>
                                    <li><a class="dropdown-item" href="<?= Yii::app()->request->baseUrl . '/user/update/' . $loggedUserId ?>">Perfil</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="<?= Yii::app()->request->baseUrl . '/site/logout' ?>">Sair</a></li>
                                </ul>
                            </div>
                        </div>
                    <?php else :  ?>
                        <div class="text-end">
                            <a class="btn btn-outline-dark me-2" href="<?php echo Yii::app()->request->baseUrl; ?>/site/login">Entrar</a>
                            <a class="btn btn-warning me-2" href="<?php echo Yii::app()->request->baseUrl; ?>/site/signup">Criar Conta</a>
                        </div>
                    <?php endif;  ?>

                </div>
            </nav>
        </div>
    </header>
    <div style="height: 20px;"></div>