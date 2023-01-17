<?php
ob_start();
include '../DAO/characterDao.php';
$connection = new Character();

$name = $_POST['name'];
$heroName = $_POST['heroName'];
$species = $_POST['species'];
$description = $_POST['description'];
$filePhoto = $_FILES['photo'];
$photo = $filePhoto['name'];
$superStrong = $_POST['superStrong'];
$genius = $_POST['genius'];
$extraterrestrialPower = $_POST['extraterrestrialPower'];
$magic = $_POST['magic'];
$superhumanAbilities = $_POST['superhumanAbilities'];
$combatSkills = $_POST['combatSkills'];
$button = $_POST['button'];

try {
    if ($button == "register" && !empty($name) && !empty($heroName) && !empty($description)){
        if($connection->insertCharacter(
            $name,
            $heroName,
            $species,
            $superStrong,
            $genius,
            $extraterrestrialPower,
            $magic,
            $superhumanAbilities,
            $combatSkills,
            $description,
            $photo
        )){

        if (!empty($filePhoto)) {

            $selectId = $connection->selectLastId();
            $id = $selectId[0][0];

            $directory = "../Directories/$id/";
            mkdir($directory, 0755);

            move_uploaded_file($filePhoto["tmp_name"], $directory . $photo);
        }
    }
    header('location:../Views/list.php');
    }else if($button == "list"){
        header('location: ../Views/list.php');
    }else{
        header('location: ../Views/error.php');
    }
} catch (Exception $error) {
    header('location:../Views/error.php');
}
ob_end_flush();
?>