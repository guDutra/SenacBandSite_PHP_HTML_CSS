<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica Page</title>
    <link rel="stylesheet" href="../css/styleEntrouOuNao.css">
</head>

<body>

    <?php

    include('conexao.php');
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];


    $sql = "SELECT * FROM  usuarios u WHERE ";
    $sql = $sql . "nome='"  . $nome . "'" . " and ";
    $sql = $sql . "senha=" . $senha;


    $resultado = mysqli_query($conexao, $sql);
    $linhas = mysqli_affected_rows($conexao);

    if ($linhas <> 1) {

        $messageH1 = 'Something went wrong!!';
        $messageH3 = 'Try to comeback and put your information again.';
        $messageH4 = "If you are sure that it's the right information contact: gudutra05@outlook.com ";
    } else {

        $messageH1 = 'Welcome back ' . $nome . '  !!!!';
        $messageH3 = "Thanks for coming back, we miss you";
        $messageH4 = "Now just click the  button and enter the server as an admin";
        echo '<a  href="telaAdmin.php"> Enter</a>';
    }


    mysqli_close($conexao);
    ?>


    <div id="mensagem">
        <h1> <?php echo  $messageH1 ?> </h1>
        <h3> <?php echo  $messageH3 ?> </h3>
        <h4> <?php echo  $messageH4 ?> </h4>

    </div>
</body>

</html>