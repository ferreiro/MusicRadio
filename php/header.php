<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php if (is_home()): ?>
    <title>Music4deejays - Listen, share and Download the best electronic music from emerging artits - Music for deejays</title>
    <meta content="<?php bloginfo('description'); ?>" name="description" />
    <?php else: ?>
    <?php $category = get_the_category(); ?>
    <title><?php the_title(); ?> <?php echo $category[0]->cat_name; ?> - Music4deejays Music for deejays</title>
    <meta content="<?php the_title(); ?> - Music4deejays - music for deejays" name="description" />
    <meta name="keywords" content="<?php the_tags(' ',' ',' '); ?>" />
    <?php endif; ?>
 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <meta name="mobile-web-app-capable" content="yes"> 

    <!-- Stylesheet -->

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>
 
 
    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <meta name="bitly-verification" content="a6efe32a8aaf"/>
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

<!--     
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
 -->
    <?php wp_head(); ?> 

</head>
<body <?php body_class(); ?>>
  


  <section class="main home">

    <header class="header">
      <div class="headerLogo">
        <a href="index.html"><p>Burning Hits</p></a>
      </div>
      <div class="menuMobile">
        <span class="icon-menu"></span>
      </div>
      <div class="headerUser">
        <ul>
          <li><a href="#">Login</a></li>
          <li><a href="#">Register</a></li>
        </ul>
      </div>
    </header>


    <section class="content">
      <article class="headline">
        <h1>
          The radio you love
        </h1>
        <h2>
          Choose a genre
        </h2>
      </article>
      <article class="genres">
        <ul>
          <li class="genre g_big">
            <a href="genero.html" style="color:#b46e6e;">Progressive</a>
          </li>
          <li class="genre g_big">
            <a href="genero.html" style="color:#99dedf;">Electro House</a>
          </li>
          <li class="genre g_big">
            <a href="genero.html" style="color:#99dfa3;">Dubstep</a>
          </li> 

          <div class="separator"></div>

          <li class="genre g_small">
            <a href="genero.html">Mixes / sessiones</a>
          </li> 
          <li class="genre g_small">
            <a href="genero.html"><span class="icon-random"></span>Random</a>
          </li> 
          <li class="genre g_small">
            <a href="genero.html">User's radio</a>
          </li> 
        </ul>
      </article> 
    </section>

  </section>

  <div class="loader" id="loading">
    <span></span>
  </div>
  
  <nav class="menu">
    <ul>
      <li>
        <a href="/progressive" style="color:#b46e6e;">Progressive</a>
      </li>
      <li>
        <a href="/electro" style="color:#3c9596;">Electro House</a>
      </li>
      <li>
        <a href="/dubstep" style="color:#358d41;">Dubstep</a>
      </li> 
  
      <li>
        <a href="/mixes">Mixes / sessiones</a>
      </li> 
      <li>
        <a href="/random"><span class="icon-random"></span>Random</a>
      </li> 
      <li class="create">
        <a href="#create">
          Create your radio
        </a>
      </li> 
    </ul>
  </nav>

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

      <div class="PlayerLeft">
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
          <h2>
            <a href="">
             
            </a>
          </h2> 
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

      <div class="PlayerRight">
        
        <div class="PlayerTime" style="display: ;">
          <div class="player_mediaTime_current">00:00</div>
          <div class="player_mediaTime_total">00:00</div>
        </div>
   
        <div class="PlayerShare">
          <div class="controls ">
            <div class="icon-share"></div>
          </div> 
        </div>

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

      <!-- List of playlists -->
      <div id="playlist_list">
                   
           <!-- local playlist -->
           <ul id='playlist1'>

            <li class= 'playlistItem' data-type='soundcloud' data-path='https://soundcloud.com/music4deejays/sets/electro-house-on-music4deejays'></li>
            
<!-- 
              <li class= 'playlistItem' data-type='local' data-mp3='player/audio/1.mp3'>
                <a class='playlistNonSelected' href='#'>
                  Wolv - Dyro
                </a>
                <a class='playlistNonSelected' href='#'>
                  <img src="" />
                </a>
   

                      <a class='dlink' href='#' data-dlink='../media/audio/1/Tim_McMorris_-_A_Bright_And_Hopeful_Future.mp3'><img src='media/data/dlink.png' alt = 'download'/></a>


              </li> -->


           </ul>
       </div>
   

    </div>
  </div>



