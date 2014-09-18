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
<?php $services = theme_option('services', false); ?>
<?php if($services) : ?>
<section class="content__three--secondary">
    <div class="content__wrap">
        <?php foreach(range(0, 2) as $i) : ?>
            <?php $service = $services[$i]; ?>
            <p>
                <i class="fa fa-<?php echo $service->icon; ?>"></i>
                <?php echo $service->text; ?>
            </p>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>
<?php theme_include('footer'); ?>
