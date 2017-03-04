<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            foreach ($news as $article) {
        ?>
        <div class="article">
            <h2><?php echo $article->getHeader(); ?></h2>
            <div class="desc">
                <?php echo $article->getDescription(); ?> <br>
                <a href="index.php?act=Article&id=<?php echo $article->getId(); ?>">Read more</a> <br> <hr>
            </div>
        </div>
            <?php } ?>
    </body>
</html>
