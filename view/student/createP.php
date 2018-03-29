<div class="container">
	<form action="<?= URL ?>Patients/createSave" method="post">
	
		<input type="text" name="patientname" placeholder="Patient name">
		<input type="text" name="speciesid" placeholder="Species id">
		<input type="text" name="clientid" placeholder="Client id">
		<input type="text" name="patientstatus" placeholder="Patient status">

		<input type="submit" value="Verzenden">
	
	</form>

</div>