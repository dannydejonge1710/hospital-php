<div class="container">

	<h1>Hospital</h1>
	
	<ul>
		<li><a href="<?= URL ?>patients/index">Patients</a></li>
		<li><a href="<?= URL ?>clients/index">Clients</a></li>
		<li><a href="<?= URL ?>species/index">Species</a></li>
	</ul>

		<table border="1">
		<tr>
			<th>Patient Name</th>
			<th>Species Id</th>
			<th>Client Id</th>
			<th>Patient Status</th>
			<th colspan="2">Action</th>
		</tr>
		
		<?php foreach ($patients as $patient) { ?>

		<tr>
			<td><?= $patient['patient_name']; ?></td>
			<td><?= $patient['species_id']; ?></td>
			<td><?= $patient['client_id']; ?></td>
			<td><?= $patient['patient_status']; ?></td>
			
			<td><a href="<?= URL ?>student/edit/<?= $patient['patient_id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>student/delete/<?= $patient['patient_id'] ?>">Delete</a></td>
		</tr>
		
		<?php } ?>

	</table>

	<p><a href="<?= URL ?>patients/create">Create</a></p>
	<p><a href="<?= URL ?>patients/index">Home</a></p>
</div>