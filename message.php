
<?php

require __DIR__ . '/vendor/autoload.php';



// Change the following with your app details:

// Create your own pusher account @ https://app.pusher.com



$options = array(

  'cluster' => 'ap2',

  'encrypted' => true

);

$pusher = new Pusher\Pusher(

  '42894xxxx1bfbaxxxx65',

  '60cfxxxxfa4031bxxxxe',

  '45xxx07',

  $options

);



// Check the receive message

if (isset($_POST['message']) && !empty($_POST['message'])) {

  $data = $_POST['message'];

  // Return the received message

  if ($pusher->trigger('test_channel', 'my_event', $data)) {

    echo 'success';
  } else {

    echo 'error';
  }
}
