<!-- File: src/Template/Articles/view.ctp -->

<h1 class="mb-3 mt-3"><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<p><b>Tags:</b> <?= h($article->tag_string) ?></p>
<?= $this->Html->link(__('Back'), ['controller' => 'Articles', 'action' => 'index'], ['class' => 'btn btn-secondary mt-3 mb-3']) ?>