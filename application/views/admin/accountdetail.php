
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Account/detail</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Update Account</div>
				<div class="panel-body" style="padding:20px 0px;">
					<?php
						//echo "hi";
						$user = $detail_user[0];
						//print_r($detail_user);
					?>
					<form role="form" action="<?php echo base_url();?>Admin/Account/update/<?php echo $user['id_user']?>" method="POST">
						<div class="col-md-8">
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" placeholder="Email" name="email" value='<?php echo $user["username"]?>' required>
							</div>
						</div>

						<div class="col-md-8">
							<div class="form-group">
								<label>Password Baru</label>
								<input type="password" class="form-control" placeholder="Password" name="password" required>
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Re-Password Baru</label>
								<input type="password" class="form-control" placeholder="Re-Type Password" name="repassword">
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Fullname</label>
								<input class="form-control" placeholder="Fullname" name="fullname" value="<?php echo $user["fullname"]?>">
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Telephone</label>
								<input class="form-control" placeholder="Telephone" name="telephone" value='<?php echo $user["telephone"]?>'>
							</div>
						</div>
						<div class="col-md-8">
							<button type="submit" class='btn btn-primary'>Update Data</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.row-->


</div>	<!--/.main-->	
