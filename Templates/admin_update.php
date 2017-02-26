<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
    </head>
    <body>
        <form action="#" method="POST">
            <span>Header </span><input type="text" name="header_article" required value="<?= $article->getHeader(); ?>"><br>
            <span>Author </span><input type="text" name="author" required value="<?= $article->getAuthor(); ?>"><br>
            <br><h4>Text</h4>
            <textarea name="text" required><?= $article->getText(); ?></textarea><br>
            <input type="submit" value="Save"> <input type="button"  value="Cancel" onclick="history.back()">
        </form>
    </body>
</html>
