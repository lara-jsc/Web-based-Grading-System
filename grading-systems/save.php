<?php
    include('connect_db.php');
    
    $stud_name=$_POST['stud_name'];

    $prelims_q1=$_POST['prelims_q1'];
    $prelims_q2=$_POST['prelims_q2'];
    $prelims_cs=$_POST['prelims_cs'];
    $prelims_exam=$_POST['prelims_exam'];

    $midterms_q1=$_POST['midterms_q1'];
    $midterms_q2=$_POST['midterms_q2'];
    $midterms_cs=$_POST['midterms_cs'];
    $midterms_exam=$_POST['midterms_exam'];

    $finals_q1=$_POST['finals_q1'];
    $finals_q2=$_POST['finals_q2'];
    $finals_cs=$_POST['finals_cs'];
    $finals_exam=$_POST['finals_exam'];

    $sql = "INSERT INTO stud_grades (stud_id, stud_name, prelims_q1, prelims_q2, prelims_cs, prelims_exam, midterms_q1, midterms_q2, midterms_cs, midterms_exam, finals_q1, finals_q2, finals_cs, finals_exam)
                         VALUES (NULL, '".$stud_name."', '".$prelims_q1."', '".$prelims_q2."', '".$prelims_cs."', '".$prelims_exam."', '".$midterms_q1."', '".$midterms_q2."', '".$midterms_cs."', '".$midterms_exam."', '".$finals_q1."', '".$finals_q2."', '".$finals_cs."', '".$finals_exam."')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Location: display.php");
?>