<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="CSS/style.css">
    </head>

    <body>
    <?php  
        $validatefname="";
        $validatelname="";
        $validateage="";
        $validateradio="";
        $validatecheckbox="";
        $validateemail="";
        $validatepwd="";
        $validatefile=""; 
        $L1=$L2=$L3="";  
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $fname=$_REQUEST["fname"];
            $lname=$_REQUEST["lname"];
            $age=$_REQUEST["age"];
            $email=$_REQUEST["email"];
            $pwd=$_REQUEST["pwd"];
            $image=$_REQUEST["file"];
            

            if(empty($fname))
            {
                $validatefname = "Enter your First Name Please!";
            }
            else
            {
                $fname=$_REQUEST["fname"];
                $validatefname = "Your First Name is: ". $fname;
            }

            if(empty($lname))
            {
                $validatelname = "Enter your Last Name Please!";
            }
            else
            {
                $lname=$_REQUEST["lname"];
                $validatelname = "Your Last Name is: ".$lname;
            }

            if(empty($age))
            {
                $validateage= "You must enter your Age!";
            }           
            else
            {
                $age=$_REQUEST["age"];
                $validateage = "Your age is : ".$age;
            }

            if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
            {
                $validateemail="You must enter your email!";
            }
            else
            {
                $validateemail= "Your email is: ".$email;
            }

            if(!preg_match("/(?=.*[@#$%^&+=]).*$/", $pwd)) 
            {
                $validatepwd = "Password atleast contain 1 special character";
            } 
            if(strlen($pwd) < 8) 
            {
                $validatepwd = "Password must contain atleast 8 characters";
            }
            else 
            {
                $validatepwd= "Your password is: ".$pwd."";
            }

            if(!isset($_REQUEST["lan1"])&&!isset($_REQUEST["lan2"])&&!isset($_REQUEST["lan3"]))
            {
                $validatecheckbox = "please select at least one of the three Languages";
        
            }
            else
            {
                $validatecheckbox = "Your Prefered Languages are: ";

                if(isset($_REQUEST["lan1"]))
                {
                    $L1=" ". $_REQUEST["lan1"];
                }
                if(isset($_REQUEST["lan2"]))
                { 
                    $L2=" ". $_REQUEST["lan2"];
                }
                if(isset($_REQUEST["lan3"]))
                {
                    $L3=" ".$_REQUEST["lan3"];
                }
            }

            if(isset($_REQUEST["r1"]))
            {
                $validateradio= "You are: ". $_REQUEST["r1"];
            }
            else
            {
                $validateradio= "please select one of the Designations";
            } 
        }               
        ?>

        <div class="header">
            <h2>ABC Mangement System</h2>
            <h4>We Create Future</h4>
        </div>

        <div class="nav">
            <a class="activate" href="#home">Home</a>
            <a href="#about us">About US</a>
            <a href="#shop">Shop</a>
        </div>
            
        <div class = "registration">  
            <h2>
                Registration From
            </h2>
        </div>
        <hr>
        
        <form action="" method="POST">
            <table>
                <tr>
                    <td class="table"><label for="fname" >First Name:</label></td>                       
                    <td class="table"><input type="text" id="fname" name="fname"></td>
                                                      
                </tr>
                <tr>
                    <td class="table"><label for="lname">Last Name:</label></td>                       
                    <td class="table"><input type="text" id="lname" name="lname" ></td>                                     
                </tr>
                <tr>
                    <td class="table"><label for="age">Age:</label></td>                       
                    <td class="table"><input type="text" id="age" name="age"></td>                                    
                </tr>
                <tr>
                    <td class="table"><label for="designation">Designation:</label></td>                       
                    <td class="table">
                        <input type="radio" id="jp" name="r1" value="Junior Programmer">
                        <label for="jp">Junior Programmer</label>
                        <input type="radio" id="sp" name="r1" value="Senior Programmer">
                        <label for="sp">Senior Programmer</label>
                        <input type="radio" id="pl" name="r1" value="Project Lead">
                        <label for="pl">Project Lead</label>
                    </td>
                                                                                                          
                </tr>
                <tr>
                    <td class="table"><label for="prflan">Prefered Language:</label></td>
                    <td class="table">
                        <input type="checkbox" id="lan1" name="lan1" value="JAVA">
                        <label for="lan1">JAVA</label>
                        <input type="checkbox" id="lan2" name="lan2" value="PHP">
                        <label for="lan2">PHP</label>
                        <input type="checkbox" id="lan3" name="lan3" value="C++">
                        <label for="lan3">C++</label>
                    </td>
                    
                </tr>
                <tr>
                    <td class="table"><label for="email">Email:</label></td>                       
                    <td class="table"><input type="email" id="email" name="email"></td>                                  
                </tr>
                <tr>
                    <td class="table"><label for="pwd">Password:</label></td>                       
                    <td class="table"><input type="password" id="pwd" name="pwd"></td>                                  
                </tr>  
                <tr>
                    <td class="table"><label for="file">Please choose a file</label></td>
                    <td class="table"><input type="file" id="file" name="file"></td> <?php echo $validatefile; ?>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit" id="submit">
                    <input type="reset" id="reset"></td>
                </tr>
            </table>           
        </form>       
    </body>
</html>