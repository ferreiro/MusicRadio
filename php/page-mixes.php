
    <?php get_header(); ?>
 
    <?php 
        $Maincategory = get_the_category();
        $MaincategoryID = $Maincategory[0]->cat_id;
        $MaincategoryName = $Maincategory[0]->cat_name;
    ?>

    <?php function PostSlide($id, $imageSize) {
        echo ''?> 
        <?php 
            $category = get_the_category(); 
            $category_id = get_cat_ID( $category[0]->cat_name );
            $category_link = get_category_link( $category_id );
            $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
            $url = $thumb[0];
        ?> 

        <li class="fading" style="background-image:url(<?php echo $url; ?>);">
            <div class="sliderDiaposInfo">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <h2><?php echo $category[0]->cat_name; ?></h2>
                <p><a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist2').prepend($('.BoxSongUrl')); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); api_playAudio(hap_players[0]); return false;">Listen song</a></p>
            </div>
            <div class="sliderDiaposLink">
                <a href="<?php the_permalink(); ?>"></a>
            </div>
        </li> 
      <?php ;
    }
    ?>
 
    <?php function PostLarge($id, $imageSize) {
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
        ?> 
        <div class="BoxLarge" id="<?php echo $id; ?>">
            <div class="BoxLargeSongUrl" style="display:none;">
                <?php if(get_field('soundcloudURL')): ?>
                        <li class= 'playlistItem' data-type='soundcloud' data-path='<?php the_field('soundcloudURL'); ?>' data-thumb='<?php echo $url; ?>'/>
                <?php else: ?>
                        
                <?php endif; ?>
            </div>
            <div class="BoxLargeImage" style="background-image:url(<?php echo $url; ?>);">
                
                <div class="BoxLargeImagePlay">
                    <a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist2').prepend($('.BoxSongUrl')); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); api_playAudio(hap_players[0]); return false;">
                        <span class="icon-play"></span>
                    </a>
                </div>
                <?php if ($category[0]->cat_name == 'Mixes') :?>
                <div class="BoxLargeImageMix">
                    <span class="icon-mix"></span>
                </div>
                <?php endif; ?>
                <div class="BoxLargeImageOverlay">
                    <a href="<?php the_permalink(); ?>"></a>
                </div>
            </div>
            <div class="BoxLargeInfo">
                <div class="BoxLargeInfoTop">
                    <a href="<?php the_permalink(); ?>" class="BoxLargeInfoTopTitle">
                        <?php the_title(); ?>
                    </a> 
                    <a href="<?php echo $category_link; ?>" class="BoxLargeInfoTopSubtitle">
                       <?php 
                            echo $category[0]->cat_name;
                        ?>
                    </a>
                </div>
            </div>
        </div>
      <?php ;
    }
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
        ?> 
        <article class="Box" id="<?php echo $id; ?>">

            <div class="BoxLineVertical"></div>
            <div class="BoxLineHorizontal"></div> 
            <div class="BoxBackgroundOptions"></div> 
            <div class="BoxSongUrl" style="display:none;">
                <?php if(get_field('soundcloudURL')): ?>
                        <li class= 'playlistItem' data-type='soundcloud' data-path='<?php the_field('soundcloudURL'); ?>' data-thumb='<?php echo $url; ?>'/>
                <?php else: ?>
                        
                <?php endif; ?>
            </div>

            <div class="BoxLeft">

                <div class="BoxPlay">
                    <a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist2').prepend($('.BoxBoxUrl')); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); api_playAudio(hap_players[0]); return false;">
                        <span class="icon-playsong"></span>
                    </a>
                </div> 

                <div class="BoxAvatar" style="background-image:url(<?php echo $url; ?>);">
                    <a href="<?php the_permalink(); ?>"></a>
                </div>

            </div>
            <div class="BoxRight">

                <?php if ($category[0]->cat_name == 'Mixes') :?>
                <?php endif; ?>

                <p class="BoxCategory">
                    <a href="<?php echo $category_link; ?>">
                        <?php 
                            echo $category[0]->cat_name;
                        ?>
                    </a>
                </p>

                <h2 class="BoxTitle">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <div class="BoxOptions">

                    <ul>
                        <li class="comments">
                            <a href="<?php the_permalink(); ?>#comments">
                                <span class="icon-comment"></span>
                                <span class="text">Comment</span>
                            </a>
                        </li>
                        <li class="share">
                            <a href="#" onclick="event.preventDefault();">
                                <span class="icon-share"></span>
                                <span class="text">Share song</span>
                            </a>
                            <div class="BoxShareMenu">
                                <a href="#twitter" class="icon-twitter">Twitter</a>
                                <a href="#facebook" class="icon-facebook">Facebook</a>
                            </div>
                        </li>
                        <li class="like_dislike">
                            <a href="#">
                                <span class="icon-like"></span>
                                <span class="text">I like it</span>
                            </a>
                            <a href="#">
                                <span class="icon-dislike"></span>
                                <span class="text">I dislike it</span>
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
        </article><!-- Fin Box -->

      <?php ;
    }
    ?>

        <div class="ContainerMiddle">
            <div class="slider">
                <div class="sliderVerticalLine"></div>

                <div class="sliderButtonPrev icon-prev"></div>
                <div class="sliderButtonNext icon-next"></div>
                <ul class="sliderSelector"></ul>
                <ul class="sliderDiapos" id="sliderDiapos">
                    <?php 
                        $i = 0;
                        query_posts(array('orderby' => 'date', 'showposts' => 3, 'cat' => '-208')); 
                        if (have_posts()) : while (have_posts()) : the_post(); 
                    ?>
                        <?php PostSlide($i, "thumbnail"); ?> 

                    <? endwhile; endif; ?>
                </ul>
            </div><!-- End of the slider -->
        </div><!-- End Cotainer Middle -->

        <div class="ContainerLeft">

            <section class="all_posts">
            <? 
                $i = 0;
                query_posts(array('orderby' => 'date', 'showposts' => 13, 'cat' => '-208')); 
                if (have_posts()) : while (have_posts()) : the_post(); 
            ?>  
                <?php if($i < 2): ?>
                    <?php $i++; ?>
                <?php else: ?>
                    <?php Post($i, "thumbnail"); ?> 
                <?php endif; ?>

            <? endwhile; endif; ?>
            </section>

            <div class="load_more">
                <a href="/electro" class="button">
                    Load more songs
                </a>
            </div>

        </div><!-- Fin container Left -->

    </div>
    </div><!-- Fin ajax left -->


        <div class="ContainerRight"> 


            <div class="uploadTracks">
                <h3>Do you have a track<h3>
                <a href="/send_tracks" class="button button_color">Upload to m4d.com</a>
                <span class="short icon-upload"></span>
                <span class="medium icon-upload"></span>
                <span class="big icon-upload"></span>
            </div>

            <div class="followUs">
                <h3>Follow us!<h3>
                <ul>
                    <li><a href="http://twitter.com/music4deejays" target="_blank" class="icon-twitter"></a></li>
                    <li><a href="http://facebook.com/music4deejays"  target="_blank" class="icon-facebook"></a></li>
                </ul> 
            </div>

            <div class="SectionToptracks">
                <h2>
                    Top tracks
                </h2>
                <ul class="classifyRelated">
                    <li class="selected"><a href="#" onclick=" $('.SectionToptracks div').hide(); $('.classifyRelated li').removeClass('selected'); $('.classifyRelated li:nth-child(1)').addClass('selected'); $('#all_featured').show(); return false; " id="openAll">All time</a></li>
                    <li style="display:none;"><a href="#" onclick=" $('.SectionToptracks div').hide(); $('.classifyRelated li').removeClass('selected'); $('.classifyRelated li:nth-child(2)').addClass('selected'); $('#week_featured').show(); return false; " id="openMonth">This week</a></li>
                    <li style="display:none;"><a href="#" onclick=" $('.SectionToptracks div').hide(); $('.classifyRelated li').removeClass('selected'); $('.classifyRelated li:nth-child(3)').addClass('selected'); $('#month_featured').show(); return false; " id="openMonth">Month</a></li>
                </ul>
                <ul class="songsRelated">
                    <div id="week_featured" style="display:none;">
                    <?php
                        $categories = get_the_category();
                        $category_id = $categories[0]->cat_ID;
                        wpp_get_mostpopular( "range=weekly&limit=5&post_type=post&freshness=1&order_by=views&title_length=8&title_by_words=1&thumbnail_width=40&thumbnail_height=40&stats_views=0&post_html=\"<li><span class='songsRelatedCover'>{thumb}</span><span class='songsRelatedInfo'><h2><a href='{url}'>{text_title}</a></h2></span></a></li>\"" );
                    ?>
                    </div>
                    <div id="month_featured" style="display:none;">
                    <?php 
                        $categories = get_the_category();
                        $category_id = $categories[0]->cat_ID;
                        wpp_get_mostpopular( "range=monthly&limit=5&post_type=post&freshness=1&order_by=views&title_length=8&title_by_words=1&thumbnail_width=40&thumbnail_height=40&stats_views=0&post_html=\"<li><span class='songsRelatedCover'>{thumb}</span><span class='songsRelatedInfo'><h2><a href='{url}'>{text_title}</a></h2></span></a></li>\"" );
                    ?>
                    </div>
                    <div id="all_featured">
                    <?php
                        $categories = get_the_category();
                        $category_id = $categories[0]->cat_ID;
                        wpp_get_mostpopular( "range=all&limit=5&post_type=post&freshness=1&order_by=views&title_length=8&title_by_words=1&thumbnail_width=40&thumbnail_height=40&stats_views=0&post_html=\"<li><span class='songsRelatedCover'>{thumb}</span><span class='songsRelatedInfo'><h2><a href='{url}'>{text_title}</a></h2></span></a></li>\"" );
                    ?>
                    </div>
                </ul>
            </div><!-- Fin SectionToptracks -->

            <?php get_footer(); ?>

