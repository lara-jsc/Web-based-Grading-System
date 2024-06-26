<?php
    include('connect_db.php');

    $sql = "SELECT * FROM stud_grades WHERE stud_id=  ".$_GET['id'];
    $result = $conn->query($sql);
    
    while($row = $result->fetch_assoc()) { 
        $id = $row["stud_id"];
        $stud_name=$row["stud_name"];

        $prelims_q1 = $row["prelims_q1"];
        $prelims_q2 = $row["prelims_q2"];
        $prelims_cs = $row["prelims_cs"];
        $prelims_exam = $row["prelims_exam"];
    
        $midterms_q1 =$row ["midterms_q1"];
        $midterms_q2 =$row ["midterms_q2"];
        $midterms_cs =$row ["midterms_cs"];
        $midterms_exam = $row["midterms_exam"];
    
        $finals_q1 = $row["finals_q1"];
        $finals_q2 = $row["finals_q2"];
        $finals_cs = $row["finals_cs"];
        $finals_exam = $row["finals_exam"];
    }

?>

<html>
    <head>
     
        <title>

        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="insert_css.css">
    </head>

    <body>
        <div class="container">
                <div class="row justify-content-center align-items-center inner-row">
                    <div class="col-md-5">
                        <div class="form-box p-5">
                            <h2 class="fw-bold md-3">Update a Record</h2>
                            
                        </div>
                        <form action="update_record.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id ; ?>">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Student Name" value="<?php echo $stud_name; ?>" id="floatingInput" name="stud_name">
                                <label for="floatingInput">Student Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Prelim Quiz 1" value="<?php echo $prelims_q1; ?>" id="floatingInput" name="prelims_q1" >
                                <label for="floatingInput">Prelim Quiz 1</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Prelim Quiz 2" value="<?php echo $prelims_q2; ?>"id="floatingInput" name="prelims_q2">
                                <label for="floatingInput">Prelim Quiz 2</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Prelim Class Standing" value="<?php echo $prelims_cs; ?>" id="floatingInput" name="prelims_cs">
                                <label for="floatingInput">Prelim Class Standing</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Prelim Major Exam" value="<?php echo $prelims_exam; ?>" id="floatingInput" name="prelims_exam">
                                <label for="floatingInput">Prelim Major Exam</label>
                            </div>
                            
            
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Midterm Quiz 1" value="<?php echo $midterms_q1?>" id="floatingInput" name="midterms_q1">
                                <label for="floatingInput">Midterm Quiz 1</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Midterm Quiz 2" value="<?php echo $midterms_q2?>" id="floatingInput" name="midterms_q2">
                                <label for="floatingInput">Midterm Quiz 2</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Midterm Class Standing" id="floatingInput" value="<?php echo $midterms_cs?>" name="midterms_cs">
                                <label for="floatingInput">Midterm Class Standing</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Midterm Major Exam"  value="<?php echo $prelims_exam?>" id="floatingInput" name="midterms_exam">
                                <label for="floatingInput">Midterm Major Exam</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Final Quiz 1" value="<?php echo $finals_q1?>" id="floatingInput" name="finals_q1">
                                <label for="floatingInput">Final Quiz 1</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Final Quiz 2" value="<?php echo $finals_q2?>" id="floatingInput" name="finals_q2">
                                <label for="floatingInput">Final Quiz 2</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Final Class standing" value="<?php echo $finals_cs?>" id="floatingInput" name="finals_cs">
                                <label for="floatingInput">Final Class Standing</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" placeholder="Final Major Exam" value="<?php echo $finals_exam?>" id="floatingInput" name="finals_exam">
                                <label for="floatingInput">Final Major Exam</label>
                            </div>

                            <div class="mt-3 text-center">
                                <input type="submit" name="submit" value="Submit" class = "btn btn-primary">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
    </body>
</html>