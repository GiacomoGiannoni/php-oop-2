<?php

require_once __DIR__ . '/../traits/Address.php';
class User {
    public $name;
    public $lastname;
    public $email;
    protected $category;
    use Address;


    public function __construct($name, $lastname, $email)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    public function setCategory($category) {
        $this->category = $category;

        if ($category !== 'cliente' && $category !== 'agente') {
            echo '<h3>Categoria NON valida</h3>';
        }
    }

    public function setAccess() {
            
        if ($this->category == 'cliente') {
            echo "<h3>Aceesso Riuscito</h3>";
        } elseif ($this->category == 'agente') {
            echo "<h3>Accesso Negato</h3>";
        }
    }

    public function getCategory() {
        return $this->category;
    }
}