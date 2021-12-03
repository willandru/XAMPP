<?php 
include("db.php");
echo 'START OF qUERY'."<br>";

if(isset($_POST['save_task'])){
    
    $title= $_POST['title'];
    $description = $_POST['description'];
    echo 'Guardando ... '."<br>";
    echo $title."<br>";
    echo $description."<br>";


    // SQL::

    $query = "INSERT INTO task(title, description) VALUES('$title', '$description')";
   
    echo "PASO"."<br>";
    
    // $result= mysqli_query($conn, $query);
    $result = trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($conn), E_USER_ERROR);
    
    if($result == null){
        echo 'DB has been connected popo'."<br>";
    }
    echo "vamos ifs"."<br>";
    if(!$result){
        die("Query Failed"."<br>");
    }
    else{
        echo 'NO QUERY'."<br>";
    }

   
}echo 'End OF qUERY'."<br>";

?>