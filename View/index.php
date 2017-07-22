<?php require 'inc/header.php'; ?>

<div>
    <nav>
        <ul>
            <h2>Menu secretaire</h2>
            <li><a href="<?=ROOT_URL?>?p=Client&amp;a=add">Inscription client</a></li>
            <li><a href="<?=ROOT_URL?>?p=Client&amp;a=add">Inscription chauffeur</a></li>
            <li><a href="<?=ROOT_URL?>?p=Client&amp;a=getAll">Afficher clients</a></li>
            <li><a href="<?=ROOT_URL?>?p=Inscription&amp;a=add_chauffeur">Afficher chauffeur</a></li>
            <li><a href="<?=ROOT_URL?>?p=Inscription&amp;a=add_chauffeur">rechercher</a></li>

            <h2>Admin superieure</h2>
            <li><a href="<?=ROOT_URL?>?p=Inscription&amp;a=add_client">Inscription client</a></li>
            <li><a href="<?=ROOT_URL?>?p=Inscription&amp;a=add_chauffeur">Inscription chauffeur</a></li>
            <li><a href="<?=ROOT_URL?>?p=Inscription&amp;a=add_chauffeur">Inscription admin developpeur</a></li>
            <li><a href="<?=ROOT_URL?>?p=Inscription&amp;a=add_chauffeur">Supprimer un admin</a></li>
            <li><a href="<?=ROOT_URL?>?p=Inscription&amp;a=add_chauffeur">rechercher</a></li>
            <li><a href="<?=ROOT_URL?>?p=Inscription&amp;a=add_chauffeur">Supprimer un chauffeur ou client</a></li>
            <li><a href="<?=ROOT_URL?>?p=Inscription&amp;a=add_chauffeur">Retirer des droits</a></li>
        </ul>
    </nav>
</div>

<?php require 'inc/footer.php'; ?>


