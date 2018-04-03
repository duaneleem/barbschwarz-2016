<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Barb_Schwarz,_Creator_of_Home_Staging
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

/* ================================================================================
    Advanced Custom Fields
================================================================================ */
// Section: Thought of the Day
$other_page             = 5;
$strThought_Quote       = get_field("totd_thought", $other_page);
$strThought_Author      = get_field("totd_author", $other_page);
?>

<!-- =====================================================================
    Thought of the Day
===================================================================== -->
<div class="widget">
    <h3>Barb's Thought of The Day</h3>
    <blockquote>
        <p><?php echo $strThought_Quote; ?></p>
        <footer><?php echo $strThought_Author; ?></footer>
    </blockquote>
</div>


<!-- =====================================================================
    Email Subscribers
===================================================================== -->
<style>
    /* =====================================================================
        Email Subscribers
    ===================================================================== */
    #sectionSubscribe {
        border: 1px solid #eee;
        background-color: #fdfdfd;
        padding: 15px;
    }

    /* TextBox */
    .es_textbox_class {
        width: 100%;
        height: auto !important;
    }
    
    /* Label Box */
    .es_lablebox {
        color: #999;
        text-transform: uppercase;
        font-size: 12px;
    }
</style>
<div id="sectionSubscribe" class="widget">
    <h3>Subscribe to Barb's Blog</h3>
    <?php es_subbox( $namefield = "YES", $desc = "", $group = "" ); ?>
</div>

<!-- =====================================================================
    Search Form
===================================================================== -->
<div class="widget">
	<h3>Search blog</h3>
	<form role="search" method="get" action="/">
		<input type="text" class="form-control" placeholder="Search &amp; hit enter" value="" name="s" />
	</form>
</div>

<!-- =====================================================================
    Recent Posts
===================================================================== -->
<div class="widget">
	<h3>Latest Posts</h3>
	<ul class="list-unstyled">
		<?php foreach(wp_get_recent_posts(array("numberposts" => 4, "post_status" =>"publish")) as $recent_posts) { ?>
			<li><a href="<?php echo get_permalink($recent_posts['ID']) ?>"><?php echo $recent_posts["post_title"]; ?></a></li>
		<?php } ?>
	</ul>
</div>

<!-- =====================================================================
    About Barb
===================================================================== -->
<div class="widget">
	<h3>About Barb</h3>
	<p>
		The Creator of Home Staging®, The ASP®/ASPM® Designations &amp; Courses, Stagedhomes.com®, The Staging University®, The 
		IAHSP® Home Staging Association &amp; Foundation &amp; World Wide Staging Service Week®, WWSSW®
	</p>
</div>

<!-- =====================================================================
    Tags
===================================================================== -->
<div class="widget">
	<h3>Tags</h3>
	<ul class="list-inline tag-list">
		<?php foreach(wp_tag_cloud(array("format" => "array")) as $tag) { ?>
			<li><?php echo $tag; ?></li>
		<?php } ?>
	</ul>
</div>
<!--end widget-->