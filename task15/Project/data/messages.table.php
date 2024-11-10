<?php 

$sql = "CREATE TABLE IF NOT EXISTS `messages`
(
`id` INT PRIMARY KEY AUTO_INCREMENT, 
`name` VARCHAR(150) NOT NULL,
`email` VARCHAR(150) NOT NULL,
`subject` VARCHAR(150) NOT NULL,
`content` VARCHAR(150) NOT NULL,
`created_at`TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$result = mysqli_query($conn,$sql);

if($result )
{
echo "DONE messages";
}
?>