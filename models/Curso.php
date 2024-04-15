<?php

    class Curso {

        private $nome;
        private $obs;

        public function __construct($nome, $obs) {
            $this->nome = $nome;
            $this->obs = $obs;
        }

        // Getters

        public function getNome() {
            return $this->nome;
        }

        public function getObs() {
            return $this->obs;
        }

        // Setters

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setObs($obs) {
            $this->obs = $obs;
        }
    }