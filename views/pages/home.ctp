<style type="text/css">
	ul.timeslots,ul.reservations{
		list-style:none;
		text-align:right;
	}
	ul.timeslots>li,ul.reservations>li{
		padding: 0px;
		margin: 0px;
	}
	ul.timeslots>li.timeslot{
		display:inline-block;
		width:250px;
		border:#ccc 1px solid;
		margin-bottom:3px;
	}
	ul.timeslots>li{
		text-align:center;
	}
	ul.reservations>li{
		text-align:left;
	}
</style>
<div class="welcome">
	Welcome to <?php echo STORE_NAME; ?> 
	<address><?php echo STORE_LOCATION; ?></address>
</div>

<div class="form">
		<ul class="timeslots">
		<?php
			$_RUN_TIME = OPEN_MICROTIME;
			do{
				$_TIME_SLOT = date('h:i a',$_RUN_TIME);
				$_REQ_URI = '/dermis/reservations/on_time_slot/'.$_RUN_TIME;
		?>		
				<li class="timeslot async-request" data-request-url="<?php echo $_REQ_URI;?>" >
					<div class="user-time" data-time-slot="<?php echo $_RUN_TIME;?>"><?php echo $_TIME_SLOT; ?></div>
					<ul class="reservations request-canvas ">
					</ul>
				</li>
		<?php		
				$_RUN_TIME +=  TIME_SLOT_STEP; //Compute for running time
			}while($_RUN_TIME<CLOSE_MICROTIME); //Ensure that running time within operation hours
		?>
		</ul>
</div>
<div class="reservation form " style="display:none;">
<?php echo $this->Form->create('Reservation');?>
	<fieldset>
		<legend><?php __('Add Reservation'); ?></legend>
	<?php
		echo $this->Form->input('date',array('type'=>'date'));
		echo $this->Form->input('time',array('type'=>'time'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<?php echo $this->Html->script(array('dermis'),array('inline'=>false));?>