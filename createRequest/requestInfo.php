<html>
    <head></head>
    <body>
        <form id="success" action="requestInfo.php" method="post" onSubmit="alert('Thank you!');"></form>
        <?php 
            $item = $_POST["item"];
            $amount = $_POST["amount"];
            $price = $_POST["price"];
            $name = $_POST["name"];
            $address = $_POST["address"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $url = 'C:\Users\Sissy He\OneDrive - University of Waterloo\Desktop\HTML\urls.py';
            $data = array('item' => 'item', 'amount' => 'amount', 'price' => 'price', 'name' => 'name', 'address'=> 'address', 'email'=>'email', 'phone'=>'phone');

            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data)
                )
            );
            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            if ($result === FALSE) { /* Handle error */ }

            var_dump($result);
        ?>
    </body>
</html>

