
    <?php get_header(); ?>
 

        <div class="ContainerLeft"> 

        	<div class="searchResult">
        		<p><?php echo sprintf( __( '%s results for ', 'html5blank' ), $wp_query->found_posts );  ?>            </p>
        		<h1><?php echo get_search_query(); ?></h1>
        	</div>
 
        	<?php 
        		$total = $wp_query->found_posts;
        		if ($total == 0) :
        	?>
        	<div class="searchNothingFound">

        		<div class="searchBrokenImage"></div>

        	    <h1>Nothing found :-(</h1>
        		<h2><a href="#" id="try_again">Try again!</a></h2>

        		<div class="searchPageForm">
	        		<form action="http://music4deejays.com/#/?s=" class="searchform" method="get" role="search" _lpchecked="1">
	        		    <input type="text" class="HeaderSearchInput" name="s" placeholder="Search..." autocomplete="off">
	        		    <input type="submit" class="HeaderSearchSubmit" name="submit" id="searchsubmit" value=" ">
	        		    <span class="HeaderSearchIcon icon-search"></span>
	        		</form>
        		</div>


        		<div class="searchMeme">
        			<img src="http://3rrm7021tets2frq9o1kfbbh.wpengine.netdna-cdn.com/wp-content/uploads/2014/07/10494532_10152322970863160_3490187042434914531_n.jpg" />
        		</div>

        	</div>
        	<?php
        		else:
        	?>

        		<div class="searchform searchPageForm">
	        		<form action="http://music4deejays.com/" class="searchform" method="get" role="search" _lpchecked="1">
	        		    <input type="text" class="HeaderSearchInput" name="s" placeholder="Search..." autocomplete="off">
	        		    <input type="submit" class="HeaderSearchSubmit" name="submit" id="searchsubmit" value=" ">
	        		    <span class="HeaderSearchIcon icon-search"></span>
	        		</form>
        		</div>
        	<?php endif; ?>






			<?php  
			    if (have_posts()) : while (have_posts()) : the_post(); 
			?>
			

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
				            <a href="#" onclick="event.preventDefault(); $('#playlist_list #playlist2').prepend( $('#<?php echo $id; ?> .BoxSongUrl') ); api_loadPlaylist(hap_players[0],{hidden: true, id: '#playlist2'}); api_playAudio(hap_players[0]); return false;">
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
				                    <a href="<?php the_permalink(); ?>">
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
				
			<? endwhile; endif; ?>

			<?php get_template_part('pagination'); ?>
		
        </div>

    </div>
    </div><!-- Fin ajax left -->


        <div class="ContainerRight"> 

            <div class="uploadTracks">
                <h3>Do you have a track?<h3>
                <a href="/send_tracks" class="button button_color">Upload to m4d.com</a>
                <span class="short icon-upload"></span>
                <span class="medium icon-upload"></span>
                <span class="big icon-upload"></span>
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
                        wpp_get_mostpopular( "range=weekly&limit=10&post_type=post&freshness=1&order_by=views&title_length=8&title_by_words=1&thumbnail_width=40&thumbnail_height=40&stats_views=0&post_html=\"<li><span class='songsRelatedCover'>{thumb}</span><span class='songsRelatedInfo'><h2><a href='{url}'>{text_title}</a></h2></span></a></li>\"" );
                    ?>
                    </div>
                    <div id="month_featured" style="display:none;">
                    <?php 
                        $categories = get_the_category();
                        $category_id = $categories[0]->cat_ID;
                        wpp_get_mostpopular( "range=monthly&limit=10&post_type=post&freshness=1&order_by=views&title_length=8&title_by_words=1&thumbnail_width=40&thumbnail_height=40&stats_views=0&post_html=\"<li><span class='songsRelatedCover'>{thumb}</span><span class='songsRelatedInfo'><h2><a href='{url}'>{text_title}</a></h2></span></a></li>\"" );
                    ?>
                    </div>
                    <div id="all_featured">
                    <?php
                        $categories = get_the_category();
                        $category_id = $categories[0]->cat_ID;
                        wpp_get_mostpopular( "range=all&limit=10&post_type=post&freshness=1&order_by=views&title_length=8&title_by_words=1&thumbnail_width=40&thumbnail_height=40&stats_views=0&post_html=\"<li><span class='songsRelatedCover'>{thumb}</span><span class='songsRelatedInfo'><h2><a href='{url}'>{text_title}</a></h2></span></a></li>\"" );
                    ?>
                    </div>
                </ul>
            </div><!-- Fin SectionToptracks -->

            <div class="followUs">
                <h3>Follow us!<h3>
                <ul>
                    <li><a href="http://twitter.com/music4deejays" target="_blank" class="icon-twitter"></a></li>
                    <li><a href="http://facebook.com/music4deejays"  target="_blank" class="icon-facebook"></a></li>
                </ul> 
            </div>
            <?php get_footer(); ?>

