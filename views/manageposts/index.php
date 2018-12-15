<?php include('views/elements/header.php');



?>

<div class="container">
	<div class="page-header">
     <a href="<?php echo BASE_URL;?>managecategories" class="btn btn-primary">Add Categories</a>
      <a href="<?php echo BASE_URL;?>manageposts/add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Add Post</a>
      <a href="<?php echo BASE_URL;?>manageposts/pdelete/"<?php echo $pID?>" class="btn btn-primary">Delete Blog</a>
	 
  <h1><?php echo $title;?></h1>
  </div>
  
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  
  <div class="container">
     
     
      <?php foreach($posts as $p){?>
  <br/>
    <a href="<?php echo BASE_URL;?>manageposts/edit/<?php echo $p['pID'] ?>" class="btn btn-primary">Modify Post</a>
    <a href="<?php echo BASE_URL;?>manageposts/remove/<?php echo $p['pID'] ?>" class="btn btn-primary">Delete Post</a>
  <br/>          
  <h3>
    <div class="float-right btn-group">
    <a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a><br/>
 
    </div>
    <a href="<?php echo BASE_URL?>blog/post/<?php echo $p['pID'];?>" title="<?php echo $p['title'];?>"><?php echo $p['title'];?></a>
  </h3>
   <sub><?php echo 'Posted on ' . date_format(date_create($p['date']), 'j M Y') . ' by <a href="'.BASE_URL.'members/view/'. $p[uid]. '">' . $p[first_name] . ' ' . $p[last_name] . '</a> in <a href="'.BASE_URL.'category/view/'. $p[categoryid].'">' . $p[name] .'</a>' ?></sub>
   <div style="margin-top:15px;"><a href="<?php echo BASE_URL?>ajax/get_post_content/?pID=<?php echo $p['pID'];?>" class="btn post-loader">View entire post</a></div>
  <?php }?>
      
      
    </div>
</div>
<?php include('views/elements/footer.php');?>
