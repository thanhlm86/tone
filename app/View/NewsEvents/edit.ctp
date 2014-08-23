<div class="newsEvents form">
<?php echo $this->Form->create('NewsEvent'); ?>
	<fieldset>
		<legend><?php echo __('Edit News Event'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description');
		echo $this->Form->input('content');
		echo $this->Form->input('author');
		echo $this->Form->input('publish');
		echo $this->Form->input('tone');
		echo $this->Form->input('general');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('NewsEvent.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('NewsEvent.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List News Events'), array('action' => 'index')); ?></li>
	</ul>
</div>
