 <?php
$total = 0;
$items = [];
$info  = 'Select something to order.';

// form submitted
if( !empty( $_POST['choice'] ) && is_array( $_POST['choice'] ) )
{
    // loop all item choices
    foreach( $_POST['choice'] as $item )
    {
        // filter item info
        $name     = trim( $item['name'] );
        $price    = floatval( $item['price'] );
        $quantity = intval( $item['quantity'] );

        // only add if item was checked and quantity is more than 0
        if( isset( $item['checked'] ) && $quantity > 0 )
        {
            $items[] = $quantity .' '. $name;
            $total  += $price * $quantity;
        }
    }
    // update info if items were selected
    if( count( $items ) )
    {
        $info = 'You selected ('.implode( ', ', $items ).'), total: '.$total;
    }
}
?>