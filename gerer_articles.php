<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BoxSaler</title>
    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <?php include_once('components/navbar.php');
        include_once('components/sidenav.php');
    ?>

    <div class="main" style="margin-top:2%;">
        <div class="row">
            <div class="col s1" style="padding-left:3%; padding-top:6px;">
                <a href="dashboard.php" class="btn-floating btn-large blue"><i class="mdi-navigation-arrow-back"></i></a>
            </div>
            <div class="col s11">
                <h4 class="black-text">Gérer les articles</h4>
            </div>
        </div>
        <div class="col s7 collection-pad">
            <ul class="collection">
                <li class="collection-item avatar">
                    <div class="row">
                        <div class="col s9">
                            <img src="assets/images/casque.jpeg" alt="Article" srcset="" class="circle">
                            <span class="title blue-text" style="font-size:1.3em;">Casque</span>
                            <p>Vendeur : Clerc</p>
                            <p>Acheteur : Carlos</p>
                            <p>Code article : A00007</p>
                            <p>Prix : 50 $</p>
                        </div>
                        <div class="col s3">
                            <div class="row" style="padding-top:13%;">
                                <div class="col s3"><a href="http://" class="btn-floating btn-medium blue" title="Editer"><i class="mdi-editor-border-color"></i></a></div>
                                <div class="col s3"><a href="http://" class="btn-floating btn-medium" title="Supprimer"><i class="mdi-navigation-close"></i></a></div>
                                <div class="col s3"><a href="http://" class="btn-floating btn-medium green" title="Edifier"><i class="mdi-action-visibility"></i></a></div> 
                            </div>
                        </div>
                    </div>
                </li>
                <li class="collection-item avatar">
                    <div class="row">
                        <div class="col s9">
                            <img src="assets/images/casque.jpeg" alt="Article" srcset="" class="circle">
                            <span class="title blue-text" style="font-size:1.3em;">Casque</span>
                            <p>Vendeur : Donel</p>
                            <p>Acheteur : Abel</p>
                            <p>Code article : A00009</p>
                            <p>Prix : 45 $</p>
                        </div>
                        <div class="col s3">
                            <div class="row" style="padding-top:13%;">
                                <div class="col s3"><a href="http://" class="btn-floating btn-medium blue" title="Editer"><i class="mdi-editor-border-color"></i></a></div>
                                <div class="col s3"><a href="http://" class="btn-floating btn-medium" title="Supprimer"><i class="mdi-navigation-close"></i></a></div>
                                <div class="col s3"><a href="http://" class="btn-floating btn-medium green" title="Edifier"><i class="mdi-action-visibility"></i></a></div> 
                            </div>
                        </div>
                    </div>
                </li>
                <li class="collection-item avatar">
                    <div class="row">
                        <div class="col s9">
                            <img src="assets/images/casque.jpeg" alt="Article" srcset="" class="circle">
                            <span class="title blue-text" style="font-size:1.3em;">Casque</span>
                            <p>Vendeur : Scola</p>
                            <p>Acheteur : Abel</p>
                            <p>Code article : A00010</p>
                            <p>Prix : 50 $</p>
                        </div>
                        <div class="col s3">
                            <div class="row" style="padding-top:13%;">
                                <div class="col s3"><a href="http://" class="btn-floating btn-medium blue" title="Editer"><i class="mdi-editor-border-color"></i></a></div>
                                <div class="col s3"><a href="http://" class="btn-floating btn-medium" title="Supprimer"><i class="mdi-navigation-close"></i></a></div>
                                <div class="col s3"><a href="http://" class="btn-floating btn-medium green" title="Edifier"><i class="mdi-action-visibility"></i></a></div> 
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>


<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/custom-script.js"></script>
<script src="assets/js/materialize.js"></script>
<script src="assets/js/materialize.min.js"></script>