<?php require_once ADMIN_PATH . 'views/inc/header.php'; ?>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary my-4">
                    <div class="card-header">
                        <h3 class="card-title">View Posts</h3>
                        
                    </div>
                    
                </div><h3><?php if(has_session('success')): ?>
                                <div class="alert alert-success" role="alert"><?php echo get_session('success'); ?></div>
                            <?php endif; ?></h3>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">View All Posts</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th style="width: 40px">Edit</th>
                                        <th style="width: 40px">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($posts as $post): ?>
                                    <tr>
                                        <td><?=$i++ ?></td>
                                        <td><?=$post['title'] ?></td>
                                        <td>
                                            <p><?=$post['content'] ?></p>
                                        </td>
                                        <td>
                                            <a href="<?php echo admin_url('page=edit-post&id=' . $post['id']); ?>" class="btn btn-primary btn-sm mr-3" type="button"><i class="fas fa-edit">EDIT</i></a>
                                        </td>
                                        <td>
                                            <a href="<?php echo admin_url('page=delete-post&id=' . $post['id']); ?>" class="btn btn-danger btn-sm mr-3" type="button"><i class="fas fa-edit">DELETE</i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
</div>
</div>
<?php unset_session('errors'); ?>
<?php unset_session('success'); ?>
<?php require_once ADMIN_PATH . 'views/inc/footer.php'; ?>