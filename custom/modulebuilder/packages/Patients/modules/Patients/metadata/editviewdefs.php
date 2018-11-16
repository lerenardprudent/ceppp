<?php
$module_name = 'pat_Patients';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_contact_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'prenom',
            'label' => 'LBL_PRENOM',
          ),
          1 => 
          array (
            'name' => 'nom',
            'label' => 'LBL_NOM',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'salutation',
            'comment' => 'Contact salutation (e.g., Mr, Ms)',
            'label' => 'LBL_SALUTATION',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'email_perso',
            'label' => 'LBL_EMAIL_PERSO',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tel_dom_perso',
            'label' => 'LBL_TEL_DOM_PERSO',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'tel_travail_perso',
            'label' => 'LBL_TEL_TRAVAIL_PERSO',
          ),
          1 => 
          array (
            'name' => 'tel_mobile_perso',
            'label' => 'LBL_TEL_MOBILE_PERSO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'nas_perso_',
            'label' => 'LBL_NAS_PERSO_',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'adresse_perso',
            'label' => 'LBL_ADRESSE_PERSO',
          ),
          1 => 
          array (
            'name' => 'adresse_perso_city',
            'label' => 'LBL_ADRESSE_PERSO_CITY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'adresse_perso_state',
            'label' => 'LBL_ADRESSE_PERSO_STATE',
          ),
          1 => 
          array (
            'name' => 'adresse_perso_postalcode',
            'label' => 'LBL_ADRESSE_PERSO_POSTALCODE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'adresse_perso_country',
            'label' => 'LBL_ADRESSE_PERSO_COUNTRY',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'naissance_perso',
            'label' => 'LBL_NAISSANCE_PERSO',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'emploi_perso',
            'studio' => 'visible',
            'label' => 'LBL_EMPLOI_PERSO',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'education_perso',
            'studio' => 'visible',
            'label' => 'LBL_EDUCATION_PERSO',
          ),
          1 => 
          array (
            'name' => 'education_perso_autre',
            'label' => 'LBL_EDUCATION_PERSO_AUTRE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'groupe_designe',
            'studio' => 'visible',
            'label' => 'LBL_GROUPE_DESIGNE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
