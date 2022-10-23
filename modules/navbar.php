<nav class="navbar">
    <div class="max-width">
        <div class="logo"><a href="#"><?php echo $logoTitle ?><span><?php echo $delim ?></span></a></div>
        <ul class="menu">
            <li><a href="index.php" class=<?php getActiveURL('/index.php') ?>><?php echo $homePage ?></a></li>
            <li><a href="contact.php" class=<?php getActiveURL('/contact.php') ?>><?php echo $contactPage ?></a></li>
        </ul>
    </div>
</nav>