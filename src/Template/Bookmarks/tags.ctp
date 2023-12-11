<h1>
    Getting all the bookmarks with certain tags:
<?= $this->Text->toList($tags) ?>
</h1>

<section>
    <?php 
    foreach ($bookmarks as $bookmark) {?> 
    
    <article>
        <h4><?= $this->Html->link($bookmark->title, $bookmark->url); ?></h4>
        <small><?= h($bookmark->url) ?></small>
    
        <?= $this->Text->autoParagraph($bookmark->description); ?>
    </article>
    
    <?php
    }
    ?>
</section>