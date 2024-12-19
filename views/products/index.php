<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<body>
    <h1>Products list</h1>
    <a href="/create">Add product</a>
    <ul>
        <?php foreach ($products as $product): ?>

            <li>
                <strong><?= $product['name'] ?></strong> - 
                <?= $product['price'] ?> €
                <form action="" method='POST' style="display:inline-block;">
                    <input type="hidden" name="id" id="id" value="<?=$product['id']?>">
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
