<?php
   /*
   Plugin Name: My Adapter Plug Table Reader Custom Plugin
   Description: a very basic HTML table output WP custom plugin WP 5.x COMPATIBLE
   Version: 5.0
   Author: Aamir Patel
   File: my_adapter_plug_reader.php
   SQL Import File: n/a
   Folder to create: my-adapter-plug-reader
   Short code: [my-employee-table-reader-shortcode]
   License: GPL2
   */
   
  add_shortcode( 'my-employee-table-reader-shortcode', 'my_employee_table_reader_plugin_entry_point' );

function my_employee_table_reader_plugin_entry_point( $attributes ) 
{
	
	global $wpdb;

	$output = "";
	
	//Prepend the adapter_plug_tbl table name with the current table prefix
	//
	$tableName =   $wpdb->prefix . "employee"; 
	
	//Query the  adapter_plug_tbl table and get all the rows in the $result object
	//
	$result = $wpdb->get_results( "SELECT * FROM $tableName"); 

	$output .=  "<table>";

	$output .=  "<tr>";
    $output .=  '<th colspan="6"> Employee PLUGIN TABLE </th>';
    $output .=  "</tr>";

	$output .=  "<tr>";
	$output .=   "<th>" . "ID"   .  "</th>" 
		. "<th>" . "Name"      	 .  "</th>" 
		. "<th>" . "Age"         .  "</th>" 
		. "<th>" . "Eye Color"    	 .  "</th>"
		. "<th>" . "Salary"    	 .  "</th>";		
	$output .=  "</tr>";

	//Iterate through the $results object. Each $row is a row of the table
	// row is also an object
	//
	foreach($result as $row)  {

   		#Create a temp variable to hold the size display value
   		#
   		$Age_display =  "Unknown";
   		
  		#Use a SWITCH statement to set the size display value
   		#
		switch ($row->Age) {
            case($row->Age <= 21):
      			$Age_display =  "Young";
            break;
    		case(($row->Age > 21)  && ($row->Age < 30)):
      			$Age_display =  "Young Adult";
        		break;
            case( ($row->Age > 30 ) && ($row->Age < 65)):
      			$Age_display =  "Adult";
            break;
            case($row->Age >= 65):
      			$Age_display =  "Older Adult";
            break;
            
        	default:
       			$size_display = "Unknown Age value";
		}
   		#Format the database table price data a 2 decimal place float with leading "$"
   		#
        $number =  $row->Salary;
        $salary_display = "$ " . number_format($number, 2, '.', '');
 
   		#Format the color dislay value as an HTML font color statement
   		# First use the strtolower function to get the color value to all lowercase
   		#
        $color_display = $row->EyeColor;
  		$color_display = strtolower( $color_display );

  		$color_display_html = "<font color=\"$color_display\">$color_display</font>";

        $output .=  "<tr>";
   
   		$output .= "<td>" . $row->ID   . "</td>"
   		    . "<td>" . $row->Name      . "</td>"
   		    . "<td>" . $Age_display    . "</td>"
       		. "<td>" . $color_display_html     . "</td>"
       		. "<td>" . $salary_display        . "</td>";
        
  		 $output .=  "</tr>";
 
   }

  $output .=  "</table>";
  
  return $output;
	
}
?>