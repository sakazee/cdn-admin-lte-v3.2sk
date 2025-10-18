/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */


CKEDITOR.editorConfig = function(config){
// ...
   config.filebrowserBrowseUrl = 'http://localhost/oval-overseas2/common/kcfinder/browse.php?opener=ckeditor&type=files';
   config.filebrowserImageBrowseUrl = 'http://localhost/oval-overseas2/common/kcfinder/browse.php?opener=ckeditor&type=images';
   config.filebrowserFlashBrowseUrl = 'http://localhost/oval-overseas2/common/kcfinder/browse.php?opener=ckeditor&type=flash';
   config.filebrowserUploadUrl = 'http://localhost/oval-overseas2/common/kcfinder/upload.php?opener=ckeditor&type=files';
   config.filebrowserImageUploadUrl = 'http://localhost/oval-overseas2/common/kcfinder/upload.php?opener=ckeditor&type=images';
   config.filebrowserFlashUploadUrl = 'http://localhost/oval-overseas2/common/kcfinder/upload.php?opener=ckeditor&type=flash';
   config.extraPlugins = 'oembed,widget';
   config.oembed_maxWidth = '560';
	config.oembed_maxHeight = '315';
	config.oembed_WrapperClass = 'embededContent';
	// toolbar :[ ... ['oembed']...]

// ...
};