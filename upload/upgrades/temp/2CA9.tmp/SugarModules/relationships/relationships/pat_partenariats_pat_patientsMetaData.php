<?php
// created: 2018-10-03 17:31:35
$dictionary["pat_partenariats_pat_patients"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'pat_partenariats_pat_patients' => 
    array (
      'lhs_module' => 'pat_Partenariats',
      'lhs_table' => 'pat_partenariats',
      'lhs_key' => 'id',
      'rhs_module' => 'pat_Patients',
      'rhs_table' => 'pat_patients',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'pat_partenariats_pat_patients_c',
      'join_key_lhs' => 'pat_partenariats_pat_patientspat_partenariats_ida',
      'join_key_rhs' => 'pat_partenariats_pat_patientspat_patients_idb',
    ),
  ),
  'table' => 'pat_partenariats_pat_patients_c',
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
      'name' => 'pat_partenariats_pat_patientspat_partenariats_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'pat_partenariats_pat_patientspat_patients_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'pat_partenariats_pat_patientsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'pat_partenariats_pat_patients_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'pat_partenariats_pat_patientspat_partenariats_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'pat_partenariats_pat_patients_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'pat_partenariats_pat_patientspat_patients_idb',
      ),
    ),
  ),
);