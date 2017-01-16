<?php
  document::$template = settings::get('store_template_catalog');
  document::$layout = 'printable';

  if (empty($_GET['order_id'])) die('Missing order ID');

  $order = new ctrl_order($_GET['order_id']);

  echo $order->draw_printable_packing_slip();

  require_once vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_INCLUDES . 'app_footer.inc.php');
?>