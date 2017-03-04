<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
    </head>
    <body>
        <form action="../../admin/update.php" method="POST">
            <span>Header </span><input type="text" name="header_article" required value="<?= $article->getHeader(); ?>"><br>
            
            <span>Author </span><select name="author_id" required>
                <?php foreach ($authors as $author): ?>
                <option value="<?= $author->id ?>"><?= $author->getName(); ?></option>
                <?php endforeach; ?>
            </select>
            
            <br><h4>Text</h4>
            <textarea name="text" required><?= $article->getText(); ?></textarea><br>
            <?php if (!$article->isNew()) : ?>
            <input type="hidden" value="<?= $article->getId(); ?>" name="id">
            <?php endif; ?>
            <input type="submit" value="Save"> <input type="button"  value="Cancel" onclick="history.back()">
        </form>
    </body>
</html>
