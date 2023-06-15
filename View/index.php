<header>
    <div class="bienvenida" style="justify-content: center;align-items: center"></div>
</header>
<body>

    <main class="blog">
        <h2>
            <h2>ÚLTIMOS ESTRENOS</h2>
            <?php
            require "../Controller/api.php";
            foreach ($result->results as $valor) {
                $total++;
                if ($total < 19) {

                    $imagen = $valor->poster_path;
                    $id = $valor->id;
                    $nombre = $valor->title;
                    ?>
                        <article class="entrada">
            <div class="contenido ">
                <form action="#" method="get">
                    <a class="button" href="../Controller/pelicula.php?movie=<?= $id ?>">  <img id="imagen" class=""src="http://image.tmdb.org/t/p/w500/<?= $imagen ?>"></a>
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