<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Student.php";
    require_once "src/Course.php";
    require_once "src/House.php";

    $server = 'mysql:host=localhost:8889;dbname=hogwarts_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class HouseTest extends PHPUnit_Framework_TestCase
    {
        function test__()
        {
            //Arrange
            //Act
            //Assert
        }


    }


 ?>
