<?php require 'inc/header.php'?>

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
                    <label for="nom_client" id="field-label">Nom: </label>
                    <input type="text" name="nom_client" required="required">
                </div>
                
                <div id="field">
                    <label for="" id="field-label">Prenom: </label>
                    <input type="text" name="prenom_client" required="required">
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
                    <input type="text" name="date_naiss_client" required="required">
                </div>
                 
                <div id="field">
                    <label for="" id="field-label">Lieu d'habitation </label>
                    <input type="text" name="lieu_habitation_client" required="required">
                </div>
                
                <div id="field">
                    <label for="" id="field-label">Lieu de naissance </label>
                    <input type="text" name="lieu_naissance_client" required="required">
                </div>
                
                <div id="field">
                    <label for="" id="field-label">Ville:  </label>
                    <input type="text" name="ville_client" required="required">
                </div>
                
                <div id="field">
                    <label for="" id="field-label">Commune:  </label>
                    <input type="text" name="commune_client" required="required">
                </div>
                
                <div id="field">
                    <label for="" id="field-label">Quartier:  </label>
                    <input type="text" name="quartier_client" required="required">
                </div>
                
                <div id="field">
                    <label for="" id="field-label">Telephone:  </label>
                    <input type="text" name="telephone_client" required="required">
                </div>
                
                <div id="field">
                    <label for="" id="field-label">Telephone 2:  </label>
                    <input type="text" name="telephone2_client">
                </div>
                
                <div id="field">
                    <label for="" id="field-label">Boite postale:  </label>
                    <input type="text" name="boite_postale">
                </div>
                
                <div id="field">
                    <label for="" id="field-label">Email:  </label>
                    <input type="text" name="email_client">
                </div>
                
                <input type="submit" value="Insription" id="inscription" name="inscription"> 
                

            </div>
            
</form>

<?php require 'inc/footer.php'; ?>


