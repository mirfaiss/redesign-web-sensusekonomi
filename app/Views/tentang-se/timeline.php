<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1 class="my-4" style="font-weight: bold;"><strong><span class="orange">SE2016</span> | Timeline</strong></h1>
    <div class="timeline-container p-4 bg-coba">
        <iframe src="//cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1YbavvMksJbl6n-8555lc-IzD5ISF946DiGCCzzzXgeM&amp;font=Default&amp;lang=en&amp;initial_zoom=0&amp;start_at_slide=10&amp;height=530" width="100%" height="530" frameborder="0"></iframe>
    </div>
</div>
<?= $this->endSection(); ?>