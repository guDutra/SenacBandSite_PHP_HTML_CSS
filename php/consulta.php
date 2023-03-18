<html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Messages Page</title>
    <link rel="stylesheet" href="../css/telaConsultaTabela.css">


</head>

<body>
    <header>


        <div id="tittle">
            <h2> Artick Monkeys</h2>
            <p>This it's the best site for who it's looking for knowing more about the best Indie Band Of All Time.</p>
        </div>

        <nav id="menuLinks">
            <ul>
                <li> <a id="discografia" href="#"> Discography</a>
                    <ul>
                        <div id="links">
                            <li><a href="../htmls/AM.html">Whatever People Say I Am, That's What I'm Not</a></li>
                            <li> <a href="../htmls/Fwn.html">Favorite Worst Nightmares</a> </li>
                            <li><a href="../htmls/AM.html"> Humbug</a></li>
                            <li> <a href="../htmls/AM.html">Suck It and See</a> </li>
                            <li><a href="../htmls/AM.html"> AM</a></li>

                        </div>
                    </ul>
                </li>
                <li>
                    <a id="curiosidades" href="../htmls/cursiosities.html"> Curiosities</a>
                </li>
            </ul>
        </nav>
        <li id="contato"><a href="../htmls/form.html">Contatc Us</a></li>
        <li id="entrar"> <a href="../php/telaAdmin.php"> Menu</a></li>

    </header>

    <?php
    include('conexao.php');
    ?>

    <main>
        <div id="musers">
            <h1> Messages from Users </h1>
        </div>

        <div id="pesquisaDiv">
            <label for="pesquisa">Search:</label>
            <input type="text" name="peqsuisa" id="pesquisa" placeholder="Name of the User">
        </div>




        <table width="80%">

            <thead>
                <tr>

                    <th> Responder</th>
                    <th>Excluir</th>
                    <th>Cod</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Message</th>

                </tr>
            </thead>

            <tbody>
                <?php
                $resultado = mysqli_query($conexao, "SELECT * FROM mensagem");
                while ($row = mysqli_fetch_array($resultado)) {
                    $id = $row['id'];
                    $nome = $row['nome'];
                    $telefone = $row['telefone'];
                    $email = $row['email'];
                    $message = $row['mensagem'];


                    echo '<tr id="linha" >';
                    //  echo  '<td> <input type="checkbox" name="checkbox" id="checkbox" value="'.$id.'" > </td>';
                    echo   "<td ><a href=\"FormularioResposta.php?rowid=" . $id . "\">Responder</a> </td>";
                    echo   "<td ><a href=\"postDeleta.php?rowid=" . $id . "\">Excluir</a> </td>";
                    echo "<td>" . $id . "</td>";
                    echo '<td id="usuarios" >' . $nome . '</td>';
                    echo "<td>" . $telefone . "</td>";
                    echo "<td>" . $email . "</td>";
                    echo "<td>" . $message . "</td>";
                    //  echo "<button  > <a href=\"FormularioResposta.php?rowid=" .$id ."\">Responder</a> </button>";	
                    echo "</tr>";
                }
                ?>
            </tbody>

        </table>

        <div id="botao">
            <?php
            // echo "<button  > <a href=\"FormularioResposta.php?rowid=" .$id ."\">Responder</a> </button>";	
            ?>
            <!--<button  > <a href=\"FormularioResposta.php?rowid=" .$id ."\">Responder</a> </button> -->
        </div>

        <!--<a class="botaoResposta" id="botaoResposta" href=../php/FormularioResposta.php?rowid=" .$id .""> Responder</a> -->



    </main>

    <p id="#campo"> a </p>
    <script src="../js/telaConsultaTabela.js"></script>
    <script src="../js/checkboxRespondeEmail.js"></script>
</body>

</html>

</html>