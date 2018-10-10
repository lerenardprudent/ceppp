<?php

$db = DBManagerFactory::getInstance();
$cond = "1"; // "code like '100%'"
$query = "select code, desc_short_fr as descr from cim9 where $cond order by desc_short_fr";
$result= $db->query($query);

$GLOBALS['app_list_strings']['cim9_list']=array ();
while ( $row= $db->fetchRow($result) ) {
  $GLOBALS['app_list_strings']['cim9_list'][$row['code']] = $row['descr'];
}