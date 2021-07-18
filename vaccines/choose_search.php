<div class="card-header shadow-sm bg-white">

    <div class="col-md-6 offset-md-3">
        <div class="d-flex justify-content-between">
            <button class="btn btn-outline-default form-control border mx-2" data-toggle="modal"
                data-target="#search_bt_pincode" style="border-radius: 20px;">By
                Pincode&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>
            </button>
            <button class="btn btn-outline-default form-control border mx-2" data-toggle="modal"
                data-target="#search_by_state" style="border-radius: 20px;">By
                District&nbsp;<i class="fa fa-location-arrow" aria-hidden="true"></i>
            </button>
        </div>
    </div>
</div>


<?php include 'search_by_pincode.php'   ?>
<?php include 'search_by_distrit.php'   ?>