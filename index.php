
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="background-color: sandybrown;background-size: 12px;margin-left:250px;margin-right:190px;margin-bottom:12px">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div style="text-align: center;">
                 <h1 style="color:azure">COLLEGE INFORMATION </h1>
                                   <div id="name">
                                        <label style="font-size: 45px;">Name:</label><br>
                                        <input type="text" name="name" placeholder="Enter your name here " style="width: 200px;height:30px" >
                                    </div>
                                    <div id ="date_define">
                                        <label style="font-size: 45px;">Date of Joining</label><br>
                                        <input type="date" name="date_define" placeholder="Enter the date of joining" style="width: 200px;height:30px">
                                    </div>
                                    <div>
                                        <label style="font-size: 45px;">Address</label><br>
                                        <textarea name="address" rows="4" cols="30"></textarea>
                                    </div>
                                    <div>
                                        <label for="department" style="font-size: 45px">Department</label><br>
                                        <select  name="department" style="width: 200px;font-size: 36px; height: 45px;">
                                            <option value="IT" selected>IT</option>
                                            <option value="CSE" >CSE</option>
                                            <option value="ECE" >ECE</option>
                                            <option value="MECH">MECH</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="number" style="font-size: 45px">Phone number</label><br>
                                        <input type="number" name="number" style="width:250px;height:35px" id="number">
                                    </div>
                                    <div>
                                        <label for="Gender" style="font-size: 45px">Gender</label><br>
                                        <input type="radio"  name="gender" value="male" required>
                                        <label>male</label>
                                        <input type="radio" name="gender" value="female" required>
                                        <label>Female</label>
                                    </div>
                                    <div>
                                        <label for="Blood" style="font-size: 45px">Blood Group</label><br>
                                        <select id="Blood" name="Blood" style="width: 200px;height:30px">
                                            <option value="A+">A+ postive</option>
                                            <option value="A-">A- Negative</option>
                                            <option value="B+">B+ postive</option>
                                            <option value="B-">B- Negative</option>
                                            <option value="C+">C+ postive</option>
                                            <option value="C-">C- Negative</option>
                                            <option value="O+" selected>O+ postive</option>
                                            <option value="O-">O- Negative</option>
                                            <option value="AB+">AB+ postive</option>
                                            <option value="AB-">AB- Negative</option>
                                        </select>
                                    </div>
                                    <div style="margin-top: 12px;">
                                        <input type="submit"  name="submit" style="background-color:green;width: 90px;font-size:larger">
                                    </div>
            </div>
        </form>
    </div>

    
                        <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "College";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Get data from HTML form
                    $name = $_POST['name'];
                    $date_of_joining = $_POST['date_define'];
                    $address = $_POST['address'];
                    $department = $_POST['department'];
                    $phone_number = $_POST['number'];
                    $gender = $_POST['gender'];
                    $blood_group = $_POST['Blood'];

                    // Insert data into database
                    $sql = "INSERT INTO Staff (name, date_of_joining, address, department, phone_number, gender, blood_group)
                    VALUES ('$name', '$date_of_joining', '$address', '$department', '$phone_number', '$gender', '$blood_group')";

                    if (mysqli_query($conn, $sql)) {
                        echo "Data inserted successfully";
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }

                    // Close connection
                    mysqli_close($conn);
                    ?>


</body>
</html>

