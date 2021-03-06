<?php
// To implement in admingroups permissions
// to remove CRUD from Validation remove route name
return [
	
	"dashboard" => [ 'read'],
	"news" => ['create', 'read', 'update', 'delete'],
	"carreer" => ['create', 'read', 'update', 'delete'],
	
	"ourteam" => ['create', 'read', 'update', 'delete'],
	
	"values" => ['create', 'read', 'update', 'delete'],
	"developmentcycle" => ['create', 'read', 'update', 'delete'],
	"Fieldworkadministration" => ['create', 'read', 'update', 'delete'],
	"Resourcescapabilities" => ['create', 'read', 'update', 'delete'],
	"Quality" => ['create', 'read', 'update', 'delete'],
	"SectorsOFexpertise" => ['create', 'read', 'update', 'delete'],
	"ourpartners" => ['create', 'read', 'update', 'delete'],
 
 
 
	"Sliders" => ['create', 'read', 'update', 'delete'],
	"Department" => ['create', 'read', 'update', 'delete'],
	"Courses" => ['create', 'read', 'update', 'delete'],
	
		
	"ContactUs" => ['create', 'read', 'update'],
	"subscriptions" => ['create', 'read', 'update', 'delete'],
	"Photocategories" => ['create', 'read', 'update', 'delete'],
	"OurGallery" => ['create', 'read', 'update', 'delete'],

	
	 
	"admins" => ['create', 'read', 'update', 'delete'],
	"AdminGroup" => ['create', 'read', 'update', 'delete'],
	
];	