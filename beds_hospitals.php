<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Corona Panademic</title>
</head>
<?php include  'nav.php'; ?>

<body style="background-color:white">
    <div class="d-flex justify-content-center">
        <iframe src="https://covid-19.dataflowkit.com/assets/widget/c19-widget-dark.html" class="mt-3" frameborder="0"
            scrolling="no" width="500" height="280">
        </iframe>
    </div>
    <?php include 'world_wide.php'; ?>
    <?php
    $beds_and_hospitals = file_get_contents("https://api.rootnet.in/covid19-in/hospitals/beds");
    $data = json_decode($beds_and_hospitals, true);

    ?>
    <div class="container">
        <div class="col-md-6 offset-md-3">
            <div class="card-header text-center bg-success " id="beds_and_hospitals_top"
                style="font-size: 20px; cursor:alias ;  color:indigo; border-radius: 10px 10px 0px 0px; font-family: math;">
                <b><i class="fa fa-arrow-down" aria-hidden="true"></i>
                    &nbsp; Total Beds In India <i class="fa fa-arrow-down" aria-hidden="true"></i>
                    &nbsp;</b>
            </div>
            <div class="shadow-sm border" id="beds_and_hospitals"
                style="width: 100%; display: none; border-radius: 0px 0px 10px 10px;">
                <div class="d-flex justify-content-between">
                    <div class="mx-2 my-2" style="font-size: 20px; font-family: cursive;">Total Hospitals</div>
                    <div class="mx-2 my-2" style="font-size: 20px; font-family: cursive;">=></div>

                    <div class="mx-2 my-2" style="font-size: 20px; font-family: cursive;">
                        <b><?php echo $data['data']['summary']['totalHospitals'] ?></b>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="mx-2 my-2" style="font-size: 20px; font-family: cursive;">Total Beds</div>
                    <div class="mx-2 my-2" style="font-size: 20px; font-family: cursive;">=></div>

                    <div class="mx-2 my-2" style="font-size: 20px; font-family: cursive;">
                        <b><?php echo $data['data']['summary']['totalBeds'] ?></b>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="mx-2 my-2" style="font-size: 20px; font-family: cursive;">Rural Hospitals</div>
                    <div class="mx-2 my-2" style="font-size: 20px; font-family: cursive;">=></div>

                    <div class="mx-2 my-2" style="font-size: 20px; font-family: cursive;">
                        <b><?php echo $data['data']['summary']['ruralHospitals'] ?></b>
                    </div>


                </div>

                <div class="d-flex justify-content-between">

                    <div class="mx-2 my-2" style="font-size: 20px; font-family: cursive;">Beds In Rural Hospitals
                    </div>
                    <div class="mx-2 my-2" style="font-size: 20px; font-family: cursive;">=></div>

                    <div class="mx-2 my-2" style="font-size: 20px; font-family: cursive;">
                        <b><?php echo $data['data']['summary']['ruralBeds'] ?></b>
                    </div>

                </div>
                <div class="d-flex justify-content-between">
                    <div class="mx-2 my-2" style="font-size: 20px; font-family: cursive;">Urban Hospitals</div>
                    <div class="mx-2 my-2" style="font-size: 20px; font-family: cursive;">=></div>

                    <div class="mx-2 my-2" style="font-size: 20px; font-family: cursive;">
                        <b><?php echo $data['data']['summary']['urbanHospitals'] ?></b>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="mx-2 my-2" style="font-size: 20px; font-family: cursive;">Beds In Urban Hospitals
                    </div>
                    <div class="mx-2 my-2" style="font-size: 20px; font-family: cursive;">=></div>

                    <div class="mx-2 my-2" style="font-size: 20px; font-family: cursive;">
                        <b><?php echo $data['data']['summary']['urbanBeds'] ?></b>
                    </div>
                </div>

                <div class="card-footer bg-success" style="width: 100%; border-radius: 0px 0px 10px 10px;"></div>

            </div>
        </div>

        <div class="d-flex justify-content-between">
            <div>
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                    <button type="submit" name="beds" class="btn btn-warning form-control my-4">Beds & Hospital
                        State
                        Wise</button>
                </form>
            </div>
            <div>
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">

                    <button type="submit" name="medical" class="btn btn-success form-control my-4">Medical
                        College
                        State Wise</button>
                </form>
            </div>
        </div>
        <?php

        if (isset($_POST['beds'])) {


        ?>

        <div class="main" style="overflow-x: auto;">
            <table class="table table-bordered">
                <thead>
                    <tr style="background-color:black; width:100%">
                        <th style="width:30%; color:white;">Serial No</th>
                        <th style="width:30%; color:white;">State</th>
                        <th style="width:40%; color:white;">Total Hospitals</th>

                        <th style="width:40%; color:white;">Tital Beds</th>

                        <th style="width:40%; color:white;">Rural Hospitals</th>
                        <th style="width:40%; color:white;">Beds In Rural Hospitals</th>
                        <th style="width:40%; color:white;">Urban Hospitals</th>

                        <th style="width:40%; color:white;">Beds In Urban Hospitals</th>
                        <th style="width:40%; color:white;">Updated On</th>





                    </tr>
                </thead>
                <tbody>

                    <?php



                        $state_code = 0;
                        while ($state_code <= 36) {

                        ?>
                    <tr style="background-color: white;">
                        <td><?php echo $state_code ?></td>
                        <td><?php echo $data['data']['regional'][$state_code]['state'] ?>
                        </td>
                        <td><?php echo $data['data']['regional'][$state_code]['totalHospitals'] ?>
                        </td>
                        <td><?php echo $data['data']['regional'][$state_code]['totalBeds'] ?>
                        </td>
                        <td><?php echo $data['data']['regional'][$state_code]['ruralHospitals'] ?>
                        </td>
                        <td><?php echo $data['data']['regional'][$state_code]['ruralBeds'] ?>
                        </td>
                        <td><?php echo $data['data']['regional'][$state_code]['urbanHospitals'] ?>
                        </td>
                        <td><?php echo $data['data']['regional'][$state_code]['urbanBeds'] ?>
                        </td>
                        <td><?php echo $data['data']['regional'][$state_code]['asOn'] ?>
                        </td>
                    </tr>
                    <?php
                            $state_code++;
                        }

                        ?>


                </tbody>
            </table>


            <?php } ?>

            <?php

            if (isset($_POST['medical'])) {


            ?>

            <div class="main" style="overflow-x: auto;">
                <table class="table table-bordered">
                    <thead>
                        <tr style="background-color:black; width:100%">
                            <th style="width:30%; color:white;">Serial No</th>
                            <th style="width:30%; color:white;">State</th>
                            <th style="width:40%; color:white;">City</th>

                            <th style="width:40%; color:white;">Name Of COllege</th>

                            <th style="width:40%; color:white;">Ownership</th>
                            <th style="width:40%; color:white;">Hospital Capacity</th>
                            <th style="width:40%; color:white;">Beds Capacity</th>







                        </tr>
                    </thead>
                    <tbody>

                        <?php

                            $medical = file_get_contents("https://api.rootnet.in/covid19-in/hospitals/medical-colleges");
                            $data1 = json_decode($medical, true);

                            $medical_code = 0;
                            while ($medical_code <= 499) {

                            ?>
                        <tr style="background-color: white;">
                            <td><?php echo $medical_code ?></td>
                            <td><?php echo $data1['data']['medicalColleges'][$medical_code]['state'] ?>
                            </td>
                            <td><?php echo $data1['data']['medicalColleges'][$medical_code]['city'] ?>
                            </td>
                            <td><?php echo $data1['data']['medicalColleges'][$medical_code]['name'] ?>
                            </td>
                            <td><?php echo $data1['data']['medicalColleges'][$medical_code]['ownership'] ?>
                            </td>
                            <td><?php echo $data1['data']['medicalColleges'][$medical_code]['admissionCapacity'] ?>
                            </td>
                            <td><?php echo $data1['data']['medicalColleges'][$medical_code]['hospitalBeds'] ?>
                            </td>
                        </tr>
                        <?php
                                $medical_code++;
                            }

                            ?>


                    </tbody>
                </table>


                <?php } ?>

                <iframe src="https://covid-19.dataflowkit.com/assets/widget/c19-top-widget-dark.html" width="100%"
                    height="640" frameborder="0"></iframe>







            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
        console.log("hi")
        $(() => {
            $('#beds_and_hospitals_top').click(() => {


                $('#beds_and_hospitals').slideToggle("slow")
            })
        })
        </script>


        <?php include 'footer.php'; ?>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

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