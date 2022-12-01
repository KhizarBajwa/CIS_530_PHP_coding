<?php


try {
    $pdo = new PDO("mysql:host=localhost;dbname=cis530", "root", "");

    $sql = 'SELECT id,title,price,author,category FROM book ORDER BY id';

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>

<head>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book CIS-350</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
<div class="alert alert-success">
    <a href="/db/newbook.php"> Add new book</a>
</div>

    <div id="container">
        <h1>Books</h1>
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Author</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $q->fetch()): ?>
                <tr>
                    <td>
                        <?php echo htmlspecialchars($row['title']) ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($row['price']); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($row['author']); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($row['category']); ?>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
</body>
</div>

</html>