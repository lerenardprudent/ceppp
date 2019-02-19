<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-02-19 19:32:24
$dictionary["pat_Partenariats"]["fields"]["pat_partenariats_pat_patients"] = array (
  'name' => 'pat_partenariats_pat_patients',
  'type' => 'link',
  'relationship' => 'pat_partenariats_pat_patients',
  'source' => 'non-db',
  'module' => 'pat_Patients',
  'bean_name' => 'pat_Patients',
  'vname' => 'LBL_PAT_PARTENARIATS_PAT_PATIENTS_FROM_PAT_PATIENTS_TITLE',
  'id_name' => 'pat_partenariats_pat_patientspat_patients_idb',
);
$dictionary["pat_Partenariats"]["fields"]["pat_partenariats_pat_patients_name"] = array (
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
);
$dictionary["pat_Partenariats"]["fields"]["pat_partenariats_pat_patientspat_patients_idb"] = array (
  'name' => 'pat_partenariats_pat_patientspat_patients_idb',
  'type' => 'link',
  'relationship' => 'pat_partenariats_pat_patients',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_PAT_PARTENARIATS_PAT_PATIENTS_FROM_PAT_PATIENTS_TITLE',
);


// created: 2019-02-19 19:32:26
$dictionary["pat_Partenariats"]["fields"]["pat_patients_pat_partenariats"] = array (
  'name' => 'pat_patients_pat_partenariats',
  'type' => 'link',
  'relationship' => 'pat_patients_pat_partenariats',
  'source' => 'non-db',
  'module' => 'pat_Patients',
  'bean_name' => 'pat_Patients',
  'vname' => 'LBL_PAT_PATIENTS_PAT_PARTENARIATS_FROM_PAT_PATIENTS_TITLE',
  'id_name' => 'pat_patients_pat_partenariatspat_patients_ida',
);
$dictionary["pat_Partenariats"]["fields"]["pat_patients_pat_partenariats_name"] = array (
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
);
$dictionary["pat_Partenariats"]["fields"]["pat_patients_pat_partenariatspat_patients_ida"] = array (
  'name' => 'pat_patients_pat_partenariatspat_patients_ida',
  'type' => 'link',
  'relationship' => 'pat_patients_pat_partenariats',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_PAT_PATIENTS_PAT_PARTENARIATS_FROM_PAT_PATIENTS_TITLE',
);

?>