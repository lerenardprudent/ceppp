<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-09-21 22:27:38
$dictionary["Account"]["fields"]["accounts_am_projecttemplates_1"] = array (
  'name' => 'accounts_am_projecttemplates_1',
  'type' => 'link',
  'relationship' => 'accounts_am_projecttemplates_1',
  'source' => 'non-db',
  'module' => 'AM_ProjectTemplates',
  'bean_name' => 'AM_ProjectTemplates',
  'vname' => 'LBL_ACCOUNTS_AM_PROJECTTEMPLATES_1_FROM_AM_PROJECTTEMPLATES_TITLE',
  'id_name' => 'accounts_am_projecttemplates_1am_projecttemplates_idb',
);
$dictionary["Account"]["fields"]["accounts_am_projecttemplates_1_name"] = array (
  'name' => 'accounts_am_projecttemplates_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AM_PROJECTTEMPLATES_1_FROM_AM_PROJECTTEMPLATES_TITLE',
  'save' => true,
  'id_name' => 'accounts_am_projecttemplates_1am_projecttemplates_idb',
  'link' => 'accounts_am_projecttemplates_1',
  'table' => 'am_projecttemplates',
  'module' => 'AM_ProjectTemplates',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["accounts_am_projecttemplates_1am_projecttemplates_idb"] = array (
  'name' => 'accounts_am_projecttemplates_1am_projecttemplates_idb',
  'type' => 'link',
  'relationship' => 'accounts_am_projecttemplates_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ACCOUNTS_AM_PROJECTTEMPLATES_1_FROM_AM_PROJECTTEMPLATES_TITLE',
);


// created: 2018-10-03 20:48:34
$dictionary["Account"]["fields"]["pat_patients_accounts"] = array (
  'name' => 'pat_patients_accounts',
  'type' => 'link',
  'relationship' => 'pat_patients_accounts',
  'source' => 'non-db',
  'module' => 'pat_Patients',
  'bean_name' => 'pat_Patients',
  'vname' => 'LBL_PAT_PATIENTS_ACCOUNTS_FROM_PAT_PATIENTS_TITLE',
  'id_name' => 'pat_patients_accountspat_patients_ida',
);
$dictionary["Account"]["fields"]["pat_patients_accounts_name"] = array (
  'name' => 'pat_patients_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PAT_PATIENTS_ACCOUNTS_FROM_PAT_PATIENTS_TITLE',
  'save' => true,
  'id_name' => 'pat_patients_accountspat_patients_ida',
  'link' => 'pat_patients_accounts',
  'table' => 'pat_patients',
  'module' => 'pat_Patients',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Account"]["fields"]["pat_patients_accountspat_patients_ida"] = array (
  'name' => 'pat_patients_accountspat_patients_ida',
  'type' => 'link',
  'relationship' => 'pat_patients_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_PAT_PATIENTS_ACCOUNTS_FROM_PAT_PATIENTS_TITLE',
);


 // created: 2018-10-10 15:56:02
$dictionary['Account']['fields']['domaine_soin_2_c']['inline_edit']='1';
$dictionary['Account']['fields']['domaine_soin_2_c']['labelValue']='Healthcare Speciality #2';

 

 // created: 2018-10-10 15:56:34
$dictionary['Account']['fields']['domaine_soin_3_c']['inline_edit']='1';
$dictionary['Account']['fields']['domaine_soin_3_c']['labelValue']='Healthcare Speciality #3';

 

 // created: 2018-10-10 15:51:49
$dictionary['Account']['fields']['domaine_soin_c']['inline_edit']='1';
$dictionary['Account']['fields']['domaine_soin_c']['labelValue']='Healthcare Speciality #1';

 

 // created: 2018-10-11 14:33:02
$dictionary['Account']['fields']['doul_chron_c']['inline_edit']='1';
$dictionary['Account']['fields']['doul_chron_c']['labelValue']='Douleur chronique';

 

 // created: 2018-10-10 16:04:02
$dictionary['Account']['fields']['experience_maladie_c']['inline_edit']='1';
$dictionary['Account']['fields']['experience_maladie_c']['labelValue']='PP experience w/ sickness';

 

 // created: 2018-09-21 21:19:30
$dictionary['Account']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2018-09-21 21:19:30
$dictionary['Account']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2018-09-21 21:19:30
$dictionary['Account']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2018-09-21 21:19:30
$dictionary['Account']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2018-10-10 16:36:51
$dictionary['Account']['fields']['med_1_c']['inline_edit']='1';
$dictionary['Account']['fields']['med_1_c']['labelValue']='Médicamments';

 

 // created: 2018-10-10 20:37:52
$dictionary['Account']['fields']['med_2_c']['inline_edit']='1';
$dictionary['Account']['fields']['med_2_c']['labelValue']='Médicamments #2';

 

 // created: 2018-10-10 20:38:45
$dictionary['Account']['fields']['med_3_c']['inline_edit']='1';
$dictionary['Account']['fields']['med_3_c']['labelValue']='Médicamments #3';

 
?>