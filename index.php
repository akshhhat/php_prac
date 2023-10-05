<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <u>
        <h1 class="form">Form </h1>
    </u>

    <form action="create.php" method="post">
        <!-- <h2> Name</h2>
        <input class="input" type="text" placeholder="Enter Your Name"> -->
        <label for="name" class="name">Name:</label>
        <input type="text" id="name" name="name">
        <br>
        <br>
        <label for="password" class="pass">Password :</label>
        <input type="password" id="password" name="password">
        <br>
        <br>
        <label for="email" class="email">Email :</label>
        <input type="email" id="email" name="email">
        <br><br>
        <label for="gender" class="gender">Gender :</label>
        <input type="radio" name="gender" value="1">
        <span id="male">Male</span>
        <input type="radio" name="gender" value="2">
        <span id="female">female</span>

        <br><br>
        <!-- <label for="Courses" class="gender">Courses : </label> -->
        <!-- <input type="checkbox" class="courses" name="courses"> C 
        <span id="c"> C</span><input type="checkbox">
        <span id="java"> Java</span><input type="checkbox">
        <span id="js"> JS</span> -->
        <!-- <br> -->

        <button type="reset" class="button">Reset</button>
        <button type="submit" class="button">Submit</button>
        
    </form>

    <br><br>

  


<?php
include "save.php";
$query = "SELECT * FROM userdata";
$result = $conn->query($query);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<table>
  <tr>
    <th>Sno.</th>
    <th>Name</th>
    <th>password</th>
    <th>Email</th>
    <th>gender</th>
    <th> Edit</th>
    <th> Delete</th>
  </tr>
  

<?php 
while ($row = $result->fetch_assoc()) {

    echo "<tr>";  
    echo "<td> echo $row </td>";  
    // echo "<td>" .$x*$x. "</td>";  
    // echo "</tr>";  
    $row++;  
    // Access data using column names
    // $column1_value = $row["user_name"];
    // $column2_value = $row["user_password"];
    // $column3_value = $row["user_email"];
    // $column4_value = $row["gender"];

    

    // // You can echo or process the data as needed
    // echo "Column 1: " . $column1_value . "<br>";
    // echo "Column 2: " . $column2_value . "<br>";
    // echo "Column 3: " . $column3_value . "<br>";
    // echo "Column 4: " . $column4_value . "<br>";

//     <tr>
//     <td>1.</td>
//     <td></td>
//     <td>pass</td>
//     <td>agrawal.akshatofficial@gmail.com</td>
//     <td>male </td>
//     <td><button>Edit</button></td>
//     <td><button>Delete</button></td>
    
//   </tr>
//   </table>
}
// Close the result set
$result->close();

// Close the database connection
$conn->close();
   ?>
</body>

</html>