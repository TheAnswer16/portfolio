<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <main>
      <?php
        function dropTable($conn, $table){
          $conn->query("DROP TABLE IF EXISTS `" . $table . "`;");
        }
        function dropTableAndCreateOther($conn, $table, $tableProps){
          dropTable($conn, $table);
          $conn->query("CREATE TABLE IF NOT EXISTS `" . $table . "`(" . $tableProps . ");");
        }
        function insertData($conn, $table, $into, $values){
          $conn->query("INSERT INTO `" . $table . "`(" . $into . ") VALUES (" . $values . ");");
        }

        echo 'Executando script...';
        $mysqli = new mysqli("localhost", "root", "", "oficinaphp") or die("Unable to connect");

        $table = "aprendizado";
        echo "<br/>Gerando '" . $table . "'";
        dropTableAndCreateOther($mysqli, $table, "id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, val VARCHAR(40) NOT NULL");
        $into = "val";
        insertData($mysqli, $table, $into, "'PHP'");
        insertData($mysqli, $table, $into, "'SQL'");

        $table = "tecs";
        echo "<br/>Gerando '" . $table . "'";
        dropTableAndCreateOther($mysqli, $table, "id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, val VARCHAR(40) NOT NULL");
        $into = "val";
        insertData($mysqli, $table, $into, "'HTML'");
        insertData($mysqli, $table, $into, "'CSS'");
        insertData($mysqli, $table, $into, "'Tailwind'");
        insertData($mysqli, $table, $into, "'JavaScript'");
        insertData($mysqli, $table, $into, "'JQuery'");

        $table = "planejamento";
        echo "<br/>Gerando '" . $table . "'";
        dropTableAndCreateOther($mysqli, $table, "id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, val VARCHAR(40) NOT NULL");
        $into = "val";
        insertData($mysqli, $table, $into, "'Python'");
        insertData($mysqli, $table, $into, "'Django'");
        insertData($mysqli, $table, $into, "'Laravel'");
        insertData($mysqli, $table, $into, "'VueJS'");

        $table = "formacao";
        echo "<br/>Gerando '" . $table . "'";
        dropTableAndCreateOther($mysqli, $table, "id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, tipo VARCHAR(35) NOT NULL, nome VARCHAR(50) NOT NULL, instituicao VARCHAR(40) NOT NULL");
        $into = "tipo, nome, instituicao";
        insertData($mysqli, $table, $into, "'Técnico', 'Informática', 'IFSULDEMINAS'");
        insertData($mysqli, $table, $into, "'Bacharel - Cursando', 'Ciência da Computação', 'IFSULDEMINAS'");

        $table = "cursos";
        echo "<br/>Gerando '" . $table . "'";
        dropTableAndCreateOther($mysqli, $table, "id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(40) NOT NULL, obs VARCHAR(40) NOT NULL");
        $into = "nome, obs  ";
        insertData($mysqli, $table, $into, "'HTML e CSS', 'Oficina TecWeb'");
        insertData($mysqli, $table, $into, "'Javascript', 'Oficina TecWeb'");

        $table = "idiomas";
        echo "<br/>Gerando '" . $table . "'";
        dropTableAndCreateOther($mysqli, $table, "id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(40) NOT NULL, tipo VARCHAR(40) NOT NULL");
        $into = "nome, tipo";
        insertData($mysqli, $table, $into, "'Português', 'Fluente'");
        insertData($mysqli, $table, $into, "'Inglês', 'Intermediário'");

        echo '<br/>Executado!';
      ?>
    </main>
  </body>
</html>
