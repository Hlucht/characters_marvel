<?php
ob_start();
include '../DataBase/configDb.php';

class Character
{
    private mysqli $connection;

    function __construct(){
        $dao = new ConfigDataBase();
        $this->connection = $dao->getConnection();
    }


    function existCharacter($name, $heroName){
        $sql = $this->connection->query("SELECT name FROM characters WHERE name='$name' AND hero_name='$heroName'");
        if ($sql->num_rows > 0) return true;
    }


    function insertCharacter(
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
        $filePhoto
    ) {
        if ($this->existCharacter($name, $heroName)) {
            header('location: ../Views/error.php');
            return false;
        } else {
            $sql = $this->connection->query("INSERT INTO characters 
            
            (name, hero_name, specie, category_super_strong, category_genius, category_extraterrestrial_power, category_magic, category_superhuman_abilities, category_combat_skills, description, file_photo) 

            VALUES ('$name', '$heroName', '$species', '$superStrong', '$genius', '$extraterrestrialPower', '$magic', '$superhumanAbilities', '$combatSkills', '$description', '$filePhoto')");

            
            return true;
        }
    }


    function selectLastId(){
        $sql = $this->connection->query("SELECT MAX(id_character) FROM characters");
        return $sql->fetch_all();
    }


    function selectCharacters(){
        $sql = $this->connection->query("SELECT * FROM characters");
        return $sql->fetch_all();
    }


    function deleteCharacter($name){
        $sql = $this->connection->query("DELETE FROM characters WHERE name='$name'");
        return;
    }
}
ob_end_flush();
?>