<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Details || Vaccine</title>
</head>

<body>
    <?php
    $datest = date("d-m-Y");
    $date = date("d F");





    $datest2 = date("d-m-Y", strtotime($date . ' + 2 Days'));

    $datest3 = date("d-m-Y", strtotime($date . ' + 3 Days'));

    $datest4 = date("d-m-Y", strtotime($date . ' + 4 Days'));

    $datest5 = date("d-m-Y", strtotime($date . ' + 5 Days'));

    $datest6 = date("d-m-Y", strtotime($date . ' + 6 Days'));

    $datest1 = date("d-m-Y", strtotime($date . ' + 1 Days'));


    $dates = date("l");





    $dates2 = date("l", strtotime($dates . ' + 2 Days'));
    $dates3 = date("l", strtotime($dates . ' + 3 Days'));
    $dates4 = date("l", strtotime($dates . ' + 4 Days'));
    $dates5 = date("l", strtotime($dates . ' + 5 Days'));

    $dates6 = date("l", strtotime($dates . ' + 6 Days'));

    $dates1 = date("l", strtotime($dates . ' + 1 Days'));
    ?>

    <!-- <?php
            $id = $_GET['id'];
            $dist = file_get_contents("https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/calendarByCenter?center_id=$id&date=$date");
            $dist_data = json_decode($dist, true);
            echo "<pre>";
            print_r($dist_data['centers']);
            echo "</pre>";
            ?> -->
    <div class="container">



        <div class="shadow-sm card-header bg-white" style="overflow-x: auto;border-radius:20px;">
            <div class="d-flex justify-content-between">
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                    <input type="hidden" name="datest_name" value="<?php echo $datest ?>">
                    <button type="submit" name="datest" class="btn btn-outline-default border mx-2"
                        style="width:18rem;"><b><?php echo $datest ?></b>&nbsp;<?php echo $dates ?></button>
                </form>
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                    <input type="hidden" name="datest1_name" value="<?php echo $datest1 ?>">
                    <button type="submit" name="datest1" class="btn btn-outline-default border mx-2"
                        style="width:18rem;"><b><?php echo $datest1 ?></b>&nbsp;<?php echo $dates1 ?></button>
                </form>
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                    <input type="hidden" name="datest2_name" value="<?php echo $datest2 ?>">

                    <button type="submit" name="datest2" class="btn btn-outline-default border mx-2"
                        style="width:18rem;"><b><?php echo $datest2 ?></b>&nbsp;<?php echo $dates2 ?></button>
                </form>
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                    <input type="hidden" name="datest3_name" value="<?php echo $datest3 ?>">

                    <button type="submit" name="datest3" class="btn btn-outline-default border mx-2"
                        style="width:18rem;"><b><?php echo $datest3 ?></b>&nbsp;<?php echo $dates3 ?></button>
                </form>
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                    <input type="hidden" name="datest4_name" value="<?php echo $datest4 ?>">

                    <button type="submit" name="datest4" class="btn btn-outline-default border mx-2"
                        style="width:18rem;"><b><?php echo $datest4 ?></b>&nbsp;<?php echo $dates4 ?></button>
                </form>
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                    <input type="hidden" name="datest5_name" value="<?php echo $datest5 ?>">

                    <button type="submit" name="datest5" class="btn btn-outline-default border mx-2"
                        style="width:18rem;"><b><?php echo $datest5 ?></b>&nbsp;<?php echo $dates5 ?></button>
                </form>
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                    <input type="hidden" name="datest6_name" value="<?php echo $datest6 ?>">

                    <button type="submit" name="datest6" class="btn btn-outline-default border mx-2"
                        style="width:18rem;"><b><?php echo $datest6 ?></b>&nbsp;<?php echo $dates6 ?></button>
                </form>
            </div>

        </div>

        <?php

        if (isset($_POST['datest'])) {
            $date_given = $_POST['datest_name'];
            $id = $_GET['id'];
            $dist = file_get_contents("https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/calendarByCenter?center_id=$id&date=$date_given");
            $dist_data = json_decode($dist, true);



        ?>
        <div class="shadow-sm bg-white my-4" style="border-radius:20px;">
            <div class="card-header bg-white text-center"
                style="border-radius:20px 20px 0px 0px; font-size:20px; font-family: math;">
                <b><?php echo      $dist_data['centers']['name']  ?></b>
            </div>


            <div class="my-4">

                <div class="container">

                    <div class="d-flex justify-content-between">
                        <div class="text-center" style="font-size: 20px; font-family:monospace;"><b>Center
                                Address</b></div>
                        <div class="text-center" style="font-size: 16px; font-family:monospace; color:grey;">
                            <b><?php echo      $dist_data['centers']['address']  ?>,<?php echo      $dist_data['centers']['state_name']  ?>,<?php echo      $dist_data['centers']['district_name']  ?>,<?php echo      $dist_data['centers']['pincode']  ?></b>
                        </div>

                    </div>

                    <div class="mt-2"><b>Distriution Time:_</b></div>
                    <div class="col-md-6 offset-md-3">
                        <div class="d-flex justify-content-between">
                            <div class="" style="font-size: 20px; font-family:monospace;"><b>
                                    <button class="btn btn-info form-control  my-4 form-control"
                                        disabled><?php echo      $dist_data['centers']['from']  ?></button></b></div>
                            <div class="my-4"><b>--</b></div>
                            <div class="" style="font-size: 16px; font-family:monospace; color:grey;">
                                <b><button class="btn btn-info form-control  my-4 form-control"
                                        disabled><?php echo      $dist_data['centers']['to']  ?></button></b>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button style="width:18rem;" class="btn btn-primary  my-2 form-control"
                            disabled><?php echo      $dist_data['centers']['sessions'][0]['vaccine']  ?></button>


                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn-default border my-3 form-control" id="slots"
                            style="width: 20rem;"><?php echo $datest ?>
                            Avalible
                            Slots</button>
                    </div>

                    <div class="col-md-6 offset-md-3 pb-2" id="slots_body" style="display: none;">

                        <div class="shadow-sm bg-white" style="border-radius:10px;">
                            <div class="container">
                                <div class="d-flex justify-content-between">

                                    <div class=""><b>
                                            <button style="border-radius:15px;"
                                                class="btn btn-success form-control  my-4 form-control">For
                                                <?php echo      $dist_data['centers']['sessions'][0]['min_age_limit']  ?></button></b>
                                    </div>
                                    <div><b><button style="border-radius:15px;"
                                                class="btn btn-danger form-control  my-4 form-control"><?php echo      $dist_data['centers']['fee_type']  ?>
                                            </button></b></b></div>
                                    <div class="">
                                        <b><button style="border-radius:15px;"
                                                class="btn btn-warning form-control  my-4 form-control"><?php echo      $dist_data['centers']['sessions'][0]['available_capacity']  ?>
                                                Slot</button></b>
                                    </div>
                                </div>
                                <hr>

                                <div class="mx-4 my-2"><b>TOTAL SLOTS TIMING</b></div>
                                <?php
                                    $slots = 0;
                                    while ($slots <= count($dist_data['centers']['sessions'][0]['slots']) - 1) {

                                    ?>

                                <button
                                    class="btn btn-outline-warning form-control  my-2 form-control"><?php echo  $dist_data['centers']['sessions'][0]['slots'][$slots] ?>
                                </button>

                                <?php
                                        $slots++;
                                    }

                                    ?>

                            </div>


                        </div>


                    </div>



                </div>
            </div>
        </div>



        <?php
        } else if (isset($_POST['datest1'])) {
            $date_given = $_POST['datest1_name'];
            $id = $_GET['id'];
            $dist = file_get_contents("https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/calendarByCenter?center_id=$id&date=$date_given");
            $dist_data = json_decode($dist, true);



        ?>
        <div class="shadow-sm bg-white my-4" style="border-radius:20px;">
            <div class="card-header bg-white text-center"
                style="border-radius:20px 20px 0px 0px; font-size:20px; font-family: math;">
                <b><?php echo      $dist_data['centers']['name']  ?></b>
            </div>


            <div class="my-4">

                <div class="container">

                    <div class="d-flex justify-content-between">
                        <div class="text-center" style="font-size: 20px; font-family:monospace;"><b>Center
                                Address</b></div>
                        <div class="text-center" style="font-size: 16px; font-family:monospace; color:grey;">
                            <b><?php echo      $dist_data['centers']['address']  ?>,<?php echo      $dist_data['centers']['state_name']  ?>,<?php echo      $dist_data['centers']['district_name']  ?>,<?php echo      $dist_data['centers']['pincode']  ?></b>
                        </div>

                    </div>

                    <div class="mt-2"><b>Distriution Time:_</b></div>
                    <div class="col-md-6 offset-md-3">
                        <div class="d-flex justify-content-between">
                            <div class="" style="font-size: 20px; font-family:monospace;"><b>
                                    <button class="btn btn-info form-control  my-4 form-control"
                                        disabled><?php echo      $dist_data['centers']['from']  ?></button></b></div>
                            <div class="my-4"><b>--</b></div>
                            <div class="" style="font-size: 16px; font-family:monospace; color:grey;">
                                <b><button class="btn btn-info form-control  my-4 form-control"
                                        disabled><?php echo      $dist_data['centers']['to']  ?></button></b>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button style="width:18rem;" class="btn btn-primary  my-2 form-control"
                            disabled><?php echo      $dist_data['centers']['sessions'][0]['vaccine']  ?></button>


                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn-default border my-3 form-control" id="slots"
                            style="width: 20rem;"><?php echo $datest1 ?>
                            Avalible
                            Slots</button>
                    </div>

                    <div class="col-md-6 offset-md-3 pb-2" id="slots_body" style="display: none;">

                        <div class="shadow-sm bg-white" style="border-radius:10px;">
                            <div class="container">
                                <div class="d-flex justify-content-between">

                                    <div class=""><b>
                                            <button style="border-radius:15px;"
                                                class="btn btn-success form-control  my-4 form-control">For
                                                <?php echo      $dist_data['centers']['sessions'][0]['min_age_limit']  ?></button></b>
                                    </div>
                                    <div><b><button style="border-radius:15px;"
                                                class="btn btn-danger form-control  my-4 form-control"><?php echo      $dist_data['centers']['fee_type']  ?>
                                            </button></b></b></div>
                                    <div class="">
                                        <b><button style="border-radius:15px;"
                                                class="btn btn-warning form-control  my-4 form-control"><?php echo      $dist_data['centers']['sessions'][0]['available_capacity']  ?>
                                                Slot</button></b>
                                    </div>
                                </div>
                                <hr>

                                <div class="mx-4 my-2"><b>TOTAL SLOTS TIMING</b></div>
                                <?php
                                    $slots = 0;
                                    while ($slots <= count($dist_data['centers']['sessions'][0]['slots']) - 1) {

                                    ?>

                                <button
                                    class="btn btn-outline-warning form-control  my-2 form-control"><?php echo  $dist_data['centers']['sessions'][0]['slots'][$slots] ?>
                                </button>

                                <?php
                                        $slots++;
                                    }

                                    ?>

                            </div>


                        </div>


                    </div>



                </div>
            </div>
        </div>



        <?php
        } else if (isset($_POST['datest2'])) {
            $date_given = $_POST['datest2_name'];
            $id = $_GET['id'];
            $dist = file_get_contents("https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/calendarByCenter?center_id=$id&date=$date_given");
            $dist_data = json_decode($dist, true);



        ?>
        <div class="shadow-sm bg-white my-4" style="border-radius:20px;">
            <div class="card-header bg-white text-center"
                style="border-radius:20px 20px 0px 0px; font-size:20px; font-family: math;">
                <b><?php echo      $dist_data['centers']['name']  ?></b>
            </div>


            <div class="my-4">

                <div class="container">

                    <div class="d-flex justify-content-between">
                        <div class="text-center" style="font-size: 20px; font-family:monospace;"><b>Center
                                Address</b></div>
                        <div class="text-center" style="font-size: 16px; font-family:monospace; color:grey;">
                            <b><?php echo      $dist_data['centers']['address']  ?>,<?php echo      $dist_data['centers']['state_name']  ?>,<?php echo      $dist_data['centers']['district_name']  ?>,<?php echo      $dist_data['centers']['pincode']  ?></b>
                        </div>

                    </div>

                    <div class="mt-2"><b>Distriution Time:_</b></div>
                    <div class="col-md-6 offset-md-3">
                        <div class="d-flex justify-content-between">
                            <div class="" style="font-size: 20px; font-family:monospace;"><b>
                                    <button class="btn btn-info form-control  my-4 form-control"
                                        disabled><?php echo      $dist_data['centers']['from']  ?></button></b></div>
                            <div class="my-4"><b>--</b></div>
                            <div class="" style="font-size: 16px; font-family:monospace; color:grey;">
                                <b><button class="btn btn-info form-control  my-4 form-control"
                                        disabled><?php echo      $dist_data['centers']['to']  ?></button></b>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button style="width:18rem;" class="btn btn-primary  my-2 form-control"
                            disabled><?php echo      $dist_data['centers']['sessions'][0]['vaccine']  ?></button>


                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn-default border my-3 form-control" id="slots"
                            style="width: 20rem;"><?php echo $datest2 ?>
                            Avalible
                            Slots</button>
                    </div>

                    <div class="col-md-6 offset-md-3 pb-2" id="slots_body" style="display: none;">

                        <div class="shadow-sm bg-white" style="border-radius:10px;">
                            <div class="container">
                                <div class="d-flex justify-content-between">

                                    <div class=""><b>
                                            <button style="border-radius:15px;"
                                                class="btn btn-success form-control  my-4 form-control">For
                                                <?php echo      $dist_data['centers']['sessions'][0]['min_age_limit']  ?></button></b>
                                    </div>
                                    <div><b><button style="border-radius:15px;"
                                                class="btn btn-danger form-control  my-4 form-control"><?php echo      $dist_data['centers']['fee_type']  ?>
                                            </button></b></b></div>
                                    <div class="">
                                        <b><button style="border-radius:15px;"
                                                class="btn btn-warning form-control  my-4 form-control"><?php echo      $dist_data['centers']['sessions'][0]['available_capacity']  ?>
                                                Slot</button></b>
                                    </div>
                                </div>
                                <hr>

                                <div class="mx-4 my-2"><b>TOTAL SLOTS TIMING</b></div>
                                <?php
                                    $slots = 0;
                                    while ($slots <= count($dist_data['centers']['sessions'][0]['slots']) - 1) {

                                    ?>

                                <button
                                    class="btn btn-outline-warning form-control  my-2 form-control"><?php echo  $dist_data['centers']['sessions'][0]['slots'][$slots] ?>
                                </button>

                                <?php
                                        $slots++;
                                    }

                                    ?>

                            </div>


                        </div>


                    </div>



                </div>
            </div>
        </div>



        <?php

        } else if (isset($_POST['datest3'])) {
            $date_given = $_POST['datest3_name'];
            $id = $_GET['id'];
            $dist = file_get_contents("https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/calendarByCenter?center_id=$id&date=$date_given");
            $dist_data = json_decode($dist, true);



        ?>
        <div class="shadow-sm bg-white my-4" style="border-radius:20px;">
            <div class="card-header bg-white text-center"
                style="border-radius:20px 20px 0px 0px; font-size:20px; font-family: math;">
                <b><?php echo      $dist_data['centers']['name']  ?></b>
            </div>


            <div class="my-4">

                <div class="container">

                    <div class="d-flex justify-content-between">
                        <div class="text-center" style="font-size: 20px; font-family:monospace;"><b>Center
                                Address</b></div>
                        <div class="text-center" style="font-size: 16px; font-family:monospace; color:grey;">
                            <b><?php echo      $dist_data['centers']['address']  ?>,<?php echo      $dist_data['centers']['state_name']  ?>,<?php echo      $dist_data['centers']['district_name']  ?>,<?php echo      $dist_data['centers']['pincode']  ?></b>
                        </div>

                    </div>

                    <div class="mt-2"><b>Distriution Time:_</b></div>
                    <div class="col-md-6 offset-md-3">
                        <div class="d-flex justify-content-between">
                            <div class="" style="font-size: 20px; font-family:monospace;"><b>
                                    <button class="btn btn-info form-control  my-4 form-control"
                                        disabled><?php echo      $dist_data['centers']['from']  ?></button></b></div>
                            <div class="my-4"><b>--</b></div>
                            <div class="" style="font-size: 16px; font-family:monospace; color:grey;">
                                <b><button class="btn btn-info form-control  my-4 form-control"
                                        disabled><?php echo      $dist_data['centers']['to']  ?></button></b>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button style="width:18rem;" class="btn btn-primary  my-2 form-control"
                            disabled><?php echo      $dist_data['centers']['sessions'][0]['vaccine']  ?></button>


                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn-default border my-3 form-control" id="slots"
                            style="width: 20rem;"><?php echo $datest3 ?>
                            Avalible
                            Slots</button>
                    </div>

                    <div class="col-md-6 offset-md-3 pb-2" id="slots_body" style="display: none;">

                        <div class="shadow-sm bg-white" style="border-radius:10px;">
                            <div class="container">
                                <div class="d-flex justify-content-between">

                                    <div class=""><b>
                                            <button style="border-radius:15px;"
                                                class="btn btn-success form-control  my-4 form-control">For
                                                <?php echo      $dist_data['centers']['sessions'][0]['min_age_limit']  ?></button></b>
                                    </div>
                                    <div><b><button style="border-radius:15px;"
                                                class="btn btn-danger form-control  my-4 form-control"><?php echo      $dist_data['centers']['fee_type']  ?>
                                            </button></b></b></div>
                                    <div class="">
                                        <b><button style="border-radius:15px;"
                                                class="btn btn-warning form-control  my-4 form-control"><?php echo      $dist_data['centers']['sessions'][0]['available_capacity']  ?>
                                                Slot</button></b>
                                    </div>
                                </div>
                                <hr>

                                <div class="mx-4 my-2"><b>TOTAL SLOTS TIMING</b></div>
                                <?php
                                    $slots = 0;
                                    while ($slots <= count($dist_data['centers']['sessions'][0]['slots']) - 1) {

                                    ?>

                                <button
                                    class="btn btn-outline-warning form-control  my-2 form-control"><?php echo  $dist_data['centers']['sessions'][0]['slots'][$slots] ?>
                                </button>

                                <?php
                                        $slots++;
                                    }

                                    ?>

                            </div>


                        </div>


                    </div>



                </div>
            </div>
        </div>



        <?php
        }

        if (isset($_POST['datest44'])) {
            $date_given = $_POST['datest4_name'];
            $id = $_GET['id'];
            $dist = file_get_contents("https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/calendarByCenter?center_id=$id&date=$date_given");
            $dist_data = json_decode($dist, true);



        ?>
        <div class="shadow-sm bg-white my-4" style="border-radius:20px;">
            <div class="card-header bg-white text-center"
                style="border-radius:20px 20px 0px 0px; font-size:20px; font-family: math;">
                <b><?php echo      $dist_data['centers']['name']  ?></b>
            </div>


            <div class="my-4">

                <div class="container">

                    <div class="d-flex justify-content-between">
                        <div class="text-center" style="font-size: 20px; font-family:monospace;"><b>Center
                                Address</b></div>
                        <div class="text-center" style="font-size: 16px; font-family:monospace; color:grey;">
                            <b><?php echo      $dist_data['centers']['address']  ?>,<?php echo      $dist_data['centers']['state_name']  ?>,<?php echo      $dist_data['centers']['district_name']  ?>,<?php echo      $dist_data['centers']['pincode']  ?></b>
                        </div>

                    </div>

                    <div class="mt-2"><b>Distriution Time:_</b></div>
                    <div class="col-md-6 offset-md-3">
                        <div class="d-flex justify-content-between">
                            <div class="" style="font-size: 20px; font-family:monospace;"><b>
                                    <button class="btn btn-info form-control  my-4 form-control"
                                        disabled><?php echo      $dist_data['centers']['from']  ?></button></b></div>
                            <div class="my-4"><b>--</b></div>
                            <div class="" style="font-size: 16px; font-family:monospace; color:grey;">
                                <b><button class="btn btn-info form-control  my-4 form-control"
                                        disabled><?php echo      $dist_data['centers']['to']  ?></button></b>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button style="width:18rem;" class="btn btn-primary  my-2 form-control"
                            disabled><?php echo      $dist_data['centers']['sessions'][0]['vaccine']  ?></button>


                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn-default border my-3 form-control" id="slots"
                            style="width: 20rem;"><?php echo $datest4 ?>
                            Avalible
                            Slots</button>
                    </div>

                    <div class="col-md-6 offset-md-3 pb-2" id="slots_body" style="display: none;">

                        <div class="shadow-sm bg-white" style="border-radius:10px;">
                            <div class="container">
                                <div class="d-flex justify-content-between">

                                    <div class=""><b>
                                            <button style="border-radius:15px;"
                                                class="btn btn-success form-control  my-4 form-control">For
                                                <?php echo      $dist_data['centers']['sessions'][0]['min_age_limit']  ?></button></b>
                                    </div>
                                    <div><b><button style="border-radius:15px;"
                                                class="btn btn-danger form-control  my-4 form-control"><?php echo      $dist_data['centers']['fee_type']  ?>
                                            </button></b></b></div>
                                    <div class="">
                                        <b><button style="border-radius:15px;"
                                                class="btn btn-warning form-control  my-4 form-control"><?php echo      $dist_data['centers']['sessions'][0]['available_capacity']  ?>
                                                Slot</button></b>
                                    </div>
                                </div>
                                <hr>

                                <div class="mx-4 my-2"><b>TOTAL SLOTS TIMING</b></div>
                                <?php
                                    $slots = 0;
                                    while ($slots <= count($dist_data['centers']['sessions'][0]['slots']) - 1) {

                                    ?>

                                <button
                                    class="btn btn-outline-warning form-control  my-2 form-control"><?php echo  $dist_data['centers']['sessions'][0]['slots'][$slots] ?>
                                </button>

                                <?php
                                        $slots++;
                                    }

                                    ?>

                            </div>


                        </div>


                    </div>



                </div>
            </div>
        </div>



        <?php
        } else if (isset($_POST['datest5'])) {
            $date_given = $_POST['datest5_name'];
            $id = $_GET['id'];
            $dist = file_get_contents("https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/calendarByCenter?center_id=$id&date=$date_given");
            $dist_data = json_decode($dist, true);



        ?>
        <div class="shadow-sm bg-white my-4" style="border-radius:20px;">
            <div class="card-header bg-white text-center"
                style="border-radius:20px 20px 0px 0px; font-size:20px; font-family: math;">
                <b><?php echo      $dist_data['centers']['name']  ?></b>
            </div>


            <div class="my-4">

                <div class="container">

                    <div class="d-flex justify-content-between">
                        <div class="text-center" style="font-size: 20px; font-family:monospace;"><b>Center
                                Address</b></div>
                        <div class="text-center" style="font-size: 16px; font-family:monospace; color:grey;">
                            <b><?php echo      $dist_data['centers']['address']  ?>,<?php echo      $dist_data['centers']['state_name']  ?>,<?php echo      $dist_data['centers']['district_name']  ?>,<?php echo      $dist_data['centers']['pincode']  ?></b>
                        </div>

                    </div>

                    <div class="mt-2"><b>Distriution Time:_</b></div>
                    <div class="col-md-6 offset-md-3">
                        <div class="d-flex justify-content-between">
                            <div class="" style="font-size: 20px; font-family:monospace;"><b>
                                    <button class="btn btn-info form-control  my-4 form-control"
                                        disabled><?php echo      $dist_data['centers']['from']  ?></button></b></div>
                            <div class="my-4"><b>--</b></div>
                            <div class="" style="font-size: 16px; font-family:monospace; color:grey;">
                                <b><button class="btn btn-info form-control  my-4 form-control"
                                        disabled><?php echo      $dist_data['centers']['to']  ?></button></b>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button style="width:18rem;" class="btn btn-primary  my-2 form-control"
                            disabled><?php echo      $dist_data['centers']['sessions'][0]['vaccine']  ?></button>


                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn-default border my-3 form-control" id="slots"
                            style="width: 20rem;"><?php echo $datest5 ?>
                            Avalible
                            Slots</button>
                    </div>

                    <div class="col-md-6 offset-md-3 pb-2" id="slots_body" style="display: none;">

                        <div class="shadow-sm bg-white" style="border-radius:10px;">
                            <div class="container">
                                <div class="d-flex justify-content-between">

                                    <div class=""><b>
                                            <button style="border-radius:15px;"
                                                class="btn btn-success form-control  my-4 form-control">For
                                                <?php echo      $dist_data['centers']['sessions'][0]['min_age_limit']  ?></button></b>
                                    </div>
                                    <div><b><button style="border-radius:15px;"
                                                class="btn btn-danger form-control  my-4 form-control"><?php echo      $dist_data['centers']['fee_type']  ?>
                                            </button></b></b></div>
                                    <div class="">
                                        <b><button style="border-radius:15px;"
                                                class="btn btn-warning form-control  my-4 form-control"><?php echo      $dist_data['centers']['sessions'][0]['available_capacity']  ?>
                                                Slot</button></b>
                                    </div>
                                </div>
                                <hr>

                                <div class="mx-4 my-2"><b>TOTAL SLOTS TIMING</b></div>
                                <?php
                                    $slots = 0;
                                    while ($slots <= count($dist_data['centers']['sessions'][0]['slots']) - 1) {

                                    ?>

                                <button
                                    class="btn btn-outline-warning form-control  my-2 form-control"><?php echo  $dist_data['centers']['sessions'][0]['slots'][$slots] ?>
                                </button>

                                <?php
                                        $slots++;
                                    }

                                    ?>

                            </div>


                        </div>


                    </div>



                </div>
            </div>
        </div>



        <?php
        } else if (isset($_POST['datest6'])) {
            $date_given = $_POST['datest6_name'];
            $id = $_GET['id'];
            $dist = file_get_contents("https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/calendarByCenter?center_id=$id&date=$date_given");
            $dist_data = json_decode($dist, true);



        ?>
        <div class="shadow-sm bg-white my-4" style="border-radius:20px;">
            <div class="card-header bg-white text-center"
                style="border-radius:20px 20px 0px 0px; font-size:20px; font-family: math;">
                <b><?php echo      $dist_data['centers']['name']  ?></b>
            </div>


            <div class="my-4">

                <div class="container">

                    <div class="d-flex justify-content-between">
                        <div class="text-center" style="font-size: 20px; font-family:monospace;"><b>Center
                                Address</b></div>
                        <div class="text-center" style="font-size: 16px; font-family:monospace; color:grey;">
                            <b><?php echo      $dist_data['centers']['address']  ?>,<?php echo      $dist_data['centers']['state_name']  ?>,<?php echo      $dist_data['centers']['district_name']  ?>,<?php echo      $dist_data['centers']['pincode']  ?></b>
                        </div>

                    </div>

                    <div class="mt-2"><b>Distriution Time:_</b></div>
                    <div class="col-md-6 offset-md-3">
                        <div class="d-flex justify-content-between">
                            <div class="" style="font-size: 20px; font-family:monospace;"><b>
                                    <button class="btn btn-info form-control  my-4 form-control"
                                        disabled><?php echo      $dist_data['centers']['from']  ?></button></b></div>
                            <div class="my-4"><b>--</b></div>
                            <div class="" style="font-size: 16px; font-family:monospace; color:grey;">
                                <b><button class="btn btn-info form-control  my-4 form-control"
                                        disabled><?php echo      $dist_data['centers']['to']  ?></button></b>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button style="width:18rem;" class="btn btn-primary  my-2 form-control"
                            disabled><?php echo      $dist_data['centers']['sessions'][0]['vaccine']  ?></button>


                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn-default border my-3 form-control" id="slots"
                            style="width: 20rem;"><?php echo $datest6 ?>
                            Avalible
                            Slots</button>
                    </div>

                    <div class="col-md-6 offset-md-3 pb-2" id="slots_body" style="display: none;">

                        <div class="shadow-sm bg-white" style="border-radius:10px;">
                            <div class="container">
                                <div class="d-flex justify-content-between">

                                    <div class=""><b>
                                            <button style="border-radius:15px;"
                                                class="btn btn-success form-control  my-4 form-control">For
                                                <?php echo      $dist_data['centers']['sessions'][0]['min_age_limit']  ?></button></b>
                                    </div>
                                    <div><b><button style="border-radius:15px;"
                                                class="btn btn-danger form-control  my-4 form-control"><?php echo      $dist_data['centers']['fee_type']  ?>
                                            </button></b></b></div>
                                    <div class="">
                                        <b><button style="border-radius:15px;"
                                                class="btn btn-warning form-control  my-4 form-control"><?php echo      $dist_data['centers']['sessions'][0]['available_capacity']  ?>
                                                Slot</button></b>
                                    </div>
                                </div>
                                <hr>

                                <div class="mx-4 my-2"><b>TOTAL SLOTS TIMING</b></div>
                                <?php
                                    $slots = 0;
                                    while ($slots <= count($dist_data['centers']['sessions'][0]['slots']) - 1) {

                                    ?>

                                <button
                                    class="btn btn-outline-warning form-control  my-2 form-control"><?php echo  $dist_data['centers']['sessions'][0]['slots'][$slots] ?>
                                </button>

                                <?php
                                        $slots++;
                                    }

                                    ?>

                            </div>


                        </div>


                    </div>



                </div>
            </div>
        </div>



        <?php
        }

        ?>
        <!-- <div class="shadow-sm bg-white my-4" style="border-radius:20px;">
            <div class="card-header bg-white text-center"
                style="border-radius:20px 20px 0px 0px; font-size:20px; font-family: math;"><b>Banarhat
                    Goverment Hospital</b></div>


            <div class="my-4">

                <div class="container">

                    <div class="d-flex justify-content-between">
                        <div class="text-center" style="font-size: 20px; font-family:monospace;"><b>Center
                                Address</b></div>
                        <div class="text-center" style="font-size: 16px; font-family:monospace; color:grey;">
                            <b>Banarhat jalpaiguri
                                Hospital Jalpaiguri Dhupgyri</b>
                        </div>

                    </div>

                    <div class="mt-2"><b>Distriution Time:_</b></div>
                    <div class="col-md-6 offset-md-3">
                        <div class="d-flex justify-content-between">
                            <div class="" style="font-size: 20px; font-family:monospace;"><b>
                                    <button class="btn btn-info form-control  my-4 form-control"
                                        disabled>10:00:00</button></b></div>
                            <div class="my-4"><b>--</b></div>
                            <div class="" style="font-size: 16px; font-family:monospace; color:grey;">
                                <b><button class="btn btn-info form-control  my-4 form-control"
                                        disabled>10:00:00</button></b>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button style="width:18rem;" class="btn btn-primary  my-2 form-control"
                            disabled>COVISHEILD</button>


                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn-default border my-3 form-control" id="slots" style="width: 20rem;">20-06-2021
                            Avalible
                            Slots</button>
                    </div>

                    <div class="col-md-6 offset-md-3 pb-2" id="slots_body" style="display: none;">

                        <div class="shadow-sm bg-white" style="border-radius:10px;">
                            <div class="container">
                                <div class="d-flex justify-content-between">

                                    <div class=""><b>
                                            <button style="border-radius:15px;"
                                                class="btn btn-success form-control  my-4 form-control">For
                                                45+</button></b></div>
                                    <div><b><button style="border-radius:15px;"
                                                class="btn btn-danger form-control  my-4 form-control">Free
                                            </button></b></b></div>
                                    <div class="">
                                        <b><button style="border-radius:15px;"
                                                class="btn btn-warning form-control  my-4 form-control">25
                                                Slot</button></b>
                                    </div>
                                </div>
                                <hr>

                                <div class="mx-4 my-2"><b>TOTAL SLOTS TIMING</b></div>
                                <button
                                    class="btn btn-outline-warning form-control  my-2 form-control">10:00:00-10:00:00
                                </button>
                            </div>


                        </div>


                    </div>



                </div>
            </div>
        </div> -->
        <!-- Optional JavaScript; choose one of the two! -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script>
        $(() => {
            $('#slots').on("click", () => {
                $("#slots_body").slideToggle("slow")
            })
        });
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