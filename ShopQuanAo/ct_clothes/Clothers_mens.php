                     
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	<?php include $level.'db/data_Nam.php';?>
									
		<div class="single-pro">
                     <?php foreach($dsSanPham as $i){?>						
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
										<h4><a href="single.html"><?php echo $level.$i[1];?></a></h4>
										<div class="info-product-price">
											<span class="item_price"><?php echo $i[2];?></span>
											<del><?php echo $i[2];?></del>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Party Men's Blazer" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
						  <?php }
						  ?>
						</div>
							<div class="clearfix"></div>
		</div>
	</div>
</div>	
<!-- //mens -->