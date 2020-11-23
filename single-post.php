<?php get_header('article'); ?>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        ?>























<section class="bread-crumbs">
    <div class="container-bread-crumbs">
        <p class="describe-page"><?php echo __('Головна', 'project_name'); ?></p>
        <p class="describe-expage">/</p>
        <p class="describe-expage"><?php echo __('Блог', 'project_name'); ?></p>
        <p class="describe-expage">/</p>
        <p class="describe-expage"><?= get_the_title() ?></p>
    </div>
</section>

<section class="name-page">
    <div class="container-name-page">
        <div class="article-name"><?= get_the_title() ?></div>
    </div>
</section>

<section class="articles">
    <div class="articles-container">
		<div class="data-info">
			<?php the_date(); ?>
		</div>
        <?php the_content()?>
    </div>
</section>

<?php get_footer('contact'); ?>






















    <?php
    endwhile;
endif;?>
<?php get_footer();?>

