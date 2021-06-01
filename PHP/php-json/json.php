<?php
// Read JSON file
$json = file_get_contents('https://raw.githubusercontent.com/blbwd/php-json/master/members.json');

//Decode JSON
$json_data = json_decode($json,true);

//Print data
//print_r($json_data);

foreach ($json_data as $key1 => $value1) {
	?>
  <ul>
    <li>Company Name: <?php echo $json_data[$key1]["company"];?></li>  
    <li>Office Address 1: <?php echo $json_data[$key1]["office_address_1"];?></li>
    <li>Office Address 2: <?php echo $json_data[$key1]["office_address_2"];?></li>
    <li>City Pin: <?php echo $json_data[$key1]["city_pin"];?></li>
    <li>Office State: <?php echo $json_data[$key1]["office_state"];?></li>
    <li>Phone 1: <?php echo $json_data[$key1]["phone1"];?></li>
    <li>Phone 2: <?php echo $json_data[$key1]["phone2"];?></li>
    <li>Email: <?php echo $json_data[$key1]["email"];?></li>
    <li>Website: <?php echo $json_data[$key1]["website"];?></li>
    <li>Contact Name: <?php echo $json_data[$key1]["primary_contact_name"];?></li>
    <li>Mobile: <?php echo $json_data[$key1]["mobile"];?></li>
  </ul>
<?php
}

?>
