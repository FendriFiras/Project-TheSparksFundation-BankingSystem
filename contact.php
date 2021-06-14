<!DOCTYPE html>
<html lang="en">
<?php
include('./components/Head.php')
?>


<body>
    <div class="wrapper-main">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
            <div class="container">
                <h1>TSF</h1>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">View Customer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- full Title -->
        <div class="full-title">
            <div class="container">
                <!-- Page Heading/Breadcrumbs -->
                <h1 class="mt-4 mb-3"> Contact </h1>
                <div class="breadcrumb-main">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="contact-main">
            <div class="container">
                <!-- Content Row -->
                <div class="row">
                    <!-- Map Column -->
                    <div class="col-lg-8 mb-4 contact-left">
                        <h3>Send us a Message</h3>
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <input type="text" placeholder="Full Name" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <input type="tel" placeholder="Phone Number" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <input type="email" placeholder="Email Address" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <textarea rows="5" cols="100" placeholder="Message" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
                        </form>
                    </div>
                    <!-- Contact Details Column -->
                    <div class="col-lg-4 mb-4 contact-right">
                        <h3>Contact Details</h3>

                        <p>
                            <abbr title="Phone">P</abbr>: (216) 23 161 334
                        </p>
                        <p>
                            <abbr title="Email">E</abbr>:
                            <a href="mailto:name@example.com"> firas.fendri@enis.tn </a>
                        </p>

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>

        <!-- /.container -->
        <!--footer starts from here-->
        <?php
        include('./components/Footer.php')
        ?>
</body>

</html>