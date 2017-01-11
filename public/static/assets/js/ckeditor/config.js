/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    //config.height = 400;

    config.removeDialogTabs = 'image:advanced;image:Link;';//去掉图片上传中链接和高级  advanced:高级 Link:链接 info:图像信息 Upload:上传
    config.image_previewText= ' ';//插入图片中预览图片框的文字。
};

