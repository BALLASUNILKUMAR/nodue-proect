<?php
require(fpdf.php)
require_once 'database_conn.php';
$sql = "SELECT * FROM btech_cse_cs WHERE regid='".$_SESSION['regid']."'";
        $btech_cse_cs_query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($btech_cse_cs_query)==1){
            while($row=mysqli_fetch_array($btech_cse_cs_query))
            {
                $regid=$row['regid'];
                $name=$row['name'];
                $course=$row['course'];
                $school=$row['school'];
                $currentsem=$row['currentsem'];
                $email=$row['email'];
                $accounts=$row['accounts'];
                $student=$row['student'];
                $itlabs=$row['itlabs'];
                $transport=$row['transport'];
                $hostel=$row['hostel'];
                $central=$row['central'];
                $law=$row['law'];
                $pharma=$row['pharma'];
                $remarks=$row['remark'];
            }
        }
?>