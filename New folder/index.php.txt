<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=aiub', 'root', '');
// See the "errors" SQl...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// ///
if(isset($_POST['insert_data'])){
$sql = "INSERT INTO New_Students (name1, name2,email, gender,phoneNumber,birth_date,hsc,ssc,course,year1,session1)
VALUES (:name1, :name2,:email, :gender,:phoneNumber,:birth_date,:hsc,:ssc,:course,:year1,:session1)";
$stmt = $pdo->prepare($sql);
$stmt->execute(array(
':name1' => $_POST['name1'],
':name2' => $_POST['name2'],
':email' => $_POST['email'],
':gender' => $_POST['gender'],
':phoneNumber' => $_POST['phoneNumber'],
':birth_date' => $_POST['birth_date'],
':hsc' => $_POST['hsc'],
':ssc' => $_POST['ssc'],
':course' => $_POST['course'],
':year1' => $_POST['year1'],
':session1' => $_POST['session1']));

echo "Inerted Data ";

}
else{
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIUB Information</title>
</head>
<body>
<h1>Please fill up the form</h1>
        <form method="post" action="index.php">
            <table>
                <tr>    
                    <td>First Name</td>
                    <td><input type="text" name="name1" required></td>
                    
                </tr>
                <tr>    
                    <td>Last Name</td>
                    <td><input type="text" name="name2" required></td>
                    
                </tr>
                <tr>    
                    <td>Email</td>
                    <td><input type="email" name="email" required></td>
                    
                </tr>
                <tr>    
                    <td>Gender</td>
                    <td>
                    <select name="gender" id="">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    
                    </td> 
                </tr>
                <tr>    
                    <td><label for="start">Mob No:</label></td>
                    <td><input type="text" id="start" name="phoneNumber" placeholder="enter numbers" required ></td>                    
                </tr>
                <tr>    
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                    
                </tr>
               
                <tr>    
                    <td><label for="start">Date OF Birth:</label></td>

                    <td><input type="date" name="birth_date" placeholder="enter numbers" required></td>
                    
                </tr>
            
                <tr>    
                    <td>HSC result</td>
                    <td><input type="text" name="hsc" required></td>
                    
                </tr>
                <tr>    
                    <td>SSC result</td>
                    <td><input type="text" name="ssc" required></td>
                    
                </tr>
            
                
                <tr>   
                    <td>Select a course you want to enroll:</td>
                    <td>
                    <select name= "course" id="">
                    <option value="PL1">PL1</option>
                    <option value="PL2">PL2</option>
                    <option value="Web tech">Web Tech</option>
                    <option value="Algorithm" selected>Algorithm</option>
                    </select>
                    </td>
                    
                </tr>
                <tr>   
                    <td>Choice a year to enroll:</td>
                    <td>
                    <select name= "year1" id="">
                    <option value="y1">2021</option>
                    <option value="y2">2022</option>
                    <option value="y3">2019</option>
                    </select>
                    </td>
                    
                </tr>
                <tr>   
                    <td>Choice a session to enroll:</td>
                    <td>
                    <select name= "session1" id="">
                    <option value="summer">Summer</option>
                    <option value="spring">Spring</option>
                    <option value="Fall">Fall</option>
                 
                    </select>
                    </td>
                    
                </tr>

                <!-- /// -->
                <tr>   
                    <td><input type="submit" name="insert_data" value="Insert Data"></td>
                    
                </tr>
            </table>
        </form>
        
        
</body>
</html>
