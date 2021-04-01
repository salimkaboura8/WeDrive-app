<?php
	if (count($context->voyages)>0)
	{	?>
		<div class="alert alert-success" role="alert">
		Recherche terminée avec succés, vous avez <?php echo count($context->voyages) ?> voyages </div>
		<table cellpadding="10" class="table table-dark table-bordered table-striped table-sm">

	<tr>
	<th scope="col">Depart</th>
	<th scope="col">Arrivee</th>
	<th scope="col">Distance</th>
	<th scope="col">Conducteur</th>
	<th scope="col">Tarif</th>
	<th scope="col">Nb places dispo</th>
	<th scope="col">Heure de depart</th>
	<th scope="col">Contraintes</th> 	</tr>

	<?php foreach ($context->voyages as $voyage){ ?>
		<tr><td><?php echo $voyage->trajet->depart?></td>
		<td><?php echo $voyage->trajet->arrivee ?></td>
		<td><?php echo $voyage->trajet->distance ?> km</td>
		<td><?php echo $voyage->conducteur->nom . " ".$voyage->conducteur->prenom ?></td>
		<td><?php echo $voyage->tarif ?> euro</td>
		<td><?php echo $voyage->nbplace ?> places</td>
		<td><?php echo $voyage->heuredepart ?> h00</td>
		<td><?php echo $voyage->contraintes ?></td>
		</tr>
		<?php } ?> </table> <?php }else { ?>
		<div class="alert alert-danger" role="alert">
			Aucun resultat trouvé
		</div>
		<?php }?>