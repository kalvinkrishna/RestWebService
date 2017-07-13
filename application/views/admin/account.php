
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Account</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Add Account</div>
				<div class="panel-body" style="padding:20px 0px;">
					<form role="form" action="Account/AccountRegister" method="POST">
						<div class="col-md-8">
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" placeholder="Email" name="email" required>
							</div>
						</div>

						<div class="col-md-8">
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" placeholder="Password" name="password" required>
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Re-Password</label>
								<input type="password" class="form-control" placeholder="Re-Type Password" name="repassword">
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Fullname</label>
								<input class="form-control" placeholder="Fullname" name="fullname">
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Telephone</label>
								<input class="form-control" placeholder="Telephone" name="telephone">
							</div>
						</div>
						<div class="col-md-8">
							<button type="submit" class='btn btn-primary'>Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Account Data</div>
				<div class="panel-body">
					<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
					    <thead>
					    <tr>
					        <th data-field="user" data-checkbox="true" >ID User</th>
					        <th data-field="username" data-sortable="true">Username</th>
					        <th data-field="fullname"  data-sortable="true">Fullname</th>
					        <th data-field="telephone" data-sortable="true">Telephone</th>
					        <th data-field="login" data-sortable="true">Last login</th>
					        <th data-field="action" data-sortable="true">Action</th>
					    </tr>
					    <tbody class='kalvin'>
					    	<?php 
								foreach ($user as $key => $value) {
									# code...

									echo 
									"<tr>
										<td>
											".$value['id_user']."
										</td>
										<td>
											".$value['username']."
										</td>
										<td>
											".$value['fullname']."
										</td>
										<td>
											".$value['telephone']."
										</td>
										<td>
											".$value['last_login']."
										</td>
										<td>
					    					<a href='".base_url()."Admin/Account/detail/".$value['id_user']."'><svg class='glyph stroked clipboard with paper action-small'><use xlink:href='#stroked-clipboard-with-paper'/></svg></a>
					    					<a href='#'><svg class='glyph stroked trash action-small'><use xlink:href='#stroked-trash'/></svg></svg></a>
					    				</td>
									</tr>";
								}
							?>
					    </tbody>
					    </thead>
					</table>
				</div>
			</div>
		</div>
	</div><!--/.row-->	

</div>	<!--/.main-->	
