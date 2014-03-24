<?php foreach($reservations as $reservation): ?>
		<li class='reservation'>
			<div class="client">
				<span class="first-name"><?php echo $reservation['Customer']['first_name']?></span>
				<span class="last-name"><?php echo $reservation['Customer']['last_name']?></span>
				<time class='schedule'><?php echo $reservation['Reservation']['schedule']?></time>
			</div>
		</li>
<?php endforeach;?>