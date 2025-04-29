<form action="" method="post" enctype="multipart/form-data">
    <div class="col-md-6 col-lg-4">
        <label for='content'>Question/Post</label>
        <textarea id="content" name="content" rows="3" cols="40" placeholder="Enter a Question/Post"></textarea>
        
        
        <label for='image'>Image name</label>
        <textarea name="image" rows="3" cols="40" placeholder="Enter image"></textarea>

        <select name="authors" class="form-select" id="authors">
            <option value="">select an author</option>
            <?php foreach ($authors as $author):?>
                <option value="<?=htmlspecialchars($author['id'], ENT_QUOTES, 'UTF-8'); ?>">
                <?=htmlspecialchars($author['name'], ENT_QUOTES, 'UTF-8'); ?>
            </option>
            <?php endforeach;?>
        </select>
        <br />
        <select name="modules" class="form-select" id="modules">
            <option value="">Select a module name</option>
            <?php foreach ($modules as $module):?>
                <option value="<?=htmlspecialchars($module['id'], ENT_QUOTES, 'UTF-8'); ?>">
                <?=htmlspecialchars($module['moduleName'], ENT_QUOTES, 'UTF-8'); ?>
            </option>
            <?php endforeach;?>
        </select>
    </div>
        <br />

        <div class="card-action">
            <input class="btn btn-primary" type="submit" name="submit" value="Submit" >
        </div>
        
    
</form>