<div class="container">

	<h1>Create</h1>
	
	<form action="<?= URL ?>Clients/createSave" method="post">
	
		<input type="text" name="firstname" placeholder="Firstname">
		<input type="text" name="lastname" placeholder="Lastname">
		<input type="text" name="phonenumber" placeholder="Phonenumber">
		<input type="text" name="email" placeholder="Email">


		<input type="submit" value="Verzenden">
	
	</form>

</div>