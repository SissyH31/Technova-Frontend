<html>
    <head>
        <style>
            .logo {
            text-align: center;
            }
            .input {
                text-align: center;
            }
			.info > form {
				margin-left: 30px;
			}
			.info > form > input{
                margin-left: 100px;
            }
            /* .info > .Items > form{
                margin-left: 100px;
            }
			.info > .Items > form > input{
                margin-left: 10px;
            }
			.info > .Amount > form{
                margin-left: 100px;
            }
			.info > .Amount > form > input{
                margin-left: 4px;
            }
			.info > .Price > form{
                margin-left: 100px;
            }
			.info > .Price > form > input{
                margin-left: 22px;
            }
			.info > .Emergency > label{
                margin-left: 100px;
            } */
        </style>
    </head>
    <body>
        <?php 
			$item
		?>
        <div class="logo">
			<a href = "C:\Users\Sissy He\OneDrive - University of Waterloo\Desktop\HTML\MainPage.html">
            	<img src = "https://lh3.googleusercontent.com/gYY2pQTSu7P2dDM3CVqkucmOdMQJblYiNA8RdnxwV6j6drCJhXBR6bq6L7BOUkjQgaxlsdUZmDol2sh3sIbJUufGh_EMNmn3XTSLufRfSQ2pWS3hlO47tcJXP-BrdePCFt_XOFKwkg=w2400">
			</a>
		</div>
        <h1>Information</h1>
		<form action="requestInfo.php" method="post">
			<div class="info">
				<div class="Items">
					Item(s):  <input name = "item" type = "text" id = "Items" maxlength="200" size = "200">
				</div>
				<div class="Amount">
					Amount:  <input name = "amount" type = "text" id = "Amount" maxlength="200" size = "200">
				</div>
				<div class="Price">
					Price:   <input name = "price" type = "text" id = "Price" maxlength="200" size = "200"> 
				</div>
				<div class="Emergency">
					<label for="Price">Emergency</a></label> 
				</div>
			</div>
		<h1>Confirmation</h1> 
		<div class="confirmation">
			<div class="Name">
				Name: <input name = "name" type = "text" id = "Name" maxlength="200" size = "200">
			</div>
			<div class="Address">
				Address: <input name = "address" type = "text" id = "Address" maxlength="200" size = "200">
			</div>
			<div class="Contact">
				Contact: <input name = "email" type = "text" id = "Email" maxlength="200" size = "200">
				<input name = "phone" type = "text" id = "Phone" maxlength="200" size = "200">
			</div>
		</div>
		<input type="submit">
	</form>
    </body>
    <script>
       
    </script>
</html>
