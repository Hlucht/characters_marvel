<?php
include '../Controllers/listingController.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./Images/favicon.png">
    <link rel="stylesheet" href="./CSS/styleList.css">
    <script src="https://kit.fontawesome.com/8197f172d9.js" crossorigin="anonymous"></script>
    <title>List</title>
</head>

<body>
    <div class="titles">
        <h1>The Characters</h1>
        <a href="./Index.php"><i class="fa-solid fa-angles-left"></i>Register</a>
    </div>

    <div class="content">
        <?php
        data();
        ?>
    </div>
</body>

</html>