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
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
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
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'med_2_c',
            'studio' => 'visible',
            'label' => 'LBL_MED_2',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'med_3_c',
            'studio' => 'visible',
            'label' => 'LBL_MED_3',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'doul_chron_c',
            'studio' => 'visible',
            'label' => 'LBL_DOUL_CHRON',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'prob_somm_c',
            'studio' => 'visible',
            'label' => 'LBL_PROB_SOMM',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'prob_resp_c',
            'studio' => 'visible',
            'label' => 'LBL_PROB_RESP',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'etabl_sante_pp_c',
            'label' => 'LBL_ETABL_SANTE_PP',
          ),
          1 => '',
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'etabl_prem_ligne_pp_c',
            'label' => 'LBL_ETABL_PREM_LIGNE_PP',
          ),
          1 => '',
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'exp_decision_c',
            'studio' => 'visible',
            'label' => 'LBL_EXP_DECISION',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'exprience_maladie_proche_c',
            'studio' => 'visible',
            'label' => 'LBL_EXPRIENCE_MALADIE_PROCHE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'rel_patient_c',
            'studio' => 'visible',
            'label' => 'LBL_REL_PATIENT',
          ),
          1 => 
          array (
            'name' => 'rel_patient_autre__precision_c',
            'label' => 'LBL_REL_PATIENT_AUTRE__PRECISION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'domaine_soin_pa_c',
            'studio' => 'visible',
            'label' => 'LBL_DOMAINE_SOIN_PA',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'domaine_soin_pa_2_c',
            'studio' => 'visible',
            'label' => 'LBL_DOMAINE_SOIN_PA_2',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'domaine_soin_pa_3_c',
            'studio' => 'visible',
            'label' => 'LBL_DOMAINE_SOIN_PA_3',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'prob_sant_pa_c',
            'studio' => 'visible',
            'label' => 'LBL_PROB_SANT_PA',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'prob_sant_pa_2_c',
            'studio' => 'visible',
            'label' => 'LBL_PROB_SANT_PA_2',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'prob_sant_pa_3_c',
            'studio' => 'visible',
            'label' => 'LBL_PROB_SANT_PA_3',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'etabl_sante_pa__c',
            'label' => 'LBL_ETABL_SANTE_PA_',
          ),
          1 => '',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'etabl_prem_ligne_pa__c',
            'label' => 'LBL_ETABL_PREM_LIGNE_PA_',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'consentement_dcpp_recrut_c',
            'studio' => 'visible',
            'label' => 'LBL_CONSENTEMENT_DCPP_RECRUT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'consentement_miseajour_c',
            'studio' => 'visible',
            'label' => 'LBL_CONSENTEMENT_MISEAJOUR',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'consentement_recherche_c',
            'studio' => 'visible',
            'label' => 'LBL_CONSENTEMENT_RECHERCHE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'consentement_usage_donnees_c',
            'studio' => 'visible',
            'label' => 'LBL_CONSENTEMENT_USAGE_DONNEES',
          ),
        ),
      ),
    ),
  ),
);
;
?>
