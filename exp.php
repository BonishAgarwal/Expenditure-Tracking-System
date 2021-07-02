<?php
if(isset($_POST["country"])){
    // Capture selected country
    $country = $_POST["country"]; 
     
    // Define country and city array
    // $countryArr = array(
    //                 "usa" => array("New Yourk"=>array(), "Los Angeles", "California"),
    //                 "india" => array("Mumbai", "New Delhi", "Bangalore"),
    //                 "uk" => array("London", "Manchester", "Liverpool")
    //             );
     
    // Display city dropdown based on country name
    if($country !== 'Select' && $country !='other'){  
        echo "<label>Price:</label>";
        echo "<input type = 'text' name = 'price'>"; 
        echo "<label>Date:</label>";
        echo "<input type = 'date' name = 'date'>";
        echo "<input type = 'submit' name = '+' value = '+'>";
        // echo "<select>";
        // foreach($countryArr[$country] as $key => $value){
        //     echo "<option>". $value . "</option>";
        // }
        // echo "</select>";
    }if($country=='other'){
        echo "<label>Add_Your's_1st_Choice : </label>";  
        echo "<input type = 'text' name = 'choice'>";
        echo "<label>Price:</label>";
        echo "<input type = 'text' name = 'price'>";
        echo "<label>Date:</label>";
        echo "<input type = 'date' name = 'date'>";
        echo "<input type = 'submit' name = '+' value = '+'>";
    } 
}
?>