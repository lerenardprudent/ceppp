<?php
$module_name = 'ent_Entrevues';
$listViewDefs [$module_name] = 
array (
  'ENT_ENTREVUES_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ENT_ENTREVUES_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'ENT_ENTREVUES_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTREVUE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_ENTREVUE',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
;
?>
