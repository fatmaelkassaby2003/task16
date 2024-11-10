<?php 

$sql = "CREATE TABLE IF NOT EXISTS `posts`
    (
    `id` INT PRIMARY KEY AUTO_INCREMENT, 
    `title` VARCHAR(150) NOT NULL,
    `content` TEXT NOT NULL,
    `created_at`TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

$result = mysqli_query($conn,$sql);

if($result )
{
    echo "DONE posts";
}

$sql ="INSERT INTO `posts`(`title`,`content`) VALUES 
('Post 1',
'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad recusandae 
ut rerum culpa, ducimus saepe dolorem ab voluptatem doloremque. Molestiae 
reiciendis dolorum praesentium laboriosam mollitia non explicabo saepe blanditiis iure!
'),
('Post 2',
'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad recusandae 
ut rerum culpa, ducimus saepe dolorem ab voluptatem doloremque. Molestiae 
reiciendis dolorum praesentium laboriosam mollitia non explicabo saepe blanditiis iure!
'),
('Post 3',
'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad recusandae 
ut rerum culpa, ducimus saepe dolorem ab voluptatem doloremque. Molestiae 
reiciendis dolorum praesentium laboriosam mollitia non explicabo saepe blanditiis iure!
'),
('Post 4',
'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad recusandae 
ut rerum culpa, ducimus saepe dolorem ab voluptatem doloremque. Molestiae 
reiciendis dolorum praesentium laboriosam mollitia non explicabo saepe blanditiis iure!
'),
('Post 5',
'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad recusandae 
ut rerum culpa, ducimus saepe dolorem ab voluptatem doloremque. Molestiae 
reiciendis dolorum praesentium laboriosam mollitia non explicabo saepe blanditiis iure!
')";

mysqli_query($conn,$sql);