 <?php
  

function send_LINE($msg){
 $access_token = 'GfXsrQMKtT6R9Ec7mWiosbDdXjbnqGcBN5FtSqMdUVW2KjE+Mp5RW9R7ItaTw8yOzp5NW9WnfM4UC2L63P16xErf2Ef0gwjBxcafyMbXyFtxEmlMOVk7Ii27AY1CibF2iAky6R7HzGgl5HKfaRT/cgdB04t89/1O/w1cDnyilFU=
'; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '1b97805593736694707fe22bfca74bfe',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
