<?php  





?>
<!DOCTYPE html>
<html>
	<head>
		<title>LOGIN PAGE TEST</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/login.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	</head>

	<body>
		<h1>Hello, please log in.</h1>
		<div id=login_button>
		<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Log in</button>
		</div>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h4 class="modal-title" id="myModalLabel">Log in</h4>
					</div> <!-- /.modal-header -->

					<div class="modal-body">
						<form role="form">
							<div class="form-group">
								<div class="input-group">
									<input type="text" class="form-control" id="uLogin" placeholder="Username">
									<label for="uLogin"><i class="fa fa-user" aria-hidden="true"></i></label>
								</div>
							</div> <!-- /.form-group -->

							<div class="form-group">
								<div class="input-group">
									<input type="password" class="form-control" id="uPassword" placeholder="Password">
									<label for="uPassword"><i class="fa fa-lock" aria-hidden="true"></i></label>
								</div> <!-- /.input-group -->
							</div> <!-- /.form-group -->

							<div class="checkbox">
								<label>
									<input type="checkbox"> Remember me
								</label>
							</div> <!-- /.checkbox -->
						</form>

					</div> <!-- /.modal-body -->

					<div class="modal-footer">
						<button class="form-control btn btn-primary">Ok</button>

						<div class="progress">
							<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="100" style="width: 0%;">
								<span class="sr-only">progress</span>
							</div>
						</div>
					</div> <!-- /.modal-footer -->

				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
		<script type="text/javascript" src="/js/bootstrap.js"></script>
		<script type="text/javascript" src="/js/login.js"></script>
	</body>
</html>