<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin panel</title>
        <link rel="stylesheet" href="../Templates/Style/admin.css">
    </head>
    <body>
        <table>
            <tr>
                <th></th>
                <th>Header</th>
                <th>Author</th>
                <th>Description</th>
            </tr>
            <?php foreach ($articles as $article) { ?>
            <tr>
                <td>
                    <a href="update.php?id=<?= $article->getId(); ?>" id="<?= $article->getId(); ?>">Update</a> <br>
                    <span class="delete" id="<?= $article->getId(); ?>">Delete</span>
                    <span class="deleted" id="<?= $article->getId(); ?>">DELETED</span>
                </td>
                <td><?= $article->getHeader(); ?></td>
                <td><?= $article->getAuthor(); ?></td>
                <td><?= $article->getDescription(); ?></td>
            </tr>
            <?php } ?>
        </table>
        <br><a href="update.php">Add new</a>
        <script src="../js/jquery-3.1.1.js"></script>
        <script src="../js/del.js"></script>
    </body>
</html>