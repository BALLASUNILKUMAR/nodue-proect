<!DOCTYPE html>
<html>
    <head>
        <title>Student</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "icon" href = "Ct_logo.png" type = "image/x-icon">
        <style>
        body{
             background-image: url('backgroundimg.jpg');
             background-repeat: no-repeat;
             background-size: 100%;
        }
        .form{
            margin-top: 12%;
            margin-left: 40%;
            margin-right: 40%;
            text-align: center;
            padding-top: 35px;
            padding-bottom: 30px;
            border-radius: 20px;
            background-color:rgba(240, 240, 240, 0.4);
            box-shadow: 10px 10px;
        }
        h2{
            color:whitesmoke;
        }
        input{
           
            border-radius: 9px;
            height: 27px;
            text-align: center; 
        }
        ::placeholder {
            color: red;
            opacity: 1;
        }
        button{
            text-align: center;
            border-radius: 15px;
            width: 80px;
            height: 30px;
        }
        .btn:hover{
            background-color: rgba(16, 255, 23, 0.5);
        }
        @media only screen and (max-width:750px){
            .form{
                margin-left: 30px;
                margin-right: 30px;
                margin-top: 160px;
            }
            body{
             background-image: url('');
             background-repeat: no-repeat;
             background-size: 100%;
             background-color:darkseagreen;
            }
            h2{
                color: brown;
            }
        }
        </style>
    </head>
    <body>
        <div class="form">
            <div>
                <img src="Ct_logo.png" alt="" height="135px">
            </div>
            <div>
                <form action="student_validate.php" method="post">
                    <h2>LOGIN</h2>
                    <input class="inp" style=border:none; type="text" name="regid" required placeholder="enter your Registration number" size="25px">
                    <br><br>
                    <button class="btn"  style=border:none;><strong>Submit</strong></button>
                </form>
            </div>
        </div>
    </body>
</html>