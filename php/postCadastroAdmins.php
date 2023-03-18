<html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Admins</title>
	<link rel="stylesheet" href="../css/dpsSalvaMensgaem.css">
</head>

<body>

	<?php
	include('conexao.php');
	$nome = $_POST["nome"];
	$senhas = $_POST = ["password"];

	$sql = "INSERT INTO usuarios(nome,senha) VALUES ";
	$sql = $sql . "('$nome','$senhas');";
	echo $sql;
	echo $nome;
	echo $senha;

	$resultado = mysqli_query($conexao, $sql);

	if ($resultado == 1) {
		$messageH1 = 'A new admin user was register with success.';
		$messageH3 = "Remember that only you have the permission to register admin users";
		$messageH4 = "Now it's just the new user login.";
	} else {
		$messageH1 = 'We had a problem registering the user';
		$messageH3 = 'Wait a fell moments and try again';
		$messageH4 = "If it doesn't work again, send a message to this email: gudutra05@outlook.com";
	}
	mysqli_close($conexao);

	echo '<div id="message">';
	echo  "<h1>"  . $messageH1  . "</h1>";
	echo  "<h3>"  . $messageH3  . "</h3>";
	echo  "<h4>"  . $messageH4  . "</h4>";
	echo  "<p>"    . $sql . "</p>";
	echo '<a id="volta" href="../htmls/index.html">Go back to the menu</a>';
	echo  "</div>";

	?>



</body>

</html>

</html>