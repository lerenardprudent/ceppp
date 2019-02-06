<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

$dictionary['pat_Patients'] = array(
    'table' => 'pat_patients',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
  'nas_perso' => 
  array (
    'required' => false,
    'name' => 'nas_perso',
    'vname' => 'LBL_NAS_PERSO',
    'type' => 'int',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'nas_perso_' => 
  array (
    'required' => false,
    'name' => 'nas_perso_',
    'vname' => 'LBL_NAS_PERSO_',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '9',
    'size' => '20',
  ),
  'tel_dom_perso' => 
  array (
    'required' => false,
    'name' => 'tel_dom_perso',
    'vname' => 'LBL_TEL_DOM_PERSO',
    'type' => 'phone',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
    'dbType' => 'varchar',
  ),
  'tel_travail_perso' => 
  array (
    'required' => false,
    'name' => 'tel_travail_perso',
    'vname' => 'LBL_TEL_TRAVAIL_PERSO',
    'type' => 'phone',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
    'dbType' => 'varchar',
  ),
  'tel_mobile_perso' => 
  array (
    'required' => false,
    'name' => 'tel_mobile_perso',
    'vname' => 'LBL_TEL_MOBILE_PERSO',
    'type' => 'phone',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
    'dbType' => 'varchar',
  ),
  'adresse_perso_city' => 
  array (
    'required' => false,
    'name' => 'adresse_perso_city',
    'vname' => 'LBL_ADRESSE_PERSO_CITY',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
  ),
  'adresse_perso_state' => 
  array (
    'required' => false,
    'name' => 'adresse_perso_state',
    'vname' => 'LBL_ADRESSE_PERSO_STATE',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
  ),
  'adresse_perso_postalcode' => 
  array (
    'required' => false,
    'name' => 'adresse_perso_postalcode',
    'vname' => 'LBL_ADRESSE_PERSO_POSTALCODE',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 20,
    'size' => '20',
  ),
  'adresse_perso_country' => 
  array (
    'required' => false,
    'name' => 'adresse_perso_country',
    'vname' => 'LBL_ADRESSE_PERSO_COUNTRY',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
  ),
  'adresse_perso' => 
  array (
    'required' => false,
    'name' => 'adresse_perso',
    'vname' => 'LBL_ADRESSE_PERSO',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'nom' => 
  array (
    'required' => false,
    'name' => 'nom',
    'vname' => 'LBL_NOM',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'prenom' => 
  array (
    'required' => false,
    'name' => 'prenom',
    'vname' => 'LBL_PRENOM',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'email_perso' => 
  array (
    'required' => false,
    'name' => 'email_perso',
    'vname' => 'LBL_EMAIL_PERSO',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
    'validation' => 
    array (
      'type' => 'callback',
      'callback' => 'function(formname,nameIndex){ console.log(formname, nameIndex, "WTF???"); return true; }',
    ),
  ),
  'naissance_perso' => 
  array (
    'required' => false,
    'name' => 'naissance_perso',
    'vname' => 'LBL_NAISSANCE_PERSO',
    'type' => 'date',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'enable_range_search' => false,
  ),
  'emploi_perso' => 
  array (
    'required' => false,
    'name' => 'emploi_perso',
    'vname' => 'LBL_EMPLOI_PERSO',
    'type' => 'enum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Quel est votre emploi du temps principal? ',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'emploi_temps_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'education_perso' => 
  array (
    'required' => false,
    'name' => 'education_perso',
    'vname' => 'LBL_EDUCATION_PERSO',
    'type' => 'enum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Quel est votre plus haut niveau complété d\'éducation',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'niveau_education_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'education_perso_autre' => 
  array (
    'required' => false,
    'name' => 'education_perso_autre',
    'vname' => 'LBL_EDUCATION_PERSO_AUTRE',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'groupe_designe' => 
  array (
    'required' => false,
    'name' => 'groupe_designe',
    'vname' => 'LBL_GROUPE_DESIGNE',
    'type' => 'enum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'groupe_minoritaire_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'etabl_sante_pa' => 
  array (
    'required' => false,
    'name' => 'etabl_sante_pa',
    'vname' => 'LBL_ETABL_SANTE_PA',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Dans quel établissement de santé le pp se fait-il principalement traiter?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'code_ident' => 
  array (
    'required' => false,
    'name' => 'code_ident',
    'vname' => 'LBL_CODE_IDENT',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '10',
    'size' => '20',
  ),
  'experience_maladie' => 
  array (
    'required' => false,
    'name' => 'experience_maladie',
    'vname' => 'LBL_EXPERIENCE_MALADIE',
    'type' => 'text',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Pouvez-vous me parler de votre expérience avec votre maladie? (à remplir avec info de l\'entrevue)',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'domaine_soin' => 
  array (
    'required' => false,
    'name' => 'domaine_soin',
    'vname' => 'LBL_DOMAINE_SOIN',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Dans quelle spécialité de soins le pp a-t-il le plus d\'expérience?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'domaine_soin_2' => 
  array (
    'required' => false,
    'name' => 'domaine_soin_2',
    'vname' => 'LBL_DOMAINE_SOIN_2',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Dans quelle spécialité de soins le pp a-t-il le plus d\'expérience?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'domaine_soin_3' => 
  array (
    'required' => false,
    'name' => 'domaine_soin_3',
    'vname' => 'LBL_DOMAINE_SOIN_3',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Dans quelle spécialité de soins le pp a-t-il le plus d\'expérience?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'prob_sant' => 
  array (
    'required' => false,
    'name' => 'prob_sant',
    'vname' => 'LBL_PROB_SANT',
    'type' => 'enum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Quel est ou quels sont les problématiques de santé du pp?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'cid10_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'prob_sant_2' => 
  array (
    'required' => false,
    'name' => 'prob_sant_2',
    'vname' => 'LBL_PROB_SANT_2',
    'type' => 'enum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Quel est ou quels sont les problématiques de santé du pp?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'cid10_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'prob_sant_3' => 
  array (
    'required' => false,
    'name' => 'prob_sant_3',
    'vname' => 'LBL_PROB_SANT_3',
    'type' => 'enum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Quel est ou quels sont les problématiques de santé du pp?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'cid10_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'med_1' => 
  array (
    'required' => false,
    'name' => 'med_1',
    'vname' => 'LBL_MED_1',
    'type' => 'enum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Le pp prend-il des médicaments? Si oui, lesquels? ',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'cim9_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'med_2' => 
  array (
    'required' => false,
    'name' => 'med_2',
    'vname' => 'LBL_MED_2',
    'type' => 'enum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Le pp prend-il des médicaments? Si oui, lesquels? ',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'cim9_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'med_3' => 
  array (
    'required' => false,
    'name' => 'med_3',
    'vname' => 'LBL_MED_3',
    'type' => 'enum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Le pp prend-il des médicaments? Si oui, lesquels? ',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'cim9_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'doul_chron' => 
  array (
    'required' => false,
    'name' => 'doul_chron',
    'vname' => 'LBL_DOUL_CHRON',
    'type' => 'radioenum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Le pp a-t-il des douleurs chroniques?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'yes_no_list',
    'studio' => 'visible',
    'dbType' => 'enum',
    'separator' => '<br>',
  ),
  'prob_somm' => 
  array (
    'required' => false,
    'name' => 'prob_somm',
    'vname' => 'LBL_PROB_SOMM',
    'type' => 'radioenum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Le pp a-t-il des proiblèmes de sommeil?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'yes_no_list',
    'studio' => 'visible',
    'dbType' => 'enum',
    'separator' => '<br>',
  ),
  'prob_resp' => 
  array (
    'required' => false,
    'name' => 'prob_resp',
    'vname' => 'LBL_PROB_RESP',
    'type' => 'radioenum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Le pp a-t-il des proiblèmes de respiration?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'yes_no_list',
    'studio' => 'visible',
    'dbType' => 'enum',
    'separator' => '<br>',
  ),
  'etabl_sante' => 
  array (
    'required' => false,
    'name' => 'etabl_sante',
    'vname' => 'LBL_ETABL_SANTE',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Dans quel établissement de santé le pp se fait-il principalement traiter?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'etabl_prem_ligne' => 
  array (
    'required' => false,
    'name' => 'etabl_prem_ligne',
    'vname' => 'LBL_ETABL_PREM_LIGNE',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Dans quel établissement de santé le pp se fait-il principalement traiter en première ligne?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'exp_decision' => 
  array (
    'required' => false,
    'name' => 'exp_decision',
    'vname' => 'LBL_EXP_DECISION',
    'type' => 'radioenum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Le PP démontre une expérience dans la prise de décision dans ses soins?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'yes_no_list',
    'studio' => 'visible',
    'dbType' => 'enum',
    'separator' => '<br>',
  ),
  'experience_maladie_proche' => 
  array (
    'required' => false,
    'name' => 'experience_maladie_proche',
    'vname' => 'LBL_EXPERIENCE_MALADIE_PROCHE',
    'type' => 'text',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Pouvez-vous me parler de votre expérience avec la maladie de votre proche? (à remplir avec info de l\'entrevue)',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'rel_patient' => 
  array (
    'required' => false,
    'name' => 'rel_patient',
    'vname' => 'LBL_REL_PATIENT',
    'type' => 'enum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'relation_patient_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'domaine_soin_pa' => 
  array (
    'required' => false,
    'name' => 'domaine_soin_pa',
    'vname' => 'LBL_DOMAINE_SOIN_PA',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'domaine_soin_pa_2' => 
  array (
    'required' => false,
    'name' => 'domaine_soin_pa_2',
    'vname' => 'LBL_DOMAINE_SOIN_PA_2',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'domaine_soin_pa_3' => 
  array (
    'required' => false,
    'name' => 'domaine_soin_pa_3',
    'vname' => 'LBL_DOMAINE_SOIN_PA_3',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'prob_sant_pa' => 
  array (
    'required' => false,
    'name' => 'prob_sant_pa',
    'vname' => 'LBL_PROB_SANT_PA',
    'type' => 'enum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'cid10_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'prob_sant_pa_2' => 
  array (
    'required' => false,
    'name' => 'prob_sant_pa_2',
    'vname' => 'LBL_PROB_SANT_PA_2',
    'type' => 'enum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'cid10_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'prob_sant_pa_3' => 
  array (
    'required' => false,
    'name' => 'prob_sant_pa_3',
    'vname' => 'LBL_PROB_SANT_PA_3',
    'type' => 'enum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'cid10_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
  'etabl_sante_pa_' => 
  array (
    'required' => false,
    'name' => 'etabl_sante_pa_',
    'vname' => 'LBL_ETABL_SANTE_PA_',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'etabl_prem_ligne_pa_' => 
  array (
    'required' => false,
    'name' => 'etabl_prem_ligne_pa_',
    'vname' => 'LBL_ETABL_PREM_LIGNE_PA_',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'membre_assoc_comite_detail' => 
  array (
    'required' => false,
    'name' => 'membre_assoc_comite_detail',
    'vname' => 'LBL_MEMBRE_ASSOC_COMITE_DETAIL',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Si oui, laquelle?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'conflit_interet' => 
  array (
    'required' => false,
    'name' => 'conflit_interet',
    'vname' => 'LBL_CONFLIT_INTERET',
    'type' => 'radioenum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'En vue du projet sur lequel vous êtes appelé à collaborer comme patient partenaire, existe-t-il des situations qui pourraient représenter un conflit d\'intérêt réel ou potentiel (ex. membre d\'une association militante, votre employeur, intérêts financiers personnels, gains pour moi ou un proche par rapport à un accès à certains soins, engagement idéologique, et)?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'yes_no_list',
    'studio' => 'visible',
    'dbType' => 'enum',
    'separator' => '<br>',
  ),
  'membre_assoc_comite' => 
  array (
    'required' => false,
    'name' => 'membre_assoc_comite',
    'vname' => 'LBL_MEMBRE_ASSOC_COMITE',
    'type' => 'radioenum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Nous voulons connaître vos implications. Faites-vous partie d\'une association ou d\'un comité en lien - ou NON- avec votre expérience avec la maladie?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'yes_no_list',
    'studio' => 'visible',
    'dbType' => 'enum',
    'separator' => '<br>',
  ),
  'motivations_implication' => 
  array (
    'required' => false,
    'name' => 'motivations_implication',
    'vname' => 'LBL_MOTIVATIONS_IMPLICATION',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Quelles sont vos motivations face au PP?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
  'disponibilites' => 
  array (
    'required' => false,
    'name' => 'disponibilites',
    'vname' => 'LBL_DISPONIBILITES',
    'type' => 'multienum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Quelles sont vos préférences de disponibilité?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'options' => 'disponibilites_list',
    'studio' => 'visible',
    'isMultiSelect' => true,
  ),
  'preferences' => 
  array (
    'required' => false,
    'name' => 'preferences',
    'vname' => 'LBL_PREFERENCES',
    'type' => 'multienum',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'options' => 'preferences_list',
    'studio' => 'visible',
    'isMultiSelect' => true,
  ),
  'duree_experience' => 
  array (
    'required' => false,
    'name' => 'duree_experience',
    'vname' => 'LBL_DUREE_EXPERIENCE',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => 'Au total, depuis combien de temps pensez-vous être impliqué dans des associations, comités, ou autre?',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('pat_Patients', 'pat_Patients', array('basic','assignable','security_groups','person'));