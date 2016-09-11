<?php
/**
 * Description of Student including full name, email, and average of grade.
 *
 * @author Alex
 */
class Student {
    
    function _construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    function average() {
        $total = 0;
        foreach ($this->grades as $value){
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    /* format display */
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
