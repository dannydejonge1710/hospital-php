<div class="container">

	<h1>Hospital</h1>
	
	<ul>
		<li><a href="<?= URL ?>patients/index">Patients</a></li>
		<li><a href="<?= URL ?>clients/index">Clients</a></li>
		<li><a href="<?= URL ?>species/index">Species</a></li>
	</ul>

		<table border="1">
		<tr>
			<th>Description</th>
			<th colspan="2">Action</th>
		</tr>
		
		<?php foreach ($species as $specie) { ?>

		<tr>
			<td><?= $specie['species_description']; ?></td>
			<td><a href="<?= URL ?>student/edit/<?= $specie['species_id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>student/delete/<?= $specie['species_id'] ?>">Delete</a></td>
		</tr>
		
		<?php } ?>

	</table>

	<p><a href="<?= URL ?>species/create">Create</a></p>
	<p><a href="<?= URL ?>species/index">Home</a></p>
</div>