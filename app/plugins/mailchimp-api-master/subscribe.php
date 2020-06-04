<?php
require_once 'examples/inc/MCAPI.class.php';
require_once 'examples/inc/config.inc.php'; //contains apikey

$api = new MCAPI($apikey);
$lists = $api->lists();
$listId = $lists["data"][$lists["total"]-1]["id"];
if(isset($_REQUEST["subscribe"]))
{
    if($_REQUEST["emailid"]!="")
    {
/**
This Example shows how to Subscribe a New Member to a List using the MCAPI.php 
class and do some basic error checking.
**/

// By default this sends a confirmation email - you will not see new members
// until the link contained in it is clicked!
$retval = $api->listSubscribe( $listId, $my_email);

if ($api->errorCode){
	echo "Unable to load listSubscribe()!\n";
	echo "\tCode=".$api->errorCode."\n";
	echo "\tMsg=".$api->errorMessage."\n";
} else {
    echo "Subscribed - look for the confirmation email!\n";
}
}
}
?>
  <style type="text/css">
        body {
            background: #fff;
            color: #8e8e8e;
            font: 12px/20px "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
            margin-top: 5px;
        }



        a {
            color: #76949F;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }



        .example1 {
            width: 100%;
            margin: 0px auto;
        }
input[type=email] { padding: 5px ; width: 100%; border: 1px solid #e5e5e5;  }


        .example1 .button {
            background-color: rgb(105, 210, 231);
            background-repeat: no-repeat;
            background-position: center;
          border: 1px solid #e5e5e5;  
          padding: 8px 15px;
          width: 100%;
            margin: 20px auto 0;
            -webkit-border-radius: 6px;
               -moz-border-radius: 6px;
                    border-radius: 6px;
            -webkit-box-shadow: rgba(87, 169, 185, 0.9) 0px 3px 0px 0px, transparent 0 0 0;
               -moz-box-shadow: rgba(87, 169, 185, 0.9) 0px 3px 0px 0px, transparent 0 0 0;
                    box-shadow: rgba(87, 169, 185, 0.9) 0px 3px 0px 0px, transparent 0 0 0;
        }

        .example1 .button:hover {
            -webkit-box-shadow: rgb(105, 210, 231) 0px 3px 0px 0px, transparent 0 0 0;
               -moz-box-shadow: rgb(105, 210, 231) 0px 3px 0px 0px, transparent 0 0 0;
                    box-shadow: rgb(105, 210, 231) 0px 3px 0px 0px, transparent 0 0 0;
        }

 
    </style>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tweetie Demo</title>
<body>
<div class="example1">
<p>Subscribe with use for get continious update</p>
<form action="" method="post">
<input type="email" required="" placeholder="Email Address" name="emailid" />
<input type="submit" class="button" name="subscribe" value="subscribe" />
</form>
</div>
</body>
</html>