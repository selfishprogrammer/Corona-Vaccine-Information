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


<?php include 'nav.php' ?>
<?php include 'world_wide.php' ?>

<div class="main" style="overflow-x: auto;">

    <table class="table table-bordered">
        <thead>
            <tr style="background-color:cyan;">
                <th scope="col">Serial No</th>
                <th scope="col">Dist</th>
                <th scope="col">Total Confirmed</th>
                <th scope="col">Total Died</th>
                <th scope="col">Total Recovered</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $state_id = $_GET['state_id'];
            $dist_data = file_get_contents("https://localcoviddata.com/covid19/v1/cases/jhu?daysInPast=4&country=IND
            ");

            $dist_data_array = json_decode($dist_data, true);
            $dist_code = 0;
            while ($dist_code <= 23) {





            ?>
            <tr style="background-color: white;">
                <td><?php echo $dist_code ?></td>
                <td><?php echo $dist_data_array[$state_id]['districtData'][$dist_code]['name'] ?></td>
                <td><?php echo $dist_data_array[$state_id]['districtData'][$dist_code]['confirmed'] ?></td>
                <td><?php echo $dist_data_array[$state_id]['districtData'][$dist_code]['deaths'] ?></td>
                <td><?php echo $dist_data_array[$state_id]['districtData'][$dist_code]['recovered'] ?></td>

            </tr>
            <?php

                $dist_code++;
            }

            ?>



        </tbody>
    </table>




</div>










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