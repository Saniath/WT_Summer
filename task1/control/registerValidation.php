<?php

if(isset($_POST["submit"])){
    
        echo "Submited <br>";
        
        $fname = $_POST["Fname"];
        
        $lname =$_POST["Lname"];
    
        $age =$_POST["age"];
    
        $designation = "";

        if( is_numeric( $fname) || empty($fname) ){
            echo "invalid first name";
        }
        else{
            echo $fname."<br>";
        }
    
        if( is_numeric($lname) || empty($lname)){
            echo "invalid last name";
        }
        else{
            echo $lname."<br>";
        }

        if ( !isset($_POST["designation"])){
            echo "designation must be selected";
        }
        else{
            $designation = $_POST["designation"];
            echo $designation;
        }

    }

?>