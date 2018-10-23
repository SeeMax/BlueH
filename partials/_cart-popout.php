<div class="cart-popout cartPopout">
  <?php global $woocommerce; ?>
  <?php $items = $woocommerce->cart->get_cart();?>
  <?php if ( WC()->cart->get_cart_contents_count() == 0 ):?>
        <h5>Your Cart Is Empty.</h5>
        <br />
        <div class="button">
          <a class="c-block-fill" href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>"></a>
          Start Shopping
        </div>
  <?php else:?>
    <?php foreach($items as $item => $values) :?>
      <div class="single-popup-cart-item">
        <?php $_product =  wc_get_product( $values['data']->get_id() );?>
        <!-- //product image -->
        <?php $getProductDetail = wc_get_product( $values['product_id'] );?>
        <?php $price = $price = $_product->get_price();?>
        <?php $totalCount = $values['quantity'];?>
        <?php $itemTotal = $price * $totalCount;?>
        <?php $variation_data = $_product->get_variation_attributes();?>
        <?php $variation_detail = woocommerce_get_formatted_variation( $variation_data, true );?>
        <?php echo $getProductDetail->get_image(); // accepts 2 arguments ( size, attr )?>
        <div class="sp-item-content">
          <div class="cart-pop-quantity">
            <?php echo $totalCount?>
          </div>
          <h5><?php echo $_product->get_title();?></h5>
          <div class="single-cart-size">
            <?php echo $variation_detail;?>
          </div>
          $<?php echo $itemTotal;?>
        </div>
      </div>
    <?php endforeach;?>
    <div class="button">
      <a class="c-block-fill" href="<?php echo wc_get_cart_url(); ?>"></a>
      View Cart
    </div>
  <?php endif;?>
</div>
