<div class="page-header">
    <div class="row">
        <div class="col-md-12">
            <h1>User Registration</h1>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-6 offset-md-3 col-sm-10 offset-sm-1">
            <?= $this->Form->create($user) ?>
            <?= $this->Form->hidden('profile.id') ?>
            <?= $this->Form->input('username') ?>
            <?= $this->Form->input('email') ?>
            <?= $this->Form->input('password') ?>
            <?= $this->Form->input('role', [
            'options' => ['admin' => 'Admin', 'customer' => 'Customer']
            ]) ?>
            <?= $this->Form->button(__('Submit')); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>