<?php
  require_once('../../includes/config.inc.php');
  require_once(FS_DIR_HTTP_ROOT . WS_DIR_INCLUDES . 'app_header.inc.php');
  $system->user->require_login();
  
  $system->document->layout = 'printable';
  
  if (empty($_GET['order_id'])) die('Missing order ID');
  
  $order = new ctrl_order('load', $_GET['order_id']);
  
  echo $order->draw_printable_packing_slip();
  
  require_once(FS_DIR_HTTP_ROOT . WS_DIR_INCLUDES . 'app_footer.inc.php');
?>