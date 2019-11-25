<?php get_header(); 
 /*
    this function do header of your theme (important to palace in your website)
 */
?>

<div class="container post-page">
   
        <?php 
    if(have_posts() ) //check if there is posts
    {
        while(have_posts()  )   //loop through posts
        {
            the_post(); ?>
                
                   <div class="main-post single-post">
                       <?php edit_post_link('تعديل <i class="fa fa-pencil fa-fw"></i>'); ?>
                       <h3 class="post-tilte">
                           <a href="the_permalink()">
                                <?php the_title() ?>
                           </a>
                      </h3>
                      <!--          ***comment author date****
                                    **************************
                       <span class="post-author"> <i class="fa fa-user fa-fw"></i> <?php                      // the_author_posts_link() ?> 
                       </span>
                       <span class="post-date"> 
                            <i class="fa fa-calendar fa-fw"></i> 
                            <?php  // the_time('F j ,Y') ?> 
                        </span>
                       <span class="post-comments">
                            <i class="fa fa-comments-0 fa-fw"></i> 
                          <?php// comments_popup_link('0 comments' , '1 comment' ,'%' ,'comment-url' , 'comments disabled') ?> 
                       </span>
                       -->
                       <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']) ?>
                       <p class="post-content"> 
                        <?php the_content(); ?> 
                        
                      </p>
                       <hr>
                       <p class="post-catagories">
                            <i class="fa fa-tags fa-fw"></i>
                           <?php the_category(' , ') ?>
                       </p>
                       <p class="post-tags">
                            <?php  
                                if(has_tag())
                                {
                                    the_tags();
                                }else{
                                    echo 'Tags : there is no tags';
                                }
                            ?>
                       </p>    
                  
        <?php
            
            
        } // End while loop
        
    }  // END IF condition
                //fix float clear
 /*
        echo ' <div class="post-pagination"> ';
        if(get_next_post_link() )
        {
            next_post_link('%link',' <i class="fa fa-chevron-right fa-lg" aria-hidden="true"></i> %title ') ;
        }else{
            echo ' <span > Next Article : none </span> ';
        }
        
        if(get_previous_post_link() )
        {
            previous_post_link('%link' , ' %title <i class="fa fa-chevron-left  fa-lg" aria-hidden="true"></i>');
        }else{
            echo '<span >  previous Article : none </span>';
        }
  
        echo '</div>'
    
       */
?>
    </div>
</div>

<?php get_footer(); 

?>