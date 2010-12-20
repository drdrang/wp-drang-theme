<?php get_header(); ?>

	<div id="content">
<?php is_tag(); ?>
		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Posts tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog archives</h2>
 	  <?php } ?>


		<?php while (have_posts()) : the_post(); ?>
				<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<p class="postdate"><?php the_time('F jS, Y') ?> at <?php the_time('g:i a'); ?><!-- by <?php the_author() ?> --></p>

				<?php the_content('Read the rest of this entry &raquo;'); ?>
        <hr />
				<p class="postmetadata"><?php echo get_the_tag_list('Tags: ',', ','<br/>') ?><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to '<?php the_title_attribute(); ?>'">Post #<?php the_ID();?></a> | <!-- <a href="http://twitter.com/home?status=@drdrang%20%23<?php the_ID(); ?>∀%20&in_reply_to=drdrang" title="Twitter @drdrang #<?php the_ID();?>" target="_blank">Comment via Twitter</a> | --> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>

		<?php endwhile; ?>

		<p class="navigation">
		<span style="float:right"><?php previous_posts_link('Newer Entries &raquo;') ?></span>
		<?php next_posts_link('&laquo; Older Entries') ?>
		</p>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
