<?php
/**
*
 * Content for displaying Footer
 *
 * @package cad
 */
?>
 
<footer>
    
    <div class="container">

        <div class="row">

            <div class="col-sm-4">
               
                <h4>Contact Us</h4>
                <?php get_template_part( 'inc', 'address' ); ?>
            
            </div>
            
            <div class="col-sm-4">
            
                <h4>Connect with us</h4>
                <?php get_template_part( 'inc', 'social' ); ?>
            
            </div>
            
            <div class="col-sm-4">
                
                <h4>Quick Links</h4>
                
                <?php cad_get_menu( 'footer-navigation', 'list-unstyled', 'footer-navigation', '1'); ?>
                
            </div>
            
        </div>
        
    </div>
    
</footer>