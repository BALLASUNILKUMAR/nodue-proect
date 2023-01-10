<?php
require_once 'session.php';
if(isset($_SESSION['regid']))
{
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Student Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "icon" href = "Ct_logo.png" type = "image/x-icon">
        <style>
            body{
             background-image: url('back.jpeg');
             background-repeat: no-repeat;
             background-size: 120%;
            }
            .a{
                margin-right: 55%;
                padding-left: 30px;
                padding-top: 20px;
                padding-bottom: 20px;
                background-color:rgba(240, 240, 240, 0.4);
                border-radius: 10px;
                margin-left: 10%;
                margin-top: 10px;
                box-shadow: 10px 10x;
            }
            h2{
                text-align: center;
                color:royalblue;
            }
            .b{
                margin-top: -350px;
                margin-left: 55%;
                margin-right: 3%;
                text-align: center;
                background-color:rgba(240, 240, 240, 0.4);
                border-radius: 10px;
                padding-top: 10px;
                padding-bottom: 20px;
            }
            th,td{
                text-align: center;
                padding-top: 15px;
                padding-bottom: 15px;
                padding-left: 60px;
                padding-right: 60px;
                color:brown;
                font-size:large;
                font-weight: bolder;
            }
            table{
                border-radius: 5px;
                border-collapse: collapse;
                margin-top: 10px;
                margin-left: 12%;
                margin-bottom: 10px;
                border-color: azure;
            }
            .img{
                text-align: center;
            }
            .d{
                text-align: center;
                word-spacing: 10px;
                font-size: larger;
                color: yellow;
            }
            .c{
                margin-right: 55%;
                padding-left: 30px;
                padding-top: 20px;
                padding-bottom: 20px;
                background-color:rgba(240, 240, 240, 0.4);
                border-radius: 10px;
                margin-left: 10%;
                margin-top: -230px;
                box-shadow: 10px 10x;
            }
            .btn{
                text-align: center;
                padding-left: 10px;
                padding-right: 10px;
                margin-left: 15px;
                color:crimson;
            }
            @media only screen and (max-width:450px){
                .d{
                    text-align: center;
                    color:aquamarine;
                    padding-left: 40px;
                }
                .img{
                    padding-left: 8%;
                }
                .a{
                    margin-right: 20px;
                    margin-left: 20px;
                    padding-left: 15px;
                    color:azure;
                }
                h2{
                    color:antiquewhite;
                }
                .b{
                    margin-top: 50px;
                    margin-left: 20px;
                    margin-right: 20px;
                    padding-right: 50%;
                }
                .e{
                    margin-left: 90%;
                }
                table,td,th,tr{
                    margin-right: 150px;
                    border-color: black;
                    padding-right: 30px;
                    padding-left: 30px;
                    text-align: center;
                    color:azure;
                }
                .c{
                    margin-top: 40px;
                    margin-right: 20px;
                    margin-left: 20px;
                    color:azure;
                }
                body{
                    background-image: url('');
                    background-repeat:no-repeat;
                    background-size: 100%;
                    background-color: black;
                }
                .btn{
                    color:green;
                }
            }
            @media print{
                body * {
                    visibility:hidden;
                }
                .img, .img *{
                    visibility:visible;
                    margin-top:-2%;
                }
                .a , .a *{
                    visibility:visible;
                    padding-right : 1px;
                    margin-right: 10%;
                }
                .b , .b * {
                    visibility:visible;
                    border-color:black;
                    margin-top:0%;
                    margin-left:7%;
                }
                tr , tr *{
                    padding-top:1px;
                    padding-bottom:1px;
                }

                
            }
        </style>
    </head>
    <body>

        <div class="d">
            <h1>Welcome To CTUniversity</h1>
            <h1>Student NoDue Portal</h1>
            
        </div>
                    
        <div class="img">
            <img src="Ct_logo.png" alt="" height="135px">
        </div>

        <?php
        require_once 'database_conn.php';
        //require_once 'constants.php';
        //error_reporting(0);
        
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
            <div class="a">
                <h2>Student Information</h2>
                <h3>Registration number : <?php echo $regid ?></h3>
                <h3>Name of the student : <?php echo $name ?></h3>
                <h3>Course              : <?php echo $course ?></h3>
                <h3>School              : <?php echo $school ?></h3>
                <h3>Current Semester    : <?php echo $currentsem ?></h3>
                <h3>Email id            : <?php echo $email ?></h3>
            </div>

            <div class="b">
                <h2 class="e">Student NoDue</h2>
                <table border="1px">
                    <tr>
                        <th>Section</th>
                        <th>Response</th>
                    </tr>
                    <tr>
                        <td>Account Section</td>
                        <td><?php echo $accounts ?></td>
                    </tr>
                    <tr>
                        <td>Student Section</td>
                        <td><?php echo $student ?></td>
                    </tr>
                    <tr>
                        <td>It / Labs</td>
                        <td><?php echo $itlabs ?></td>
                    </tr>
                    <tr>
                        <td>Central Library</td>
                        <td><?php echo $central ?></td>
                    </tr>
                    <tr>
                        <td>Law Library</td>
                        <td><?php echo $law ?></td>
                    </tr>
                    <tr>
                        <td>Pharmacy Library</td>
                        <td><?php echo $pharma ?></td>
                    </tr>
                    <tr>
                        <td>Hostel</td>
                        <td><?php echo $hostel ?></td>
                    </tr>
                    <tr>
                        <td>Transport</td>
                        <td><?php echo $transport ?></td>
                    </tr>
                    <tr>
                        <td>Remarks:</td>
                        <td><?php echo $remarks ?></td>
                    </tr>
                </table>
               
            </div>
            
        <div class="c">
            <h2>Student Hard Copy</h2>
            <form method="post" action=""><h3>Print your NoDue Slip<button class="btn" name="download" onclick="window.print();"><strong>Download</strong></button></form></h3>
        </div>
<?php
} else{
header("Location: index.php");
}
?>
    </body>
</html>