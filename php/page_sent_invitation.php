
        <div class="ContainerMiddle">
        <style type="text/css">

        .footer,
        .ContainerRight
        {
            display: none !important;
        }
        </style>

        <div class="Uploder">
            <div class="UploderContent">
            <h1>
                Upload your track
            </h1>
                <?php
                    if( (isset($_POST["email"]) ) ){
                        //Tomo variables
                        $email = htmlspecialchars($_POST["email"]);

                        //Variables para envio de mail
                        $para = "music4deejays@hotmail.com";
                        $asunto = "Music4deejays";
                        $mensaje .= "Email: ".$email."\r\n";
                        $cabeceras = 'From: Invitation Music4deejays <info@music4deejays.com>';

                        if (mail($para, $asunto, $mensaje, $cabeceras)){
                    ?> 
                        <h1 style="color:#40d100;">
                            Contact form sent
                        </h1>
                        <p>
                            Thank you very much for sending us your message. We'll send you an email as soon as possible.
                        </p>
                        <p>
                            Landcreativa
                        </p> 
                    <?php 
                        } else{
                    ?>

                        <h1 style="color:#fb0b0b;">
                            We couldn't send your request
                        </h1>
                        <p>
                            Ups!!! There was a problem with your email. Please send it again, and if the error persisten, please notify us by email: <u>info@landcreativa.com</u>
                        </p>

                        
                        <form target="_blank" action="sent_invitation.php" method="post" class="formulario">
                          <input type="email" name="name" placeholder="Write your email" required />
                          <input type="submit" value="Request invitation" />
                        </form>

                    <?php 
                        }
                    }
                    else {
                    ?>
                        
                        <form target="_blank" action="sent_invitation.php" method="post" class="formulario">
                          <input type="email" name="name" placeholder="Write your email" required />
                          <input type="submit" value="Request invitation" />
                        </form>
                <?php
                    }
                ?>
            </div>      
        </div> 