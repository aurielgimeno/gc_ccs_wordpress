<?php get_header(); ?>
<div class="outer" id="contentwrap">
    <?php get_sidebars('left'); ?>
	<div class="postcont">
		<div id="content">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class('post') ?>>
               <div class="postdate"><img src="<?php bloginfo('template_url'); ?>/images/date.png" /> <?php the_time('F jS, Y') ?> <img src="<?php bloginfo('template_url'); ?>/images/folder.png" /> <?php the_category(', ') ?> <img src="<?php bloginfo('template_url'); ?>/images/comments.png" /> <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php if (current_user_can('edit_post', $post->ID)) { ?> <img src="<?php bloginfo('template_url'); ?>/images/edit.png" /> <?php edit_post_link('Edit', '', ''); } ?></div>

							<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							
			
							<div class="entry">
								<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(200,160), array("class" => "alignleft post_thumbnail")); } ?><?php the_content('Read more &raquo;'); ?>
							</div>
        	</div>

		<?php endwhile; ?>

		<div class="navigation">
		<?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>

		</div>

	<?php else : ?>

		<h2 class="pagetitle">No posts found. Try a different search?</h2>
		<?php get_search_form(); ?>

	<?php endif; ?>

		</div>
	</div>

<?php get_sidebars('right'); ?>
</div>
<?php get_footer(); ?>