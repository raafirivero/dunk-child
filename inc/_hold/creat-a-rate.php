<?php 


\EasyPost\Shipment::create(array(
  "to_address" => $to_address,
  "from_address" => $from_address,
  "parcel" => $parcel,
  "customs_info" => $customs_info,
  "options" => array('address_validation_level' => 0)
));









?>