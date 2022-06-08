<?php
/*
*   Plugin Name: WP Terms Reader
*   Description: plugin to read the MySQL DB Terms table - GUTENBERG COMPATIBLE
*   Version: 1.0
*   Author: Aamir Patel
*   File: wp-terms-reader.php
*   Folder to create: terms-tbl-reader
*   Short code: [wp-terms-reader-shortcode]
*/
   
  add_shortcode( 'wp-terms-reader-shortcode', 'wp_terms_reader_entry_point' );


function wp_terms_reader_entry_point ( $attributes ) {
	
	global $wpdb;
 
 	$output = "";

	//Use the concatinaiton operator to join the table prefix to the word comments
	// to create the correct db prefix + table name
	//
	$tableName =   $wpdb->prefix . "terms"; 

	//Echo out the $tablename varaible, which is the db prefix + table name
	//
	//$output .= "$tableName" . "<br>";
	  
	//Query the vomments table and assign the returned array of table row objects
	// to the $result variable
	//
	$result = $wpdb->get_results( "SELECT * FROM $tableName");

    //Echo out a table header using start string values
    //
	$output .= "<table border=\"1\">";
	$output .= "<tr>";
	$output .= "<th>" . "ID"        . "</th>" 
		    . "<th>"  . "Name"    . "</th>" 
		    . "<th>"  . "Slug" . "</th>" ;
		    
	$output .= "</tr>";

	//Iterate the array of DB row objects and put them in HTML table cells
	// 
	foreach($result as $row)  {
        
        $tempTitle = $row->name;
        $tempString = "Uncategorized";
        if ( strcmp($tempTitle, $tempString) !== 0){
	 $output .= "<tr>";
	
	 //Each table row column data item is accessed using it's column name 
	 // 
	   $output .=   "<td>" . $row->term_id . "</td>"
           . "<td>" . $row->name  . "</td>"
           . "<td>" . $row->slug  . "</td>";
		  
	   $output .= "</tr>";
	}
    }

	$output .= "</table>";
	
	return $output;
}
?>