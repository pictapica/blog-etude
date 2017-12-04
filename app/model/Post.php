<?php

class Post {

    protected $_id;
    protected $_title;
    protected $_user_id;
    protected $_content;
    protected $_creation_date;
    protected $_update_date;

    public function __construct($valeurs = []) {
        if (!empty($valeurs)) { // Si on a spécifié des valeurs, alors on hydrate l'objet.
            $this->hydrate($valeurs);
        }
    }

    //Méthode assignant les valeurs spécifiées aux attributs correspondant.

    public function hydrate($donnees) {
        foreach ($donnees as $attribut => $valeur) {
            $methode = 'set' . ucfirst($attribut);

            if (is_callable([$this, $methode])) {
                $this->$methode($valeur);
            }
        }
    }

    //getters
    public function getID() {
        return $this->_id;
    }

    public function getTitle() {
        return $this->_title;
    }

    public function getUserId() {
        return $this->_user_id;
    }

    public function getContent() {
        return $this->_content;
    }

    public function getCreationDate() {
        return $this->_creation_date;
    }

    public function getUpdateDate() {
        return $this->_update_date;
    }

    //setters
    public function setId($id) {
        $this->_id = (int) $id;
    }

    public function setTitle($title) {
        if (is_string($title)) {
            $this->_title = $title;
        }
    }

    public function setUseId($user_id) {
        $this->_user_id = (int) $user_id;
    }

    public function setContent($content) {
        if (is_string($content)) {
            $this->_content = $content;
        }
    }

    public function setCreationDate($creation_date) {
        if (is_string($creation_date)) {
            DateTime::createFromFormat('m/d/Y', $creation_date);
        }

        $this->_creation_date = $creation_date;
    }

    public function setUpdateDate($update_date) {
        $this->_update_date = $update_date;
    }

}