<?php

    require_once 'utils/utils.php'; 
    require_once 'utils/connection.php';
    require_once 'models/Formacao.php';
    require_once 'models/Curso.php';

    function getFormacaoAcademica() {
        
        $mysqli = cria_conexao();

        $result = $mysqli->query(FormacaoAcademicaSQL);
        $formacoes = array();
        while ($row = $result->fetch_assoc()) {
            $formacoes[] = new Formacao($row['tipo'], $row['nome'], $row['instituicao']);
        }
        
        return $formacoes;
    }

    function getCursos() {
        
        $mysqli = cria_conexao();

        $result = $mysqli->query(CursosSQL);
        $cursos = array();
        while ($row = $result->fetch_assoc()) {
            $cursos[] = new Curso($row['nome'], $row['obs']);
        }
        
        return $cursos;
    }

    function getIdiomas() {
        
        $mysqli = cria_conexao();

        $result = $mysqli->query(IdiomasSQL);
        $idiomas = array();
        while ($row = $result->fetch_assoc()) {
            $idiomas[] = new Curso($row['nome'], $row['tipo']);
        }

        return $idiomas;
    }