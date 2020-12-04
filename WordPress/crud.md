Select query - get record from single row

<?php
global $wpdb;
$table = $wpdb->prefix . "table_name";
$sql = "SELECT * FROM $table WHERE id = $id";
$row = $wpdb->get_row($sql);
$data = $row->$table_field_name;
?>

Select query - get all record

<?php
global $wpdb;
$table = $wpdb->prefix . "table_name";
$sql = "SELECT * FROM $table";
$rows = $wpdb->get_results($sql);
foreach ($rows as $row)
{
    $data = $row->$table_field_name;
}
?>

Select query - get num rows

global $wpdb;
$table = $wpdb->prefix . "table_name";
$sql = "SELECT * FROM $table";
$rows = $wpdb->get_results($sql);
$num_rows = $wpdb->num_rows;

Insert query

<?php
global $wpdb;
$table = $wpdb->prefix . "table_name";
$wpdb->insert(
      $table,
      array(
    'date' => date("Y-m-d"),
    'field_1' => $field_1,
    'field_2' => $field_1        
    ),
    array('%s', '%s', '%s')
    )
?>

Get last inserted ID 

<?php $lastid = $wpdb->insert_id; ?>

Update query 

<?php
global $wpdb;
$table = $wpdb->prefix . "table_name";
$wpdb->update( 
    $table, 
    array( 
    'field_1' => $field_1,                
    'field_2'    => $field_2
    ), 
    array( 'id' => $id), // Where
    array( '%s', '%s'), 
    array( '%d' ) 
    )
?>

Delete query 

<?php 
global $wpdb;
$table = $wpdb->prefix . "table_name";
$del_id = $_REQUEST['del_id'];
$wpdb->query("DELETE FROM $table WHERE id = $del_id");
?>

Connect separate / other database

<?php
$mydb = new wpdb('username','password','database','localhost');
$rows = $mydb->get_results("select Name from my_table");
echo "<ul>";
foreach ($rows as $row) :
echo "<li>".$row->name."</li>";
endforeach;
echo "</ul>";
?>
