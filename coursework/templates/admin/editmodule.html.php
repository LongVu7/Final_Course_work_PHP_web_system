<form action="" method="post">
    <div class="card-header">
        <div class="card-title">Edit Module Name</div>
    </div> 

    <div class="col-md-6 col-lg-4">
        <input type="hidden" name="moduleid" value="<?=$module['id'];?>">
        <label for='moduleName'>Module name </label>
        <textarea id="moduleName" name="moduleName" rows="3" cols="40">
        <?=$module['moduleName'];?>
        </textarea>
    </div>
    <!-- Button style -->
    <div class="card-action">
        <input class="btn btn-primary" type="submit" value="Save">
    </div>
 
</form>