<?php if(has_menu_items()): ?>
<nav class="navigation" role="navigation">
    <ul>
        <?php while(menu_items()): ?>
        <li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
            <a class="navigation__link" href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
                <?php echo menu_name(); ?>
            </a>
        </li>
        <?php endwhile; ?>
        <?php if(theme_option('show_admin_links')) : ?>
        <li>
            <?php if(user_authed()) : ?>

            <a class="navigation__link" href="/admin" title="Admin">
                Admin
            </a>

            <?php else : ?>

            <a class="navigation__link" href="/admin/login" title="Login">
                Login
            </a>

            <?php endif; ?>
        </li>
        <?php endif; ?>
    </ul>
    <a class="navigation__toggle"><i class="fa fa-bars"></i></a>
</nav>
<?php endif; ?>
