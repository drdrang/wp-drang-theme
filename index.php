<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
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

		<h1>Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

  </div> <!-- content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
