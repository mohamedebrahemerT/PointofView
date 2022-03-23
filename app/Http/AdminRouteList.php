<?php
// To implement in admingroups permissions
// to remove CRUD from Validation remove route name
return [
	
	"dashboard" => [ 'read'],
	"news" => ['create', 'read', 'update', 'delete'],
	"OurValues" => ['create', 'read', 'update', 'delete'],
	"users" =>  ['create', 'read', 'update', 'delete'],
	"Sliders" => ['create', 'read', 'update', 'delete'],
	"Department" => ['create', 'read', 'update', 'delete'],
	"Courses" => ['create', 'read', 'update', 'delete'],
	
		
	"ContactUs" => ['create', 'read', 'update'],
	"subscriptions" => ['create', 'read', 'update'],
	"AdminNotifications" => ['create', 'read', 'update', 'delete'],
	"admins" => ['create', 'read', 'update', 'delete'],
	"AdminGroup" => ['create', 'read', 'update', 'delete'],
	
];	