<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./Images/favicon.png">
    <link rel="stylesheet" href="./CSS/styleIndex.css">
    <script src="https://kit.fontawesome.com/8197f172d9.js" crossorigin="anonymous"></script>
    <title>Marvel</title>
</head>

<body>
    <div class="content">
        <h1>Register a Marvel character</h1>

        <form action="../Controllers/characterController.php" method="POST" enctype="multipart/form-data">
            <div class="col-1">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Type name" maxlength="30" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$">

                <label for="heroName">Hero name</label>
                <input type="text" id="heroName" name="heroName" placeholder="Type hero name" maxlength="30" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$">

                <label for="species">Species</label>
                <input type="text" id="species" name="species" placeholder="Type species" maxlength="30" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$">

                <label for="photo">Photo</label>
                <label for="photo" class="photo">Choose file
                    <i class="fa-regular fa-file"></i>
                    <input type="file" id="photo" name="photo">
                </label>
            </div>

            <div class="col-2">
                <label for="power">Super power</label>

                <div class="categories">
                    <label for="category">Category</label>

                    <label for="superStrong" class="check"><input type="checkbox" id="superStrong" name="superStrong" value="Super Strong">
                        Super Strong</label>

                    <label for="genius" class="check"><input type="checkbox" id="genius" name="genius" value="Genius">
                        Genius</label>

                    <label for="extraterrestrialPower" class="check"><input type="checkbox" id="extraterrestrialPower" name="extraterrestrialPower" value="Extraterrestrial Power">
                        Extraterrestrial Power</label>

                    <label for="magic" class="check"><input type="checkbox" id="magic" name="magic" value="Magic"> Magic</label>

                    <label for="superhumanAbilities" class="check"><input type="checkbox" id="superhumanAbilities" name="superhumanAbilities" value="Superhuman abilities">
                        Superhuman abilities</label>

                    <label for="combatSkills" class="check"><input type="checkbox" id="combatSkills" name="combatSkills" value="Combat skills">
                        Combat skills</label><br>
                </div>

                <label for="description">Description</label>
                <textarea name="description" id="description" cols="40" rows="5" placeholder="Type description" maxlength="100"></textarea>
            </div>

            <button type="submit" name="button" value="register" class="buttonRegister">Register</button>
            <button type="submit" name="button" value="list" class="buttonList">List</button>
        </form>
    </div>
</body>

</html>