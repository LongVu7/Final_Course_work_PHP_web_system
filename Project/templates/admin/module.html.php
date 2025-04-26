<div class="card">
    <div class="card-header">
        <div class="card-title">Module Dashboard</div>
</div>

<?php


if(empty($modules)) {
    echo '<p>There are no modules to display. </p>';
}
else{
    foreach($modules as $module): ?>
        <blockquote class="border p-3 mb-3">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div class="module-name">
                <?=htmlspecialchars($module['moduleName'], ENT_QUOTES, 'UTF-8')?>
            </div>

        <div class="btn-group" role="group">
            <a href="editmodule.php?id=<?=$module['id']?>" class="btn btn-sm btn-secondary">
                <i class="fas fa-edit"></i> Edit
            </a>
           
            <form action="delmodule.php" method="post" class="d-inline">
                <input type="hidden" name="id" value="<?=htmlspecialchars($module['id'], ENT_QUOTES, 'UTF-8')?>">
                <button type="submit" class="btn btn-sm btn-danger">
                <i class="fas fa-trash"></i> Delete
                </button>
            </form>
        </div>
        
        <div class="text-end mt-2">
            <a href="addmodule.php" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add New Module
            </a>
        </div>

        </blockquote>
    <?php endforeach;
}

