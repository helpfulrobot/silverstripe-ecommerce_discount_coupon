<?php


/**
 * developed by www.sunnysideup.co.nz
 * author: Nicolaas - modules [at] sunnysideup.co.nz
**/

//copy the lines between the START AND END line to your /mysite/_config.php file and choose the right settings
//===================---------------- START ecommerce_discount_coupon MODULE ----------------===================
/**
 * ADD TO ECOMMERCE.YAML:
Order:
	modifiers: [
		...
		DiscountCouponModifier
	]
StoreAdmin:
	managed_models: [
		...
		DiscountCouponOption
	]
*/
//===================---------------- END ecommerce_discount_coupon MODULE ----------------===================


