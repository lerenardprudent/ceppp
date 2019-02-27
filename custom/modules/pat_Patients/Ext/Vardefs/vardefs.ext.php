<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-02-26 21:25:28
$dictionary["pat_Patients"]["fields"]["pat_partenariats_pat_patients"] = array (
  'name' => 'pat_partenariats_pat_patients',
  'type' => 'link',
  'relationship' => 'pat_partenariats_pat_patients',
  'source' => 'non-db',
  'module' => 'pat_Partenariats',
  'bean_name' => 'pat_Partenariats',
  'vname' => 'LBL_PAT_PARTENARIATS_PAT_PATIENTS_FROM_PAT_PARTENARIATS_TITLE',
  'id_name' => 'pat_partenariats_pat_patientspat_partenariats_ida',
);
$dictionary["pat_Patients"]["fields"]["pat_partenariats_pat_patients_name"] = array (
  'name' => 'pat_partenariats_pat_patients_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PAT_PARTENARIATS_PAT_PATIENTS_FROM_PAT_PARTENARIATS_TITLE',
  'save' => true,
  'id_name' => 'pat_partenariats_pat_patientspat_partenariats_ida',
  'link' => 'pat_partenariats_pat_patients',
  'table' => 'pat_partenariats',
  'module' => 'pat_Partenariats',
  'rname' => 'name',
);
$dictionary["pat_Patients"]["fields"]["pat_partenariats_pat_patientspat_partenariats_ida"] = array (
  'name' => 'pat_partenariats_pat_patientspat_partenariats_ida',
  'type' => 'link',
  'relationship' => 'pat_partenariats_pat_patients',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_PAT_PARTENARIATS_PAT_PATIENTS_FROM_PAT_PARTENARIATS_TITLE',
);


// created: 2019-02-26 21:25:30
$dictionary["pat_Patients"]["fields"]["pat_patients_accounts"] = array (
  'name' => 'pat_patients_accounts',
  'type' => 'link',
  'relationship' => 'pat_patients_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_PAT_PATIENTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'pat_patients_accountsaccounts_idb',
);
$dictionary["pat_Patients"]["fields"]["pat_patients_accounts_name"] = array (
  'name' => 'pat_patients_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PAT_PATIENTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'pat_patients_accountsaccounts_idb',
  'link' => 'pat_patients_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["pat_Patients"]["fields"]["pat_patients_accountsaccounts_idb"] = array (
  'name' => 'pat_patients_accountsaccounts_idb',
  'type' => 'link',
  'relationship' => 'pat_patients_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_PAT_PATIENTS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);


// created: 2019-02-26 21:25:30
$dictionary["pat_Patients"]["fields"]["pat_patients_pat_partenariats"] = array (
  'name' => 'pat_patients_pat_partenariats',
  'type' => 'link',
  'relationship' => 'pat_patients_pat_partenariats',
  'source' => 'non-db',
  'module' => 'pat_Partenariats',
  'bean_name' => 'pat_Partenariats',
  'vname' => 'LBL_PAT_PATIENTS_PAT_PARTENARIATS_FROM_PAT_PARTENARIATS_TITLE',
  'id_name' => 'pat_patients_pat_partenariatspat_partenariats_idb',
);
$dictionary["pat_Patients"]["fields"]["pat_patients_pat_partenariats_name"] = array (
  'name' => 'pat_patients_pat_partenariats_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PAT_PATIENTS_PAT_PARTENARIATS_FROM_PAT_PARTENARIATS_TITLE',
  'save' => true,
  'id_name' => 'pat_patients_pat_partenariatspat_partenariats_idb',
  'link' => 'pat_patients_pat_partenariats',
  'table' => 'pat_partenariats',
  'module' => 'pat_Partenariats',
  'rname' => 'name',
);
$dictionary["pat_Patients"]["fields"]["pat_patients_pat_partenariatspat_partenariats_idb"] = array (
  'name' => 'pat_patients_pat_partenariatspat_partenariats_idb',
  'type' => 'link',
  'relationship' => 'pat_patients_pat_partenariats',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_PAT_PATIENTS_PAT_PARTENARIATS_FROM_PAT_PARTENARIATS_TITLE',
);


// created: 2019-02-26 21:25:31
$dictionary["pat_Patients"]["fields"]["pat_patients_pat_perspectivepatient"] = array (
  'name' => 'pat_patients_pat_perspectivepatient',
  'type' => 'link',
  'relationship' => 'pat_patients_pat_perspectivepatient',
  'source' => 'non-db',
  'module' => 'pat_PerspectivePatient',
  'bean_name' => false,
  'vname' => 'LBL_PAT_PATIENTS_PAT_PERSPECTIVEPATIENT_FROM_PAT_PERSPECTIVEPATIENT_TITLE',
  'id_name' => 'pat_patients_pat_perspectivepatientpat_perspectivepatient_idb',
);
$dictionary["pat_Patients"]["fields"]["pat_patients_pat_perspectivepatient_name"] = array (
  'name' => 'pat_patients_pat_perspectivepatient_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PAT_PATIENTS_PAT_PERSPECTIVEPATIENT_FROM_PAT_PERSPECTIVEPATIENT_TITLE',
  'save' => true,
  'id_name' => 'pat_patients_pat_perspectivepatientpat_perspectivepatient_idb',
  'link' => 'pat_patients_pat_perspectivepatient',
  'table' => 'pat_perspectivepatient',
  'module' => 'pat_PerspectivePatient',
  'rname' => 'name',
);
$dictionary["pat_Patients"]["fields"]["pat_patients_pat_perspectivepatientpat_perspectivepatient_idb"] = array (
  'name' => 'pat_patients_pat_perspectivepatientpat_perspectivepatient_idb',
  'type' => 'link',
  'relationship' => 'pat_patients_pat_perspectivepatient',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_PAT_PATIENTS_PAT_PERSPECTIVEPATIENT_FROM_PAT_PERSPECTIVEPATIENT_TITLE',
);

?>