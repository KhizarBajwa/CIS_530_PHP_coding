<!DOCTYPE html>
<html>

<head>
    <title>CIS-350-Insert Page page</title>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
    </head>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "cis530");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $title = $_REQUEST['title'];
        $price = $_REQUEST['price'];
        $author = $_REQUEST['author'];
        $category = $_REQUEST['category'];


        // Performing insert query execution
        // here our table name is college
        // $sql = "INSERT INTO book  VALUES ('$title','$price','$author','$category')";
        $sql = "INSERT INTO `book` (`id`, `title`, `price`, `author`, `category`) VALUES ('', '$title', $price, '$author', '$category');";

        echo $sql;

        if (mysqli_query($conn, $sql)) {
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$title\n $price\n "
                . "$author \n $category");



        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>


    </center>
    <script>confirm("Data Save successfully")</script>
    <?php
        echo "<script> location.href='/db/index.php'; </script>";
        exit;
    ?>
</body>

</html>