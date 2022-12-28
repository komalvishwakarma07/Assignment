<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
   		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
   		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
   		<title>Document</title>
		<style type="text/css">
			.form{
				display: flex;
				align-items: center;
				flex-direction: column;
				text-align:center;
				width: 50%;
				margin: 0 auto;
				border: 2px solid white;
        		border-radius: 10px;
				background-color: lightgreen;
			}
			.col{
				border: 2px inset white;
		        border-radius: 5px;
		        margin-top: 10px;
		        width: 500px;
		        height: 30px;
		        text-align:Left;
				margin: 10px 10px 10px 0px;
			}
			h2{
				margin: 0 auto;
			}
			label{
				text-align: left;

			}
			input[type="text"],input[type="email"],input[type="number"],input[type="submit"],textarea{
			    margin-left:60px;
			    text-align:center;
			    width: 300px;
			    border: Right;
			    margin-top:4px;
			}
			 h2{
   			 text-align:Left;
   			  }
  
		   input[type="submit"]{
		    display:inline-center;
		    width:100px;
		    height:30px;
		    color:white;
		    border: 2px solid black;
		    background-color: #555555;
		}	
		.row{

			}
		</style>
	</head>
	<body>
		<div class="form">
			<form action="">
				<h2>Step 1: Your details</h2>

				<div class="col">
					<label for="">Name</label>
					<input type="text" placeholder="First and last Name">
				</div>

				<div class="col">
					<label for="">Email</label>
					<input type="email" placeholder="Example@gmail.com">
				</div>

				<div class="col">
					<label for="">phone</label>
					<input type="number" placeholder="Eg. +4496000000">
				</div>

				<h2>Step 2:Delivery address</h2>

				<div class="col" style="height:100px;">
					<label for="">Address</label>
					<textarea cols="" rows="5"></textarea>
				</div>

				<div class="col">
					<label for="">Post code</label>
					<input type="number" placeholder="">
				</div>
				<div class="col">
					<label for="">Country</label>
					<input type="text" placeholder="">
				</div>

				<h2>Step 3: card detail</h2>

				<div class="col" style="height:50px;">
        		<label for="">card type</label>
        		<br>
        
		        <input type="radio" name="" ><img src="visa.jpg" width="20" height="10" >Visa
		        <input type="radio" name=""><img src="Amex.jpg" width="20" height="10">AmEx
		        <input type="radio" name=""><img src="master.jpg" width="20" height="10">Mastercard
		       	</div>

				<div class="col">
					<label for="">card number</label>
					<input type="number" placeholder="">
				</div>

				<div class="col">
					<label for="">security code</label>
					<input type="number">
				</div>

				<div class="col">
					<label for="">Name on card </label>
					<input type="text" placeholder="exact name as on the card">
				</div>

				<div class="row">
					<input type="submit" value="BUY It" id="">
				</div>

			</form>
		</div>
	</body>
</html>
