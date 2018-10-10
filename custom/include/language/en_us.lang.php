<?php

$db = DBManagerFactory::getInstance();
$query = "select code, desc_short_en as descr from cim9 where code like '100%' order by desc_short_en";
$result= $db->query($query);

$GLOBALS['app_list_strings']['cim9_list']=array ();
while ( $row= $db->fetchRow($result) ) {
  $GLOBALS['app_list_strings']['cim9_list'][$row['code']] = $row['descr'];
}

/*$GLOBALS['app_list_strings']['cim9_list']=array (
  '050' => 'Smallpox',
  '055.9' => 'Measles',
);*/