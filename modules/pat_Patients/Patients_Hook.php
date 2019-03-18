<?php

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
           if ( isset($bean->nom) ) {
             $last_name = $bean->nom;
           }
           $bean->last_name = $last_name;
         }
}
