<?php
include "save.php";
    if(isset($_POST['submit']));
    {

    $name= $_POST['name'];
    $password=$_POST['password']; 
    $useremail=$_POST['email'];
    $gender= $_POST['gender'];
    // echo $name;
    // echo $email;
    // echo $password;
    // echo $gender;

//    $sql =  "INSERT INTO `userdata` (`user_name`, `user_password`, `user_email`, `gender`) VALUES ( $name, $password, $email, $gender)";

  $sql =  "INSERT INTO `userdata` (`user_name`, `user_password`, `user_email`, `gender`) VALUES ('$name', '$password', '$useremail', $gender)";
//   echo $data;
//   die;
  
//    $result = $conn->query($sql);
   if(mysqli_query($conn, $sql)){
//    if($conn->query($sql) == TRUE){
    echo "inserted data";
    // history.location(index.php);
    header("location: index.php");
   }else{
    echo "Data is not Inserted";
   }
   $conn->close();
}
?>
