<div class="newsEvents view">
<h2><?php echo __('News Event'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($newsEvent['NewsEvent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($newsEvent['NewsEvent']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($newsEvent['NewsEvent']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo h($newsEvent['NewsEvent']['author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publish'); ?></dt>
		<dd>
			<?php echo h($newsEvent['NewsEvent']['publish']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tone'); ?></dt>
		<dd>
			<?php echo h($newsEvent['NewsEvent']['tone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('General'); ?></dt>
		<dd>
			<?php echo h($newsEvent['NewsEvent']['general']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit News Event'), array('action' => 'edit', $newsEvent['NewsEvent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete News Event'), array('action' => 'delete', $newsEvent['NewsEvent']['id']), array(), __('Are you sure you want to delete # %s?', $newsEvent['NewsEvent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List News Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News Event'), array('action' => 'add')); ?> </li>
	</ul>
</div>
