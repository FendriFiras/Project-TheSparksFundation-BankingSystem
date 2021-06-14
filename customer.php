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
                            <a class="nav-link active" href="about.html">View Customer</a>
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
                <h1 class="mt-4 mb-3"> View Costumer</h1>
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

                        <h1>Customer Details</h1>

                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Amount</th>
                                        <th colspan="2">operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                        </div>
                        <?php
                        include './db/connection.php';
                        $selectquery = " select * from banksystem";
                        $query = mysqli_query($con, $selectquery);
                        $numofrows = mysqli_num_rows($query);

                        while ($res = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $res['ID']; ?></td>
                                <td><?php echo $res['Name']; ?></td>
                                <td><?php echo $res['Email']; ?></td>
                                <td><?php echo $res['Amount']; ?></td>
                                <td><a href="transformMoney.php?idtransfer=<?php echo $res['ID']; ?>"><i class=" fa fa-user-circle large" aria-hidden="true" style="color:#04FB73;"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>


                        </tbody>
                        </table>



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