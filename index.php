<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh">
<?php $this->need('header.php'); ?>
<body class="bg-stone-100">
<div class="mx-auto md:max-w-[1200px]">
    <div class="my-16 flex flex-row rounded bg-white">
        <div class="basis-1/12">
            <div class="min-h-screen-jasmine sticky top-16 flex flex-col flex-wrap gap-y-8" id="sidebar-left" itemscope
                 itemtype="https://schema.org/Organization">
                <div></div>
                <?php $this->need('component/logo.php'); ?>
                <?php $this->need('component/nav.php'); ?>
            </div>
        </div>
        <div class="flex basis-8/12 flex-col border-x-2 border-stone-100 px-5">
            <?php $this->need('component/menu.php'); ?>
            <?php if ($this->is('index') && $this->_currentPage == 1): ?>
                <?php $this->need('component/post-top.php'); ?>
            <?php endif; ?>
            <?php $this->need('component/post-item.php'); ?>
            <?php $this->need('component/paging.php'); ?>
        </div>
        <div class="basis-3/12" id="sidebar-right">
            <?php $this->need('component/sidebar.php'); ?>
        </div>
    </div>
    <?php $this->need('footer.php'); ?>
</div>
</body>

</html>
