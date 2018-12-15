
<?php
include('views/elements/header.php');
?>

<div class="container">
	<div class="page-header">
    <h1>Edit Profile</h1>
   
    <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
    <?php }?>

    <form id="profile_edit_form" action="<?php echo BASE_URL;?>members/update<?php echo $task?>" method="post">
        <?php include('views/elements/edit_profile.php'); ?>
    </form>
    <?php echo '<p><a href="'.BASE_URL.'">Return home page</a></p>';?>

</div>
</div>

<?php include('views/elements/footer.php');
?>