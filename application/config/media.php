<?php defined('SYSPATH') or die('No direct script access.');

return array(

	// Where to upload media files eg. images. Take note of the trailing slash
	'media_upload_dir' => DOCROOT.'media/uploads/',

	// Width to be used to resize the image to a medium size
	'image_medium_width' => 800,

	// Height to be used to resize the image to a medium size. NULL by default
	// so the image's aspect ratio is maintain when resizing it.
	'image_medium_height' => NULL,

	// Width to be used to resize the image to a thumbnail size
	'image_thumbnail_width' => 70,

	// Height to be used to resize the image to a thumbnail size. NULL by default
	// so the image's aspect ratio is maintain when resizing it.
	'image_thumbnail_height' => NULL,

	// Maximum file upload size. Eg. 4M, 2G. Remember this figure should not be larger
	// than the maximum file upload size set on the server. 1M by default.
	'max_file_upload_size' => 1M,
);
