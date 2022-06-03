<?php             
                    $name=$_POST['name'];
                    $last_name=$_POST['last_name'];
                    $email=$_POST['email'];
                    $tel=$_POST['tel'];
                    $extrainfo=$_POST['extrainfo'];    

                    $email_from = 'example01734@gmail.com';
                    $email_subject = 'Confirmación formulario';
                    $email_body = "¡Gracias por rellenar el formulario, en breve nos pondremos en contacto contigo!"

                    $to = $email;
                    $headers = "De: example01734@gmail.com \r\n";
                    $headers .= "En respuesta a: $email \r\n" 
                    mailto($to,$email_subject,$email_body,$headers);

                      
?>