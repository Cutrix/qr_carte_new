<?php require 'inc/header.php'; ?>

<h2>Inscription du client dans la base</h2>
<form  method="post">
    <div id="form_bloc">

        <div id="field-select">
            <label for="piece">Type de piece</label>
            <select name="piece" id="piece">
                <option value="cni">cni</option>
                <option value="attestation">Attestation</option>
                <option value="passeport">Passeport</option>
            </select>
        </div>

        <div id="field">
            <label for="numPiece">Numero de piece</label>
            <input type="text" name="numPiece" required="required" value="<?= $this->clients->numero_piece; ?>">
        </div>


        <div id="field">
            <label for="nom" id="field-label">Nom: </label>
            <input type="text" name="nom" required="required" value="<?= $this->clients->nom_client; ?>">
        </div>

        <div id="field">
            <label for="" id="field-label">Prenom: </label>
            <input type="text" name="prenom" required="required" value="<?= $this->clients->prenom_client; ?>">
        </div>

        <div id="field-select">
            <label for="sexe">Sexe</label>
            <select name="sexe" id="sexe">
                <option value="M">Masculin</option>
                <option value="F">Feminin</option>
            </select>
        </div>

        <div id="field">
            <label for="" id="field-label">Date de naissance: </label>
            <input type="date" name="date_naiss" required="required" value="<?= $this->clients->date_naissance_client; ?>">
        </div>

        <div id="field">
            <label for="" id="field-label">Lieu d habitation </label>
            <input type="text" name="lieu_habitation" required="required" value="<?= $this->clients->lieu_naissance_client; ?>">
        </div>

        <div id="field">
            <label for="" id="field-label">Lieu de naissance </label>
            <input type="text" name="lieu_naissance" required="required" value="<?= $this->clients->lieu_naissance_client; ?>">
        </div>

        <div id="field">
            <label for="" id="field-label">Ville:  </label>
            <input type="text" name="ville" required="required" value="<?= $this->clients->ville_client; ?>">
        </div>

        <div id="field">
            <label for="" id="field-label">Commune:  </label>
            <input type="text" name="commune" required="required" value="<?= $this->clients->commune_client; ?>">
        </div>

        <div id="field">
            <label for="" id="field-label">Quartier:  </label>
            <input type="text" name="quartier" required="required" value="<?= $this->clients->quartier_client; ?>">
        </div>

        <div id="field">
            <label for="" id="field-label">Telephone:  </label>
            <input type="text" name="telephone" required="required" value="<?= $this->clients->numero_tel_client; ?>">
        </div>

        <div id="field">
            <label for="" id="field-label">Telephone 2:  </label>
            <input type="text" name="telephone2" value="<?= $this->clients->numero2_tel_client; ?>">
        </div>

        <div id="field">
            <label for="" id="field-label">Boite postale:  </label>
            <input type="text" name="boite_postale" value="<?= $this->clients->boite_postale; ?>">
        </div>

        <div id="field">
            <label for="" id="field-label">Email:  </label>
            <input type="text" name="email" value="<?= $this->clients->email_client; ?>">
        </div>

        <input type="submit" value="modifier" id="modifier" name="modifier">


    </div>

</form>

<?php require 'inc/footer.php'; ?>
