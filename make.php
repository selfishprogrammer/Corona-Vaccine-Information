<?php


$world_wide_data = file_get_contents("https://cdn-api.co-vin.in/api/v2/admin/location/states");
$data = json_decode($world_wide_data, true);
echo "<pre>";
print_r($data['states']);
echo count($data['states']);


echo "</pre>";
// https://api.rootnet.in/covid19-in/notifications
// https://api.rootnet.in/covid19-in/hospitals/beds
//https://api.rootnet.in/covid19-in/hospitals/medical-colleges
// https://api.rootnet.in/covid19-in/contacts