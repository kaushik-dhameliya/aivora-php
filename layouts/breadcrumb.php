<?php
// Default values if variables are not passed
$page_title = $page_title ?? 'Page Title';
$breadcrumb_items = $breadcrumb_items ?? [];
?>

<!-- hero start -->
<section class="breadcrumb bg_img" data-background="assets/img/bg/bootcamp-bg.png">
    <div class="container">
        <div class="breadcrumb__content">
            <ul class="breadcrumb__list clearfix list-unstyled">
                <?php foreach ($breadcrumb_items as $item): ?>
                    <li class="breadcrumb-item">
                        <?php if (!empty($item['url'])): ?>
                            <a href="<?php echo $item['url']; ?>"><?php echo $item['label']; ?></a>
                        <?php else: ?>
                            <?php echo $item['label']; ?>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <h2 class="breadcrumb__title"><?php echo $page_title; ?></h2>
        </div>
    </div>
</section>
<!-- hero end -->