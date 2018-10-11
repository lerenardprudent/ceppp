<?php

$db = DBManagerFactory::getInstance();
$cond = "1";
$codeCol = "code";
$descCol = "desc_fr";
$tableName = "cim9";
$query = "select $codeCol, $descCol from $tableName where $cond order by $descCol";
$result= $db->query($query);

$GLOBALS['app_list_strings']['cim9_list']=array ();
while ( $row= $db->fetchRow($result) ) {
  $GLOBALS['app_list_strings']['cim9_list'][$row[$codeCol]] = $row[$descCol];
}

$GLOBALS['app_list_strings']['yes_no_list']=array (
  'oui' => 'Oui',
  'non' => 'Non',
);

$GLOBALS['app_list_strings']['etab_sante_list']=array (
  'Aucun' => ' ',
  'CLSC_Faubourgs' => 'CLSC  des Faubourgs',
);
$GLOBALS['app_list_strings']['relation_patient_list']=array (
  'parent' => 'Parent',
  'enfant' => 'Enfant',
  'conjoint' => 'Conjoint',
  'famille_elargie' => 'Famille élargie',
  'ami' => 'Ami(e)',
  'autre' => 'Autre',
);

$GLOBALS['app_list_strings']['relation_patient_list']=array (
  'parent' => 'Parent',
  'enfant' => 'Enfant',
  'conjoint' => 'Conjoint(e)',
  'famille_elargie' => 'Famille élargie',
  'autre' => 'Autre',
);

$GLOBALS['app_list_strings']['spec_domaine_soins_list']=array (
  'aucune' => ' ',
  'pediatrie' => 'Pédiatrie',
);