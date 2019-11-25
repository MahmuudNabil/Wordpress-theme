<!DOCTYPE html>

<html <?php 
      /* NOTE:- 
                YOU MUSTN'T PUT ANYTHING FROM <SCRIPT> OR REL="STYLESHEET" OR ANY THING OTHER THERE IS CORRECT WAYS TO DO THAT IN WORDPRESS'
      */
      //show language of your blog
      language_attributes();?> >
    <head>
        <meta charset="<?php bloginfo('charset');?>" />
        <title> 
            <?php wp_title('|' , 'true' , 'right') ?>
            <?php bloginfo('name'); ?>
        </title>
        <link  rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
        <?php wp_head(); ?>
    </head>
    <body style="background-color : #EEE;">
        
         <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
             <!--   home page -->
             <!--
             <div class="navbar-header">
                <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('Name')?></a>
             </div>
            -->
          <!--   toggle button for mobile -->
             
              <nav class="navbar navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            
          </button>
          </nav>
              
                   <!--  search -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul>
                <?php mahmoud_menu() ?>
              </ul>
              <form class="form-inline my-2 my-lg-0" >
                   
                 <input type="text" value="" name="s" class="form-control mr-sm-2" id="search" placeholder="بحث">
				<input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="بحث" id="s">
             </form>
        
          </div>
             
          
        </nav>
    
    </body>
</html>