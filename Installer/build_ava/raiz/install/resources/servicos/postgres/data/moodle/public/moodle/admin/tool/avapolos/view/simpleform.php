<?php

  set_time_limit(0);


  //moodleform is defined in formslib.php
  require_once("$CFG->libdir/formslib.php");

  class export_form extends moodleform {
      //Add elements to form
      public function definition() {
          global $CFG;
          global $DB;

          $mform = $this->_form; // Don't forget the underscore!


          $radioarray=array();
          $radioarray[] = $mform->createElement('radio', 'offon', '', 'Exportar Offline', 'offline');
          $radioarray[] = $mform->createElement('radio', 'offon', '', 'Exportar Online', 'online');
          $mform->addGroup($radioarray, 'offonbuttons', '', array(' '), false);

          $this->add_action_buttons();



      }
      //Custom validation should be added here
      function validation($data, $files) {
          return array();
      }
  }

  class import_form extends moodleform {
      //Add elements to form
      public function definition() {
          global $CFG;
          global $DB;

          $mform = $this->_form; // Don't forget the underscore!

          //filepicker para upload do arquivo
          $mform->addElement('filepicker', 'sqlfile', get_string('file'), null, array('maxbytes' => 0, 'accepted_types' => '*'));
          // $mform->addElement('filemanager', 'attachments', get_string('attachment', 'moodle'), null, array('subdirs' => 0, 'maxbytes' => 10485760, 'areamaxbytes' => 10485760, 'maxfiles' => 10, 'accepted_types' => '*', 'return_types'=> FILE_INTERNAL | FILE_EXTERNAL));
          $this->add_action_buttons();
      }
      //Custom validation should be added here
      function validation($data) {
          return array();
      }
  }
