<?php

    class Formacao {
        
        private $tipo;
        private $nome;
        private $instituicao;

        public function __construct($tipo, $nome, $instituicao) {
            $this->tipo = $tipo;
            $this->nome = $nome;
            $this->instituicao = $instituicao;
        }

        // Getters

        public function getTipo() {
            return $this->tipo;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getInstituicao() {
            return $this->instituicao;
        }

        // Setters

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setInstituicao($instituicao) {
            $this->instituicao = $instituicao;
        }

    }