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