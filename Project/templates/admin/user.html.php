<div class="card">
    <div class="card-header">
        <div class="card-title">User Management</div>
        <p class="card-category">Total Users: <?=$totalUser?></p>
    </div>
    <div class="card-body">
        <?php if (empty($users)): ?>
            <p class="text-muted">No users found in the database.</p>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table table-head-bg-secondary mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Email</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?=htmlspecialchars($user['name'], ENT_QUOTES, 'UTF-8')?></td>
                                <td><?=htmlspecialchars($user['password'], ENT_QUOTES, 'UTF-8')?></td>
                                <td><?=htmlspecialchars($user['email'], ENT_QUOTES, 'UTF-8')?></td>
                                <td><?=htmlspecialchars($user['firstname'], ENT_QUOTES, 'UTF-8')?></td>
                                <td><?=htmlspecialchars($user['lastname'], ENT_QUOTES, 'UTF-8')?></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="edit_user.php?id=<?=$user['id']?>" class="btn btn-sm btn-secondary">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="deluser.php" method="post" class="d-inline">
                                            <input type="hidden" name="id" value="<?=htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8')?>">
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="card-action mt-3">
                <a href="adduser.php" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New User
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>