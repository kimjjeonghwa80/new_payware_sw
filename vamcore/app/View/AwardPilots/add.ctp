<?php

    if ($_SESSION["access_award_manager"] ==1)
    {
?>
<div class="awardPilots form">
<?php echo $this->Form->create('AwardPilot'); ?>
	<fieldset>
		<legend><?php echo __('Add Award Pilot Assignation'); ?></legend>
	<?php
		echo $this->Form->input('award_id');
		echo $this->Form->input('gvauser_id',['label' => 'Pilot']);
		echo $this->Form->input('comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul class="list-inline">
        <li><?php echo $this->Html->link(__('List Awards'), array('controller' => 'awards', 'action' => 'index'),array('class' => 'btn btn-md btn-primary')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pilot Awards'), array('action' => 'index'),array('class' => 'btn btn-md btn-primary')); ?></li>
	</ul>
</div>
<?php
    }
    else
    {
        echo '<div class="alert alert-danger"> You do not have access to Award manager module</div>';
    }
?>
