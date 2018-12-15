<?php include('views/elements/header.php');?>


<div class="container">
   <h1>Register</h1>
  <?php if(isset($message) && $message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php if(isset($message)) echo $message?>
    </div>
  <?php }?>
  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>register/addUser<?php if(isset($task)) echo $task ?>" method="post" onsubmit="editor.post()">
          <fieldset>
			<legend>Register Today!</legend>
			<label for="first_name">First Name: </label>
			<input id="first_name" name="first_name"   value="" maxlength="20" required="first_name" type="text">
			<br>

			<label for="last_name">Last Name: </label>
			<input class="txt" id="last_name" name="last_name"   value="" maxlength="20" required="last_name" type="text">
			<br>

			<label for="email">E-mail Address: </label>
			<input class="txt" id="email" name="email"   value="" maxlength="100" required="email" type="text">
			<br>

			<label for="password">Password: </label>
			<input class="txt" id="password" name="password" id="password"  value="" maxlength="100" required="password" type="password" onkeyup='check();' />

			<label for="password">Confirm Password: </label>
            <input type="password" name="confirm_password" id="confirm_password"  onkeyup='check();' />
            <span id='message'></span>


			<br>
			<input name="uID" value="" type="hidden">
			<input name="active" value="" type="hidden">
			<button id="submit" type="submit" class="btn btn-primary">Sign Up</button>
			</fieldset>
        </form>
		<a href="<?php echo BASE_URL; ?>">Back to home page</a>
      </div>
    </div>
</div>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#submit").click(function () {
            var password = $("#password").val();
            var confirmPassword = $("#confirm_password").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>










<?php include('views/elements/footer.php');?>
