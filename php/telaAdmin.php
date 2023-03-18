<html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <link rel="stylesheet" href="../css/styleIndex.css">
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
                            <li> <a href="../htmls/AM.html">Favorite Worst Nightmares</a> </li>
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
        <li id="entrar"> <a href="consulta.php"> Messages</a></li>


    </header>

    <?php
    include('conexao.php');
    ?>


    <main>
        <div id="container">

            <img src="../images/band2022.jpg" alt="photo of the band in 2022" height="350px">
            <div id="textoBiografia">
                <h3>Biography</h3>
                <p>With their nervy and literate indie rock sound, Arctic Monkeys arrived in 2005 with a blast.
                    Assisted by rave reviews and online word of mouth (they were one of the first bands to benefit from social media), the band quickly became a sensation in the United Kingdom, where they were seen as the heir apparent to the throne left vacant by Oasis and the Libertines. Buoyed by the single "I Bet You Look Good on the Dancefloor," their 2006 debut Whatever People Say I Am, That's What I'm Not briefly grabbed the title of fastest-selling album in British history.
                    It landed on top of both the U.K. and U.S. rock album charts and took home the Mercury Prize. What set the group apart was Alex Turner, a singer/songwriter with a biting wit and grasp of English vernacular (not dissimilar to Paul Weller, the godfather of modern British rock).
                    However, driven by their maverick creative spirit, Arctic Monkeys have proven highly unpredictable, reworking classic rock traditions on 2007's Favourite Worst Nightmare and beefing up their guitars with the assistance of Queens of the Stone Age's Josh Homme on 2009's Humbug.
                </p>
            </div>
            <div id="textBio">

                <p>
                    Eventually, they also laced in some of the louche lounge aspects of Turner's swinging side project the Last Shadow Puppets, as on 2013's AM, 2018's arty Tranquility Base Hotel + Casino, and 2022's The Car, but by that point, the band were a staple throughout the world: a respected, adventurous, and successful group who could easily be called Britain's biggest band of the early 21st century.
                    Alex Turner and guitarist Jamie Cook began their music careers in 2001, when the friends both received guitars for Christmas. Two years later, they began performing shows around their native Sheffield with drummer Matt Helders and bassist Andy Nicholson, two fellow students at Stocksbridge High School. A series of demo recordings followed, and Arctic Monkeys' audience swelled as fans circulated those recordings via the Internet. The musicians soon found themselves at the center of a growing media circus, with such outlets as BBC Radio examining the band's music and mounting hype.
                </p>

            </div>

            <div id="textBio3">

                <p>
                    By distributing their homemade material on the Internet, Arctic Monkeys were able to build a sizable fan base without the help of a record label, effectively circumventing the usual road to superstardom. They continued to buck tradition by signing with Domino Records in 2005, eschewing a major-label's budget for Domino's D.I.Y. cred and hip roster (which also included Franz Ferdinand, a touchstone for the band's sound). The smart moves paid off as Arctic Monkeys' first two singles -- "I Bet You Look Good on the Dancefloor" and "When the Sun Goes Down" -- both topped the U.K. charts. Critical reception was similarly favorable, but few could have predicted the whirlwind success of the band's debut album, which ousted Oasis' Definitely Maybe as the fastest-selling debut in British history (a record that was broken one year later by Leona Lewis' Spirit). Whatever People Say I Am, That's What I'm Not sold 363,735 copies during its first week alone, transforming Arctic Monkeys from underground stars into mainstream figures.
                </p>
            </div>
            <img src="../images/2014britAwards.jpg" alt="2014 photo" id="imagemBriwAwards">
        </div>
    </main>

    <footer>

        <div id="cabecalho">
            <p> Biography made by Gustavo Dutra </p>
            <p> 28/09/2022</p>
            <p>Font: <a href="https://www.allmusic.com/artist/arctic-monkeys-mn0000325357/biography"> AllMusic </a> </p>

        </div>

    </footer>

</body>

</html>

</html>