<?php

require_once __DIR__ . '/User.php';

class Agente extends User {

    public function setAccess() {
        
        if ($this->category !== 'agente') {
            echo "<h3>accesso Negato</h3>";
        } else {
            echo "<h3>Accesso Riuscito</h3>";
        }
    }

}