<!DOCTYPE html>
<html lang="en">

<head>
    <title>CIS-350-list page</title>
    <head>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>

<div class="alert alert-info">
    <a href="/index.php"> Back to list</a>
</div>

    <center>
        <h1>Storing Form data in Database</h1>
        <form action="insert.php" method="post">

            <p>
                <label for="title">title:</label>
                <input type="text" name="title" id="title">
            </p>

            <p>
                <label for="price">price:</label>
                <input type="number" step="any" name="price" id="price">
            </p>

            <p>
                <label for="author">author:</label>
                <input type="text" name="author" id="author">
            </p>

            <p>
                <label for="category">category:</label>
                <input type="text" name="category" id="category">
            </p>


            <input type="submit" value="Submit">
        </form>
    </center>
</body>

</html>