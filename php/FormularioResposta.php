<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario Resposta</title>
    <link rel="stylesheet" href="../css/styleFormularioRespostaEmail.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    
  </head>
  

  <main>
  <body class="bg-secondary" >
  <?php 
    include('conexao.php');
    $id = $_GET['rowid'];

    $resultado = mysqli_query($conexao,"SELECT * FROM mensagem where id= $id");
    while ($row = mysqli_fetch_array($resultado)){
        $id = $row['id'];
        $nome = $row['nome'];
        $telefone = $row['telefone'];
        $email = $row['email'];
        $message = $row['mensagem'];
    }
    ?>
  
  <div id="formulario">

  <h4> Email Reply</h4>
  <form action="https://formsubmit.co/<?php echo $email ?>" method="post">

  <div class="firstLine" >
  </div>
  <div class="form-row"> 
  <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">TO: <?php echo $nome ?></span>
  <input type="text" class="form-control" placeholder="Type your name" aria-label="Username" aria-describedby="basic-addon1" required pattern="[aA-zZ]+$">
</div>

<input type="text" class="form-control" name="_subject" placeholder="Subject" aria-label="Username" aria-describedby="basic-addon1" required>

<div class="form-floating">
  <textarea class="form-control" name="message" placeholder="Write your reply here" id="txtarea" style="resize: none; height:300px"></textarea>
  <label for="txtarea">Response</label>
</div>
<input type="hidden" name="_next" value="">
<input type="hidden" name="_captcha" value="false">
<span class="input-group-text" id="basic-addon1">Sending this email to: <?php echo $email ?></span>
<button type="submit" id="botao" class="btn btn-success" >Submit</button>

  </form>
  </div>
    
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>

  </main>
  
</html>