<?php
// database connection code
if(isset($_POST['name']))
{
    // $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
    $con = mysqli_connect('localhost', '', '', 'job');

    // get the post records
    $name = $_POST['name'];
    $qualification = $_POST['qualification'];
    $Address = $_POST['Address'];
    $semester = $_POST['semester'];
	$cgpa = $_POST['cgpa'];
    $college = $_POST['college'];
    $experience = $_POST['experience'];
    $skills = $_POST['skills'];
    $Hobbies = $_POST['Hobbies'];
    $company1 = $_POST['comapany1'];
    $company2 = $_POST['comapany2'];
    $company3 = $_POST['comapany3'];
    $company4 = $_POST['comapany4'];
    $status = $_POST['status'];

    // database insert SQL code
    $sql = "INSERT INTO job.applicants(name, qualifictions, Address, semester, cgpa, college, experience, skills, Hobbies, company1, company2, company3, company4, status)
    VALUES ('$name','$qualification', '$Address','$semester','$cgpa','$college','$experience','$skills','$Hobbies','$company1',
    '$company2','$company3','$comapany4','$status')";
    // insert in database
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        $message = 1;
?>

        <html>
        <head>
            <style>
                body{
                    align-items: center;
                    align-items: center;
                    text-align: center;
                    background-color: beige;
                }
            </style>
            <title>Form Data</title>
        </head>
        <body>
            <h1> Application submitted successfully </h1>
        </body>
        </html>

<?php
    }
} else {
    echo "Submitted successfully";
}
?>
