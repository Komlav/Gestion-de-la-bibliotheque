<?php 
    require_once("../Sources/Data.php"); 
    require_once("../Models/Models.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/CSS/style.css">
    <title>Gestion de la Bibliothèque</title>
</head>
<body>
    <div class="menu">
        <a href="index.php"><h4 class="logo">BIBLIOTHQUE</h4></a>
        <ul>
            <li><a href="index.php?x=1">Lister des auteurs</a></li>
            <li><a href="index.php?x=2">Lister des ouvrages</a></li>
            <li><a href="index.php?x=3">Lister des rayons</a></li>
            <li><a href="index.php?x=4">Lister tous les demandes</a></li>
            <li><a href="index.php?x=5">Lister tous les prêts</a></li>
        </ul>
    </div>
    <?php   
    if (isset($_GET["x"])) {
        switch ($_GET["x"]) {
            case '1':
                require_once("../View/Lister.auteurs.html.php"); 
                break;
            case '2':
                require_once("../View/Lister.ouvrages.html.php");
                break;
            case '3':
                require_once("../View/Lister.rayons.html.php");
                break;
            case '4':
                if (isset($_GET["y"])) {
                    $demandes = find_all_adhérent_dem($_GET["y"]);
                    require_once("../View/Lister.demandes.html.php");
                }else {
                    $demandes = find_all_demandes();
                    require_once("../View/Lister.demandes.html.php");
                } 
                break;
            case '5':
                if (isset($_POST["btn-save"])) {
                    switch ($_POST["etat"]) {
                        case 'En retard':
                            $prets = find_prets_retardataire();
                            if ($prets == []) {
                                print('<div class="conteneur ac"><h3 class="accueil">AUCUN PRET EN RETARD</h3></div>');
                            }else{
                                require_once("../View/Lister.prets.html.php");
                            }
                            break;
                        default:
                            # code...
                            break;
                    }
                    
                }else {
                    $prets = find_all_prets();
                    require_once("../View/Lister.prets.html.php");
                }
                break;
            default:
                require_once("../View/PageErro.html.php");
              break;
        }
    }else {
        require_once("../View/Accueil.html.php");
    }   
    ?>
</body>
</html>