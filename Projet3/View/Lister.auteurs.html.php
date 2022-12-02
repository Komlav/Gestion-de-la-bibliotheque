<?php 
    require_once("../Sources/Data.php"); 
?>
<div class="conteneur">
    <h3>LISTE DES AUTEURS DE LA BIBLIOTHEQUE</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>NOM AUTEUR</th>
            <th>PRENOM AUTEUR</th>
            <th>PROFESSION</th>
        </tr>
        <?php foreach (find_all_auteurs() as $auteur):  ?>
            <tr>
                <td><?php echo($auteur["IdAuteur"]); ?> </td>
                <td><?php echo($auteur["NomAuteur"]); ?></td>
                <td><?php echo($auteur["PrénomAuteur"]); ?></td>
                <td><?php echo($auteur["Profession"]); ?></td>     
            </tr>
        <?php endforeach ?>
    </table>
</div>
