<?php












$db = DBManagerFactory::getInstance();






$cond = "1";






$codeCol = "code";






$descCol = "desc_en";






$tableName = "cim9";






$query = "select $codeCol, $descCol from $tableName where $cond order by $descCol";






$result= $db->query($query);













$GLOBALS['app_list_strings']['cim9_list']=array ();






while ( $row= $db->fetchRow($result) ) {






  $GLOBALS['app_list_strings']['cim9_list'][$row[$codeCol]] = $row[$descCol];






}






/*$GLOBALS['app_list_strings']['cim9_list']=array (






  '050' => 'Smallpox',






  '055.9' => 'Measles',






);*/









$GLOBALS['app_list_strings']['yes_no_list']=array (




  'oui' => 'Yes',




  'non' => 'No',




);

$GLOBALS['app_list_strings']['etab_sante_list']=array (
  'Aucun' => ' ',
  'CLSC_Faubourgs' => 'CLSC  des Faubourgs',
);