<?php 
 $GLOBALS["dictionary"]["pat_Partenariats"]=array (
  'table' => 'pat_partenariats',
  'audited' => true,
  'inline_edit' => true,
  'duplicate_merge' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
      'inline_edit' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'pat_partenariats_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'pat_partenariats_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'pat_partenariats_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'SecurityGroups' => 
    array (
      'name' => 'SecurityGroups',
      'type' => 'link',
      'relationship' => 'securitygroups_pat_partenariats',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'pat_partenariats_pat_patients' => 
    array (
      'name' => 'pat_partenariats_pat_patients',
      'type' => 'link',
      'relationship' => 'pat_partenariats_pat_patients',
      'source' => 'non-db',
      'module' => 'pat_Patients',
      'bean_name' => 'pat_Patients',
      'vname' => 'LBL_PAT_PARTENARIATS_PAT_PATIENTS_FROM_PAT_PATIENTS_TITLE',
      'id_name' => 'pat_partenariats_pat_patientspat_patients_idb',
    ),
    'pat_partenariats_pat_patients_name' => 
    array (
      'name' => 'pat_partenariats_pat_patients_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_PAT_PARTENARIATS_PAT_PATIENTS_FROM_PAT_PATIENTS_TITLE',
      'save' => true,
      'id_name' => 'pat_partenariats_pat_patientspat_patients_idb',
      'link' => 'pat_partenariats_pat_patients',
      'table' => 'pat_patients',
      'module' => 'pat_Patients',
      'rname' => 'name',
      'db_concat_fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
    ),
    'pat_partenariats_pat_patientspat_patients_idb' => 
    array (
      'name' => 'pat_partenariats_pat_patientspat_patients_idb',
      'type' => 'link',
      'relationship' => 'pat_partenariats_pat_patients',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_PAT_PARTENARIATS_PAT_PATIENTS_FROM_PAT_PATIENTS_TITLE',
    ),
    'pat_patients_pat_partenariats' => 
    array (
      'name' => 'pat_patients_pat_partenariats',
      'type' => 'link',
      'relationship' => 'pat_patients_pat_partenariats',
      'source' => 'non-db',
      'module' => 'pat_Patients',
      'bean_name' => 'pat_Patients',
      'vname' => 'LBL_PAT_PATIENTS_PAT_PARTENARIATS_FROM_PAT_PATIENTS_TITLE',
      'id_name' => 'pat_patients_pat_partenariatspat_patients_ida',
    ),
    'pat_patients_pat_partenariats_name' => 
    array (
      'name' => 'pat_patients_pat_partenariats_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_PAT_PATIENTS_PAT_PARTENARIATS_FROM_PAT_PATIENTS_TITLE',
      'save' => true,
      'id_name' => 'pat_patients_pat_partenariatspat_patients_ida',
      'link' => 'pat_patients_pat_partenariats',
      'table' => 'pat_patients',
      'module' => 'pat_Patients',
      'rname' => 'name',
      'db_concat_fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
    ),
    'pat_patients_pat_partenariatspat_patients_ida' => 
    array (
      'name' => 'pat_patients_pat_partenariatspat_patients_ida',
      'type' => 'link',
      'relationship' => 'pat_patients_pat_partenariats',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_PAT_PATIENTS_PAT_PARTENARIATS_FROM_PAT_PATIENTS_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'pat_partenariats_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'pat_Partenariats',
      'rhs_table' => 'pat_partenariats',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'pat_partenariats_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'pat_Partenariats',
      'rhs_table' => 'pat_partenariats',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'pat_partenariats_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'pat_Partenariats',
      'rhs_table' => 'pat_partenariats',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_pat_partenariats' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'pat_Partenariats',
      'rhs_table' => 'pat_partenariats',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'pat_Partenariats',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'pat_partenariatspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'security_groups' => 'security_groups',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);