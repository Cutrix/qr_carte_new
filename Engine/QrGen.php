<?php

namespace Engine;

/**
 * Cette classe contient une fonction dattique pour la creation de dossier
 * pour les qr caete
 */

class qrGen {        
    
    public static function createDirectory(string $directory) {
        if (!empty($directory)) {
            if (!\file_exists($directory)){                
                mkdir($directory, 0755);
            }
        }
    }

}
