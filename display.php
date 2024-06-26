<?php
    include('connect_db.php');

    $sql = "SELECT * FROM stud_grades";
    $result = $conn->query($sql);
?>

<html>
    <head>
        <link rel="stylesheet" href="display_css.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title></title>
    </head>

    <body>
        <div class="table">
            <div class="table_header">
                <p>Student Records</p>

                <div>
                    <a href="insert.php"><button class = "add_new">+ Add Record</button></a>  
                </div>
            </div>
            <div class="table_section">
                <table border = "1">
                    <thead>
                        <tr>
                            <th rowspan= "2">Student Name</th>
                            <th colspan="5">Prelims</th>
                            <th colspan="5">Midterms</th>
                            <th colspan="5">Finals</th>
                            <th rowspan="2">Grade</th>
                            <th rowspan="2">Remark</th>
                            <th rowspan= "2">Actions</th>

                        </tr>
                        <tr>
                            <th>Quiz 1</th>
                            <th>Quiz 2</th>
                            <th>Class Standing</th>
                            <th>Major Exam</th>
                            <th>Prelim Grade</th>
                            <th>Quiz 1</th>
                            <th>Quiz 2</th>
                            <th>Class Standing</th>
                            <th>Major Exam</th>
                            <th>Midterm Grade</th>
                            <th>Quiz 1</th>
                            <th>Quiz 2</th>
                            <th>Class Standing</th>
                            <th>Major Exam</th>
                            <th>Final Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row["stud_name"]; ?></td>
                            <td><?php echo $row["prelims_q1"]; ?></td>
                            <td><?php echo $row["prelims_q2"]; ?></td>
                            <td><?php echo $row["prelims_cs"]; ?></td>
                            <td><?php echo $row["prelims_exam"]; ?></td>
                            <td>
                                <?php 
                                    $prelims_grade = ((($row["prelims_q1"] + $row["prelims_q2"])/2) * .40) + ($row["prelims_cs"] * .10) + ($row["prelims_exam"] *.50);
                                    echo $prelims_grade;
                                ?>
                            </td>

                            <td><?php echo $row["midterms_q1"]; ?></td>
                            <td><?php echo $row["midterms_q2"]; ?></td>
                            <td><?php echo $row["midterms_cs"]; ?></td>
                            <td><?php echo $row["midterms_exam"]; ?></td>
                            <td>
                                <?php 
                                    $midterms_grade = ((($row["midterms_q1"] + $row["midterms_q2"])/2) * .40) + ($row["midterms_cs"] * .10) + ($row["midterms_exam"] *.50);
						            echo $midterms_grade;
                                ?>
                            </td>

                            <td><?php echo $row["finals_q1"]; ?></td>
                            <td><?php echo $row["finals_q2"]; ?></td>
                            <td><?php echo $row["finals_cs"]; ?></td>
                            <td><?php echo $row["finals_exam"]; ?></td>
                            <td>
                                <?php 
                                    $finals_grade = ((($row["finals_q1"] + $row["finals_q2"])/2) * .40) + ($row["finals_cs"] * .10) + ($row["finals_exam"] *.50) ;
                                    echo $finals_grade;
                                ?>
                            </td>
                            <td> 
                                <?php  
						            $grade = (($prelims_grade*.30)+($midterms_grade*.30)+($finals_grade*.40));
						            echo $grade;
				                ?>
                            </td>

                            <td>
                                <?php 
						    	    if($grade>=50){
						    	    	$remarks="Passed";
						    	    	$color="green";
						    	    }else
						    	    {
						    	    	$remarks="Failed";
						    	    	$color="red";
						    	    }
                                
						            echo '<color style="color: '.$color.';">'.$remarks.'</color>';
				                ?>
                            </td>

                            <td>
                            <a href="update.php?id=<?php echo $row["stud_id"]; ?>"><button><i class="fa-solid fa-user-pen"></i></button></a>  
                            <a href="delete.php?id=<?php echo $row["stud_id"]; ?>"><button><i class="fa-solid fa-user-minus"></i></button></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>        
    </body>
</html>