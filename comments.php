<?php 
    if(comments_open() )
    {
        echo '<ul class="list-unstyled comments-list">';
        $comments_arguments = array(
            'max_depth'     =>3,
            'type'          => 'comments',
            'avatar_size'   => 64
        );
       wp_list_comments( $comments_arguments);
        echo '</ul>';
    }else{
        echo 'Sorry Comments Are Disabled';
    }

