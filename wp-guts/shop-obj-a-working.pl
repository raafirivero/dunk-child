[Sun Mar 22 10:53:52 2015] [error] [client 127.0.0.1] EasyPost\\Shipment::__set_state(array(
   '_apiKey' => '0NNek4LkVjzJyHLZVCd9gg',
   '_retrieveOptions' => 
  array (
  ),
   '_values' => 
  array (
    'id' => 'shp_nze04Td4',
    'created_at' => '2015-03-22T14:52:31Z',
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
    'updated_at' => '2015-03-22T14:52:33Z',
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
        'id' => 'adr_mJJrbMyL',
        'object' => 'Address',
        'created_at' => '2015-03-22T14:52:29Z',
        'updated_at' => '2015-03-22T14:52:29Z',
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
        'id' => 'prcl_4tZVVTkw',
        'object' => 'Parcel',
        'created_at' => '2015-03-22T14:52:30Z',
        'updated_at' => '2015-03-22T14:52:30Z',
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
          'id' => 'rate_wpC0N3DY',
          'object' => 'Rate',
          'created_at' => '2015-03-22T14:52:33Z',
          'updated_at' => '2015-03-22T14:52:33Z',
          'mode' => 'test',
          'service' => 'Priority',
          'carrier' => 'USPS',
          'rate' => '6.02',
          'currency' => 'USD',
          'retail_rate' => NULL,
          'retail_currency' => NULL,
          'delivery_days' => NULL,
          'delivery_date' => NULL,
          'delivery_date_guaranteed' => NULL,
          'est_delivery_days' => NULL,
          'shipment_id' => 'shp_nze04Td4',
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
          'id' => 'rate_qp75yvkC',
          'object' => 'Rate',
          'created_at' => '2015-03-22T14:52:33Z',
          'updated_at' => '2015-03-22T14:52:33Z',
          'mode' => 'test',
          'service' => 'ParcelSelect',
          'carrier' => 'USPS',
          'rate' => '6.40',
          'currency' => 'USD',
          'retail_rate' => NULL,
          'retail_currency' => NULL,
          'delivery_days' => NULL,
          'delivery_date' => NULL,
          'delivery_date_guaranteed' => NULL,
          'est_delivery_days' => NULL,
          'shipment_id' => 'shp_nze04Td4',
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
          'id' => 'rate_2592mlzn',
          'object' => 'Rate',
          'created_at' => '2015-03-22T14:52:33Z',
          'updated_at' => '2015-03-22T14:52:33Z',
          'mode' => 'test',
          'service' => 'Express',
          'carrier' => 'USPS',
          'rate' => '29.10',
          'currency' => 'USD',
          'retail_rate' => NULL,
          'retail_currency' => NULL,
          'delivery_days' => 3,
          'delivery_date' => NULL,
          'delivery_date_guaranteed' => NULL,
          'est_delivery_days' => 3,
          'shipment_id' => 'shp_nze04Td4',
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
        'id' => 'adr_xjg5Babw',
        'object' => 'Address',
        'created_at' => '2015-03-22T14:52:29Z',
        'updated_at' => '2015-03-22T14:52:29Z',
        'name' => 'Daniel Zhang',
        'company' => NULL,
        'street1' => '4614 102nd Street',
        'street2' => 'Apt 23',
        'city' => 'Lubbock',
        'state' => 'TX',
        'zip' => '79424',
        'country' => 'US',
        'phone' => '1234567890',
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
    'usps_zone' => 7,
    'return_address' => 
    EasyPost\\Address::__set_state(array(
       '_apiKey' => '0NNek4LkVjzJyHLZVCd9gg',
       '_retrieveOptions' => 
      array (
      ),
       '_values' => 
      array (
        'id' => 'adr_mJJrbMyL',
        'object' => 'Address',
        'created_at' => '2015-03-22T14:52:29Z',
        'updated_at' => '2015-03-22T14:52:29Z',
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
 