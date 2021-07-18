<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet" <!--
        Bootstrap CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Results Of Vaccine</title>
</head>

<body>
    <?php include '../nav_3.php'  ?>
    <?php include 'nav_vaccine.php'  ?>
    <div class="container">
        <?php
        $state = file_get_contents("https://cdn-api.co-vin.in/api/v2/admin/location/states");
        $state_data = json_decode($state, true);








        ?>
        <div class="shadow-sm bg-white my-2 py-4 sticky-top" style="border-radius: 20px; width:100%">
            <div class="container">

                <form action="results_of_vaccine" method="post">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="state" class="form-control my-2" id="state"
                                    style="border-radius: 20px; font-family: monospace;">

                                    <option value="" selected>--Select State--</option>
                                    <?php
                                    $state1 = 0;
                                    while ($state1 <= count($state_data['states']) - 1) {
                                    ?>
                                    <option value="<?php echo $state_data['states'][$state1]['state_id'] ?>">
                                        <?php echo  $state_data['states'][$state1]['state_name']  ?></option>

                                    <?php
                                        $state1++;
                                    } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="dist" class="form-control my-2" id="dist"
                                    style="border-radius: 20px; font-family: monospace;">

                                    <option value="" selected>--Select District--</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" name="district_wise"
                                    class="btn btn-outline-info form-control my-2" style="border-radius: 20px;">Check
                                    Slot <i class="fa fa-map-marker" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="results_of_vaccine" method="post">
                    <div class="col-md-6 offset-md-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" value="<?php echo $_POST['pincode'] ?>"
                                        style="border-radius: 20px; font-family: monospace;" name="pincode"
                                        class="form-control" placeholder="Pincode"
                                        style="font-family: monospace; color:red" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" name="pin_wise"
                                        style="border-radius: 20px; font-family: monospace;"
                                        class="btn btn-outline-warning form-control">Check Pincode <i
                                            class="fa fa-map-marker" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <hr>

            <div class="mx-4 my-4" style="font-family: math; font-size: 22px;"><b>RESULTS FOR YOUR SEACRCH</b></div>
            <div class="container">
                <div class="" style="overflow-y: auto; height: 400px;">
                    <?php
                    if (isset($_POST['district_wise'])) {
                        $dist = $_POST['dist'];
                        $date = date("d-m-Y");
                        $data = 0;
                        $dist = file_get_contents("https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByDistrict?district_id=$dist&date=$date");
                        $dist_data = json_decode($dist, true);
                        while ($data <= count($dist_data['sessions']) - 1) {
                    ?>
                    <a href="details_page?id=<?php echo  $dist_data['sessions'][$data]['center_id']  ?>
                    " class="nav-link">
                        <div class="shadow-sm bg-white" style="width:100%; border-radius: 20px;">
                            <div class="d-flex" style="justify-content: space-between;">
                                <div class="p-3">
                                    <h6 style="color:black"><?php echo $dist_data['sessions'][$data]['name']  ?></h6>
                                    <small
                                        style="color:grey"><?php echo $dist_data['sessions'][$data]['address']  ?></small>
                                    <small
                                        style="color:grey"><?php echo $dist_data['sessions'][$data]['pincode']  ?></small>

                                </div>
                                <div class="p-3">
                                    <div class="pt-3 mx-1 pb-2" style="color:black">
                                        <?php echo $dist_data['sessions'][$data]['vaccine']  ?></div>
                                    <div><button class="btn btn-success"
                                            style="border-radius: 10px; width:6rem; "><b><?php echo $dist_data['sessions'][$data]['fee_type']  ?></b></button>
                                    </div>

                                </div>
                            </div>

                            <div class="text-center pb-3" style="color:red;">
                                <b><?php echo $dist_data['sessions'][$data]['available_capacity']  ?> slots</b>
                            </div>

                        </div>
                    </a>


                    <?php

                            $data++;
                        }
                    } else if (isset($_POST['pin_wise'])) {
                        $pincode = $_POST['pincode'];
                        $date = date("d-m-Y");
                        $data = 0;
                        $dist1 = file_get_contents("https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByPin?pincode=$pincode&date=$date");
                        $dist_data1 = json_decode($dist1, true);
                        while ($data <= count($dist_data1['sessions']) - 1) {
                        ?>
                    <a href="details_page?id=<?php echo $dist_data1['sessions'][$data]['center_id']  ?>
                    " class="nav-link">
                        <div class="shadow-sm bg-white" style="width:100%; border-radius: 20px;">
                            <div class="d-flex" style="justify-content: space-between;">
                                <div class="p-3">
                                    <h6 style="color:black"><?php echo $dist_data1['sessions'][$data]['name']  ?></h6>
                                    <small
                                        style="color:grey"><?php echo $dist_data1['sessions'][$data]['address']  ?></small>
                                    <small
                                        style="color:grey"><?php echo $dist_data1['sessions'][$data]['pincode']  ?></small>

                                </div>
                                <div class="p-3">
                                    <div class="pt-3 mx-1 pb-2" style="color:black">
                                        <?php echo $dist_data1['sessions'][$data]['vaccine']  ?></div>
                                    <div><button class="btn btn-success"
                                            style="border-radius: 10px; width:6rem; "><b><?php echo $dist_data1['sessions'][$data]['fee_type']  ?></b></button>
                                    </div>

                                </div>
                            </div>

                            <div class="text-center pb-3" style="color:red;">
                                <b><?php echo $dist_data1['sessions'][$data]['available_capacity']  ?> slots</b>
                            </div>

                        </div>
                    </a>


                    <?php

                            $data++;
                        }
                    }
                    ?>

                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
<script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>
<script>
$(document).ready(() => {
    console.log("Connected");

    $("#state").on('change', function() {
        var StateId = $(this).val();
        console.log("StateId")




        $.ajax({
            url: "service.php",
            method: "POST",
            data: {
                id: StateId
            },
            dataType: "html",
            success: (data) => {
                $('#dist').html(data)
                console.log(data)
            }
        })
    });
});
</script>