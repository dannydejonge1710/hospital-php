<div class="container">

	<h1>Species</h1>
	
	<ul>
		<li><a href="<?= URL ?>Patients/index">Patients</a></li>
		<li><a href="<?= URL ?>Clients/index">Clients</a></li>
		<li><a href="<?= URL ?>Species/index">Species</a></li>
	</ul>

		<table border="1">
		<tr>
			<th>Species Description</th>
			<th colspan="2">Action</th>
		</tr>
		
		<?php foreach ($species as $specie) { ?>

		<tr>
			<td><?= $specie['species_description']; ?></td>

			<td><a href="<?= URL ?>Species/editThis/<?= $specie['species_id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>Species/deleteThis/<?= $specie['species_id'] ?>">Delete</a></td>
		</tr>
		
		<?php } ?>

	</table>

	<p><a href="<?= URL ?>Species/create">Create</a></p>
	<p><a href="<?= URL ?>Patients/index">Home</a></p>
</div>