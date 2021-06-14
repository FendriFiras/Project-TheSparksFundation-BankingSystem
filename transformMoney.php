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
                            <a class="nav-link active" href="customer.php">View Customer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- full Title -->
        <div class="full-title">
            <div class="container">
                <!-- Page Heading/Breadcrumbs -->
                <h1 class="mt-4 mb-3"> Transform Money</h1>
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
                    <div class="col-lg-12 mb-4 contact-left">

                        <h1>Give Money From:</h1>

                        <form name="sentMessage" id="contactForm" novalidate method="POST">
                            <?php
                            include './db/connection.php';
                            $ids = $_GET['idtransfer'];
                            $showquery = "select * from `banksystem` where ID=($ids) ";
                            $showdata = mysqli_query($con, $showquery);
                            if (!$showdata) {
                                printf("Error: %s\n", mysqli_error($con));
                                exit();
                            }
                            $arrdata = mysqli_fetch_array($showdata);

                            ?>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name1" value="<?php echo $arrdata['Name']; ?>" required placeholder="Enter your name" />
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email1" value="<?php echo $arrdata['Email']; ?>" required placeholder="Enter email id" />
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Amount</label>
                                    <input type="text" class="form-control" name="amount1" value="" style="width:210px;" required placeholder="Enter amount" />
                                </div>
                            </div>

                            <br>
                            <h1>Send Money TO:</h1>
                            <br>

                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Name</label>
                                    <input type="text" name="name2" class="form-control" value="" required placeholder="Enter your name" />
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email2" value="" required placeholder="Enter email id" />
                                </div>
                            </div>


                            <!-- For success/fail messages -->
                            <button class="btn btn-primary" name="submit">Proceed to Pay</button>
                        </form>
                        <?php

                        include './db/connection.php';

                        if (isset($_POST['submit'])) {


                            $Sender_name = $_POST['name1'];
                            $Sender_email = $_POST['email1'];
                            $Sender = $_POST['amount1'];
                            $Receiver_name = $_POST['name2'];
                            $Receiver_email = $_POST['email2'];



                            $ids = $_GET['idtransfer'];
                            $senderquery = "select * from `banksystem` where ID=$ids ";
                            $senderdata = mysqli_query($con, $senderquery);

                            if (!$senderdata) {
                                printf("Error: %s\n", mysqli_error($con));
                                exit();
                            }
                            $arrdata = mysqli_fetch_array($senderdata);

                            //receiverquery
                            $receiverquery = "select * from `banksystem` where Email='$Receiver_email' ";
                            $receiver_data = mysqli_query($con, $receiverquery);

                            if (!$receiver_data) {
                                printf("Error: %s\n", mysqli_error($con));
                                exit();
                            }
                            $receiver_arr = mysqli_fetch_array($receiver_data);
                            $id_receiver = $receiver_arr['ID'];


                            if ($arrdata['Amount'] >= $Sender) {
                                $decrease_sender = $arrdata['Amount'] - $Sender;
                                $increase_receiver = $receiver_arr['Amount'] + $Sender;
                                $query = "UPDATE `banksystem` SET `ID`=$ids,`Amount`= $decrease_sender  where `ID`=$ids ";
                                $rec_query = "UPDATE`banksystem` SET `ID`=$id_receiver,`Amount`= $increase_receiver where  `ID`=$id_receiver ";
                                $res = mysqli_query($con, $query);
                                $rec_res = mysqli_query($con, $rec_query);
                                // $res_receiver=mysqli_query($con,$query_receiver);
                                if ($res && $rec_res) {
                        ?>
                                    <script>
                                        swal("Done!", "Transaction Successful!", "success");
                                    </script>

                                <?php

                                } else {
                                ?>
                                    <script>
                                        swal("Error!", "Error Occured!", "error");
                                    </script>

                                <?php

                                }
                            } else {
                                ?>
                                <script>
                                    swal("Insufficient Balance", "Transaction Not  Successful!", "warning");
                                </script>
                        <?php

                            }
                        }
                        ?>



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