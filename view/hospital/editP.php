<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>Patients/editSaveThis" method="post">
	
		<input type="text" name="patient_name" placeholder="Patient name" value="<?= $patients['patient_name']; ?>">
		<input type="number" name="species_id" placeholder="Species id" value="<?= $patients['species_id']; ?>">
		<input type="number" name="client_id" placeholder="Client id" value="<?= $patients['client_id']; ?>">
		<input type="text" name="patient_status" placeholder="Patient status" value="<?= $patients['patient_status']; ?>">

		<input type="hidden" name="id" value="<?= $patients['patient_id']; ?>">

		<input type="submit" value="Verzenden">
	
	</form>

</div>
