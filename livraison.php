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

    <div class="main">
        <div class="row">
            <div class="col s1" style="padding-left:3%; padding-top:6px;">
                <a href="dashboard.php" class="btn-floating btn-large blue"><i class="mdi-navigation-arrow-back"></i></a>
            </div>
            <div class="col s7">
                <h4 class="black-text">Commandes & Livraisons</h4>
            </div>
            <div class="input-field col s4">
                <input id="first_name" type="text" class="validate">
                <label for="first_name">Search <i class="mdi-action-search"></i></label>
            </div>
        </div>
        <div class="col s10 collection-pad">
            <ul id="tabs-swipe-demo" class="tabs">
                <li class="tab col s3"><a href="#test-swipe-1">Tous</a></li>
                <li class="tab col s3"><a href="#test-swipe-2">En attente</a></li>
                <li class="tab col s3"><a href="#test-swipe-3">En transit</a></li>
                <li class="tab col s3"><a href="#test-swipe-4">Terminé</a></li>
            </ul>
            <div class="col s12 m12" id="test-swipe-1">
                <ul class="collection">
                    <li class="collection-item avatar">
                        <div class="row">
                            <div class="col s4">
                                <img src="assets/images/casque.jpeg" alt="Articles" class="circle">
                                <span class="title blue-text">Casque</span>
                                <p>Acheté : 11/03/2019</p>
                                <p>Livré :</p>
                                <p>Prix : 50 $</p>
                            </div>
                            <div class="col s3">
                                <h6 class="blue-text">Vendeur : <span class="black-text">Clerc</span></h6>
                                <p>N° : +243 97 34 34 161</p>
                            </div>
                            <div class="col s3">
                                <h6 class="green-text">Acheteur : <span class="black-text">Carlos</span></h6>
                                <p>N° : +243 97 34 34 161</p>
                            </div>
                            <div class="col s2">
                                <a href="#modal1" class="btn-floating btn-large green modal-trigger" title="Voir"><i class="mdi-action-visibility"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="collection-item avatar">
                        <div class="row">
                            <div class="col s4">
                                <img src="assets/images/casque.jpeg" alt="Articles" class="circle">
                                <span class="title blue-text">Casque</span>
                                <p>Acheté : 11/03/2019</p>
                                <p>Livré :</p>
                                <p>Prix : 50 $</p>
                            </div>
                            <div class="col s3">
                                <h6 class="blue-text">Vendeur : <span class="black-text">Clerc</span></h6>
                                <p>N° : +243 97 34 34 161</p>
                            </div>
                            <div class="col s3">
                                <h6 class="green-text">Acheteur : <span class="black-text">Carlos</span></h6>
                                <p>N° : +243 97 34 34 161</p>
                            </div>
                            <div class="col s2">
                                <a href="#modal1" class="btn-floating btn-large green modal-trigger" title="Voir"><i class="mdi-action-visibility"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="collection-item avatar">
                        <div class="row">
                            <div class="col s4">
                                <img src="assets/images/casque.jpeg" alt="Articles" class="circle">
                                <span class="title blue-text">Casque</span>
                                <p>Acheté : 11/03/2019</p>
                                <p>Livré :</p>
                                <p>Prix : 50 $</p>
                            </div>
                            <div class="col s3">
                                <h6 class="blue-text">Vendeur : <span class="black-text">Clerc</span></h6>
                                <p>N° : +243 97 34 34 161</p>
                            </div>
                            <div class="col s3">
                                <h6 class="green-text">Acheteur : <span class="black-text">Carlos</span></h6>
                                <p>N° : +243 97 34 34 161</p>
                            </div>
                            <div class="col s2">
                                <a href="#modal1" class="btn-floating btn-large green modal-trigger" title="Voir"><i class="mdi-action-visibility"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal1" class="modal medium">
        <div class="modal-header indigo darken-4" style="height:50px; margin-top:-12px;">
            <h5 class="white-text" style="padding-left:3%; padding-top:1%;">Article 112</h5>
        </div>
        <div class="modal-content">
            <!-- <div class="green darkness-4">
                <h5 class="white-text">Article 112</h5>
            </div> -->
            <img src="assets/images/casque.jpeg" alt="article" srcset="" class="circle" width="100px" height="100px;">
            <p><span class="green-text">Titre :</span> Casque<br/>
            <span class="green-text">Vendeur :</span> Clerc<br/>
            <span class="green-text">N° :</span> +243 97 34 34 161<br/>
            <span class="green-text">Acheteur :</span> Carlos<br/>
            <span class="green-text">N° :</span> +243 97 34 34 161<br/>
            <span class="green-text">Prix :</span> 50 $<br/>
            <span class="green-text">Date achat :</span><br/>
            <span class="green-text">Date livraison :</span><br/>
            <span class="green-text">Etat :</span> Pas encore livré<br/>
            <span class="green-text">Livreur :</span> </p>
        </div>
        <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">OK</a>
        </div>
    </div>




<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/custom-script.js"></script>
<script src="assets/js/materialize.js"></script>
<script src="assets/js/materialize.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems);

        var instance = M.Modal.getInstance(elem);
        instance.open();
        instance.close();
        instance.destroy();
    });
</script>