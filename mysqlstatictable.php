<?php

    $connection = mysqli_connect("127.0.0.1","root","","php_test_database");

    //print_r($connection);

    if($connection === false){
        die("Something Went Wrong with your connection : For more information check Error Stack<br>".mysqli_connect_error());
    }

    echo "Connection Created Successfully<br>";
    echo "Connection Host info is as follows <br>".mysqli_get_host_info($connection);

    
    $query = "INSERT INTO users(name,email,password,created_by)VALUE('Harini D','jharinigowda@gmail.com','HaRiNi@123','1')";

    if(mysqli_query($connection,$query)){
        echo "<br>Data has been inserted successfully!";
    }else{
        echo "<br>Data could not be inserted";
        echo "<br>Check Error Trace<br>".mysqli_error($connection);
    }

    mysqli_close($connection);
?> 