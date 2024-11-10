<?php 

$sql = "CREATE TABLE IF NOT EXISTS `users`
(
`id` INT PRIMARY KEY AUTO_INCREMENT, 
`name` VARCHAR(150) NOT NULL,
`email` VARCHAR(150) NOT NULL,
`phone` VARCHAR(150) NOT NULL,
`password` VARCHAR(150) NOT NULL,
`role` ENUM('admin','user')  NOT NULL DEFAULT 'user' ,
`created_at`TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$result = mysqli_query($conn,$sql);

if($result )
{
echo "DONE users";
}

$password = password_hash("password",PASSWORD_ARGON2I);

$sql ="INSERT INTO `users` (`name`,`email`,`phone`,`password`,`role`) VALUES
('ahmed','ahmed@gmail.com','01011378184','123456','admin'),
('ali','ali@gmail.com','01011378184','123456','admin'),
('aya','aya@gmail.com','01011378184','123456','user'),
('amr','amr@gmail.com','01011378184','123456','user'),
('shahd','shahd@gmail.com','01011378184','123456','admin'),
('asmaa','asmaa@gmail.com','01011378184','123456','user')
";

mysqli_query($conn,$sql);