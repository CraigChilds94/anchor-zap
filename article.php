<?php theme_include('header'); ?>

<section class="content--title">
	<div class="content__wrap">
		<h1 class="page__title"><?php echo article_title(); ?></h1>
	</div>
</section>

<section class="content--grey">
	<div class="content__wrap">
		<div class="page__content"><?php echo article_markdown(); ?></div>
	</div>
</section>

<?php theme_include('footer'); ?>
