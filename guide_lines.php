<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Corona Panademic</title>
</head>
<?php include  'nav.php'; ?>

<body style="background-color:white">
    <div class="d-flex justify-content-center">
        <iframe src="https://covid-19.dataflowkit.com/assets/widget/c19-widget-dark.html" class="mt-3" frameborder="0" scrolling="no" width="500" height="280">
        </iframe>
    </div>
    <?php include 'world_wide.php'; ?>


    <div class="text-center py-3" style="font-size: 20px; font-family: math;"><b><i>Some Guidelines By Indian
                Goverment</i></b></div>

    <div class="main" style="overflow-x: auto;">
        <table class="table table-bordered">
            <thead>
                <tr style="background-color:blue; width:100%">
                    <th style="width:30%;">Serial No</th>
                    <th style="width:30%;">Title</th>
                    <th style="width:40%;">Link</th>



                </tr>
            </thead>
            <tbody>

                <?php
                $guidelines_of_indian_goverment = file_get_contents("https://api.rootnet.in/covid19-in/notifications");
                $data = json_decode($guidelines_of_indian_goverment, true);


                $guide_lines_code = 0;
                while ($guide_lines_code <= 134) {

                ?>
                    <tr style="background-color: white; width: 100%;">
                        <td style="width:40%;"><?php echo $guide_lines_code ?></td>
                        <td style="width:30%;"><?php echo $data['data']['notifications'][$guide_lines_code]['title'] ?>
                        </td>
                        <td style="width:30%;"><b><i><a target="_blank" class="nav-link" href="<?php echo $data['data']['notifications'][$guide_lines_code]['link'] ?>"><?php echo $data['data']['notifications'][$guide_lines_code]['link'] ?></a></i></b>
                        </td>

                    </tr>
                <?php
                    $guide_lines_code++;
                }

                ?>


            </tbody>
        </table>




        <iframe src="https://covid-19.dataflowkit.com/assets/widget/c19-top-widget-dark.html" width="100%" height="640" frameborder="0"></iframe>







    </div>


    <script>
        console.log("hi")
    </script>


    <?php include 'footer.php'; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>