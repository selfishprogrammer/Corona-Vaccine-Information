<?php
$state = file_get_contents("https://cdn-api.co-vin.in/api/v2/admin/location/states");
$state_data = json_decode($state, true);








?>


<div class="modal fade" id="search_by_state" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body shadow-sm">
                <div class="container">
                    <div class="my-4">
                        <form action="results_of_vaccine" method="post">

                            <div class="form-group">
                                <select name="state" class="form-control" id="state"
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
                            <div class="form-group">
                                <select name="dist" class="form-control" id="dist"
                                    style="border-radius: 20px; font-family: monospace;">

                                    <option value="" selected>--Select District--</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="district_wise" class="btn btn-outline-info form-control"
                                    style="border-radius: 20px;">Check Slot <i class="fa fa-map-marker"
                                        aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


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