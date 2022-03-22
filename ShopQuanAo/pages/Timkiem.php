<?php 
$level= "../";
include($level."config.php");
include($level.head_path."head.php");
include($level.content_path."Header.php");
include($level.content_path."Banner.php");

include $level."db/detail_timKiem.php";
?>
<html>
  <body>

	   <div class="tab1">	
                          <?php

						  foreach($chiTietSP_row as $i){
						  ?>						
								<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="<?php echo $level.$i['Anh'];?>" alt="" class="pro-image-front">
										<img src="<?php echo $level.$i['Anh'];?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="<?php echo $level.'pages/detail.php?id='.$i[0];?>'" class="link-product-add-cart">Xem chi tiết</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html"><?php echo $i[1];?></a></h4>
										<div class="info-product-price">
											<span class="item_price"><?php echo $i[2];?></span>
											<del><?php echo $i[2];?></del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	
																	<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
						  <?php }
						  ?>
						  <div class="clearfix"></div>
  
  <body>
</html>

<?php
include($level.content_path."Coupons.php");
include($level.footer_path."Footer.php");
?>