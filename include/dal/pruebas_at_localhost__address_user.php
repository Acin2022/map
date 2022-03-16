<?php
$dalTableaddress_user = array();
$dalTableaddress_user["idaddress_user"] = array("type"=>3,"varname"=>"idaddress_user", "name" => "idaddress_user", "autoInc" => "1");
$dalTableaddress_user["Name"] = array("type"=>200,"varname"=>"Name", "name" => "Name", "autoInc" => "0");
$dalTableaddress_user["Latitude"] = array("type"=>200,"varname"=>"Latitude", "name" => "Latitude", "autoInc" => "0");
$dalTableaddress_user["Longitude"] = array("type"=>200,"varname"=>"Longitude", "name" => "Longitude", "autoInc" => "0");
$dalTableaddress_user["idaddress_user"]["key"]=true;

$dal_info["pruebas_at_localhost__address_user"] = &$dalTableaddress_user;
?>