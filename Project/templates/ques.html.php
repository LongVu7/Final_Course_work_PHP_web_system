<div class="card">
    <div class="card-header">
        <div class="card-title">Question dashboard</div>
        <p class="card-category">Total Questions: <?=$totalQuestion?></p>
    </div>
    <div class="card-body">
        <?php if (empty($questions)): ?>
            <p class="text-muted">No questions found in the database.</p>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table table-head-bg-secondary mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Content</th>
                            <th scope="col">Module</th>
                            <th scope="col">Posted by</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($questions as $question): ?>
                            <tr>
                                <td>
                                    <?=htmlspecialchars($question['content'], ENT_QUOTES, 'UTF-8')?>
                                    <img src="images/<?=htmlspecialchars($question['image'], ENT_QUOTES, 'UTF-8')?>" 
                                        alt="Error/No image" 
                                        class="img-thumbnail" 
                                        style="max-width: 100px;">
                                    
                                </td>
                                
                                <td><?=htmlspecialchars($question['moduleName'], ENT_QUOTES, 'UTF-8')?></td>
                                <td><?=htmlspecialchars($question['name'], ENT_QUOTES, 'UTF-8')?></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="editques.php?id=<?=$question['id']?>" class="btn btn-sm btn-secondary">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="delques.php" method="post" class="d-inline">
                                            <input type="hidden" name="id" value="<?=htmlspecialchars($question['id'], ENT_QUOTES, 'UTF-8')?>">
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
            <!-- Add button -->
            <div class="card-action mt-3">
                <a href="addques.php" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New Question
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>