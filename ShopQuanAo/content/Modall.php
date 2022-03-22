<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">ĐĂNG NHẬP <span>NGAY</span></h3>
									<form action="#" method="post">
									
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Mật khẩu</label>
								<span></span>
							</div>						
							<input type="submit" value="Đăng nhập">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
						   
						   <?php $dsName=array(
							    array('aclass'=>'facebook', 'iclass'=>'fa-facebook'),
								array('aclass'=>'twitter', 'iclass'=>'fa-twitter'),
								array('aclass'=>'instagram', 'iclass'=>'fa-instagram'),
								array('aclass'=>'pinterest', 'iclass'=>'fa-linkedin'));
							
								         foreach($dsName as $i) 
										{?>
															<li><a href="#" class="<?php echo $i['aclass'];?>">
																  <div class="front"><i class="fa <?php echo $i['iclass'];?>" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa <?php echo $i['iclass'];?>" aria-hidden="true"></i></div></a></li>
										
														
														</ul>
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Chưa có tài khoản?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="<?php echo $level.'images/log_pic1.jpg';?>" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Đăng ký <span>Ngay</span></h3>
						 <form action="<?php echo $level.process_path.'DangKyTK.php';?>" method="Get">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Tên</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="number" name="phone" required=""> 
								<label>Số điện thoại</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="text" name="home" required=""> 
								<label>Địa chỉ</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="pass" required=""> 
								<label>Mật khẩu</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="Confirm Password" required=""> 
								<label>Xác nhận mật khẩu</label>
								<span></span>
							</div> 
							<input type="submit" value="Đăng ký">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<?php
										}?>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">Bằng cách nhấp vào đăng ký, tôi đồng ý với các điều khoản của bạn</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="<?php echo $level.'images/log_pic1.jpg';?>" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->
