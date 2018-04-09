<div class="container">

	<h1>Hospital</h1>
	
	<ul>
		<li><a href="<?= URL ?>Index/index">Index</a></li>
		<li><a href="<?= URL ?>Patients/index">Patients</a></li>
		<li><a href="<?= URL ?>Clients/index">Clients</a></li>
		<li><a href="<?= URL ?>Species/index">Species</a></li>
	</ul>

		<table border="1">
		<tr>
			<th>Patient Name</th>
			<th>Species Description</th>
			<th>Client Firstname</th>
			<th>Patient Status</th>
			<th colspan="2">Action</th>
		</tr>
		
		<?php foreach ($patients as $patient) { ?>

		<tr>
			<td><?= $patient['patient_name']; ?></td>
			<td><?= $patient['species_description']; ?></td>
			<td><?= $patient['client_firstname']; ?></td>
			<td><?= $patient['patient_status']; ?></td>
			
			<td><a href="<?= URL ?>Patients/editThis/<?= $patient['patient_id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>Patients/deleteThis/<?= $patient['patient_id'] ?>">Delete</a></td>
		</tr>
		
		<?php } ?>

	</table>

	<p><a href="<?= URL ?>Patients/create">Create</a></p>
	<p><a href="<?= URL ?>Clients/index">Home</a></p>
</div>