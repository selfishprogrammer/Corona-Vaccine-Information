<div class="container">



    <!-- Main Part -->
    <div class="shadow-sm my-4" style="border-radius: 20px;;">
        <div>
            <div class="d-flex" style="overflow-x: auto;">
                <?php
                $world_wide_data = file_get_contents("https://api.covid19api.com/summary");
                $data = json_decode($world_wide_data, true);








                ?>









                <div class="col-md-3">
                    <div class="shadow-sm my-2 bg-white " style="border-radius:15px; width:15rem; height:130px">
                        <div class="text-center py-3" style="font-size:22px; font-family:math;"><b>Total Cases</b></div>
                        <div class="text-center pb-3" style="color:red;font-size:20px; font-family:math;">
                            <b><?php echo $data['Global']["TotalConfirmed"]; ?></b>
                        </div>


                    </div>


                </div>

                <div class="col-md-3">
                    <div class="shadow-sm my-2 bg-white " style=" border-radius:15px; width:15rem; height:130px">
                        <div class="text-center py-3" style="font-size:22px; font-family:math;"><b>Total Death</b></div>
                        <div class="text-center pb-3" style="color:red;font-size:20px; font-family:math;">
                            <b> <?php echo $data['Global']["TotalDeaths"]; ?></b>
                        </div>




                    </div>
                </div>

                <div class="col-md-3">
                    <div class="shadow-sm my-2 bg-white " style="border-radius:15px;  width:15rem; height:130px">

                        <div class="text-center py-3" style="font-size:22px; font-family:math;"><b> New Recoverd</b>
                        </div>
                        <div class="text-center pb-3" style="color:red;font-size:20px; font-family:math;">
                            <b><?php echo $data['Global']["NewRecovered"]; ?></b>
                        </div>


                    </div>
                </div>

                <div class="col-md-3">

                    <div class="shadow-sm my-2 bg-white " style="border-radius:15px;  width:15rem; height:130px">


                        <div class="text-center py-3" style="font-size:22px; font-family:math;"> <b>Total Recoverd</b>
                        </div>
                        <div class="text-center pb-3" style="color:red;font-size:20px; font-family:math;">
                            <b><?php echo $data['Global']["TotalRecovered"]; ?></b>
                        </div>


                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shadow-sm my-2 bg-white " style="border-radius:15px;  width:15rem; height:130px">

                        <div class="text-center  py-3" style="font-size:22px; font-family:math;"> <b>Cases Today</b>
                        </div>
                        <div class="text-center pb-3" style="color:red;font-size:20px; font-family:math;">
                            <b> <?php echo $data['Global']['NewConfirmed']; ?></b>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="shadow-sm my-2 bg-white " style="border-radius:15px;  width:15rem; height:130px">

                        <div class="text-center py-3" style="font-size:22px; font-family:math;"><b>Death Today</b>
                        </div>
                        <div class="text-center pb-3" style="color:red;font-size:20px; font-family:math;">
                            <b> <?php echo $data['Global']["NewDeaths"]; ?></b>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Part -->



</div>