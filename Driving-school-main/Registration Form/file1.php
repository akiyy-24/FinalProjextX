<?php 
$fullname = $_POST['fullname'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$bdate = $_POST['bdate'];
$email = $_POST['email'];
$mnumber = $_POST['mnumber'];
$gender = $_POST['gender'];
$occupation = $_POST['occupation'];
$idtype = $_POST['idtype'];
$idnumber = $_POST['idnumber'];
$isdate = $_POST['isdate'];
$address = $_POST['address'];
$nationality = $_POST['nationality'];
$district = $_POST['district'];

// Assigning gender
if ($gender == 'Male') {
    $ngender = 'male';
} elseif ($gender == 'Female') {
    $ngender = 'female';
} else {
    $ngender = 'other';
}

// Assigning ID type
if ($idtype == 'new') {
    $nidtype = 'new';
} else {
    $nidtype = 'old';
}

// Create MySQL connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO customer(Full_Name, First_Name, Last_Name, Birth_Date, Email, Mob_Number, Gender, Occupation, ID_Type, ID_Number, Issued_Date, Address, Nationality, District) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssssss", $fullname, $fname, $lname, $bdate, $email, $mnumber, $ngender, $occupation, $nidtype, $idnumber, $isdate, $address, $nationality, $district);
    $stmt->execute();
    echo "Registration Successful.....";
    $stmt->close();
    $conn->close();
}
?>
