<?php include('views/elements/header.php');


?>
<?php
if( is_array($post) ) {
    extract($post);
}?>

    <div class="container">
        <div class="page-header">
            <h1>Delete Post</h1>
            
        </div>
        <h2><?php echo $title;?></h2>
        <p><?php echo $content;?></p>
        <sub><?php echo 'Posted on ' . date_format(date_create($date), 'j M Y') . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>
        <div class="float-right">
            <a class="btn btn-default" href="<?php echo BASE_URL?>manageposts/pdelete/"<?php echo $p['pID'];?>">Cancel</a>
            <a class="btn btn-danger" href="<?php echo BASE_URL?>manageposts/pdelete/<?php echo $pID; ?>">Delete Post</a>
        </div>
    </div>


<?php include('views/elements/footer.php');?>