<?php 
    $date1 = "01/01/2015"; 
    $date2 = "18/01/2016"; 
    $timestamp1 = strtotime("01/01/2015"); 
    $timestamp2 = strtotime("18/01/2015"); 
    print($timestamp2."<br>");
    print($timestamp1."kjkhkh<br>");
    if (($timestamp2 - $timestamp1) > strtotime("+2 week +1 day")) 
        echo "En retard"; 
    else 
        echo "A jour";
        require_once("../Models/Models.php");die;
?>

<div class="conteneur">
    <?php if (isset($_GET["y"])): ?>
        <h3>LISTE DES DEMANDES DE <?=find_adhérent_by_id((int)$_GET["y"])["PrénomAdhé"]; ?></h3>
    <?php else: ?>
        <h3>LISTE DES DEMANDES DE LA BIBLIOTHEQUE</h3>
    <?php endif ?>
    <table>
        <tr>
            <th>ID</th>
            <?php if (isset($_GET["y"]) == false) : ?>
                <th>NOM PRENOM</th>
            <?php endif ?>
            <th>DATE</th>
            <th>ETAT</th>
            <?php if (isset($_GET["y"]) == false) : ?>
                <th>DEMANDES</th>
            <?php endif ?>
        </tr>
        <?php foreach ($demandes as $dem): ?>
            <?php $ad = find_adhérent_by_id($dem["id_adhérent"]); ?>
            <tr>
                <td><a href="">o</a><?php echo($dem["id_Dem"]); ?> </td>
                <?php if (isset($_GET["y"]) == false) : ?>
                    <td><?php echo($ad["NomAdhé"]." ".$ad["PrénomAdhé"]); ?></td>
                <?php endif ?>
                <td><?php echo($dem["Date"]); ?></td>
                <td><?php echo($dem["Etat"]); ?></td>   
                <?php if (isset($_GET["y"]) == false) : ?>  
                    <td><a href="index.php?x=4&y=<?=$ad["Id_Adérent"]; ?>" class="lien">Voir ses demandes</a></td> 
                <?php endif ?>    
            </tr>
        <?php endforeach ?>
    </table>
</div>
<!-- <?php
echo date("d/m/y",strtotime($date1."+2 week"))." dans 15 jours ".date("d/m/y",(strtotime("now + 2 week + 1 day")))."<br>";
echo strtotime("10 September 2000")."<br>";
echo strtotime("+1 day")."<br>";
echo strtotime("+1 week")."<br>";
echo strtotime("+1 week 2 days 4 hours 2 seconds")."<br>";
echo strtotime("next Thursday")."<br>";
echo strtotime("last Monday")."<br>";
?> -->