<div class="page-header">
    <div class="row">
        <div class="col-md-12">
            <h1>Users</h1>
        </div>
    </div>
</div>
<div class="user-list">
    <ul class="list-unstyled">
        <li>
            <div class="row user-list-header">
                <div class="col-md-4">
                    <h5>Username: </h5>
                </div>
                <div class="col-md-4">
                    <h5>Email:</h5>
                </div>
                <div class="col-md-2">
                    <h5>Role:</h5>
                </div>
                <div class="col-md-2">
                    <h5>Edit Users</h5>
                </div>
            </div>
        </li>
        <?php foreach ($users as $user): ?>
            <li>
                <div class="row">
                    <div class="col-md-4">
                        <?= h($user->username)?>
                    </div>
                    <div class="col-md-4">
                        <?= h($user->email)?>
                    </div>
                    <div class="col-md-2">
                        <?= h($user->role)?>
                    </div>
                    <div class="col-md-2">
                        <?= $this->Html->link('Edit', ['action' => 'edit', $user->id]) ?>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>