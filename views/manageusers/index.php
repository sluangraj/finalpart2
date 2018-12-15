<?php
include('views/elements/header.php');?>

<div class="container">
<div class="page-header">

  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
      <?php echo $message?>
    </div>
  <?php }?>
  
  	<div>
		<br>
		<ul style="list-style-type: none">
			<li style="display: inline-block"><a href="<?php echo BASE_URL; ?>manager/"><button class="btn btn-primary btn-sm"><i class="fa fa-chevron-left"></i>Back to Manage</button></a></li>
		</ul>
	
	<br><br>
</div>


<h3><?php echo $title;?></h3>
  </div>

<?php foreach($users as $s){?>
	
    <div class="container">
    <h3><?php echo $s['email'];?><br/>
	<?php echo strval($s['first_name'].' '.$s['last_name'])?><br></h3>		
		<p><h4>User Type: </h4><b>
		
 		<?php if ($s['user_type'] == '1') {
            echo 'Admin';
        } else {
            echo 'User';
        }?></b></p><div class="container">
		  <?php if ($s['active'] != '1') { ?><a class="btn btn-success" href="<?php echo BASE_URL;?>manageusers/approve_user/<?php echo $s['uID'];?>">Approve</a>
		  
		  <?php }?>
		  <?php if ($s['user_type'] == '2') { ?>
             <a class="btn btn-danger" href="<?php echo BASE_URL;?>manageusers/remove_user/<?php echo $s['uID']?>">Delete</a><br/>

            <?php }?>
			<?php echo $response?>
			<hr>
		</div>	
		</div>
		</div>
        <br>
    <?php }
    ?>
	
    
    </div>

</div>
<?php include('views/elements/footer.php');?>