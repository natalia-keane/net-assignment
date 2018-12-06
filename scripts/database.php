<?php print('<?xml version= "1.0" encoding = "utf-8"?>')
//620077636?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$servername = "localhost";
$username = "comp2190SA";
$password = "2018Sem1";
$dbname = "CourseMgmtDB";
$codes = "/^[0-9]{4}$/";
$sem = "/^[1-3]{1}$/";
$disc = "/^[a-zA-Z]{4}$/";
$sql = "";
$discipline= $code= $title= $level= $credits= $aid= $semester = "";


//print_r($_POST);
if ($_SERVER["REQUEST_METHOD"]=="POST"){
  if (empty($_POST["Course_Discipline"])) {
    $discErr = "Course Discipline is required";
  } else {
    //used to test the regular expression against the variable received,
    if(preg_match("/^[a-zA-Z]{4}$/", $discipline)=="0"){
      $discipline= test_data($_POST["Course_Discipline"]);
    }
  }

  if (empty($_POST["Course_Code"])) {
    $codeErr = "Course Code is required";
  } else {
    //used to test the regular expression against the variable received
    if (preg_match($codes, $code,$matches)=="0"){
    $code= test_data($_POST["Course_Code"]);
    }
  }

  if (empty($_POST["Course_Title"])) {
    $titleErr = "Course Title is required";
  } else {
    $title= test_data($_POST["Course_Title"]);
  }

  if (empty($_POST["Level"])) {
    $levelErr = "Level is required";
  } else {
    $level=test_data($_POST["Level"]);
  }
  if (empty($_POST["Credits"])) {
    $creditsErr = "Credits is required";
  } else {
    if($credits>"0" && $credits<"9"){
      $credits=test_data($_POST["Credits"]);
    }
  }
  if(["AuthorID"]!="0"){
    $aid=$_POST["AuthorID"];
  }
  else{
    $aidErr = "Author ID is required";
  }
  //used to test the regular expression against the variable received
  if (empty($_POST["Semester_Offered"])) {
    $semErr = "Semester is required";
  } else {

    if(preg_match($sem, $semester,$matches)=="0"){
      //, $matches
        $semester=test_data($_POST["Semester_Offered"]);
    }
  }
  echo $discipline, $code, $title, $level, $credits, $aid, $semester;
}
//print_r($matches);

try {
// Create database
    $db= new PDO("mysql:dbname=CourseMgmtDB; host=localhost", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql ="CREATE DATABASE IF NOT EXISTS CourseMgmtDB";
    // creates the database for the first time :$sql = "CREATE DATABASE CourseMgmtDB";
//Create Table
  $sql ="CREATE TABLE Courses (
     id INT AUTO_INCREMENT,
     discipline VARCHAR(8),
     code VARCHAR(8),
     title VARCHAR(64),
     level INT,
     credits INT,
     AuthorID INT,
     semester INT,
     PRIMARY KEY(id))";

//insert data
  $sql = "INSERT INTO CourseMgmtDB (discipline, code, title, level, credits, AuthorID, semester)
    VALUES ($discipline, $code, $title, $level, $credits, $aid, $semester)";
    // use exec() because no results are returned
    $db->exec($sql);
    $last_id = $db->lastInsertId();
    echo "Database created successfully<br>";
    echo "Table MyGuests created successfully";
    echo "New record created successfully";
    }
    catch(PDOException $ex)
    {
      echo $sql . "<br>" . $ex->getMessage();
    }

    $db = null;
    function test_data($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }


 ?>
 <head>
   <link href="Styles/p1a.css" rel="stylesheet" type="text/css"/>
 </head>
 <body>
   <?php
   echo"<table>";
   echo"<tbody>";
   echo "<tr>";
    echo"<th> Discipline </th>";
     echo"<th> Code </th>";
     echo"<th> Title </th>";
     echo"<th> Level </th>";
     echo"<th> Semester </th>";
     echo"<th> Credits </th>";
     echo"<th> Author ID </th>";
  echo "</tr>";
  echo "<tr>";
   echo"<td>".$discipline." </td>";
    echo"<td>".$code." </td>";
    echo"<td>".$title." </td>";
    echo"<td>".$level." </td>";
    echo"<td>".$semester." </td>";
    echo"<td>".$credits." </td>";
    echo"<td>".$aid." </td>";
 echo "</tr>";
 echo"</tbody>";
 echo"</table>";

   ?>
 </body>
 </html>
