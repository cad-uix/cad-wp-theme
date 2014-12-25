<?php
/**
 * The searchform containing search form for blog search.
 *
 * @package oracle
 * @author marcelbadua
 */

?>

<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get" role="search">
 
    <div>
 
        <input class="form-control" type="text" id="s" name="s" value="" />
 
        <input class="btn btn-default" type="submit" value="Search" id="searchsubmit" />
 
    </div>

</form>