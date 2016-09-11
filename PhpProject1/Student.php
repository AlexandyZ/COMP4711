<?php
/**
 * Description of Student including full name, email, and average of grade.
 *
 * @author Alex
 */
class Student {
    
    /**
     * Student constructor to initialize a student's properties.
     * @param string $this->surname    A string of student surname
     * @param string $this->first_name A string of student firstname
     * @param array $this->emails      An associative array of student emails
     * @param array $this->grades      An associative array of student grades
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Add email address in the array of emails
     * @param string $which    A string of email type
     * @param string $address  A string of email address
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    /**
     * Add grade in the array of grades
     * @param float $grade  An float of grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    /**
     * Caculate the average of grades for each student
     * @return float The average of grades
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value){
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    /**
     * Format display
     * @return string The formatting student information
     */
    function toString() {
        $result = $this->first_name . " " . $this->surname . "\t";
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what){
            $result .= $which . ': ' . $what . "\n";
        }
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
    
}
