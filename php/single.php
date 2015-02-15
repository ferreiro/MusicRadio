
    <?php get_header(); ?>
 
 
    <?php 
        $Maincategory = get_the_category();
        $MaincategoryID = $Maincategory[0]->cat_id;
        $MaincategoryName = $Maincategory[0]->cat_name;
    ?>

    <?php function Post($id, $imageSize) {
        echo ''?> 
        
        <?php 
            $category = get_the_category(); 
            $category_id = get_cat_ID( $category[0]->cat_name );
            $category_link = get_category_link( $category_id );
            $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            
            if ($imageSize == "thumbnail")
            {
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' );
                $url = $thumb[0];
            }
            else
            {
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
                $url = $thumb[0];
            }
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
            $url = $thumb[0];
        ?> 

        <article class="radio" id="<?php echo $id; ?>" style="background-image:url(<?php echo $url; ?>);">
            <div class="radioPlaylist">
                <?php if(get_field('soundcloudURL')): ?>
                        <li class= 'playlistItem' data-type='soundcloud' data-path='<?php the_field('soundcloudURL'); ?>' data-thumb='<?php echo $url; ?>'/>
                <?php else: ?>
                    <?php echo "playlistNotFound"; ?>
                <?php endif; ?>
            </div> 
            <div class="radioLink">
                <a href="<?php the_permalink(); ?>"></a>
            </div>
            <div class="radioInfo">
                <h3>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <div class="radioListenBtn ">
                    <a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist1').prepend( $('#<?php echo $id; ?> .radioPlaylist') ); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist1'}); api_playAudio(hap_players[0]); return false;">
                        <span class="icon-playsong"></span>
                        Listen Radio
                    </a>
                </div>
            </div>
        </article>

      <?php ;
    }
    ?>


    <div id="containerAjax">
                 
        <section class="radios">

            <?php  
                if (have_posts()) : while (have_posts()) : the_post(); 
            ?>
 
            <?php
                $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                $category = get_the_category(); 
                $category_id = get_cat_ID( $category[0]->cat_name );
                $category_link = get_category_link( $category_id );
            ?>

            <section class="singleRadio" id="single">
                <div class="singleRadioInt">

                    <div class="radioPlaylist">
                        <?php if(get_field('soundcloudURL')): ?>
                            <li class= 'playlistItem' data-type='soundcloud' data-path='<?php the_field('soundcloudURL'); ?>' data-thumb='<?php echo $url; ?>'/>
                        <?php else: ?>
                            
                        <?php endif; ?>
                    </div> 

                    <div class="singleRadioAvatar" style="background-image:url(<?php echo $featuredImage; ?>);" ></div>
                    
                    <h2 class="singleRadioSubtitle">
                        <a href="<?php  echo $category_link; ?>" class="category">
                            <?php  echo $category[0]->cat_name; ?>
                        </a>
                    </h2>

                    <h1 class="singleRadioTitle">
                        <?php the_title(); ?>
                    </h1>

                    <div class="radioListenBtn">
                        <a href="#" class="radioListenBtnGreen" onclick="event.preventDefault(); $('#playlist_list #playlist1').prepend( $('#single .radioPlaylist') ); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist1'}); api_playAudio(hap_players[0]); return false;">
                            <span class="icon-playsong"></span>
                            Listen Radio
                        </a>

                        <a href="#" >
                            <span class="icon-"></span>
                            Save
                        </a>
                    </div>


                </div>

                <div class="singleRadioBG"> 
                    <div style="background-image:url(<?php echo $featuredImage; ?>);" />
                    <div class="singleRadioSolid"></div>
                </div>
            </section>

            <?php the_tags('',' ',''); ?> 

            <? endwhile; endif; ?> 

            <h1 class="singleRadioRelatedTitle">
                Discover more radios
            </h1>  

            <?php query_posts(array('orderby' => 'rand', 'showposts' => 4 )); 
                if (have_posts()) : while (have_posts()) : the_post(); ?>
 

                <?php Post($i, "thumbnail"); ?> 
                <?php $i++; ?> 

            <? endwhile; endif; ?> 
  
            <section class="pagination">
                    <ul>
                        <li>
                            <a href="">
                                +
                            </a>
                        </li> 
                    </ul>
                </section>
            
        </section>
    </div>


    <?php get_footer(); ?>
 
 