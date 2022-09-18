<html>

<body>

	<div id="myModalSignIn" class="modal fade">
		<div class="modal-dialog modal-login modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title"> User Login</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<form method="post" action="user.php">

						<select name="type" class="custom-select mb-3" required>
							<option value="" selected disabled>Please Select User Type </option>
							<option value="planhead">Planning Director </option>
							<option value="transporthead">Transport Head</option>
							<option value="teachinghead">Teaching Staff Head</option>
							<option value="studenthead">Student Service Head</option>
							<option value="referalhead">Referal Hosiptal Head</option>


						</select>

						<div class="form-group">
							<i class="fa fa-user"></i>

							<input type="text" name="username" class="form-control" placeholder="Username" required="required">
						</div>
						<div class="form-group">
							<i class="fa fa-lock"></i>
							<input type="password" name="pwd" class="form-control" placeholder="Password" required="required">
						</div>
						<div class="form-group">
							<input name="submit" type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<p> By logging in you agree to our Terms and Conditions and Privacy Policy</p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
