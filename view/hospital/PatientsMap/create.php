<div class="container">
	<h1>Create</h1>
	<form action="<?= URL ?>Patients/createSave" method="post">
	
		<input type="text" name="patient_name" placeholder="Patient name">
		
		<select name="species_id">	
			<?php foreach ($species as $specie) { ?>
				<option value="<?= $specie['species_id'] ?>"><?= $specie['species_description'] ?></option>
			<?php } ?>
		</select>



		<input type="text" name="patient_status" placeholder="Patient status">
		<input type="text" name="client_id" placeholder="Client firstname">





		<input type="submit" value="Verzenden">
	
	</form>

</div>