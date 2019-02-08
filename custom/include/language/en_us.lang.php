<?php$app_strings['LBL_TABGROUP_COLLABORATION'] = 'Modules';$db = DBManagerFactory::getInstance();$cond = "1";$codeCol = "code";$descCol = "desc_en";$tableName = "cim9";$query = "select $codeCol, $descCol from $tableName where $cond order by $descCol";$result= $db->query($query);$GLOBALS['app_list_strings']['cim9_list']=array ();while ( $row= $db->fetchRow($result) ) {  $GLOBALS['app_list_strings']['cim9_list'][$row[$codeCol]] = $row[$descCol];}/*$GLOBALS['app_list_strings']['cim9_list']=array (  '050' => 'Smallpox',  '055.9' => 'Measles',);*/$GLOBALS['app_list_strings']['yes_no_list']=array (  'oui' => 'Yes',  'non' => 'No',);$GLOBALS['app_list_strings']['etab_sante_list']=array (  'Aucun' => ' ',  'CLSC_Faubourgs' => 'CLSC  des Faubourgs',);$GLOBALS['app_list_strings']['relation_patient_list']=array ('none' => '',  'parent' => 'Parent',  'enfant' => 'Child',  'conjoint' => 'Partner',  'famille_elargie' => 'Extended family',  'autre' => 'Other',);$GLOBALS['app_list_strings']['spec_domaine_soins_list']=array (  'aucune' => ' ',  'pediatrie' => 'Pediatrics',);$GLOBALS['app_list_strings']['emploi_temps_list']=array (  'nul' => ' ',  'emploi' => 'Employment',  'benevolat' => 'Volunteering',  'famille' => 'Family',  'proche' => 'Friends',  'sante' => 'Health / Sport',);$GLOBALS['app_list_strings']['niveau_education_list']=array (  'aucun' => ' ',  'primaire' => 'Primary school',  'secondaire' => 'High school',  'formation_professionnelle' => 'Professional training',  'post_secondaire' => 'College',  'maitrise' => 'Masters degree',  'doctorat' => 'PhD',  'certificat' => 'Undergraduate degree',  'autre' => 'Other',);$GLOBALS['app_list_strings']['groupe_minoritaire_list']=array (  '' => '',  'premiere_nation' => 'First Nations',  'minorite_visible' => 'Visible minority',  'handicape' => 'Disabled',);$GLOBALS['app_list_strings']['cim10_list']=array (    'none' => ' ',    'Chapter I — Certain infectious and parasitic diseases'  => array('infections' => 'Infections','micro_organismes_resistants_aux_medicaments' => 'Drug-Resistant Microorganisms','septicemie_sepsie' => 'Septicemia/Sepsis','maladies_dues_au_virus_de_limmunodeficience_humaine_(vih)' => 'Human Immunodeficiency Virus (HIV) Disease '),'Chapter II — Neoplasms'  => array('tumeurs_primitives_et_secondaires' => 'Primary and Secondary Neoplasms','tumeurs_primitives_a_sieges_multiples_independants' => 'Multiple Independent Primary Neoplasms','absence_acquise_du_sein_et_du_poumon_en_raison_dune_tumeur_maligne_primitive' => 'Acquired Absence of Breast and Lung Due to Primary Malignancy','tumeurs_des_tissus_lymphoides_hematopoietiques_et_tissus_apparentes' => 'Neoplasms Arising in Lymphoid, Hematopoietic and Related Tissue','tumeurs_setendant_aux_tissus_adjacents' => 'Neoplasms Extending Into Adjacent Tissue','tumeurs_dont_les_limites_se_chevauchent_(sites_contigus)' => 'Neoplasms With Overlapping Boundaries (Contiguous Sites)','admissions_a_la_suite_dun_diagnostic_de_cancer' => 'Admissions Following Diagnosis of Cancer','complications_dune_maladie_maligne' => 'Complications of Malignant Disease','tumeurs_malignes_recurrentes' => 'Recurrent Malignancies','interventions_pertinentes_a_la_codification_des_tumeurs' => 'Interventions Relevant to Neoplasm Coding','biopsie_des_ganglions_sentinelles' => 'Sentinel Lymph Node Biopsy','brachytherapie' => 'Brachytherapy '),'Chapter III — Diseases of the blood and blood-forming organs and certain disorders involving the immune mechanism'  => array('anemie_due_a_une_perte_de_sang_aigue' => 'Acute Blood Loss Anemia','anemie_au_cours_dune_maladie_chronique' => 'Anemia of Chronic Disease'),'Chapter IV — Endocrine, nutritional and metabolic diseases'  => array('diabete_sucre' => 'Diabetes Mellitus','deshydratation' => 'Dehydration '),'Chapter VI — Diseases of the nervous system'  => array('cranioplastie_et_ou_plastie_de_la_dure_mere_associee_aux_interventions_intracraniennes' => 'Cranioplasty and/or Duraplasty Concomitant With Intracranial Interventions','classement_hierarchique_des_resections_de_lesions_intracraniennes' => 'Hierarchy for Classification of Intracranial Lesion Resection','revision_des_systemes_de_derivation_du_liquide_cephalorachidien_(lcr)_(ventricule_tronc_cerebral_canal_rachidien)' => 'Revision of Cerebrospinal Fluid (CSF) Shunt Systems (Ventricle, Brain Stem, Spinal Canal)','convulsions' => 'Seizures','deficits_neurologiques_a_la_suite_dun_accident_vasculaire_cerebral' => 'Neurological Deficits Following a Stroke','diagnostic_du_deces_neurologique' => 'Neurologically Determined Death '),'Chapter IX — Diseases of the circulatory system'  => array('hypertension_et_affections_associees' => 'Hypertension and Associated Conditions','syndrome_coronarien_aigu_(sca)' => 'Acute Coronary Syndrome (ACS)','selection_de_lattribut_de_situation_lors_dune_intervention_coronaire_percutanee_(icp)' => 'Selection of Status Attribute for Percutaneous Coronary Intervention (PCI)','traitement_thrombolytique' => 'Thrombolytic Therapy','angine_de_poitrine' => 'Angina','cardiopathie_ischemique_chronique' => 'Chronic Ischemic Heart Disease','occlusion_a_la_suite_de_pontages_aortocoronariens_(pac)' => 'Occlusion Following Coronary Artery Bypass Grafts (CABGs)','arret_cardiaque' => 'Cardiac Arrest','accidents_vasculaires_cerebraux_(avc)_hemorragiques_ischemiques_et_non_precises' => 'Strokes: Hemorrhagic, Ischemic and Unspecified','maladie_vasculaire_peripherique' => 'Peripheral Vascular Disease','anevrismes' => 'Aneurysms','catheters_veineux_centraux' => 'Central Venous Catheters','anticoagulotherapie_gestion_et_effets_indesirables' => 'Anticoagulation Therapy: Management and Adverse Effects '),'Chapter X — Diseases of the respiratory system'  => array('pneumonie' => 'Pneumonia','pneumonie_chez_les_patients_souffrant_de_maladie_pulmonaire_obstructive_chronique_(mpoc)' => 'Pneumonia in Patients With Chronic Obstructive Pulmonary Disease (COPD)','asthme' => 'Asthma','resection_dune_lesion_nasale_(polypes)' => 'Resection of Space-Occupying Lesions (Polyps) of Nose','septoplastie_pour_une_deviation_de_la_cloison_nasale' => 'Septoplasty for Deviated Nasal Septum','ventilation_invasive' => 'Invasive Ventilation'),'Chapter XI — Diseases of the digestive system'  => array('gastroenterite_et_diarrhee' => 'Gastroenteritis and Diarrhea','varices_oesophagiennes_avec_saignement' => 'Bleeding Esophageal Varices','saignement_digestif' => 'Gastrointestinal Bleeding','selection_des_attributs_pour_les_reparations_de_hernie' => 'Selection of Attributes at Hernia Repair '),'Chapter XII — Diseases of the skin and subcutaneous tissue'  => array('cellulite' => 'Cellulitis '),'Chapter XIII — Diseases of the musculoskeletal system and connective tissue'  => array('arthrose' => 'Osteoarthritis','arthrectomie_et_arthroplastie' => 'Arthrectomy and Arthroplasty','fractures' => 'Fractures','reduction_fixation_et_fusion_de_fracture_dune_articulation' => 'Joint Fracture Reduction, Fixation and Fusion','excision_(de_lesion)_de_los_des_tissus_mous_et_de_la_peau' => 'Excision (of Lesion) of Bone, Soft Tissue and Skin','retrecissement_du_canal_medullaire' => 'Spinal Stenosis '),'Chapter XIV — Diseases of the genitourinary system'  => array('stades_de_la_maladie_renale_chronique' => 'Stages of Chronic Kidney Disease (CKD)','episode_aigu_au_cours_dune_insuffisance_renale_chronique' => 'Acute on Chronic Kidney Disease','peritonite_due_a_une_dialyse_peritoneale_continue_ambulatoire_(dpca)' => 'Continuous Ambulatory Peritoneal Dialysis (CAPD) Peritonitis','menorragie_comme_diagnostic_principal' => 'Menorrhagia as the Most Responsible Diagnosis (MRDx) '),'Chapter XV — Pregnancy, childbirth and the puerperium'  => array('selection_du_sixieme_caractere_pour_la_codification_de_lobstetrique' => 'Selection of the Sixth Digit in Obstetrical Coding','sequence_des_codes_de_diagnostic_en_obstetrique' => 'Sequencing Obstetrical Diagnosis Codes','mort_intra_uterine' => 'Intrauterine Death','grossesse_se_terminant_par_un_avortement' => 'Pregnancy With Abortive Outcome','poursuite_de_la_grossesse_apres_avortement_reduction_selective_de_foetus_dans_les_grossesses_multiples' => 'Continuing Pregnancy After Abortion/Selective Fetal Reduction in Multiple Gestation','complications_consecutives_a_un_avortement_et_a_une_grossesse_extra_uterine_ou_molaire' => 'Complications Following Abortion and Ectopic and Molar Pregnancy','infection_par_les_streptocoques_du_groupe_b_sujet_porteur_au_cours_de_la_grossesse' => 'Streptococcal Group B Infection/ Carrier in Pregnancy','accouchement_normal' => 'Delivery in a Normal Case','grossesse_avec_complication_et_grossesse_sans_complication' => 'Complicated Pregnancy Versus Uncomplicated Pregnancy','accouchement_avec_antecedent_de_cesarienne' => 'Delivery With History of Cesarean Section','grossesses_multiples' => 'Multiple Gestation','soins_maternels_lies_au_foetus_et_a_la_cavite_amniotique_et_problemes_possibles_poses_par_laccouchement' => 'Maternal Care Related to the Fetus, Amniotic Cavity and Possible Delivery Problems','grossesse_prolongee_naissance_apres_terme' => 'Prolonged Pregnancy/Post-Dates Pregnancy','rupture_prematuree_des_membranes' => 'Premature Rupture of Membranes','travail_avant_terme' => 'Preterm Labor','travail_prolonge' => 'Long Labor','travail_trop_rapide' => 'Precipitate Labor','dystocie' => 'Obstructed Labor','travail_et_accouchement_compliques_dune_detresse_foetale' => 'Labor and Delivery Complicated by Fetal Stress','hemorragie_du_post_partum' => 'Postpartum Hemorrhage','complications_de_lanesthesie_au_cours_du_travail_et_de_laccouchement' => 'Complications of Anesthesia During Labor and Delivery','interventions_associees_a_laccouchement' => 'Interventions Associated With Delivery','dilatation_et_curetage' => 'Dilation and Curettage '),'Chapter XVI — Certain conditions originating in the perinatal period'  => array('faible_poids_a_la_naissance_et_ou_enfant_ne_avant_terme' => 'Low Birth Weight and/or Preterm Infant','acidemie_foetale' => 'Fetal Acidemia','ictere_neonatal' => 'Neonatal Jaundice','sepsie_confirmee_et_risque_de_sepsie_chez_le_nouveau_ne' => 'Confirmed Sepsis and Risk of Sepsis in the Neonate','traumatisme_a_la_naissance' => 'Birth Trauma','accident_vasculaire_cerebral_(avc)_perinatal' => 'Perinatal Stroke '),'Chapter XVII — Congenital malformations, deformations and chromosomal abnormalities'  => array('syndromes_causes_par_des_anomalies_congenitales_et_manifestations_specifiques' => 'Congenital Anomaly Syndromes and Specific Manifestations '),'Chapter XVIII — Symptoms, signs and abnormal clinical and laboratory findings, not elsewhere classified'  => array('syndrome_de_reponse_inflammatoire_systemique_(sris)_ou_syndrome_dinflammation_systemique' => 'Systemic Inflammatory Response Syndrome (SIRS)','absence_de_signes_vitaux_(asv)' => 'Vital Signs Absent (VSA) '),'Chapter XIX — Injury, poisonings and certain other consequences of external causes'  => array('reactions_indesirables_en_usage_therapeutique_et_empoisonnements' => 'Adverse Reactions in Therapeutic Use Versus Poisonings','reaction_allergique_en_usage_non_therapeutique' => 'Allergic Reaction in Non-Therapeutic Use','lesions_traumatiques_recentes_versus_anciennes' => 'Current Versus Old Injuries','complications_precoces_de_traumatismes' => 'Early Complications of Trauma','traumatisme_intracranien_sai_versus_traumatisme_cranien_sai' => 'Intracranial Injury NOS Versus Head Injury NOS','fracture_du_crane_et_lesion_intracranienne' => 'Skull Fracture and Intracranial Injury','plaies_ouvertes' => 'Open Wounds','fractures_fermees_versus_ouvertes' => 'Fractures — Closed Versus Open','traitement_des_fractures' => 'Treatment of Fractures','luxations' => 'Dislocations','lesions_des_vaisseaux_sanguins' => 'Injury to Blood Vessels','lesions_significatives' => 'Significant Injuries','blessures_par_ecrasement' => 'Crush Injuries','lesions_bilaterales' => 'Bilateral Injuries','brulures_et_corrosions' => 'Burns and Corrosions','etendue_de_la_surface_corporelle_touchee_par_une_brulure' => 'Extent of Body Surface Area Involved in Burn Injury','attribution_du_diagnostic_principal_et_du_probleme_principal_dans_le_cas_de_brulures_multiples' => 'Assignment of Most Responsible Diagnosis/Main Problem in Multiple Burns','brulures_touchant_plusieurs_regions_corporelles' => 'Burns of Multiple Body Regions','sequence_des_codes_de_lesions_multiples_en_fonction_du_degre_de_gravite' => 'Sequencing Multiple Injuries for Severity','attribution_de_codes_pour_des_lesions_superficielles_multiples_ou_plaies_ouvertes_multiples' => 'Code Assignment for Multiple Superficial Injuries or Multiple Open Wounds','attribution_de_codes_pour_plusieurs_types_de_lesions_significatives_touchant_une_seule_region_corporelle' => 'Code Assignment for Multiple Types of Significant Injuries Involving a Single Body Region','attribution_de_codes_pour_plusieurs_types_de_lesions_significatives_touchant_plusieurs_regions_corporelles' => 'Code Assignment for Multiple Types of Significant Injuries Involving Multiple Body Regions','codification_des_lesions_multiples_non_specifiques_visites_au_service_durgence' => 'Coding Nonspecific Multiple Injuries for Emergency Department Visits','affections_post_intervention' => 'Post-Intervention Conditions','rejet_ou_echec_de_transplantation_dorganes_de_greffons_et_de_lambeaux' => 'Rejection/Failure of Transplanted Organs, Grafts and Flaps','complications_liees_aux_protheses_aux_implants_ou_aux_greffes' => 'Complications of Devices, Implants or Grafts','incidents_survenus_au_cours_dactes_medicaux_et_chirurgicaux' => 'Misadventures During Surgical and Medical Care'),);$GLOBALS['app_list_strings']['disponibilites_list']=array (  'matin' => 'Mornings',  'apresmidi' => 'Afternoons',  'soir' => 'Evenings',  'fins_de_semaine' => 'Weekends',  'jours' => 'Weekdays',);$GLOBALS['app_list_strings']['preferences_list']=array (  'recherche' => 'Research',  'education' => 'Education',  'soins' => 'Care-giving',  'gouvernance' => 'Gouvernance',);$GLOBALS['app_list_strings']['competences_pp_list']=array (  'se_connait_dans_la_vie_avec_la_maladie' => 'Has coped with sickness',  'mobilise_ses_savoirs_experientiels' => 'Puts their experiential knowledge to good use',  'developpe_sa_resilience' => 'Has developed resilience',  'redonne_un_sens_a_la_vie_au_travers_de_ses_experiences' => 'Finds meaning to life through their experiences',  'elabore_un_projet_de_vie_et_l_adapte_au_changement' => 'Has plans for their life and can adapt them in the face of change',);$GLOBALS['app_list_strings']['competences_pr_list']=array (  'fait_preuve_d_altruisme' => 'Demonstrates altruism',  'se_raconte_de_facon_pedagogique' => 'Eager to learn',  'communique' => 'Able to communicate',  'est_reflexif_et_transmet' => 'Is reflective',  'est_a_l_ecoute' => 'Listens',);$GLOBALS['app_list_strings']['competences_ppc_list']=array (  'mobilise_ses_experiences_sociales_et_professionnelles' => 'Puts their social/professional experiences to good use',  'assume_un_co_leadership' => 'Able to share leadership responsibilities',  'accompagne_un_individu_ou_un_groupe' => 'Assists individuals or groups',  'analyse_des_situations_relationelles_de_differents_niveaux_de_complexite' => 'Analyzes relational scenarios at many levels of complexity',  'tisse_et_entretien_des_reseaux' => 'Builds and maintains networks',);$GLOBALS['app_list_strings']['habilites_pp_list']=array (  's_exprime_clairement' => 'Expresses themself clearly',  'habiletes_interpersonnelles' => 'Interpersonal abilities (listening, empathy)',  'desir_d_aider_autrui_et_de_contribuer_a_un_objectif_qui_depasse_sa_propre_situation' => 'Willing to help others and to contribute to a cause larger than themself',  'Manifeste_un_desir_d_implication' => 'Demonstrates a desire to get involved (clubs, volunteering)',);$GLOBALS['app_list_strings']['langue_list']=array (  'francais' => 'French',  'anglais' => 'English',  'espagnol' => 'Spanish',  'autre' => 'Other',);$GLOBALS['app_list_strings']['etablissement_recrut_list']=array ('DCPP' => array(  'dcpp_cours_css' => 'CSS course',  'dcpp_comite_d_amelioration_continue' => 'Committee of continuous improvement',  'dcpp_projets' => 'Projects'),'CEPPP' => array(  'ceppp_ecole' => 'School',  'ceppp_laboratoire' => 'Laboratory',  'ceppp_reseau' => 'Network'),'RUIS - SRAP' => array(    'ruis_gouvernance' => 'Gouvernance',    'ruis_conferences' => 'Congress',    'ruis_proj_de_recherche' => 'Research projects',    'ruis_ul' => 'RUIS UL',    'ruis_us' => 'RUIS US',    'ruis_mcgill' => 'RUIS McGill',    'ruis_udem' => 'RUIS UdM',    'ruis_coresp' => 'Co-responsable RUIS'),'Autre' => array(    'reseau_1' => 'Réseau 1',    'chum' => 'CHUM',    'canvector' => 'CanVECTOR',    'canet' => 'CANet',    'ciusss' => 'CISSS/CIUSSS'    ));$GLOBALS['app_list_strings']['etat_list']=array (  '' => '',  'actif' => 'Active',  'non_actif' => 'Non-active',);$GLOBALS['app_list_strings']['genre_list']=array (  '' => '',  'homme' => 'Male',  'femme' => 'Female',  'trans' => 'Transgender',  'autre' => 'Other',);