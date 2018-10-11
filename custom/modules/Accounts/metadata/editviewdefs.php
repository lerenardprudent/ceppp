<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'experience_maladie_c',
            'studio' => 'visible',
            'label' => 'LBL_EXPERIENCE_MALADIE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'domaine_soin_c',
            'label' => 'LBL_DOMAINE_SOIN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'domaine_soin_2_c',
            'label' => 'LBL_DOMAINE_SOIN_2',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'domaine_soin_3_c',
            'label' => 'LBL_DOMAINE_SOIN_3',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'med_1_c',
            'studio' => 'visible',
            'label' => 'LBL_MED_1',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'med_2_c',
            'studio' => 'visible',
            'label' => 'LBL_MED_2',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'med_3_c',
            'studio' => 'visible',
            'label' => 'LBL_MED_3',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'doul_chron_c',
            'studio' => 'visible',
            'label' => 'LBL_DOUL_CHRON',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
