
<!-- <h1> HOLA MUNDO DB</h1> -->

<?php
$conn = mysqli_connect('localhost', 'root', '', 'CRUD-php-mysql');

if(isset($conn)){
    echo 'DB has been connected'."<br>";
}
/* else{
    echo 'DB has NOT been connected';
} */

?>