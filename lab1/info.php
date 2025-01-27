<?php
require "./utils.php";


    function readData($filename){
    $info = file($filename);  # return with array --> each element in array
    # remove empty elements
    $returned_students = [];  # contains valid lines

    foreach($info as $student){
        $student = trim($student); # remove \n 1:ahmed:100
        if ($student != ""){
            $student = explode(":", $student); # convert line to array based on the :
            $returned_students[] = $student;
        }
    }
    return $returned_students;
}       


function drawTable($students){
    echo "<table class='table'>";
    echo "<tr><th> First name</th> <th> Last name</th> 
        <th>Adress</th> <th> gender </th><th> country</th><th> skill</th> <th>SHow</th>  <th>Delete</th></tr>";
    foreach($students as $student) {   #EACH student is array of values

            echo "<tr>";
                foreach ($student as $value) {
                    echo "<td>{$value}</td>";
                }
            echo "<td><a class='btn btn-info'>Show</a></td>";
            echo "<td><a class='btn btn-danger'>delete</a></td>";
            echo "</tr>";

    }

    echo "</table>";


}

generate_title("All students", 1, "red");
$students=  readData('info.txt');
drawTable($students);

?>
<a href="form.php" class="btn btn-primary"> Add new Student </a>
