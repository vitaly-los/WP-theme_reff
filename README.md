Theme unit test  - for fake test data in wordpress - codex.wordpress.org/Theme_Unit_Test

get_header()        includes file header.php. If the theme contains no header.php WP include header from default theme
get_header($name)   if a name is specify header-name will be included 
get_footer()        includes footer.php 

functions.php   the first file that load in themes folder


wp_head()       Action Hook: Prints scripts or data in the head tag on the front end.
wp_footer()     Action Hook: Prints scripts or data before the closing body tag on the front end.

wp_enqueue_script('jquery');    jquery are included in wp by default, by use outdate jqueri's ver. 1.4


have_posts()    Whether current WP query has results to loop over
    
the_title()         dispaly or return title of the current post. Only in Loop
the_content()       dispaly or return content of the current post. Only in Loop
the_excerpt()       display first 55 characters of the current exerpt, or it can be added on admin page 
the_permalink()     dispaly the premalink of the current post

/* -- Config -- */

define('FS_METHOD', 'direct'); Allow install plugins using filesystem instead of FTP parameters
define('DEBUG', false) default value false, so no errors are shown on page
