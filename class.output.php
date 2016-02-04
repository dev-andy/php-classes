<?php
/**
 * This is the class for the main database 
 * 
 * @category Form extends DB
 * @author 
 * @copyright (c) 2016,
 * @todo 
 * @package Forms 
 * @license http://opensource.org/licenses/GPL-3.0  GNU Public License
 */

/**
 * @filesource incluse_once database.php
 */
include_once("class.db.php");

/**
 * Class Forms  Extends MySQLDatabase
 */
class Output extends  DB
{
    
/**
 * Redirects the page header 
 * @param string $Location file path 
 * 
 */    
 public function redirect($Location) 
  {  
    header("Location: $Location");
    die();
  }  
        

/**
 * Check's the String to see if its empty or not
 * @param String User input 
 * @return Boolan True / False
 */        
public function isEmpty ($val) {
    $val = trim($val);
    $val = (isset($val) AND !empty($val) ? true : false);

    return $val;
}

// Check to see if it a number true : false //
public function isNumber($number) {
	
    $number = (is_numeric($number) ? true : false); 
    return $number;
}

// HTML OUTPUT DECODE TEXT //
public function htmlOutput($string) {
    $string = html_entity_decode($string);
    $string = htmlspecialchars_decode($string);

    return $string;
}

// Upper case words letter //
public function UpperCaseWordFormat($name) {
    $this->htmlOutput = $name;
    $name = strtolower($name);
    $name = ucwords($name);
    
    return $name;
}


/*
 * Format date to day month year 
 * @param string date 
 * @returns date formated to uk date 
 */	
public function outputDate($date) {
    $date= strtotime( $date );
    $date =  date('d-m-Y', $date);
    
    return $date; 
}

/*
 * Fomats the date and time to 20-01-2016 10.49 am
 * @param String date and time 
 * @returns string formated date and time 
 */
public function outputDateTime($dateTime)
{
    $dateTime= strtotime( $dateTime );
    $dateTime = date("d-m-Y H:i a", $dateTime);
    return $dateTime;
}








	
} // End Form

$ClassOutput = new Output();
?>