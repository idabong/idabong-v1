<?php $title = 'Thông tin tài khoản'; include 'includes/header.php';?>

<div id="content">
	
	<div class="row"> <!-- MAIN ROW -->
		<!-- Left Collumn -->
		<div class="col-sm-3">

		</div><!--end .col-sm-3 left collumn -->

		<div class="col-sm-6"><!-- MAIN COLLUMN-->
			<div class="panel panel-success"><!--Team Avatar Form-->
				<div class="panel-heading"><strong><span class="glyphicon glyphicon-picture"></span> Hình đại diện</strong></div>
				<div class="panel-body">
				    <form>
						<div class="form-group">
							<div class="media">
								<div class="media-left">
									<a href="#">
				      					<img src="css/images/default-avatar-100x100.jpg" alt="user-avatar">
				    				</a>
								</div>
								<div class="media-body">
									<input type="file" id="userAvatar" tabindex="1">
					    			<p class="help-block">Chọn hình định dạng jpg/png, dung lượng không quá 512kb.</p>
								</div>
							</div>
						</div>

					  	 <div class="form-group"><a href="#" target="_blank" class="btn btn-success btn-block" tabindex="2">Cập Nhật</a></div>
					</form>   
				</div><!-- End . panel-body -->
			</div><!--END Team Avatar Form-->

			<div class="panel panel-success"><!-- Form Team infos-->
				<div class="panel-heading"><strong><span class="glyphicon glyphicon-user"></span> Thông tin cá nhân</strong></div>
				<div class="panel-body">
					<form>

						<div class="form-group">
						    <input type="text" name="userName" class="form-control" id="userName" size="20" maxlength="80"  placeholder="Tên" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>" tabindex="4">
					    </div>
						 

					    <div class="form-group">
						    <input type="tel" name="tel" id="tel" class="form-control" size="20" maxlength="80"  placeholder="Điện thoại di động" value="<?php if(isset($_POST['tel'])) echo $_POST['tel']; ?>" tabindex="5">
					    </div>

						<a href="#" target="_blank" class="btn btn-success btn-block" tabindex="6">Cập Nhật</a>
					</form>

				</div><!-- End . panel-body -->
			</div><!--END Form Team infos-->

			<div class="panel panel-success"><!-- Form Change Password-->
				<div class="panel-heading"><strong><i class="fa fa-key fa-fw"></i> Thay đổi mật khẩu</strong></div>
				<div class="panel-body">
					<form>
						<!-- OLD PASSWORD -->
						  <div class="form-group">
						    <input type="password" class="form-control" id="oldPassword" name="oldPassword" placeholder="Mật khẩu cũ" value="<?php if(isset($_POST['oldPassword'])) echo $_POST['oldPassword']; ?>" tabindex='7' />
						  </div>

						<!-- NEW PASSWORD -->
						  <div class="form-group">
						    <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Mật khẩu mới" value="<?php if(isset($_POST['newPassword'])) echo $_POST['newPassword']; ?>" tabindex='8' />
						  </div>

						  <!-- CONFIRM NEW PASSOWD -->
						  <div class="form-group">
						    <input type="password" class="form-control" id="confirmNewPassword" name="confirmNewPassword" placeholder="Xác nhận mật khẩu mới" value="<?php if(isset($_POST['confirmNewPassword'])) echo $_POST['confirmNewPassword']; ?>" tabindex='9' />
						  </div>

						<a href="#" target="_blank" class="btn btn-success btn-block" tabindex='10'>Cập Nhật</a>
					</form>

				</div><!-- End . panel-body -->
			</div><!--END Form Change Password-->
		
		</div> <!--end MAIN COLLUMN -->
			
		<!-- right collumn -->
		<div class="col-sm-3">
			
		</div><!--end .col-sm-3 right collumn -->
	</div><!-- end MAIN ROW -->


</div><!--END #content-->
			
<?php include 'includes/footer.php';?>

<!--******** Additional Scrip ********-->
<!-- Vietnamese reCaptcha by Google-->
<script src='https://www.google.com/recaptcha/api.js?hl=vi'></script>

<!-- Custom JS -->
<script language="javascript" type="text/javascript" src="js/validate-forms.js"></script>

</body>

</html>