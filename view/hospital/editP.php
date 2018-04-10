<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>Patients/editSaveThis" method="post">
	
		<input type="text" name="patient_name" placeholder="Patient Name" value="<?= $patients['patient_name'] ?>">



		<select name="species_id">
		  <option value="volvo">Volvo</option>
		</select>


		<input type="text" name="patient_status" placeholder="Patient Status" value="<?= $patients['patient_status'] ?>">



		<input type="text" name="client_id" placeholder="Client Id" value="<?= $patients['client_id'] ?>">



		<input type="hidden" name="id" value="<?= $patients['patient_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form> 

</div>
