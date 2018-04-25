<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>Patients/editSaveThis" method="post">
	
		<p><input type="text" name="patient_name" placeholder="Patient name" value="<?= $patients['patient_name'] ?>"></p>
		
		<p><select name="species_id">	
			<?php foreach ($species as $specie) { ?>
				<option value="<?= $specie['species_id'] ?>"><?= $specie['species_description'] ?></option>
			<?php } ?>
		</select></p>

		<p><input type="text" name="patient_status" placeholder="Patient status" value="<?= $patients['patient_status'] ?>"></p>
	
		<p><select name="client_id">	
			<?php foreach ($clients as $client) { ?>
				<option value="<?= $client['client_id'] ?>"><?= $client['client_firstname'] . " " . $client['client_lastname'] ?></option>
			<?php } ?>
		</select></p>


		<input type="hidden" name="id" value="<?= $patients['patient_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form> 

</div>
