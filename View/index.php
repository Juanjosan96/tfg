<header>
    <div class="bienvenida" style="justify-content: center;align-items: center"></div>
</header>
<body>

    <main class="blog">
        <h2>
            <h2>ÚLTIMOS ESTRENOS</h2>
            <?php
            require "../Controller/api.php";
            foreach ($result2->results as $valor) {
                $total++;
                if ($total < 19) {

                    $prueba2 = $valor->poster_path;
                    $prueba3 = $valor->id;
                    $nombre = $valor->title;
                    ?>
                        <article class="entrada">
            <div class="contenido ">
                <form action="#" method="get">
                    <a class="button" href="../Controller/cocheResultado.php?movie=<?= $prueba3 ?>">  <img id="imagen" class=""src="http://image.tmdb.org/t/p/w500/<?= $prueba2 ?>"></a>
                </form>
            </div>
        </article>
                       <?php
                }
            }
            ?>                
        </h2>
    </main>
    </script>
</body>
</html>