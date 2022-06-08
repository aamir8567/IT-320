<?php


$output = "";
class work {
    public $name;
    public $department;
    public $salary;
  
    
    function set_name($new_name){
        $this->name = $new_name;
    } //End of set_name Func;

    function set_department($new_department){
        $this->department = $new_department;
    } //End of set_department Func;

    function set_salary($new_salary){
        $this->salary = $new_salary;
    } //End of set_salary Func;

    function get_name() {
			return $this->name;
		} //end of get_name func;

    function get_department() {
			return $this->department;
		} //end of get_department func;

    function get_salary() {
			return $this->salary;
		} //end of get_salary func;


}//end of class work;

    $worker_1 = new work();
    $worker_1->set_name("Taylor");
    $worker_1->set_department("ER");
    $worker_1->set_salary("20000");
    
    $worker_2 = new work();
    $worker_2->set_name("Salman");
    $worker_2->set_department("Psychitry");
    $worker_2->set_salary("350000");
    
    $worker_3 = new work();
    $worker_3->set_name("Jason");
    $worker_3->set_department("Material");
    $worker_3->set_salary("15000");
    

    $workerArray = array();
    array_push($workerArray, $worker_1, $worker_2, $worker_3);

    echo($workerArray) ;  
    $output .=  '<TABLE border="2" align="left" >';
	$output .=  "<TR>";
	$output .=  '<TH align="left">' . "Name" . "</TH>";
	$output .=  "<TH>" . "Department" .  "</TH>";
	$output .=  "<TH>" . "Salary" .  "</TH>";
	$output .=  "</TR>";

	foreach($workerArray as $per){
   	    $output .=  "<TR>";
   		$output .=  "<TD>" .  $per->get_name()   . "</TD>";
   		$output .=  "<TD>" .  $per->get_department()    . "</TD>";
   		$output .=  "<TD>" .  $per->get_salary()    . "</TD>";
   		$output .=  "</TR>";
	}
	$output .=  "</TABLE>";    
    
    	return $output;



?>