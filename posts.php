<?php theme_include('header'); ?>

<section class="content--grey">
	<div class="content__wrap">
	<?php if(has_posts()): ?>
		<?php while(posts()): ?>

			<div class="article">
				<a href="<?php echo article_url(); ?>">
					<span>
						<em class="article__date"><?php echo article_date(); ?></em>
						<h2 class="article__title"><?php echo article_title(); ?></h2>
					</span>
				</a>
			</div>

		<?php endwhile; ?>
	<?php else: ?>
	<p>There are no posts to show at this time, I'm sorry...</p>
	<?php endif; ?>
	</div>
</section>
<section class="content--secondary">
	<div class="content__wrap">
		<p class="article__site-description"><?php echo site_description(); ?></p>
	</div>
</section>

<?php theme_include('footer'); ?>
