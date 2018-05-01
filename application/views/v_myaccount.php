<!DOCTYPE html>
<html>
<head>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		 	<link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>assets/css/profile.css"> 
	<title></title>

</head>

		<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="<?php echo base_url(); ?>uploads/img-profile/<?php echo $this->session->userdata('img')?>" class="img-float" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->

				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						   <h2><?php echo $this->session->userdata('name')?></h2>

					</div>

				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button onclick="location.href = '<?php echo site_url('c_akun/logout') ?>';" type="button" class="btn btn-danger btn-sm">Logout</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li>
							<a href="#overview" class="tablinks" onclick="openCity(event, 'overview')" id="defaultOpen">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#updateacc" class="tablinks" onclick="openCity(event, 'updateacc')"> 
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="<?php echo base_url()?>index.php">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div id="table_id" class="profile-content">
			   	<div id="overview" class="tabcontent">
						 <h2><?php echo $this->session->userdata('username')?></h2>
						 <h2><?php echo $this->session->userdata('name')?></h2>
						   <h2><?php echo $this->session->userdata('email')?></h2>
						   <h2><?php echo $this->session->userdata('address')?></h2>
			   	</div>
			   	<div id="updateacc" class="tabcontent">
			   		<div>
			   			<?php echo form_open("c_akun/editakun"); ?>
				   		<div class="form-group">
				   			<label class="control-label" for="id">Nama</label>
				   			<input type="text" class="form-control" disabled value="<?php echo $this->session->userdata('name')?>" id="name">
				   		</div>
				   		<div class="form-group">
				   			<label class="control-label" for="id">Username</label>
				   			<input type="text" class="form-control" disabled value="<?php echo $this->session->userdata('username')?>" id="username">
				   		</div>	
				   		<div class="form-group">
				   			<label class="control-label" for="id">Password</label>
				   			<input type="password" class="form-control" disabled value="<?php echo $this->session->userdata('password')?>" id="password">
				   		</div>
				   						   		<div class="form-group">
				   			<label class="control-label" for="id">Username</label>
				   			<input type="text" class="form-control" disabled value="<?php echo $this->session->userdata('username')?>" id="username">
				   		</div>		   					   		
				   		<?php echo form_close(); ?>
				   	</div>
			   	</div>			   	
            </div>
		</div>
	</div>
</div>

<br>
<br>

<script>
	function openCity(evt, cityName) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(cityName).style.display = "block";
		vt.currentTarget.className += " active";
		}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>