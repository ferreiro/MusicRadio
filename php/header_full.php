<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <link href="//www.google-analytics.com" rel="dns-prefetch">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <meta name="mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta charset="utf-8" />

    <meta name="bitly-verification" content="a6efe32a8aaf"/>

    <?php if (is_home()): ?>
      <title>Music4deejays </title>
      <meta content="<?php bloginfo('description'); ?>" name="description" />
    <?php else: ?>
      <?php $category = get_the_category(); ?>
      <title><?php the_title(); ?> <?php echo $category[0]->cat_name; ?> - <?php the_field('author'); ?> - Music4deejays</title>
      <meta content="<?php the_title(); ?> - <?php the_field('author'); ?> - Music4deejays" />
      <meta name="keywords" content="<?php the_tags(' ',' ',' '); ?>" />
    <?php endif; ?>

    <link rel="publisher" href="https://plus.google.com/111741852414956814118"/>

    <!--     
     <link rel="publisher" href="https://plus.google.com/b/111741852414956814118/111741852414956814118/"/>
     <meta property="og:locale" content="es_ES" />
     <meta property="og:type" content="website" />
     <meta property="og:title" content="Check this! via @Music4deejays" />
     <meta property="og:url" content="http://music4deejays.com/clarity-spear-go-hard-ramy-morsy-mashup-sick-individuals-zedd-ftampa-steve-forest-vs-quintino/" />
     <meta property="og:site_name" content="MUSIC4DEEJAYS" />
     <meta property="article:publisher" content="https://www.facebook.com/music4deejays" />
     <meta property="fb:admins" content="130729293804790" />

     -->    

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/static/favicons/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="<?php echo get_template_directory_uri(); ?>/static/favicons/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="<?php echo get_template_directory_uri(); ?>/static/favicons/favicon-196.png">
    <link rel="icon" type="image/png" sizes="160x160" href="<?php echo get_template_directory_uri(); ?>/static/favicons/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/static/favicons/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="<?php echo get_template_directory_uri(); ?>/static/favicons/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/static/favicons/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/static/favicons/favicon-16.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/static/favicons/favicon-152.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/static/favicons/favicon-144.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/static/favicons/favicon-120.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/static/favicons/favicon-114.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/static/favicons/favicon-76.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/static/favicons/favicon-72.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/static/favicons/favicon-57.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/static/favicons/favicon-144.png">
    <meta name="msapplication-config" content="/browserconfig.xml">

    <?php wp_head(); ?> 

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style_min.css" />

</head>
<body <?php body_class(); ?>>
  


      <div class="loader" id="loading" style="display: none;">
        <div class="loaderGif"></div>
      </div>

      <section class="modal" id="modalProfile">

        <div class="modalBox">
          <div class="modalBoxClose" onclick="event.preventDefault(); $('.modal').fadeToggle('fast');">
            <a href="#" class="icon-close"></a>
          </div>
          <h4>
            Sign up <span>or sign in</span>
          </h4>
          <p>
            Hey! This feature is on <strong>Beta</strong>. If you'd like to get an  <u>early access</u> to it, please give us your email and we'll send you an invitation.
          </p>
          <p class="invitation">
            <a href="#" onclick="event.preventDefault(); $('#formularioInvitacion').show();  ">Request invitation!</a>
          </p>
