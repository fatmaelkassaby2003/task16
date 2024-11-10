<?php
// Set title, content, and photo before including header.php
$title = 'POSTS';
$content = 'Problems look mighty small from 150 miles up';
$photo = 'post-bg.jpg';

require_once 'inc/header.php';
?>
        <!-- Page Header-->
        <?php require_once 'inc/baner.php'; ?>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                        <div class="post-preview">
                                <h2 class="post-title"><?= $post['title'] ?></h2>
                                <h3 class="post-subtitle"><?= $post['content'] ?></h3>
                            <p class="post-meta">
                                Posted by
                                <a href="#!">Start Bootstrap</a>
                                <?= $post['created_at'] ?>
                            </p>
                        </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <?php require_once 'inc/footer.php'; ?>