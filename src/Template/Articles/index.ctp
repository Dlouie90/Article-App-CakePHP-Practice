<h1 class="text-center m-3">Los Angeles Articles</h1>
<?= $this->Html->link("Add New Article", ['action' => 'add'], ['class' => 'btn btn-success mb-3']) ?>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
        <th>Action</th>
    </tr>

    <!-- Here's where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($articles as $article) : ?>
        <tr>
            <td class="font-weight-bold">
                <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
            </td>
            <td>
                <?= $article->created->format(DATE_RFC850) ?>
            </td>
            <td>
                <?= $this->Html->link('Edit', ['action' => 'edit', $article->slug], ['class' => 'btn btn-primary mr-3']) ?>
                <?= $this->Form->postLink(
                        'Delete',
                        ['action' => 'delete', $article->slug],
                        ['class' => 'btn btn-danger',  'confirm' => 'Are you sure?'],
                    )
                    ?>
            </td>
        </tr>
    <?php endforeach; ?>

</table>