<?php
// Set title, content, and photo before including header.php
$title = 'Contact Me';
$content = 'Have questions? I have answers.';
$photo = 'contact-bg.jpg';

require_once 'inc/header.php';
?>
        <!-- Page Header-->
        <?php require_once 'inc/baner.php'; ?>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                        <div class="my-5">
                            <?php if(has_session('success')): ?>
                                <div class="alert alert-success" role="alert"><?php echo get_session('success'); ?></div>
                            <?php endif; ?>
                            <form action="<?php echo BASE_URL."index.php?page=send-message" ;?>" method="POST">
                                <div class="form-floating">
                                    <input class="form-control" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Name</label>
                                    <?php if(isset($_SESSION['errors']['name'])): ?>
                                <div class="alert alert-danger" role="alert"><?php echo $_SESSION['errors']['name']; ?></div>
                            <?php endif; ?>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" name="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                                    <label for="email">Email address</label>
                                    <?php if(isset($_SESSION['errors']['email'])): ?>
                                <div class="alert alert-danger" role="alert"><?php echo $_SESSION['errors']['email']; ?></div>
                            <?php endif; ?>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" name="phone" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" />
                                    <label for="phone">Phone Number</label>
                                    <?php if(isset($_SESSION['errors']['phone'])): ?>
                                <div class="alert alert-danger" role="alert"><?php echo $_SESSION['errors']['phone']; ?></div>
                            <?php endif; ?>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                                    <label for="message">Message</label>
                                    <?php if(isset($_SESSION['errors']['message'])): ?>
                                <div class="alert alert-danger" role="alert><?php echo $_SESSION['errors']['message']; ?></div>
                            <?php endif; ?>
                                </div>
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <?php unset_session('errors'); ?>
        <?php unset_session('success'); ?>
        <?php require_once 'inc/footer.php'; ?>
