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
        <h4 class="dark-text offset-1">Nombre des visiteurs</h4>
        <div class="view">
            <div class="row">
                <div class="col s12 m12">
                    <div class="card-content">
                        <ul id="tabs-swipe-demo" class="tabs">
                            <li class="tab col s3 jour"><a href="#test-swipe-1">Journalière</a></li>
                            <li class="tab col s3 semaine"><a href="#test-swipe-2">Hebdomadaire</a></li>
                            <li class="tab col s3 mois"><a href="#test-swipe-3">Mensuel</a></li>
                        </ul>
                        <div class="col s12 m12" id="test-swipe-1">
                            <div id="chartContainer">
                                <?php include_once("journalier.php"); ?>
                            </div>
                        </div>
                        <div class="col s12 m12" id="test-swipe-2">
                            <div id="chartContainerheb" class="col s12">
                                <?php include_once("hebdomadaire.php"); ?>
                            </div>
                        </div>
                        <div class="col s12" id="test-swipe-3">
                            <div id="chartContainerMois" class="col s12">
                                <?php include_once("mensuel.php"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/custom-script.js"></script>
    <script src="assets/js/materialize.js"></script>
    <script src="assets/js/materialize.min.js"></script>

    <script>
        $(".button-collapse").sideNav();
    </script>
    
</body>
</html>