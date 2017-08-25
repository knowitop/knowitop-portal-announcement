<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'knowitop-portal-announcement/2.0.1',
	array(
		// Identification
		//
		'label' => "Customer Portal Announcements module by _knowitop",
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
            'itop-portal/1.0.0',
            'itop-request-mgmt/2.3.0||itop-request-mgmt-itil/2.3.0',
            'itop-profiles-itil/1.0.0',
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.knowitop-portal-announcement.php',
            'portal/announcementbrick.class.inc.php',
        ),
		'webservice' => array(

		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),

		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);


?>
