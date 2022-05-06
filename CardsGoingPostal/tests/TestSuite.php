<?php
class TestSuite {
    
    function __construct(){
        
    }

    function showTestResult(String $testLabel, bool $result) {
        if ($result) {
            echo '[O]   Test: ' . $testLabel . ' successful! <br>'; 
        }
        else {
            echo '[X]   Test ' . $testLabel . ' failed! <br>';
        }
    }
}
?>