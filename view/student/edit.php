<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>student/editSaveThis" method="post">
	
		<input type="text" name="firstname" placeholder="Firstname">
		<input type="text" name="lastname" placeholder="Lastname">

		<input type="hidden" name="id" value="<?= $clients['client_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
