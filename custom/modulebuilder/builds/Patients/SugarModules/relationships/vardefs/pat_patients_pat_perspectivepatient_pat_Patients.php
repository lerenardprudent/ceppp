<?php
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
