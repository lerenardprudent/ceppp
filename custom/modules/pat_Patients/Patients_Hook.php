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
    $name_defined = !empty($bean->prenom) || !empty($bean->nom );
    $bean->first_name = $name_defined ? $bean->prenom : "";
    $bean->last_name = $name_defined ? $bean->nom : $bean->code_ident;
  }
}
