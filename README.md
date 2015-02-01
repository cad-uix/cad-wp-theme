# CAD Wordpress Theme

Exclusively used by Custom A Design and Linkage UIX Design Team

## Installation Instructions

This theme requires that you have GIT, NodeJS, Bower and GulpJS installed

Clone theme repository in wordpress theme folder

    git clone git@github.com:cad-uix/cad-wp-theme.git

Run bower

    bower install

Run node install

    npm install

Put your Virtual Host on gulpfile.js line #16

	var virtualHost = '// PUT YOUR VIRTUAL HOST HERE //'; 

Run gulp

    gulp

## Theme Functions

### Client Data

includes an admin menu page for client data like email, phone, address and social links, can be called on template by using

    <?php echo call_data( $type ); ?>
	
$type: address, number, email, company, facebook, linkedin, twitter, google-plus

### call_banner();

Invokes the content-slideshow template

    <?php call_banner(); ?>

### call_social_links();

Call Social list, you can add your custom class

    <?php call_social_links( $class ); ?>


author: marcel badua