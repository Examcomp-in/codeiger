<?php include'../components/header.php'; ?>
<style>


.container{
	display: flex;
	flex-flow: column;
	height: 100%;
	align-items: space-around;
	justify-content: center;
}

.userInput{
	display: flex;
	justify-content: center;
}

input{
	margin: 10px;
	height: 35px;
	width: 65px;
	border: none;
	border-radius: 5px;
	text-align: center;
	font-family: arimo;
	font-size: 1.2rem;
	background: #eef2f3;

}

h1{
	text-align: center;
	font-family: arimo;
	color: honeydew;
}


button{
	width: 150px;
	height: 40px;
	margin: 25px auto 0px auto;
	font-family: arimo;
	font-size: 1.1rem;
	border: none;
	border-radius: 5px;
	letter-spacing: 2px;
	cursor: pointer;


}

</style>
<script>
function clickEvent(first,last){
			if(first.value.length){
				document.getElementById(last).focus();
			}
		}</script>






<center>
<div class="container col-md-4" style="margin-top:10%">
<p style="font-weight:bold;">Account created successfully</p>
<p style="color:grey">Please activate your account by entering the otp sent to your phone number</p>
<div class="container">

		<div class="userInput">
			<input type="text" id='ist' maxlength="1" onkeyup="clickEvent(this,'sec')">
			<input type="text" id="sec" maxlength="1" onkeyup="clickEvent(this,'third')">
			<input type="text" id="third" maxlength="1" onkeyup="clickEvent(this,'fourth')">
			<input type="text" id="fourth" maxlength="1" onkeyup="clickEvent(this,'fifth')">
			<input type="text" id="fifth" maxlength="1"  onkeyup="clickEvent(this,'sixth')">
			<input type="text" id="fifth" maxlength="1">
			
		</div>
		<button>CONFIRM</button>
	</div>
</div>
</center>

<?php include'../components/footer.php'; ?>

