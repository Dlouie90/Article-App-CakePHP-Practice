<div class="p-5">
    <h1>Login</h1>
    <?= $this->Form->create() ?>
    <?= $this->Form->control('email') ?>
    <?= $this->Form->control('password') ?>
    <?= $this->Form->button('Login', ['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>