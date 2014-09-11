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
        <?php if(user_authed()) : ?>
            <li>
                <a class="navigation__link" href="/admin" title="Admin">
                    Admin
                </a>
            </li>
        <?php endif; ?>
    </ul>
</nav>
<?php endif; ?>
