<?php
    require_once 'app/init.php';

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        //****************************************Definicion de variables**************************************
            $name           =""; // Nombre remitente
            $email          =""; // ID del correo electrónico del remitente
            $message        =""; // Mensaje del remitente
            $capcha         ="";
            $nameError      =""; 
            $emailError     ="";
            $messageError   ="";
            $captchaError   ="";
            $successMessage ="Email enviado correctamente";
            $sender         ="hola@hola.com.mx"; //Email que recibiar los correos.
            $purpose        ="Contacto";         // Asunto del correo
        //****************************************Fin de Definicion de variables*******************************

        //****************************************Validacion del nombre****************************************
            if (empty($_POST["nombre"])){
                $nameError = "El nombre es necesario";
            }else{
                $nametmp = test_input($_POST["nombre"]);
                                                
                if (preg_match("/^[a-zA-Z ñáéíóúÑÁÉÍÓÚ]*$/",$nametmp)){
                    $name = $nametmp;  
                }else{$nameError = "Exclusivamente letras y espacios en blanco";}
            }
        //****************************************Fin de validacion del nombre*********************************
    
        //****************************************Validacion del email*****************************************
            if (empty($_POST["mail"])){
                $emailError = "El Email es necesario";
            }else{
                $emailtmp = test_input($_POST["mail"]);
                if (filter_var($emailtmp, FILTER_VALIDATE_EMAIL)){
                    $email = $emailtmp;
                }else{ $emailError = "Email Incorrecto";}
            }
        //****************************************Fin validacion del email*************************************

        //****************************************Validacion del mensaje***************************************
            if (empty($_POST["textarea"])){
                $messageError = "El mensaje es necesario";
            }else{
                $messagetmp = test_input($_POST["textarea"]);
                if (preg_match("/^[a-zA-Z 0-9- ñáéíóúÑÁÉÍÓÚ .,;:]*$/",$messagetmp)){
                    $message = $messagetmp;
                }else{ $messageError = "Mensaje Invalido";}
            }
        //****************************************Validacion del mensaje***************************************

        //****************************************Validacion de la capcha**************************************
            if (empty($_POST["g-recaptcha-response"])){
                $captchaError = "Valide que no sea un robot";
            }else{
                $response = $recaptcha->verify($_POST['g-recaptcha-response']);
                if ($response->isSuccess()){
                        $capcha = 'listo';
                }else{$captchaError = "Capcha Invalida";}
            }
        //****************************************Fin Validacion de la capcha**********************************

        //****************************************Envio del correo*********************************************
            if( !($capcha =='') && !($name=='') && !($email=='') && !($purpose=='') && !($message==''))
            {

                //*********************************Texto que se enviara al emisor**************************
                    $headers = "warriorsonline.mx";
                    $msg = "¡Hola! $name Gracias por contactarnos.
                    Nombre : $name
                    Message: $message
                    Esta es una confirmacion de mail.
                    Pronto nos pondremos en conctacto.";
                //*********************************Fin Texto que se enviara al emisor**********************

                //*********************************Texto que se enviara al Receptor************************
                    $header= $name."<". $email .">";
                    $msg1 = " $name Nos ha contactado. Enseguida mas informacion sobre: $name.
                    Name: $name
                    E-mail: $email
                    Purpose: $purpose
                    Message: $message ";
                //*********************************Fin Texto que se enviara al Receptor********************

                /*
                if(mail($email, $headers, $msg ) && mail($sender, $header, $msg1 )){
                    $successMessage = "Mensaje enviado correctamente";
                }
                */
                header('Location: index.php?contactsuccess='.$successMessage);
                exit;
            }
        //****************************************Fin Envio del correo*****************************************

    }

    //****************************************Funcion Limpiar datos de Entrada*****************************
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    //****************************************Fin Funcion Limpiar datos de Entrada*************************
?>