<?php 
     $fullname=$_POST['fullname'];
     $fname=$_POST['fname'];
     $lname=$_POST['lname'];
     $bdate=$_POST['bdate'];
     $emeil=$_POST['email'];
     $mnumber=$_POST['mnumber'];
     $gender=$_POST['gender'];
     $occupation=$_POST['occupation'];
     $idtype=$_POST['idtype'];
     $idnumber=$_POST['idnumber'];
     $isdate=$_POST['isdate'];
     $address=$_POST['adress'];
     $nationality=$_POST['nationality'];
     $district=$_POST['district'];

     if($gender=='male'){
        $ngender='male';
     }
     if else($gender=='female'){
        $ngender='female';
     }
     else{
        $ngender='other';
     }

     if($idtype=='new'){
        $nidtype='new';
     }
     else{
        $nidtype='old';
    }

    $conn=new mysql('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into customer(Full_Name,First_Name,Last_Name,Birth_Date,Email,Mob_Number,Gender,Occupation,ID_Type,ID_Number,Issued_Date,Address,Nationality,District) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssi",$fullname,$fname,$lname,$bdate,$emeil,$mnumber,$gender,$occupation,$idtype,$idnumber,$isdate,$address,$nationality,$district);
        $stmt->execute();
        echo "Registration Successfull.....";
        $stmt->close();
        $conn->close();
    }
?>
