<?php

/**
 * @file
 * Theme implementation for vutest latest inventions.
 *
 * Available variables:
 * - $articles: An array of article nodes to render.
 *
 * @see template_preprocess()
 */
?>
<div class="vutest-latest-inventions">
    <?php foreach ($articles as $delta => $article): ?>
        <div class="panel">
            <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-9">
                            <h2 class="pull-left"><?php print $article['title']; ?></h2>
                        </div>
                        <div class="col-sm-3">
                            <h3 class="pull-right">
                                <small><?php print $article['date_changed']; ?></small>
                            </h3>
                        </div>
                    </div>
            </div>
            <div class="panel-body">
                <?php print render($article['summary']); ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
