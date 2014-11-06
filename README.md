# CAD Kickstarter Theme for Wordpress

Exclusively used by Custom A Design and Linkage UIX Design Team

## Installation Instructions

Clone theme repository in wordpress theme folder

    git clone git@github.com:cad-uix/cad-parent.git

Download Bootstrap Files via Bower

    bower install

Download node modules

    npm install

Put your Virtual Host on gulpfile.js line #16

	var virtualHost = '// PUT YOUR VIRTUAL HOST HERE //'; 

Run gulp

    gulp

## Theme Features

### Client Data

includes an admin menu page for client data like email, phone, address and social links, can be called on template by using

    <?php echo call_data( $type ); ?>
	
$type: address, number, email, company, facebook, linkedin, twitter, google-plus

## Theme Functions

### call_banner();

Creates a Custom Post Type for banners, when called on theme - invokes the content-slideshow template

    <?php call_banner(); ?>
    
### call_post();

Invokes a new WP_query for custom post types

    <?php call_post($post, $display , $category_name , $range); ?>

$post: Post Slug. default: post

$display: type of display (grid, list) default: list

$category_name: category of post. default: none

$range: maximum post per list default 5

## License

http://customadesign.com