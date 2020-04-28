<?php 

    $error = "Cannot log you in.";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IMDFlix</title>
  
</head>
<body>
	<div class="login">
		<div class="form form--login">
			<form action="" method="post">
				<h2 form__title>Sign In</h2>
			
				<?php if (isset($error )) :?>
				<div class="form__error">
					<p>
						<?php echo $error?>
					</p>
				</div>
				<?php endif ?>

				<div class="form__field">
					<label for="Email">Email</label>
					<input type="text" id="Email" name="email">
				</div>
				<div class="form__field">
					<label for="Password">Password</label>
					<input type="password" id="Password" name="password">
				</div>

				<div class="form__field">
					<input type="submit" value="Sign in" class="btn btn--primary">	
					<input type="checkbox" id="rememberMe"><label for="rememberMe" class="label__inline">Remember me</label>
				</div>
			</form>
		</div>
	</div>
</body>
</html>