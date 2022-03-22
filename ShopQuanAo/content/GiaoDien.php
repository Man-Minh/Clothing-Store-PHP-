<?php include $level."db/detail_data.php";?>
<style>
  .img-responsive{
	  	width:400px;
		height:450px;
  }
</style>

<!-- Chi Tiết Sản Phẩm-->
<div class="banner-bootom-w3-agileits">
	<div class="container">
	     <div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
						<li data-thumb="Link ảnh">
							<div class="thumb-image"> <img src="<?php echo $level.$chiTietSP_row[0]['Anh'];?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>	
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3> <?php echo $chiTietSP_row[0][1];?> </h3>
					<p><h5> Chính Hãng </h5></p>
					<p><h5> Nhập trực Tiếp </h5></p>
					<p><h5> Số lượng: <?php echo $chiTietSP_row[0][3];?> </h5></p>
					<p><span class="item_price"><?php echo $chiTietSP_row[0][2];?>$ </span> <del><?php echo $chiTietSP_row[0][2];?>$</del></p>
					</div>
<!--  Xong Chi Tiết-->
<!-- Chọn Kích Cỡ -->
					<div class="color-quality">
						<div class="color-quality-right">
							<h5>Kích Cỡ</h5>
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">Size M</option>
								<option value="null">Size L</option> 
								<option value="null">Size XL</option>					
								<option value="null">Size XXL</option>								
							</select>
						</div>
					</div>
<!-- Chọn Kích Cỡ Xong-->
<!-- Nút Mua -->
<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="submit" name="submit" value="Mua Ngay" class="button">
																</fieldset>
															</form>
														</div>
																			
						</div>
