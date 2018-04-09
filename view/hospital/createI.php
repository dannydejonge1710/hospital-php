<div class="container">
	<h1>Create</h1>
	<form action="<?= URL ?>Patients/createSave" method="post">
	
		<input type="text" name="patient_name" placeholder="Patient name">
		<input type="number" name="species_id" placeholder="Species id">
		<input type="number" name="client_id" placeholder="Client id">
		<input type="text" name="patient_status" placeholder="Patient status">

		<input type="submit" value="Verzenden">
	
	</form>

</div>