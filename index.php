
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './modules/header.php';?>
</head>
<body>
    <header>
        <?php include './modules/navbar.php';?>
    </header>
    <section class="home" id="home">
        <div class="mid">
                <div class="article-container">
                    <article class="card">
                        <img src ='./images/volley<?php getImgFormat();?>'>
                        <div class="card-text">Qui soluta saepe et officiis enim non libero galisum non molestias commodi cum mollitia deserunt ea repellat nihil sit enim illum. Qui cupiditate magnam vel accusamus libero ad repellat itaque</div>
                    </article>
                    <article class="card">
                        <img src="./images/basket<?php getImgFormat();?>">
                        <div class="card-text">Qui soluta saepe et officiis enim non libero galisum non molestias commodi cum mollitia deserunt ea repellat nihil sit enim illum. Qui cupiditate magnam vel accusamus libero ad repellat itaque</div>
                    </article>
                    <article class="card">
                        <img src="./images/tennis<?php getImgFormat();?>">
                        <div class="card-text">Qui soluta saepe et officiis enim non libero galisum non molestias commodi cum mollitia deserunt ea repellat nihil sit enim illum. Qui cupiditate magnam vel accusamus libero ad repellat itaque</div>
                    </article>
                    <article class="card">
                        <img src="./images/foot<?php getImgFormat();?>">
                        <div class="card-text">Qui soluta saepe et officiis enim non libero galisum non molestias commodi cum mollitia deserunt ea repellat nihil sit enim illum. Qui cupiditate magnam vel accusamus libero ad repellat itaque</div>
                    </article>
                </div>
        </div>
    </section>
    <footer class ="foot">
        <?php include ('modules/bottom.php');?>

    </footer>

</body>

</html>