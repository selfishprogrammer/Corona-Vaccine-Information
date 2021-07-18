<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Get Notification</title>
</head>

<body>
    <?php

    $conn = mysqli_connect("localhost", "root", "", "covido");

    ?>
    <div class="col-md-6 offset-md-3">
        <div class="card-body bg-white border" style="margin-top:125px">
            <div class="container">

                <div class="my-4">
                    <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                        <div class="form-group">
                            <input type="number" name="pincode" placeholder="Pincode" style="font-family: monospace; "
                                id="" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <input type="number" name="phone" placeholder="Phone Number"
                                style="font-family: monospace; " id="" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email (Optional)"
                                style="font-family: monospace; " id="" class="form-control">
                        </div>


                        <div class="form-group">
                            <button type="submit" name="getnotified" class="btn btn-outline-success form-control">Get
                                Notified</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    <?php

    if (isset($_POST['getnotified'])) {
        $pincode = $_POST['pincode'];
        $email = $_POST['email'];

        $phone = $_POST['phone'];
        $verify = mysqli_query($conn, "select * from `users` where `pincode`='pincode' and `phone`='$phone' and `status`='1'");
        $nums = mysqli_num_rows($verify);
        if ($nums > 0) {

            echo '<div class="alert alert-danger" role="alert">
            You Have Already Requested To Us For Notification Wait Until The Slot Get Avalaible
            </div>';
        } else {
            $add_notification = mysqli_query($conn, "insert into `users` (`phone`,`pincode`,`email`,`status`) values ('$phone','$pincode','$email','1')");
            if ($add_notification) {
                header("location:vaccine-home.php?id=rewusdggcbhvbbcjudshybcasihjcjo");
            } else {
                echo '<div class="alert alert-primary" role="alert">
              Something Went Wrong
              </div>';
            }
        }
    }

    ?>

<?php  
$date=date("d-m-Y");
$dist = file_get_contents("https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByDistrict?district_id=$dist&date=$date");
$dist_data = json_decode($dist, true);
$verifpin = mysqli_query($conn, "select * from `users` where `status`='1'");
while($row=mysqli_fetch_assoc($verifpin)){}



?>
















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>