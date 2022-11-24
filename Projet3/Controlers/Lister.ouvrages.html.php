<div class="conteneur">
    <h3>LISTE DES OUVRAGES DE LA BIBLIOTHEQUE</h3>
    <table>
        <tr>
            <th>CODEOUVRAGE</th>
            <th>TITRE</th>
            <th>DATE-EDITION</th>
        </tr>
        <?php foreach ($OUVRAGES as $val):  ?>
            <tr>
                <td><?php echo($val["CodeOuvrage"]); ?> </td>
                <td><?php echo($val["Titre"]); ?></td>
                <td><?php echo($val["DateEdition"]); ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
