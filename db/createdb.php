<?php

include('../classlib/Mysql.php');

try {
    $mysql = Mysql::getInstance();
}
catch (Exception $e){
    echo 'Exception -> ';
    var_dump($e->getMessage());
}

//var_dump($mysql);

$articleTable = $mysql->db->prepare(
                            "CREATE TABLE IF NOT EXISTS `article` ( " .
                            "`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, " .
                            "`title` VARCHAR(100), " .
                            "`author` VARCHAR(100) DEFAULT NULL," .
                            "`date` TIMESTAMP, " .
                            "`imgUrl` VARCHAR(225) DEFAULT NULL," .
                            "`extUrl` VARCHAR(225) DEFAULT NULL, " .
                            "`content` TEXT, " .
                            "`labelId` INT(5) DEFAULT NULL, " .
                            "FOREIGN KEY labelId REFERENCES articleLabel)");

$articleTable->execute();

//$labelTable = $mysql->db->prepare(
//                            "CREATE TABLE `label` (" .
//                            "`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, " .
//                            "`labelName` VARCHAR(25) UNIQUE,");
//
//$labelTable->execute();
//
//$articleLabelTable = $mysql->db->prepare(
//                            "CREATE TABLE `articleLabel` (" .
//                            "`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, " .
//                            "`articleId` INT NOT NULL, " .
//                            "`labelId` INT NOT NULL, " .
//                            "FOREIGN KEY (articleID) REFERENCES article(id) ON UPDATE CASCADE, " .
//                            "FOREIGN KEY (labelId) REFERENCES label(id) ON UPDATE CASCADE");
//
//$articleLabelTable->execute();