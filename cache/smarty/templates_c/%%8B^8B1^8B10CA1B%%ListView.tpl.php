<?php /* Smarty version 2.6.31, created on 2018-10-10 17:34:37
         compiled from include/SugarFields/Fields/Bool/ListView.tpl */ ?>

    <?php if (strval ( $this->_tpl_vars['parentFieldArray'][$this->_tpl_vars['col']] ) == '1' || strval ( $this->_tpl_vars['parentFieldArray'][$this->_tpl_vars['col']] ) == 'yes' || strval ( $this->_tpl_vars['parentFieldArray'][$this->_tpl_vars['col']] ) == 'on'): ?>
<?php $this->assign('checked', 'checked="checked"'); ?>
<?php else: ?>
<?php $this->assign('checked', ""); ?>
<?php endif; ?>
<input type="checkbox" class="checkbox" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>