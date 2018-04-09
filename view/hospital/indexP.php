<div class="container">

	<h1>Clients</h1>
	
	<ul>
		<li><a href="<?= URL ?>Index/index">Index</a></li>
		<li><a href="<?= URL ?>Patients/index">Patients</a></li>
		<li><a href="<?= URL ?>Clients/index">Clients</a></li>
		<li><a href="<?= URL ?>Species/index">Species</a></li>
	</ul>

		<table border="1">
		<tr>
			<th><a href="<?= URL ?>Clients/sortThis">Client Firstname</a></th>
			<th><a href="<?= URL ?>Clients/sortThis">Client Lastname</a></th>
			<th colspan="2">Action</th>
		</tr>

		
		<?php foreach ($patients as $patient) { ?>

		<tr>
			<td><?= $patient['patients_name']; ?></td>
			
			<td><?= $patient['patients_status']; ?></td>
			<td><?= $patient['patients_gender']; ?></td>

			<td><a href="<?= URL ?>Patients/editThis/<?= $patient['patients_id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>Patients/deleteThis/<?= $patient['patients_id'] ?>">Delete</a></td>
		</tr>
		
		<?php } ?>

	</table>

	<p><a href="<?= URL ?>Clients/create">Create</a></p>
	<p><a href="<?= URL ?>Clients/index">Home</a></p>
</div>