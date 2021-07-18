<?php
$id = $_POST['id'];

$dist = file_get_contents("https://cdn-api.co-vin.in/api/v2/admin/location/districts/$id");
$dist_data = json_decode($dist, true);
$dist_data1 = 0;
while ($dist_data1 <= count($dist_data['districts']) - 1) {
    echo '<option value="' . $dist_data['districts'][$dist_data1]['district_id'] . '">' . $dist_data['districts'][$dist_data1]['district_name'] . '</option>';


    $dist_data1++;
}