<?php
// Set title, content, and photo before including header.php
$title = 'Clean Blog';
$content = 'A Blog Theme by Start Bootstrap';
$photo = 'home-bg.jpg';

require_once 'inc/header.php';
?>
<!-- Page Header-->
        <?php require_once 'inc/baner.php'; ?>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <?php foreach($all_data as $post): ?>
                        <div class="post-preview">
                            <a href="<?php echo 'index.php?page=post&id='. $post['id']; ?>">
                                <h2 class="post-title"><?= $post['title'] ?></h2>
                                <h3 class="post-subtitle"><?= substr($post['content'],0,10) ?></h3>
                            </a>
                            <p class="post-meta">
                                Posted by
                                <a href="#!">Start Bootstrap</a>
                                <?= $post['created_at'] ?>
                            </p>
                        </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                    <?php endforeach; ?>
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <?php require_once 'inc/footer.php'; ?>