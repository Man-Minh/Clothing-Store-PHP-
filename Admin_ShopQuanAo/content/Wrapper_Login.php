<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box"  >
					<div class="left">
						<div class="content" style = "font-size:19px;">
							<div class="header">
								<div class="logo text-center"><img src="<?php echo $level.asset_path."img/logo-dark.png";?>" alt="Klorofil Logo"></div>
								<p class="lead"><b>ĐĂNG NHẬP</b></p>
							</div>
							<form class="form-auth-small" action="<?php echo $level.'index.php';?>">
								<div class="form-group" >
									<label for="signin-text" class="control-label sr-only" >Tài khoản</label>
									<input type="text" class="form-control" id="signin-TaiKhoan"  placeholder="Tài Khoản">
								</div>
								<div class="form-group" >
									<label for="signin-password" class="control-label sr-only" >Mật khẩu</label>
									<input type="password" class="form-control" id="signin-password"  placeholder="Mật khẩu">
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Nhớ mật khẩu</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">Đăng Nhập</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Quên mật khẩu?</a></span>
								</div>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-registered"></i>Nếu chưa có tài khoản <a href="#">Đăng ký</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Chào mừng đến với shop TERRY</h1>
							<p>Uy tín - Tận tâm - Chất lượng</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
