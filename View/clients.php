<?php require 'inc/header.php'; ?>
<hr>
<?php foreach ($this->clients as $client): ?>
    <center></center><div id="infos">
        <p><strong>Type client: </strong><?= $client->type_piece; ?></p>
        <p><strong>Numro piece client: </strong><?= $client->numero_piece; ?></p>
        <p><strong>Nom client: </strong><?= $client->nom_client; ?></p>
        <p><strong>Prenom client: </strong><?= $client->prenom_client; ?></p>
        <p><strong>Sexe client : </strong><?= $client->sexe_client; ?></p>
        <p><strong>Date naissance client: </strong><?= $client->date_naissance_client; ?></p>
        <p><strong>Lieu naissance client: </strong><?= $client->lieu_naissance_client; ?></p>
        <p><strong>Ville client: </strong><?= $client->ville_client; ?></p>
        <p><strong>Commune client: </strong><?= $client->commune_client; ?></p>
        <p><strong>Quartier client: </strong><?= $client->quartier_client; ?></p>
        <p><strong>Numero client: </strong><?= $client->numero_tel_client; ?></p>
        <p><strong>Deuxieme numero client: </strong><?= $client->numero2_tel_client; ?></p>
        <p><strong>Email client: </strong><?= $client->email_client; ?></p>
        <p><strong>Boite Postale: </strong><?= $client->boite_postale; ?></p>
        <p><strong>Inscrit le: </strong><?= $client->date_inscription; ?></p>
        <center><img src="<?= $client->qr; ?>" alt="" class="img-thumbnail"></center>
        <button type="button" class="btn btn-success" onclick="window.location='<?=ROOT_URL?>?p=Client&amp;a=delete&amp;id=<?= $client->id_client; ?>'">Supprimer</button>
        <button type="button" class="btn btn-warning">Modifier</button>
    </div></center><br><hr>
<?php endforeach; ?>

<?php require 'inc/footer.php'; ?>



