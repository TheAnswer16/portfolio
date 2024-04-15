<?php

    require_once 'utils/utils.php';
    require_once 'utils/connection.php';

    function getTecnologias() {
        
        $mysqli = cria_conexao();

        $result = $mysqli->query(TecnologiasSQL);
        $tecnologias = array();
        while ($row = $result->fetch_assoc()) {
            $tecnologias[] = $row;
        }
        
        return $tecnologias;
    }    

    function getAprendizado() {
        
        $mysqli = cria_conexao();

        $result = $mysqli->query(EmAprendizadoSQL);
        $aprendizado = array();
        while ($row = $result->fetch_assoc()) {
            $aprendizado[] = $row;
        }
        
        return $aprendizado;
    }

    function getPlanosDeAprender() {
        
        $mysqli = cria_conexao();

        $result = $mysqli->query(PlanosDeAprenderSQL);
        $planos = array();
        while ($row = $result->fetch_assoc()) {
            $planos[] = $row;
        }
        
        return $planos;
    }

    