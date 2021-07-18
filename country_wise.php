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
<div class="d-flex justify-content-center">
    <iframe src="https://covid-19.dataflowkit.com/assets/widget/c19-widget-dark.html" class="mt-3" frameborder="0"
        scrolling="no" width="500" height="280">
    </iframe>
</div>
<?php include 'world_wide.php' ?>

<div class="main" style="overflow-x: auto;">

    <table class="table table-bordered">
        <thead>
            <tr style="background-color:cyan;">
                <th scope="col">Serial No</th>
                <th scope="col">Country</th>
                <th scope="col">Active Cases</th>
                <th scope="col">New Cases</th>
                <th scope="col">New Death</th>
                <th scope="col">Total Cases</th>

                <th scope="col">Total Death</th>

                <th scope="col">Total Recovered</th>
                <th scope="col">Last Updated</th>


            </tr>
        </thead>
        <tbody>

            <?php

            $country_data = file_get_contents("https://covid-19.dataflowkit.com/v1");

            $country_data_array = json_decode($country_data, true);
            $country_code = 0;
            while ($country_code <= 221) {





            ?>


            <tr style="background-color:black;">

                <td style="color: white; width:10%"><?php echo $country_code ?></td>
                <td style="color: white; width:10%"><?php echo $country_data_array[$country_code]['Country_text'] ?>
                </td>
                <td style="color: white; width:10%">
                    <?php echo $country_data_array[$country_code]['Active Cases_text'] ?></td>
                <td style="color: white; width:10%"><?php echo $country_data_array[$country_code]['New Cases_text'] ?>
                </td>
                <td style="color: white; width:10%"><?php echo $country_data_array[$country_code]['New Deaths_text'] ?>
                </td>
                <td style="color: white; width:10%"><?php echo $country_data_array[$country_code]['Total Cases_text'] ?>
                </td>

                <td style="color: white; width:10%">
                    <?php echo $country_data_array[$country_code]['Total Deaths_text'] ?></td>

                <td style="color: white; width:10%">
                    <?php echo $country_data_array[$country_code]['Total Recovered_text'] ?></td>
                <td style="color: white; width:20%"><?php echo $country_data_array[$country_code]['Last Update'] ?></td>

            </tr>
            <?php

                $country_code++;
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