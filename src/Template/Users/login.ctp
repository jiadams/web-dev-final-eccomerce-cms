<div class="page-header">
    <div class="row">
        <div class="col-md-12">
            <h1>User Login</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3 col-sm-10 offset-sm-1">
            <?= $this->Flash->render('auth') ?>
            <?= $this->Form->create() ?>
            <fieldset>
                <?= $this->Form->input('username') ?>
                <?= $this->Form->input('password') ?>
            </fieldset>
            <?= $this->Form->button(__('Login')); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>