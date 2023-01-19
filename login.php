<?php
	session_start();

	require_once'conn.php';
	
    //if(isset($_POST['login'])){
    if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='" . $username . "' AND password='" . $password . "'";
    $result = $mysqli->query($sql);

    if ($result->num_rows) {


        //$_SESSION['username']=$fetch['username'];
        $_SESSION['username'] = $username;
        //echo "<script>alert('Login Successfully!')</script>";
        echo "<script>window.location='homepage.php'</script>";
    }else{
        echo "<script>alert('Invalid Username or Password')</script>";
        echo "<script>window.location='index.php'</script>";
    }

        $result->free_result();
        $mysqli->close();
    }
?>