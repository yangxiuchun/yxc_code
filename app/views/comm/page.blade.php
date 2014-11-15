<?php if ($paginator->getLastPage() > 1): ?>
<div class="Pagination myself">
    <?php echo (new Spage($paginator))->pageString(); ?>
</div>
<?php endif; ?>
