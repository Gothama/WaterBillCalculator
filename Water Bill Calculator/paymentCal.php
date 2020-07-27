<?php
    require "DBConnection.php";
    function BillCal($units){

        $conn = connect();
        $sql = "SELECT UCharge,MonthlyCharge FROM water_bill_units";
        if($result = mysqli_query($conn, $sql)){
            if (mysqli_num_rows($result) > 0) {
                $i=0;
             while($row = mysqli_fetch_array($result)) {
                   $UCharge[$i] = $row["UCharge"];
                   $MonthlyCharge[$i] = $row["MonthlyCharge"];
                    $i++;
                }
            }
        }
        echo '<table style="width: 73%;" class="auto-style7" border="2px">
        <tr bgcolor="blue">
            <td style="width: 156px" align="left"><strong>Number of Units</strong></td>
            <td style="width: 146px"align="left"><strong>Usage Charge</strong></td>
            <td style="width: 180px"align="left"><strong>No of Units</strong></td>
            <td style="width: 180px"align="left"><strong>Charge</strong></td>
        </tr>';
        $u = $units;$total = 0.0;
        //0
        if($units>0){
            echo '<tr>
            <td style="width: 156px">00-05</td>
            <td style="width: 146px">'.$UCharge[0].' </td>';
            if($units-5<=0){
                echo '<td style="width: 180px">'.$units.'</td> 
                <td style="width: 180px">'.$units*$UCharge[0].'</td>
                </tr>';
                $total += $units*$UCharge[0];
            }
            else{
                echo '<td style="width: 180px">5</td> 
                <td style="width: 180px">'.(5*$UCharge[0]).'</td>
                </tr>';  
                $total += 5*$UCharge[0];              
            }
            $units = $units-5;
        }
        //1
        if($units>0){
            echo '<tr>
            <td style="width: 156px">06-10</td>
            <td style="width: 146px">'.$UCharge[1].' </td>';
            if($units-5<=0){
                echo '<td style="width: 180px">'.$units.'</td> 
                <td style="width: 180px">'.$units*$UCharge[1].'</td>
                </tr>';
                $total += $units*$UCharge[1];
            }
            else{
                echo '<td style="width: 180px">5</td> 
                <td style="width: 180px">80</td>
                </tr>'; 
                $total += 5*$UCharge[1];               
            }
            $units = $units-5;
        }

        //2
        if($units>0){
            echo '<tr>
            <td style="width: 156px">11-15</td>
            <td style="width: 146px">'.$UCharge[2].' </td>';
            if($units-5<=0){
                echo '<td style="width: 180px">'.$units.'</td> 
                <td style="width: 180px">'.$units*$UCharge[2].'</td>
                </tr>';
                $total += $units*$UCharge[2];
            }
            else{
                echo '<td style="width: 180px">5</td> 
                <td style="width: 180px">'. (5*$UCharge[2]). '</td>
                </tr>';  
                $total += 5*$UCharge[2];                       
            }
            $units = $units-5;
        }
        //3
        if($units>0){
            echo '<tr>
            <td style="width: 156px">16-20</td>
            <td style="width: 146px">'.$UCharge[3].' </td>';
            if($units-5<=0){
                echo '<td style="width: 180px">'.$units.'</td> 
                <td style="width: 180px">'.$units*$UCharge[3].'</td>
                </tr>';
                $total += $units*$UCharge[3];
            }
            else{
                echo '<td style="width: 180px">5</td> 
                <td style="width: 180px">'.(5*$UCharge[3]).'</td>
                </tr>';  
                $total += 5*$UCharge[3];              
            }
            $units = $units-5;
        }
        //4
        if($units>0){
            echo '<tr>
            <td style="width: 156px">21-25</td>
            <td style="width: 146px">'.$UCharge[4].' </td>';
            if($units-5<=0){
                echo '<td style="width: 180px">'.$units.'</td> 
                <td style="width: 180px">'.$units*$UCharge[4].'</td>
                </tr>';
                $total += $units*$UCharge[4];
            }
            else{
                echo '<td style="width: 180px">5</td> 
                <td style="width: 180px">'.(5*$UCharge[4]).'</td>
                </tr>'; 
                $total += 5*$UCharge[3];               
            }
            $units = $units-5;
        }
        //5
        if($units>0){
            echo '<tr>
            <td style="width: 156px">26-30</td>
            <td style="width: 146px">'.$UCharge[5].' </td>';
            if($units-5<=0){
                echo '<td style="width: 180px">'.$units.'</td> 
                <td style="width: 180px">'.$units*$UCharge[5].'</td>
                </tr>';
                $total += $units*$UCharge[5];
            }
            else{
                echo '<td style="width: 180px">5</td> 
                <td style="width: 180px">'.(5*$UCharge[5]).'</td>
                </tr>';   
                $total += 5*$UCharge[5];             
            }
            $units = $units-5;
        }
        //6
        
        if($units>0){
            echo '<tr>
            <td style="width: 156px">31-40</td>
            <td style="width: 146px">'.$UCharge[6].' </td>';
            if($units-10<=0){
                echo '<td style="width: 180px">'.$units.'</td> 
                <td style="width: 180px">'.$units*$UCharge[6].'</td>
                </tr>';
                $total += $units*$UCharge[6];
            }
            else{
                echo '<td style="width: 180px">10</td> 
                <td style="width: 180px">'.(10*$UCharge[6]).'</td>
                </tr>';  
                $total += 10*$UCharge[6];              
            }
            $units = $units-10;
        }
        //7
        if($units>0){
            echo '<tr>
            <td style="width: 156px">41-50</td>
            <td style="width: 146px">'.$UCharge[7].' </td>';
            if($units-10<=0){
                echo '<td style="width: 180px">'.$units.'</td> 
                <td style="width: 180px">'.$units*$UCharge[7].'</td>
                </tr>';
                $total += $units*$UCharge[7];
            }
            else{
                echo '<td style="width: 180px">10</td> 
                <td style="width: 180px">'.(10*$UCharge[7]).'</td>
                </tr>';   
                $total +=10*$UCharge[7];             
            }
            $units = $units-10;
        }
        //8
        if($units>0){
            echo '<tr>
            <td style="width: 156px">51-75</td>
            <td style="width: 146px">'.$UCharge[8].' </td>';
            if($units-25<=0){
                echo '<td style="width: 180px">'.$units.'</td> 
                <td style="width: 180px">'.$units*$UCharge[8].'</td>
                </tr>';
                $total += $units*$UCharge[8];
            }
            else{
                echo '<td style="width: 180px">25</td> 
                <td style="width: 180px">'.(25*$UCharge[8]).'</td>
                </tr>'; 
                $total += 25*$UCharge[8];               
            }
            $units = $units-25;
        }
        //9
        if($units>0){
            echo '<tr>
            <td style="width: 156px">over 75</td>
            <td style="width: 146px">'.$UCharge[9].' </td>';
                echo '<td style="width: 180px">'.$units.'</td> 
                <td style="width: 180px">'.$units*$UCharge[9].'</td>
                </tr>';
                $total += $units*$UCharge[9];
        }

        if($u<=5){$mc = $MonthlyCharge[0];}
        else if($u<=10){$mc = $MonthlyCharge[1];}
        else if($u<=15){$mc = $MonthlyCharge[2];}
        else if($u<=20){$mc = $MonthlyCharge[3];}
        else if($u<=25){$mc = $MonthlyCharge[4];}
        else if($u<=30){$mc = $MonthlyCharge[5];}
        else if($u<=40){$mc = $MonthlyCharge[6];}
        else if($u<=50){$mc = $MonthlyCharge[7];}
        else if($u<=75){$mc = $MonthlyCharge[8];}
        else if($u>75){$mc = $MonthlyCharge[9];}
        echo '<tr>
            <td colspan = "3">Monthly service charge</td>
                <td >'.$mc.'</td>
                </tr>';
        echo '<tr>
            <td colspan = "3">Total Before tax</td>
                <td >'.($total).'</td>
                </tr>';
         echo '<tr>
            <td colspan = "3">Vat (12%)</td>
                <td >'.(($mc+$total)*0.12).'</td>
                </tr>';
        echo '<tr bgcolor="blue">
            <td colspan = "3">Total Bill</td>
                <td >'.(($mc+$total)*1.12).'</td>
                </tr>';
        echo '</table>';
       
    }
?>