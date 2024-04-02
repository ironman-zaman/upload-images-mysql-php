<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
    <?php
    include_once("connect.php");
    $query = "SELECT * FROM images";
    $result = mysqli_query($conn, $query);
    echo "<a class='btn btn-info mb-4' href='create.php'>Add New</a>";
    if ($result->num_rows>0) {
        while($row = mysqli_fetch_array($result)){
            $name = $row["name"];
            $fileName = $row["filename"];
            $imageUrl = "uploads/".$fileName;
            echo "<div class='profile mt-4'>";
            echo "<img src='$imageUrl'>";
            echo "<h3>$name</h3>";
            echo "</div>";
        }
    }
    ?>
    </div>
</body>
</html>