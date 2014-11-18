<?php if ($paginator->getLastPage() > 1): ?>
<div class="Pagination myself">
    <?php $pagem = new Spage($paginator);echo $pagem->pageString(); ?>
</div>
<?php endif; ?>
