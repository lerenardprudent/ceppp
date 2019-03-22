<?php

require_once ('modules/SecurityGroups/SecurityGroup.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Patients_Hook
 *
 * @author p0070611
 */
class Patients_Hook {
  function update_default_name_fields($bean, $event, $arguments)
         {
           $last_name = $bean->code_ident;
           if ( !empty($bean->nom) ) {
             $last_name = $bean->nom;
           }
           $bean->last_name = $last_name;
         }
         
  function set_security_group_field($bean, $event, $arguments)
  {
    if ( empty($bean->centre_recrutement) ) {
      global $current_user;
      $user_id = $current_user->id;

      $secG = new SecurityGroup();
      $groups = $secG->getRecordSecurityGroups($bean->id);
      if ( empty($groups) ) {
        $groups = $secG->getUserSecurityGroups($user_id);
      }
      
      $secGroupName = "";
      foreach ( $groups as $secgid => $secgroup ) {
        $secGroupName = $secgroup['name'];
        break;
      }
      $bean->centre_recrutement = $secGroupName;
    }
  }
}
