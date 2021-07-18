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


<?php include 'nav.php' ?>
<div class="d-flex justify-content-center">
    <iframe src="https://covid-19.dataflowkit.com/assets/widget/c19-widget-dark.html" class="mt-3" frameborder="0" scrolling="no" width="500" height="280">
    </iframe>
</div>
<?php include 'world_wide.php' ?>

<div class="shadow-lg bg-info my-3">
    <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" class="pt-3 px-3">
        <div class="row">
            <div class="col-md-9">

                <div class="form-group">
                    <select name="past" class="form-control" id="">

                        <option value="" selected>--Choose Past Days--</option>
                        <option value="1" selected>Today</option>

                        <option value="2" selected>Past 2 Days</option>

                        <option value="3" selected>Past 3 Days</option>

                        <option value="4" selected>Past 4 Days</option>

                        <option value="6" selected>Full Data</option>

                    </select>
                </div>

            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-outline-success form-control">Check
                        Result</button>
                </div>
            </div>
        </div>
    </form>

</div>

<div class="main" style="overflow-x: auto;">


    <?php
    if (isset($_POST['submit'])) {
        $state_code = 1;

        $past = $_POST['past'];
        $state_data = file_get_contents("https://localcoviddata.com/covid19/v1/cases/jhu?daysInPast=$past&country=IND");
        $state_data_array = json_decode($state_data, true);
    ?>
        <table class="table table-bordered">
            <th ead>
                <tr style="background-color:cyan;">
                    <th scope="col">Serial No</th>
                    <th scope="col">Country Name</th>
                    <th scope="col">State Name</th>
                    <th scope="col">Total Confirmed</th>
                    <th scope="col">Total Death</th>
                    <th scope="col">Total Recovered</th>
                    <th scope="col">Updated Date</th>


                </tr>
                </thead>
                <tbody>

                    <?php
                    while ($state_code <= 100) {




                    ?>
                        <tr style="background-color: white;">
                            <td><?php echo $state_code ?></td>
                            <td><?php echo $state_data_array['historicData']['historicData'][$state_code]['countryShortName'] ?>
                            </td>
                            <td><?php echo $state_data_array['historicData']['historicData'][$state_code]['provinceStateName'] ?>
                            </td>
                            <td><?php echo $state_data_array['historicData']['historicData'][$state_code]['peoplePositiveCasesCt'] ?>
                            </td>
                            <td><?php echo $state_data_array['historicData']['historicData'][$state_code]['deathCt'] ?>
                            </td>
                            <td><?php echo $state_data_array['historicData']['historicData'][$state_code]['recoveredCt'] ?>
                            </td>
                            <td><?php echo $state_data_array['historicData']['historicData'][$state_code]['date'] ?>
                            </td>
                        </tr>
                <?php
                        $state_code++;
                    }
                }
                ?>


                </tbody>
        </table>




</div>













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