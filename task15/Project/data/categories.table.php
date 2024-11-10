<?php 

$sql = "CREATE TABLE IF NOT EXISTS `categories`
    (
    `id` INT PRIMARY KEY AUTO_INCREMENT, 
    `title` VARCHAR(150) NOT NULL
    )";

    // execution
    $result = mysqli_query($conn,$sql);

    if($result )
    {
        echo "DONE";
    }

$sql ="INSERT INTO `categories` (`title`) VALUES 
('Category 1'),('Category 2'),
('Category 3'),('Category 4'),
('Category 5')";

mysqli_query($conn,$sql);