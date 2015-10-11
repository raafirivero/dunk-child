[Sun Mar 22 11:01:34 2015] [error] [client 127.0.0.1] EasyPost\\Shipment::__set_state(array(
   '_apiKey' => '0NNek4LkVjzJyHLZVCd9gg',
   '_retrieveOptions' => 
  array (
  ),
   '_values' => 
  array (
    'id' => 'shp_G4zkExJq',
    'created_at' => '2015-03-22T15:01:31Z',
    'is_return' => false,
    'messages' => 
    array (
    ),
    'mode' => 'test',
    'options' => 
    EasyPost\\Object::__set_state(array(
       '_apiKey' => '0NNek4LkVjzJyHLZVCd9gg',
       '_retrieveOptions' => 
      array (
      ),
       '_values' => 
      array (
        'currency' => 'USD',
      ),
       '_unsavedValues' => 
      array (
      ),
       '_transientValues' => 
      array (
      ),
       '_immutableValues' => 
      array (
        0 => '_apiKey',
        1 => 'id',
      ),
    )),
    'reference' => NULL,
    'status' => 'unknown',
    'tracking_code' => NULL,
    'updated_at' => '2015-03-22T15:01:33Z',
    'batch_status' => NULL,
    'batch_message' => NULL,
    'customs_info' => NULL,
    'from_address' => 
    EasyPost\\Address::__set_state(array(
       '_apiKey' => '0NNek4LkVjzJyHLZVCd9gg',
       '_retrieveOptions' => 
      array (
      ),
       '_values' => 
      array (
        'id' => 'adr_A9pQrKDN',
        'object' => 'Address',
        'created_at' => '2015-03-22T15:01:30Z',
        'updated_at' => '2015-03-22T15:01:30Z',
        'name' => NULL,
        'company' => 'Le Dunk',
        'street1' => '33 Flatbush Ave., 6th Floor',
        'street2' => '',
        'city' => 'Brooklyn',
        'state' => 'NY',
        'zip' => '11217',
        'country' => 'US',
        'phone' => '3477881871',
        'email' => NULL,
        'mode' => 'test',
        'carrier_facility' => NULL,
        'residential' => NULL,
        'federal_tax_id' => NULL,
      ),
       '_unsavedValues' => 
      array (
      ),
       '_transientValues' => 
      array (
      ),
       '_immutableValues' => 
      array (
        0 => '_apiKey',
        1 => 'id',
      ),
    )),
    'insurance' => NULL,
    'parcel' => 
    EasyPost\\Parcel::__set_state(array(
       '_apiKey' => '0NNek4LkVjzJyHLZVCd9gg',
       '_retrieveOptions' => 
      array (
      ),
       '_values' => 
      array (
        'id' => 'prcl_kD727MAo',
        'object' => 'Parcel',
        'created_at' => '2015-03-22T15:01:31Z',
        'updated_at' => '2015-03-22T15:01:31Z',
        'length' => 8,
        'width' => 8,
        'height' => 8,
        'predefined_package' => NULL,
        'weight' => 15,
        'mode' => 'test',
      ),
       '_unsavedValues' => 
      array (
      ),
       '_transientValues' => 
      array (
      ),
       '_immutableValues' => 
      array (
        0 => '_apiKey',
        1 => 'id',
      ),
    )),
    'postage_label' => NULL,
    'rates' => 
    array (
      0 => 
      EasyPost\\Rate::__set_state(array(
         '_apiKey' => '0NNek4LkVjzJyHLZVCd9gg',
         '_retrieveOptions' => 
        array (
        ),
         '_values' => 
        array (
          'id' => 'rate_1uZ49qlR',
          'object' => 'Rate',
          'created_at' => '2015-03-22T15:01:33Z',
          'updated_at' => '2015-03-22T15:01:33Z',
          'mode' => 'test',
          'service' => 'Priority',
          'carrier' => 'USPS',
          'rate' => '5.05',
          'currency' => 'USD',
          'retail_rate' => NULL,
          'retail_currency' => NULL,
          'delivery_days' => NULL,
          'delivery_date' => NULL,
          'delivery_date_guaranteed' => NULL,
          'est_delivery_days' => NULL,
          'shipment_id' => 'shp_G4zkExJq',
          'carrier_account_id' => 'ca_n6mlD5dd',
        ),
         '_unsavedValues' => 
        array (
        ),
         '_transientValues' => 
        array (
        ),
         '_immutableValues' => 
        array (
          0 => '_apiKey',
          1 => 'id',
        ),
      )),
      1 => 
      EasyPost\\Rate::__set_state(array(
         '_apiKey' => '0NNek4LkVjzJyHLZVCd9gg',
         '_retrieveOptions' => 
        array (
        ),
         '_values' => 
        array (
          'id' => 'rate_W0S62E4m',
          'object' => 'Rate',
          'created_at' => '2015-03-22T15:01:33Z',
          'updated_at' => '2015-03-22T15:01:33Z',
          'mode' => 'test',
          'service' => 'ParcelSelect',
          'carrier' => 'USPS',
          'rate' => '5.55',
          'currency' => 'USD',
          'retail_rate' => NULL,
          'retail_currency' => NULL,
          'delivery_days' => NULL,
          'delivery_date' => NULL,
          'delivery_date_guaranteed' => NULL,
          'est_delivery_days' => NULL,
          'shipment_id' => 'shp_G4zkExJq',
          'carrier_account_id' => 'ca_n6mlD5dd',
        ),
         '_unsavedValues' => 
        array (
        ),
         '_transientValues' => 
        array (
        ),
         '_immutableValues' => 
        array (
          0 => '_apiKey',
          1 => 'id',
        ),
      )),
      2 => 
      EasyPost\\Rate::__set_state(array(
         '_apiKey' => '0NNek4LkVjzJyHLZVCd9gg',
         '_retrieveOptions' => 
        array (
        ),
         '_values' => 
        array (
          'id' => 'rate_PCGRXVip',
          'object' => 'Rate',
          'created_at' => '2015-03-22T15:01:33Z',
          'updated_at' => '2015-03-22T15:01:33Z',
          'mode' => 'test',
          'service' => 'Express',
          'carrier' => 'USPS',
          'rate' => '15.13',
          'currency' => 'USD',
          'retail_rate' => NULL,
          'retail_currency' => NULL,
          'delivery_days' => 3,
          'delivery_date' => NULL,
          'delivery_date_guaranteed' => NULL,
          'est_delivery_days' => 3,
          'shipment_id' => 'shp_G4zkExJq',
          'carrier_account_id' => 'ca_n6mlD5dd',
        ),
         '_unsavedValues' => 
        array (
        ),
         '_transientValues' => 
        array (
        ),
         '_immutableValues' => 
        array (
          0 => '_apiKey',
          1 => 'id',
        ),
      )),
    ),
    'refund_status' => NULL,
    'scan_form' => NULL,
    'selected_rate' => NULL,
    'tracker' => NULL,
    'to_address' => 
    EasyPost\\Address::__set_state(array(
       '_apiKey' => '0NNek4LkVjzJyHLZVCd9gg',
       '_retrieveOptions' => 
      array (
      ),
       '_values' => 
      array (
        'id' => 'adr_8Pj0IKYd',
        'object' => 'Address',
        'created_at' => '2015-03-22T15:01:29Z',
        'updated_at' => '2015-03-22T15:01:29Z',
        'name' => 'Bob Tivek',
        'company' => NULL,
        'street1' => '123 Fountain Street',
        'street2' => '',
        'city' => 'Clifton',
        'state' => 'NJ',
        'zip' => '07011',
        'country' => 'US',
        'phone' => NULL,
        'email' => NULL,
        'mode' => 'test',
        'carrier_facility' => NULL,
        'residential' => NULL,
        'federal_tax_id' => NULL,
      ),
       '_unsavedValues' => 
      array (
        'name' => true,
      ),
       '_transientValues' => 
      array (
      ),
       '_immutableValues' => 
      array (
        0 => '_apiKey',
        1 => 'id',
      ),
    )),
    'usps_zone' => 1,
    'return_address' => 
    EasyPost\\Address::__set_state(array(
       '_apiKey' => '0NNek4LkVjzJyHLZVCd9gg',
       '_retrieveOptions' => 
      array (
      ),
       '_values' => 
      array (
        'id' => 'adr_A9pQrKDN',
        'object' => 'Address',
        'created_at' => '2015-03-22T15:01:30Z',
        'updated_at' => '2015-03-22T15:01:30Z',
        'name' => NULL,
        'company' => 'Le Dunk',
        'street1' => '33 Flatbush Ave., 6th Floor',
        'street2' => '',
        'city' => 'Brooklyn',
        'state' => 'NY',
        'zip' => '11217',
        'country' => 'US',
        'phone' => '3477881871',
        'email' => NULL,
        'mode' => 'test',
        'carrier
