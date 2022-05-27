<?php

     $name = $_POST['name'];
     $email = $_POST['email'];
     $date_of_birth = $_POST['date_of_birth'];
     $gender = $_POST['gender'];
     $country = $_POST['country'];

     $information =    $_POST;
     $data = implode("", $information);

     $filename = "userdata.csv";
     $handle = fopen($filename, "w");
     fwrite($handle, $data);
     fclose($handle);


     print_r( $information);



     

?>