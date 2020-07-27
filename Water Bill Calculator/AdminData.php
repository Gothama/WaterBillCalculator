
<?php

    function updateData($UCharge, $MonthlyCharge,$key){
        $conn = connect();
        $sql = "UPDATE water_bill_units SET UCharge = $UCharge , MonthlyCharge =  $MonthlyCharge WHERE ID =$key " ;
        if ($conn->query($sql) === TRUE) {
            $message = "Record Updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }
  
   
?>