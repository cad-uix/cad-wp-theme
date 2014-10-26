# Parent Theme For Custom A Design Wordpress

Exclusively used by Custom A Design and Linkage UIX Design Team

## Installation Instructions

Clone theme repository in wordpress theme folder

    git clone git@github.com:cad-uix/cad-parent.git

Download Bootstrap Files via Bower

    bower install

Download node modules

    npm install

Run gulp

    gulp

## Theme Features

### Client Data

includes an admin menu page for client data like email, phone, address and social links, can be called on template by using

    <?php echo cad_option( //type//); ?>
    <?php echo cad_option('address'); // to call for address ?> 
	
## Parent Theme Functions

### cad_slideshow();

Creates a Custom Post Type for slideshow, when called on theme - invokes the content-slideshow template

    <?php cad_slideshow(); ?>
    
### cad_post();

Invokes a new WP_query for custom post types

    <?php cad_post($post, $display , $category_name , $range); ?>

$post: Post Slug. default: post

$display: type of display (grid, list) default: list

$category_name: category of post. default: none

$range: maximum post per list default 5

## License

http://customadesign.com