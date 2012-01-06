/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	
	config.toolbar = 'Custom';

	config.toolbar_Custom =
	[
		['Source','-','NewPage','Preview','-','Templates'],
		['Cut','Copy','Paste','PasteText','PasteFromWord'],
		['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
		['BidiLtr', 'BidiRtl'],
		'/',
		['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
		['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
		['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
		['Link'],
		['Image','Table','Smiley','SpecialChar'],
		['Styles','Format','Font','FontSize'],
		['TextColor','BGColor']
	];
};
