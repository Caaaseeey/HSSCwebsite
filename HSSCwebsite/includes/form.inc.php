<?php



if (isset($_POST["submit"])){

    require_once 'dbh.inc.php';

  $last_name = $_POST["lname"];
  $first_name = $_POST["fname"];
  $middle_name = $_POST["mname"];
  $suffix_name = $_POST["sname"];
  $home_address = $_POST["haddress"];
  $age_num = $_POST["age"];
  $email_address = $_POST["mail"];
  $verify_emailAddress = $_POST["vemail"];
  $prev_school = $_POST["pschool"];
  $prev_year = $_POST["pyear"];
  $nation_name = $_POST["nationality"];
  $gender_op = $_POST["gender"];
  $birth_place = $_POST["pbirth"];
  $birth_month = $_POST["bmonth"];
  $birth_day = $_POST["bday"];
  $birth_year = $_POST["byear"];
  $rel_name = $_POST["religion"];

  $mother_firstName = $_POST["mfname"];
  $mother_middleName = $_POST["mmname"];
  $mother_lastName = $_POST["mlname"];
  $mother_suffixName = $_POST["msname"];
  $mother_occ = $_POST["moccupation"];
  $mother_conNum = $_POST["mcnum"];

  $father_firstName = $_POST["ffname"];
  $father_middleName = $_POST["fmname"];
  $father_lastName = $_POST["flname"];
  $father_suffixName = $_POST["fsname"];
  $father_occ = $_POST["foccupation"];
  $father_conNum = $_POST["fcnum"];

  $grade_level = $_POST["grade"];

  if(!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
    header("location: ../form.php?error=invalidemail");
    exit();
  }

  else if($email_address !== $verify_emailAddress) {
    header("location: ../form.php?error=emailmismatch");
    exit();
  } else {
    $sql = "SELECT * FROM student WHERE email_address = ?";
    $stmt= mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){

      header("location: ../form.php?error=sqlerror...");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "s", $email_address);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        header("location: ../form.php?error=emailtaken");
        exit();
      }else {
        $sql = "INSERT INTO student(last_name, first_name, middle_name, suffix_name, home_address, age_num, email_address, prev_school,
                      prev_year, nation_name, gender_op, birth_place, birth_month, birth_day, birth_year, rel_name,
                      mother_lastName, mother_firstName, mother_middleName, mother_suffixName, mother_occ, mother_conNum,
                      father_lastName, father_firstName, father_middleName, father_suffixName, father_occ, father_conNum, grade_level)
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                            ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)){
          header("location: ../form.php?error=sqlerror");
          exit();
        }else {
    mysqli_stmt_bind_param($stmt,"sssssisssssssiissssssisssssis", $last_name, $first_name, $middle_name, $suffix_name, $home_address, $age_num, $email_address, $prev_school,
    $prev_year, $nation_name, $gender_op, $birth_place, $birth_month, $birth_day, $birth_year, $rel_name,
    $mother_lastName, $mother_firstName, $mother_middleName, $mother_suffixName, $mother_occ, $mother_conNum,
    $father_lastName, $father_firstName, $father_middleName, $father_suffixName, $father_occ, $father_conNum, $grade_level);
            mysqli_stmt_execute($stmt);
            header("location: ../form.php?error=none");
            exit();
        }
      }
    }


}

      mysqli_stmt_close($stmt);
      mysqli_close($conn);
}
else{
  header("location: ../form.php");
  exit();
}



?>
