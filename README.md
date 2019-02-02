Theme unit test  - for fake test data in wordpress - codex.wordpress.org/Theme_Unit_Test

get_header()        includes file header.php. If the theme contains no header.php WP include header from default theme
get_header($name)   if a name is specify header-name will be included 
get_footer()        includes footer.php 

functions.php   the first file that load in themes folder


wp_head()       Action Hook: Prints scripts or data in the head tag on the front end.
wp_footer()     Action Hook: Prints scripts or data before the closing body tag on the front end.


/* -- Config -- */

define('FS_METHOD', 'direct'); Allow install plugins using filesystem instead of FTP parameters
define('DEBUG', false) default value false, so no errors are shown on page
