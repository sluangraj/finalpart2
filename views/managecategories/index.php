<?php include('views/elements/header.php');


?>

<div class="container">
    <div class="page-header">
        <h1><?php echo $title; ?></h1>
    </div>

    <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
    <?php }?>

    <div class="container">
    <?php
    foreach($categories as $key => $value){ ?>
        <?php echo $value; ?>
        <a href="<?php echo BASE_URL; ?>managecategories/edit/<?php echo $key; ?>"></a>         
        <br>
    <?php }
    ?>

    <form method="post" id="newcatform" action="<?php echo BASE_URL; ?>managecategories/add">
        <div class="input-append">
            <input name="name" type="text" placeholder="New category..." required></input>
            <input type="submit" class="btn btn-primary"></input>
        </div>
    </form>
    </div>

</div>
<?php include('views/elements/footer.php');?>