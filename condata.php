
<?php
include_once 'conn.php';

	$name=$_POST['message'];
    $email=$_POST['name'];   
    $subject=$_POST['email'];
    $message=$_POST['subject'];
   
    
      $sql="insert into contact(message,name,email,subject) values('$message','$name','$email','$subject')";
            if ($conn->query($sql) === TRUE) 
            {
                                          echo"

                                                <script>
                                                        alert('your query submited'); 
                                                        window.open('contact.php','_self');

                                                </script>

                                            ";

                                           
                                             
                                        }
                                        else{
                                          echo "error";
                                        }
   
 


?>