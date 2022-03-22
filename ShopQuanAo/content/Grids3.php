<div class="tab3">
								<?php 
								include $level.'db/data_Tui.php';
								include $level.'db/data_Giay.php';     
								foreach($dsSanPham as $i){?>
						<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="<?php echo $i[4];?>" alt="" class="pro-image-front">
										<img src="<?php echo $i[4];?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="<?php echo $level.'pages/detail.php?id='.$i[0];?>" class="link-product-add-cart">Xem</a>
												</div>
											</div>
											<span class="product-new-top">Mới</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html"><?php echo $i[1];?></a></h4>
										<div class="info-product-price">
											<span class="item_price"><?php echo $i[2];?>$</span>
											<del><?php echo $i[2];?>$</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value=" Laptop Messenger Bag" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
								<?php }?>
							<div class="clearfix"></div>
						</div>
<div class="tab4">
							<?php foreach($dsGiay as $i){?>
							    <div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="<?php echo $i[4];?>" alt="" class="pro-image-front">
										<img src="<?php echo $i[4];?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="<?php echo $level.'pages/detail.php?id='.$i[0];?>" class="link-product-add-cart">Xem</a>
												</div>
											</div>
											<span class="product-new-top">Mới</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html"><?php echo $i[1];?></a></h4>
										<div class="info-product-price">
											<span class="item_price"><?php echo $i[2];?>$</span>
											<del><?php echo $i[2];?>$</del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Running Shoes" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
							<?php }?>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	<!-- //new_arrivals --> 
	<!-- /we-offer -->
		<div class="sale-w3ls">
			<div class="container">
				<h6>We Offer Flat <span>40%</span> Discount</h6>
 
				<a class="hvr-outline-out button2" href="single.html">Shop Now </a>
			</div>
		</div>
	<!-- //we-offer -->
<!--/grids-->