<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo $level."index.php";?>" class="active"><i class="lnr lnr-home"></i> <span>Trang Chủ</span></a></li>
						
						<li><a href="<?php echo $level."pages/ThongKe.php";?>" class=""><i class="lnr lnr-chart-bars"></i> <span>Thống Kê</span></a></li>

						
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="fas fa-user-circle"></i></i> <span>Tài Khoản</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo $level."pages/page-profile.php";?>" class="">Thông tin chủ tài khoản</a></li>
									<li><a href="<?php echo $level."pages/page-login.php";?>" class="">Đăng Xuất</a></li>
								</ul>
							</div>
						</li>
						
						<li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed1"><i class="lnr lnr-file-empty"></i></i> <span>Đơn Hàng</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">							
									<li><a href="<?php echo $level."pages/DuyetDon.php";?>" class="">Duyệt đơn hàng</a></li>
									<li><a href="<?php echo $level."pages/DonHang.php";?>" class="">Danh Sách Đơn Hàng</a></li>
								</ul>
							</div>
						</li>
						
						<li>
							<a href="#subPages3" data-toggle="collapse" class="collapsed1"><i class="fas fa-tshirt"></i></i> <span>Sản Phẩm</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages3" class="collapse ">
								<ul class="nav">							
									<li><a href="<?php echo $level."pages/QuanLySanPham.php";?>" class="">Quản Lý Sản Phẩm</a></li>
									<li><a href="<?php echo $level."pages/SanPham.php";?>" class="">Danh Sách Sản Phẩm</a></li>
								</ul>
							</div>
						</li>
						<li><a href="<?php echo $level."pages/KhachHang.php";?>" class=""><i class="fa fa-address-card"></i> <span>Danh Sách Khách Hàng</span></a></li>
						
						
						<li><a href="<?php echo $level."pages/TaiKhoan.php";?>" class=""><i class="lnr lnr-text-format"></i> <span>Quản Lý Tài Khoản</span></a></li>
						
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->