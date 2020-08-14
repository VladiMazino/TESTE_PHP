<?php 
require 'config.php';
?>
<a href="adicionar.php">adicionar Novo Usuario</a>
<table border="=0" width="100%">
	<try>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Ações</th>
	</try>
	<?php
	$sql = "SELECT * FROM facebook";
	$sql = $pdo->query($sql);
	if ($sql->rowCount() > 0) {
		foreach($sql.fetchAll() as $facebook){
			echo '<tr>';
			echo '<td>'.$facebook['nome'].'</td>';
			echo '<td>'.$facebook['email'].'</td>';
			echo '<td>'.$facebook['nome'].'</td>';
			echo '<td><a href="editar.php?id='.$facebook['id'].'">Editor</a> - <a href="excluir.php?id='.$facebook.'">Excluir</a></td>';
			echo '</tr>';

		}
	}
	?>
</table>

