<?php theme_include('header'); ?>

<section class="content--grey">
    <div class="content__wrap">
        <?php echo page_content(); ?>
    </div>
</section>
<section class="content__two--primary">
    <div class="content__wrap">
        <?php echo page_content(); ?>
        <?php echo page_content(); ?>
    </div>
</section>
<section class="content__three--secondary">
    <div class="content__wrap">
        <?php echo page_content(); ?>
        <?php echo page_content(); ?>
        <?php echo page_content(); ?>
    </div>
</section>

<?php theme_include('footer'); ?>
