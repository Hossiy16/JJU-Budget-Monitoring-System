










<div id="myModalloginIn" class="modal fade">
	<div class="modal-dialog modal-login modal-lg">
		<div class="modal-content">
			<div class="modal-header">	
				<h4 class="modal-title"> Admin  Login</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form  method="post" action="admin/process.php">
					<div class="form-group">
						<i class="fa fa-user"></i>
						<input type="text" name="username" class="form-control" placeholder="Username" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" name="password" class="form-control" placeholder="Password" required="required">					
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block btn-lg" name="login" value="Login">
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<p> By logging in you agree to our Terms and Conditions and Privacy Policy</p>
			</div>
		</div>
	</div>
</div>     