
<?php get_header(); 


 /*
    this function do header of your theme (important to palace in your website)
 */
?>




<div class="container home-page">
    <div class="row">
        <?php 
            if(have_posts() ) //check if there is posts
            {
                while(have_posts()  )   //loop through posts
                {
                    the_post(); ?>
                        <div class="col-sm-12">
                           <div class="main-post">
                               <h3 class="post-tilte">

                                   <a href="the_permalink()">
                                        <?php the_title(); ?>
                                   </a>
                              </h3>
                               
                             <!--  **** Comment Author Date ****
                                   ****************************

                               <span class="post-author">
                                   <i class="fa fa-user fa-fw"></i> 
                                    <? // php the_author_posts_link() ?> ,</span>
                               <span class="post-date"> <i class="fa fa-calendar fa-fw"></i>
                                    <? // php the_time('F j ,Y') ?> ,</span>
                               <span class="post-comments"><i class="fa fa-comments-0 fa-fw"></i> 
                                    <?php // comments_popup_link('0 comments' , '1 comment' ,'%' ,'comment-url' , 'comments disabled') ?>
                               </span>
                              -->
                               <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']) ?>
                               <p class="post-content"> 
                                <?php the_content(); ?> 

                              </p>
                               <!--
                               <hr>
                               <p class="post-catagories">
                                    <i class="fa fa-tags fa-fw"></i>
                                   <?php //the_category(' , ') ?>
                               </p>
                               <p class="post-tags">
                                    <?php  
                                        /*
                                        if(has_tag())
                                        {
                                            the_tags();
                                        }else{
                                            echo 'Tags : there is no tags';
                                        }
                                        */
                                    ?>
                               </p>

                                -->
                           </div>
                        </div>
                <?php


                } /* End while loop */

            }  // Strart IF condition
                // next and previous pages

                echo ' <div class="post-pagination"> ';
                if(get_next_posts_link() )
                {
                    next_posts_link(' <i class="fa fa-chevron-right fa-lg" aria-hidden="true"></i> Next ') ;
                }else{
                    echo ' <span > Next </span> ';
                }

                if(get_previous_posts_link() )
                {
                    previous_posts_link(' Prev <i class="fa fa-chevron-left  fa-lg" aria-hidden="true"></i>');
                }else{
                    echo '<span >  prev </span>';
                }

                echo '</div>'


        ?>
    </div>
</div>

<!--
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="main-post">
                <h3 class="post-tilte">صيدلية الدكتورة حنان خيرة الجديدة</h3>
                <p class="post-content"> <b>عنوان صيدلية د. حنان خيرى الجديدة فرع الشرقية - مشتول السوق: ش العروبة - مساكن مشتول السوق</b></p>
            </div>
        </div>
        
        <div class="col-sm-12">
            <div class="main-post">
                <h3 class="post-tilte">صيدلية الدكتور هشام</h3>
                <p class="post-content"><b> عنوان صيدلية د. هشام فرع الشرقية - مشتول السوق: ش عمر بن الخطاب</b></p>
            </div>
        </div>
    </div>
</div>
-->
<?php get_footer(); 

    //this function get footer in your website and very important to place even if you don't use fotter in your website
?>