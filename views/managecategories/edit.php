<?php include('views/elements/header.php');?>

<div class="container">
    <div class="page-header">
        <h1><?php echo $title; ?></h1>
    </div>
    <div class="container">
	
    <form method="post" id="newcatform" action="<?php echo BASE_URL; ?>managecategories/update">	
    <input name="categoryID" type="hidden" value="<?php echo $category['categoryID']; ?>"></input>	
    <input name="name" type="text" class="form-control" placeholder="Category name" value="<?php echo $category['name']; ?>" required></input>			
    <input type="submit" class="btn btn-secondary"></input>
    </form>
    </div>

</div>
<?php include('views/elements/footer.php');?>