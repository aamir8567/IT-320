<?php
/*
*   Plugin Name: WP Term Taxonomy Reader
*   Description: plugin to read the MySQL DB term Taxonomy table - GUTENBERG COMPATIBLE
*   Version: 1.0
*   Author: Aamir Patel
*   File: wp-term-taxonomy-reader.php
*   Folder to create: term-taxonomy-tbl-reader
*   Short code: [wp-term-taxonomy-reader-shortcode]
*/
   
  add_shortcode( 'wp-term-taxonomy-reader-shortcode', 'wp_term_taxonomy_reader_entry_point' );


function wp_term_taxonomy_reader_entry_point ( $attributes ) {
	
	global $wpdb;
 
 	$output = "";

	//Use the concatinaiton operator to join the table prefix to the word comments
	// to create the correct db prefix + table name
	//
	$tableName =   $wpdb->prefix . "term_taxonomy"; 

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
	$output .= "<th>" . "term_taxonomy_id"        . "</th>" 
		    . "<th>"  . "term_id"    . "</th>" 
		    . "<th>"  . "taxonomy" . "</th>" 
            . "<th>"  . "count" . "</th>";
		    
	$output .= "</tr>";

	//Iterate the array of DB row objects and put them in HTML table cells
	// 
	foreach($result as $row)  {
        
        $tempTitle = $row->count;
        
        if ( strlen($tempTitle) !== 0){
	 $output .= "<tr>";
	
	 //Each table row column data item is accessed using it's column name 
	 // 
	   $output .=   "<td>" . $row->term_taxonomy_id . "</td>"
           . "<td>" . $row->term_id  . "</td>"
           . "<td>" . $row->taxonomy  . "</td>"
           . "<td>" . $row->count  . "</td>";
		  
	   $output .= "</tr>";
	}
    }

	$output .= "</table>";
	
	return $output;
}
?>