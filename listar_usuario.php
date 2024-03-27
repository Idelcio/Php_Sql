<h1>Listar usuários</h1>

<?php
    $sql = "SELECT * FROM cadastro_usario";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        echo "<table class='table table-hover'>";
        while($row = $res->fetch_object()){
            echo "<tr>";
            echo "<td>".$row->id."</td>";
            echo "<td>".$row->nome."</td>";
            echo "<td>".$row->email."</td>";
        }
        echo "</table>";
    }else{
        echo "<p class='alert alert-danger'>Não encontrou resultado!</p>";
    }

?>