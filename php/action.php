<html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../css/dpsSalvaMensgaem.css">
</head>

<body>



	<?php
	include('conexao.php');
	$nome = $_POST["nome"];
	$telefone = $_POST["telefone"];
	$email = $_POST["email"];
	$mensagem = $_POST["mensagem"];

	$sql = "INSERT INTO mensagem(nome,telefone,email,mensagem) VALUES ";
	$sql = $sql . "('$nome','$telefone','$email','$mensagem');";

	$resultado = mysqli_query($conexao, $sql);

	if ($resultado == 1) {
		$messageH1 = 'Your message was sent';
		$messageH3 = "Thanks you for sending a message, it's your help that going to helps us making this site better!";
		$messageH4 = "Now it's just wait and we're' going to respond you.";
	} else {
		$messageH1 = 'We had a problem saving your message';
		$messageH3 = "Wait a fell moments and try again, We apologize for the mistake";
		$messageH4 = "If it doesn't work again, send your message to this email: gudutra05@outlook.com";
	}
	mysqli_close($conexao);

	echo '<div id="message">';
	echo  "<h1>"  . $messageH1  . "</h1>";
	echo  "<h3>"  . $messageH3  . "</h3>";
	echo  "<h4>"  . $messageH4  . "</h4>";
	echo '<a id="volta" href="../htmls/index.html">Go back to the menu</a>';
	echo  "</div>";

	?>



</body>

</html>

</html>