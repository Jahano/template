<?php include('templates/head.php');?>

<body>
    <div class="flex-container body__div">
        <?php include('templates/header.php');?>
        <main class="main">
            <section class="main__section sectOne" id="secOne">
                <h3>Contenido 1</h3>
                <article>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo cupiditate saepe nam obcaecati sit ratione consectetur? Obcaecati cumque ex, sit totam asperiores reprehenderit fugiat eveniet labore molestias soluta at ratione deserunt vero doloremque! Adipisci cupiditate, laborum architecto nulla maiores temporibus necessitatibus ullam eos! Eligendi, expedita dolorem explicabo placeat itaque quia.</p>
                </article>
                <a role="buton" href="#secTwo" class="article__button">Section Two</a>
            </section>
            <section class="main__section secTwo" id="secTwo">
                <h3>Contenido 2</h3>
                <article>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo cupiditate saepe nam obcaecati sit ratione consectetur? Obcaecati cumque ex, sit totam asperiores reprehenderit fugiat eveniet labore molestias soluta at ratione deserunt vero doloremque! Adipisci cupiditate, laborum architecto nulla maiores temporibus necessitatibus ullam eos! Eligendi, expedita dolorem explicabo placeat itaque quia.</p>
                </article>
                <a role="buton" href="#secThree" class="article__button">Section Three</a>
            </section>
            <section class="main__section sectThree" id="secThree">
                <h3>Contenido 3</h3>
                <article>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo cupiditate saepe nam obcaecati sit ratione consectetur? Obcaecati <b>Mario es Puto</b> totam asperiores reprehenderit fugiat eveniet labore molestias soluta at ratione deserunt vero doloremque! Adipisci cupiditate, laborum architecto nulla maiores temporibus necessitatibus ullam eos! Eligendi, expedita dolorem explicabo placeat itaque quia.</p>
                </article>
                <a role="buton" href="#secOne" class="article__button">Section One</a>
            </section>
        </main>
        <?php include('templates/aside.php');?>
        <?php include('templates/footer.php');?>
    </div>

</body>
