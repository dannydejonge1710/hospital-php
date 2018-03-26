<div class="container">

	<h1>Hospital</h1>
	
	<ul>
		<li><a href="<?= URL ?>patients/index">Patients</a></li>
		<li><a href="<?= URL ?>clients/index">Clients</a></li>
		<li><a href="<?= URL ?>species/index">Species</a></li>
	</ul>

		<table border="1">
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th colspan="2">Action</th>
		</tr>
		
		<?php foreach ($clients as $client) { ?>

		<tr>
			<td><?= $client['client_firstname']; ?></td>
			<td><?= $client['client_lastname']; ?></td>
			<td><a href="<?= URL ?>student/edit/<?= $client['client_id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>student/delete/<?= $client['client_id'] ?>">Delete</a></td>
		</tr>
		
		<?php } ?>

	</table>

	<p><a href="<?= URL ?>clients/create">Create</a></p>
	<p><a href="<?= URL ?>clients/index">Home</a></p>
</div>