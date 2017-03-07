<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $article->getHeader(); ?></title>
    </head>
    <body>
        <h1><?php echo $article->getHeader(); ?></h1><br>
        <div>
            <?php echo $article->getText(); ?> <br>
            <span class="author">Author: <?php echo $article->getAuthor(); ?></span>
        </div>
        <a href="../index.php">Back</a>
        <footer>
            <?php print PHP_Timer::resourceUsage(); ?>
        </footer>
    </body>
</html>
