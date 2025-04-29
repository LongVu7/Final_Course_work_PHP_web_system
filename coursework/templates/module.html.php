<?php 
if(empty($modules)) {
    echo '<p>There are no modules to display. </p>';
}
else{
    foreach($modules as $module): ?>
        <blockquote style="border: 1px solid black; padding: 10px; margin-bottom: 10px;">
        <?=htmlspecialchars($module['moduleName'], ENT_QUOTES, 'UTF-8')?>
        
        </blockquote>
    <?php endforeach;
}

?>