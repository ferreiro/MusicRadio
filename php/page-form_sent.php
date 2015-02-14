
    <?php get_header(); ?>

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
                    if( (isset($_POST["song_title"])) and (isset($_POST["email"])) and (isset($_POST["download_link"])) ){
                        //Tomo variables
                        $song_title = htmlspecialchars($_POST["song_title"]);
                        $email = htmlspecialchars($_POST["email"]);
                        $download_link = htmlspecialchars($_POST["download_link"]);

                        //Variables para envio de mail
                        $para = "music4deejays@hotmail.com";
                        $asunto = "Music4deejays";
                        $mensaje = "Song title: ".$song_title."\r\n";
                        $mensaje .= "Email: ".$email."\r\n";
                        $mensaje .= "Download link: ".$download_link."\r\n";
                        $cabeceras = 'From: Canción Music4deejays <info@music4deejays.com>';

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

                        
                        <form action="/#/form_sent.php" method="post">

                            <div class="UploaderInput">
                                <div class="UploaderInputLeft">
                                    <p>Song Title</p>
                                </div>
                                <div class="UploaderInputRight">
                                    <input type="text" name="song_title" placeholder="Song Title" requiered autofocus />
                                </div> 
                            </div>
                            <div class="UploaderInput">
                                <div class="UploaderInputLeft">
                                    <p>Download link to the song</p>
                                </div>
                                <div class="UploaderInputRight">
                                    <input type="text" name="download_link" placeholder="Download link: Mega, zippyshare, dropbox, drive..." requiered autofocus />
                                </div>  
                            </div> 
                            <div class="UploaderInput">
                                <div class="UploaderInputLeft">
                                    <p>Email</p>
                                </div>
                                <div class="UploaderInputRight">
                                    <input type="email" name="email" requiered autofocus placeholder="Your email " >
                                </div> 
                            </div>  
                            <div class="UploaderInput" style="margin-top:-27px;"> 
                                <input type="submit" value="Upload track">
                            </div>  
                        
                        </form>

                    <?php 
                        }
                    }
                    else {
                    ?>
                        
                        <form action="form_sent.php" method="post">

                            <div class="UploaderInput">
                                <div class="UploaderInputLeft">
                                    <p>Song Title</p>
                                </div>
                                <div class="UploaderInputRight">
                                    <input type="text" name="song_title" placeholder="Song Title" requiered autofocus />
                                </div> 
                            </div>
                            <div class="UploaderInput">
                                <div class="UploaderInputLeft">
                                    <p>Download link to the song</p>
                                </div>
                                <div class="UploaderInputRight">
                                    <input type="text" name="download_link" placeholder="Download link: Mega, zippyshare, dropbox, drive..." requiered autofocus />
                                </div>  
                            </div> 
                            <div class="UploaderInput">
                                <div class="UploaderInputLeft">
                                    <p>Email</p>
                                </div>
                                <div class="UploaderInputRight">
                                    <input type="email" name="email" requiered autofocus placeholder="Your email " >
                                </div> 
                            </div>  
                            <div class="UploaderInput" style="margin-top:-27px;"> 
                                <input type="submit" value="Upload track">
                            </div>  
                        
                        </form>
                <?php
                    }
                ?>
            </div>      
        </div>

    </div>
    </div><!-- Fin ajax left -->
 
 
<?php get_footer(); ?>
