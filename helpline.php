<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

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
    $helplines_no_state_wise_in_india = file_get_contents("https://api.rootnet.in/covid19-in/contacts");
    $data = json_decode($helplines_no_state_wise_in_india, true);
    ?>

    <div class="d-flex justify-content-center">
        <div class="shadow-sm bg-white my-3 border" style="width: 20rem; border-radius: 20px;">

            <div class="text-center pt-3" style="color:red; font-size:20px; font-family: math;"><i><b>INDIAN NATIONAL
                        HELPLINE</b></i></div>
            <hr>
            <div class="d-flex justify-content-between my-2">

                <div class="text-center py-1 pl-2" style="color:black; font-size:18px; font-family: math;">
                    <i><b>Toll-free
                            Number</b></i>
                </div>

                <a href="tel:<?php echo $data['data']['contacts']['primary']['number-tollfree'] ?>"
                    class="text-center py-1 pr-2" style="color:greenyellow; font-size:18px; font-family: math;">
                    <i><b>Call Free
                        </b></i>
                </a>
            </div>
            <div class="d-flex justify-content-between my-2">

                <div class="text-center py-1 pl-2" style="color:black; font-size:18px; font-family: math;">
                    <i><b>Phone
                            Number</b></i>
                </div>

                <a href="tel:<?php echo $data['data']['contacts']['primary']['number'] ?>" class="text-center py-1 pr-2"
                    style="color:gray; font-size:18px; font-family: math;">
                    <i><b>Call
                        </b></i>
                </a>
            </div>
            <div class="d-flex justify-content-between my-2">

                <div class="text-center py-1 pl-2" style="color:black; font-size:18px; font-family: math;">
                    <i><b>Email</b></i>
                </div>

                <a href="mailto:<?php echo $data['data']['contacts']['primary']['email'] ?>"
                    class="text-center py-1 pr-2" style="color:cyan; font-size:18px; font-family: math;">
                    <i><b>Go Check
                        </b></i>
                </a>
            </div>
            <div class="d-flex justify-content-between my-2">

                <div class="text-center py-1 pl-2" style="color:black; font-size:18px; font-family: math;">
                    <i><b>Twitter</b></i>
                </div>

                <a href="<?php echo $data['data']['contacts']['primary']['twitter'] ?>" class="text-center py-1 pr-2"
                    style="color:indigo; font-size:18px; font-family: math;">
                    <i><b>Go Check
                        </b></i>
                </a>
            </div>
            <div class="d-flex justify-content-between my-2">

                <div class="text-center py-1 pl-2" style="color:black; font-size:18px; font-family: math;">
                    <i><b>Facebook</b></i>
                </div>

                <a href="<?php echo $data['data']['contacts']['primary']['facebook'] ?>" class="text-center py-1 pr-2"
                    style="color:blue; font-size:18px; font-family: math;">
                    <i><b>Go Check
                        </b></i>
                </a>
            </div>
            <div class="d-flex justify-content-between my-2">

                <div class="text-center py-1 pl-2" style="color:black; font-size:18px; font-family: math;">
                    <i><b>Media Source</b></i>
                </div>

                <a href="<?php echo $data['data']['contacts']['primary']['media'][0] ?>" class="text-center py-1 pr-2"
                    style="color:green; font-size:18px; font-family: math;">
                    <i><b>Go Check
                        </b></i>
                </a>
            </div>


            <div class="d-flex justify-content-center">
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                    <button type="submit" name="submit" style="width: 15rem;"
                        class="form-control btn btn-outline-info my-3">Check State
                        Wise</button>
                </form>
            </div>


        </div>
    </div>
    <hr>

    <?php
    if (isset($_POST['submit'])) {



    ?>
    <div class="main" style="overflow-x: auto;">


        <table class="table table-bordered">
            <thead>
                <tr style="background-color:red;">
                    <th scope="col">Serial No</th>
                    <th scope="col">State Name</th>
                    <th scope="col">Contact No</th>



                </tr>
            </thead>
            <tbody>





                <?php
                    $help_code = 0;
                    while ($help_code <= 36) {



                    ?>
                <tr style="background-color: white;">
                    <td><?php echo $help_code ?></td>
                    <td><?php echo $data['data']['contacts']['regional'][$help_code]['loc'] ?>
                    </td>
                    <td><b><i><a href="tel:<?php echo $data['data']['contacts']['regional'][$help_code]['number'] ?>"
                                    class="nav-link"
                                    style="color:black"><?php echo $data['data']['contacts']['regional'][$help_code]['number'] ?>
                                </a></i></b></td>

                </tr>

                <?php

                        $help_code++;
                    }
                }


                ?>





    </div>


















    <script>
    console.log("hi")
    </script>


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