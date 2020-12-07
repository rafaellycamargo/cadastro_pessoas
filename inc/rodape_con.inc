<?php
	$query = mysqli_query($con, $SQL);
	if($query){
		echo '<a " href="index.php">Voltar para página inicial</a>';
	} else {
		echo mysqli_error($con);
	}

	mysqli_close($con);
?>