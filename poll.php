<?php
//poll.php
include('database_connection.php');
if(isset($_POST["q2_option"]))
{
	$query = "
	INSERT INTO tbl_q2 
	(q2_choices) VALUES (:q2_choices)
	";
	$data = array(
		':q2_choices'		=>	$_POST["q2_option"]
	);
	$statement = $connect->prepare($query);
	$statement->execute($data);
}
?>

<?php
//poll.php
include('database_connection.php');
if(isset($_POST["q1_option"]))
{
    $query = "
    INSERT INTO tbl_q1 
    (q1_choices) VALUES (:q1_choices)
    ";
    $data = array(
        ':q1_choices'        =>  $_POST["q1_option"]
    );
    $statement = $connect->prepare($query);
    $statement->execute($data);
}
?>

<?php
//poll.php
include('database_connection.php');
if(isset($_POST["q3_option"]))
{
    $query = "
    INSERT INTO tbl_q3 
    (q3_choices) VALUES (:q3_choices)
    ";
    $data = array(
        ':q3_choices'        =>  $_POST["q3_option"]
    );
    $statement = $connect->prepare($query);
    $statement->execute($data);
}
?>

<?php
//poll.php
include('database_connection.php');
if(isset($_POST["q4_option"]))
{
    $query = "
    INSERT INTO tbl_q4 
    (q4_choices) VALUES (:q4_choices)
    ";
    $data = array(
        ':q4_choices'        =>  $_POST["q4_option"]
    );
    $statement = $connect->prepare($query);
    $statement->execute($data);
}
?>

<?php
//poll.php
include('database_connection.php');
if(isset($_POST["q5_option"]))
{
    $query = "
    INSERT INTO tbl_q5 
    (q5_choices) VALUES (:q5_choices)
    ";
    $data = array(
        ':q5_choices'        =>  $_POST["q5_option"]
    );
    $statement = $connect->prepare($query);
    $statement->execute($data);
}
?>

<?php
//poll.php
include('database_connection.php');
if(isset($_POST["q6_option"]))
{
    $query = "
    INSERT INTO tbl_q6 
    (q6_choices) VALUES (:q6_choices)
    ";
    $data = array(
        ':q6_choices'        =>  $_POST["q6_option"]
    );
    $statement = $connect->prepare($query);
    $statement->execute($data);
}
?>



