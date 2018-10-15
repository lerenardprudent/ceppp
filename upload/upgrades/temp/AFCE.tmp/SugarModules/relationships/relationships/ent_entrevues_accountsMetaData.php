<?php
// created: 2018-10-12 20:39:53
$dictionary["ent_entrevues_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ent_entrevues_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'ent_Entrevues',
      'rhs_table' => 'ent_entrevues',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ent_entrevues_accounts_c',
      'join_key_lhs' => 'ent_entrevues_accountsaccounts_ida',
      'join_key_rhs' => 'ent_entrevues_accountsent_entrevues_idb',
    ),
  ),
  'table' => 'ent_entrevues_accounts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'ent_entrevues_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ent_entrevues_accountsent_entrevues_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ent_entrevues_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ent_entrevues_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ent_entrevues_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ent_entrevues_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ent_entrevues_accountsent_entrevues_idb',
      ),
    ),
  ),
);