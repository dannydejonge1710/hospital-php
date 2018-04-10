<div class="container">
	<h1>Create</h1>
	<form action="<?= URL ?>Patients/createSave" method="post">
	
		<input type="text" name="patient_name" placeholder="Patient name">
		<input type="text" name="species_id" placeholder="Species description">
		<input type="text" name="patient_status" placeholder="Patient status">
		<input type="text" name="client_id" placeholder="Client firstname">

		<input type="submit" value="Verzenden">
	
	</form>

</div>