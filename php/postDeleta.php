

<html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Delete Message Page</title>
	<link rel="stylesheet" href="../css/dpsDeleta.css">
</head>
<body>

<?php 
include('conexao.php');
$id = $_GET['rowid'];

$sql = "DELETE FROM mensagem WHERE id = ".$id; 

$resultado=mysqli_query($conexao, $sql);
 $linhas = mysqli_affected_rows($conexao);

if($linhas == 1){
	$messageH1 = 'Message deleted with success';
	
 }
 else{
	$messageH1 ='We had a problem deleting the message' ;
    
}
 mysqli_close($conexao);

echo '<div id="message">';
echo  "<h1>"  .$messageH1  ."</h1>";

echo '<a  href="consulta.php"> Go back </a>';

echo  "</div>";

?>



</body>
</html>
</html>
