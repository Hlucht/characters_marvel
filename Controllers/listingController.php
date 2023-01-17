<?php
ob_start();
include '../DAO/characterDao.php';

$connection = new Character();

$characters = $connection->selectCharacters();

function data(){
    $category = "Power";

    foreach ($GLOBALS["characters"] as $character) {
        $id = $character[0];
        $name = $character[1];
        $heroName = $character[2];
        $species = $character[3];

        for ($i = 4; $i < 8; $i++) {
            if ($character[$i] != "") $category = $category . ' ' . '-' . ' ' . $character[$i];
        }

        $description = $character[10];
        $photo = $character[11];

        if ((!empty($photo)) && file_exists("../Directories/$id/$photo")) {
            $img = "<img src='../Directories/$id/$photo' width='170' height='170'><br>";
        } else {
            $img = "<img src='../Views/Images/pattern.jpg' width='170' height='170'><br>";
        }

        echo
        "<div class='card'>
        <form method='post'>
            <button type='submit' name='buttonDelete' value='delete' class='delete'><i class='fa-solid fa-trash-can'></i></button>
        </form>
        
        <p class='name'><strong>$name</strong></p>
            <div class='contentCard'>
                <div class='contentText'>
                    <p><strong>Hero Name:</strong> $heroName</p>
                    <p><strong>Species:</strong> $species</p>
                    <p><strong>Category:</strong> $category</p>
                    <p><strong>Description:</strong> $description</p>
                </div>
                <i class='image'>$img</i>
            </div>
        </div>";
    };

    if (isset($_POST['buttonDelete'])) {
        foreach ($GLOBALS["characters"] as $character) {
            $id = $character[0];
            $name = $character[1];
            $photo = $character[11];
    
            $directory = "../Directories/$id/";
    
            $path = $directory . $photo;
    
            unlink($path);
            rmdir($directory);
        }

        $GLOBALS["connection"]->deleteCharacter($name);
        header("Refresh: 0");
    }
}
ob_end_flush();
?>