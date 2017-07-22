<?php require 'inc/header.php'; ?>
<?php require 'inc/msg.php'; ?>
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
            <input type="text" name="numPiece" required="required"
        </div>


        <div id="field">
            <label for="nom" id="field-label">Nom: </label>
            <input type="text" name="nom" required="required">
        </div>

        <div id="field">
            <label for="" id="field-label">Prenom: </label>
            <input type="text" name="prenom" required="required">
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
            <input type="date" name="date_naiss" required="required">
        </div>

        <div id="field">
            <label for="" id="field-label">Lieu d habitation </label>
            <input type="text" name="lieu_habitation" required="required">
        </div>

        <div id="field">
            <label for="" id="field-label">Lieu de naissance </label>
            <input type="text" name="lieu_naissance" required="required">
        </div>

        <div id="field">
            <label for="" id="field-label">Ville:  </label>
            <input type="text" name="ville" required="required">
        </div>

        <div id="field">
            <label for="" id="field-label">Commune:  </label>
            <input type="text" name="commune" required="required">
        </div>

        <div id="field">
            <label for="" id="field-label">Quartier:  </label>
            <input type="text" name="quartier" required="required">
        </div>

        <div id="field">
            <label for="" id="field-label">Telephone:  </label>
            <input type="text" name="telephone" required="required">
        </div>

        <div id="field">
            <label for="" id="field-label">Telephone 2:  </label>
            <input type="text" name="telephone2">
        </div>

        <div id="field">
            <label for="" id="field-label">Boite postale:  </label>
            <input type="text" name="boite_postale">
        </div>

        <div id="field">
            <label for="" id="field-label">Email:  </label>
            <input type="text" name="email">
        </div>

        <input type="submit" value="Insription" id="inscription" name="inscription">


    </div>

</form>

<?php require 'inc/footer.php'; ?>