<!--           <div class="betaForm">
            <form target="_blank" action="sent_invitation.php" method="post" class="formulario">
              <input type="email" name="name" placeholder="Write your email" required />
              <input type="submit" value="Request invitation" />
            </form>
          </div> -->
        </div>  


        <div id="formularioInvitacion" style=" display:none; background-color: rgb(231,238,247); padding:30px; padding-bottom:15px; position:absolute; top:50%; left:50%; margin-left:-300px; margin-top:-225px;">
            <div class="modalBoxClose" onclick="event.preventDefault(); $('#formularioInvitacion').hide('fast');">
              <a href="#" class="icon-close"></a>
            </div>           
            <iframe src="https://docs.google.com/forms/d/1K3ureKHuRa_97_6MYapid1t6hOphudeH2auO8-E7Ci8/viewform?embedded=true" width="600" height="450" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
        </div> 

      </section> 
      
      <div class="Header headerBlur"></div>

      <div class="header_advise" style="display:none;">
          <h2>Do you like electronic music? Follow us on twitter too!</h2>
          <a href="https://twitter.com/music4deejays" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @music4deejays</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
          <span></span>
      </div>
            
      <header class="Header">
        <div class="HeaderWhiteBg"></div>
        <div class="HeaderInt">

          <div class="HeaderLogo">
            <a href="/">
              <span class="HeaderLogoIcon"></span>
              <span class="HeaderLogoText"></span>
            </a>
          </div>

          <div class="HeaderMenuMobile" id="open_mobile">
              <span class="icon-menu"></span>
          </div>


          <div class="HeaderMenu">
            <div id="closemobile" style="z-index:300; padding:13px 15px; position:absolute; top:0; right:0;">
                <span class="icon-close" style="font-size:1.5em;"></span>
            </div>
            <div class="HeaderMenu-current">
              <span class="currentText">Featured</span>
              <span class="currentIcon icon-down"></span>
            </div>
            <div class="HeaderMenu-submenu">
              <ul>
                <li class="selected">
                  <a href="/">
                    <span class="icon icon-popular"></span>
                    <span class="text">
                      Featured 
                    </span>
                  </a>
                </li>
                <li class="no_link">
                  <a>
                    <span class="icon icon-category"></span>
                    <span class="text">
                      Categories
                    </span>
                  </a>
                </li> 

                <div class="submenu_tab">
                  <li>
                    <a href="/electro">
                      Electro
                    </a>
                  </li>
                  <li>
                    <a href="/progressive">
                      Progressive
                    </a>
                  </li>
                  <li>
                    <a href="/dubstep">
                      Dubstep
                    </a>
                  </li>
                </div>

                <li>
                  <a href="/mixes">
                    <span class="icon icon-headphones"></span>
                    <span class="text">
                      Mixes
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div><!-- Fin headerMenu-->




          <div class="HeaderRight">

            <div class="HeaderSearch">
              <a href="" id="searchButton">
                <span class="icon-search"></span>
              </a>
              <form action="http://music4deejays.com/" class="searchform" id="searchform" method="get" role="search" _lpchecked="1">
                <input type="text" class="HeaderSearchInput" name="s" id="s" placeholder="Search..." autocomplete="off">
                <input type="submit" class="HeaderSearchSubmit" name="submit" id="searchsubmit" value=" ">
                <span class="HeaderSearchIcon icon-search"></span>
              </form>
            </div>

            <div class="HeaderButton HeaderProfile">
              <a href="#"  onclick="event.preventDefault(); $('#modalProfile').fadeToggle('fast');">
                <span class="icon-profile"></span>
              </a>
              <div class="HeaderButtonAlert">Register or Login</div>
            </div>

            <div class="HeaderButton HeaderUpload">
              <a href="/send_tracks">
                <span class="icon-plus"></span>
              </a>
              <div class="HeaderButtonAlert">Upload a song</div>
            </div>

          </div><!-- Fin headerRight -->



          <div class="Player" id="Player">

            <div class="player_progress">
              <div class="progress_bg"></div>
              <div class="load_progress"></div>
              <div class="play_progress">
                <span></span>
              </div>
              <div class="player_progress_tooltip">
                <span></span>
                <p></p>
              </div>
            </div>

            <div class="PlayerContent">

              <div class="PlayerMiddle">
                <div class="PlayerImage">
                  <div class="thumb"></div>
                </div>
                <div class="PlayerInfo">
                  <h1>
                    <a href="">
                      <div class="player_mediaName_Mask">
                        <div class="player_mediaName"></div>
                      </div>
                    </a>
                  </h1>
                </div>
              </div>

              <div class="PlayerCenter">
                
                <div class="PlayerControllers">

                  <!-- Controls_prev and control son las clases
                  que hacen que funcionen estos botones. Controls 
                  es un estilo que he puesto yo -->

                  <div class="controls controls_prev icon-first">
                    <div class="go_prev"></div>
                  </div>

                  <div class="controls controls_toggle ">
                    <div class="icon-playsong"></div>
                  </div>

                  <div class="controls controls_next icon-last">
                    <div class="go_next"></div>
                  </div> 

                </div>
                
              </div>

              <div class="PlayerLeft">
                <div class="PlayerTime" style="display: ;">
                  <div class="player_mediaTime_current">00:00</div>
                  <div class="player_mediaTime_total">00:00</div>
                </div>
              </div>
              <div class="PlayerRight">
                
                <div class="PlayerVolume">
                  <div class="volume_seekbar" data-orientation="horizontal" >
                    <div class="volume_bg"></div>
                    <div class="volume_level"><span></span></div>
                    <div class="player_volume_tooltip"><p style="display:none;"></p></div>
                  </div>
                </div>
              </div>
              </div>

          </div>




        </div>
      </header><!-- Fin Header -->
 

      <!--
        <div class="Player" id="Player">
        <div class="PlayerContent">
            <div class="PlayerImage">
                <div class="player_thumb"><img src='' alt=''/></div>
            </div>
            <div class="player_mediaName_Mask">
              <div class="player_mediaName"></div>
            </div>
            <div class="PlayerControllers">
                <div class="controls controls_prev icon-first">
                  <div class="go_prev"></div>
                </div>
                <div class="controls controls_toggle ">
                  <div class="icon-playsong"></div>
                </div>
                <div class="controls controls_next icon-last">
                  <div class="go_next"></div>
                </div> 
            </div>
            <div class="PlayerCenter">
                <div class="player_mediaTime_current">00:00</div>
                <div class="player_progress">
                    <div class="progress_bg"></div>
                    <div class="load_progress"></div>
                    <div class="play_progress">
                      <span></span>
                    </div>
                </div> 
                <div class="player_progress_tooltip">
                    <span></span>
                    <p style="display:none;"></p>
                </div>
                <div class="player_mediaTime_total">00:00</div>
            </div>
            <div class="PlayerRight">
              <div class="PlayerVolume">
                <div class="controls player_volume">
                  <div class="icon-volume-high"></div>
                </div>
                <div class="volume_seekbar" data-orientation="horizontal" >
                  <div class="volume_bg"></div>
                  <div class="volume_level"><span></span></div>
                  <div class="player_volume_tooltip"><p style="display:none;"></p></div>
                </div>
              </div>
            </div>
          
        </div>
        </div>
      -->



    <div class="Container">
    <div class="ContainerInt">


      <div id="ajaxCenterContainer">
      <div id="ajaxCenterContainerint">
