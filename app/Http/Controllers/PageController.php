<?php namespace App\Http\Controllers;

class PageController extends Controller {

	/**
	 *
	 * @return Response
	 */
	public function show($page)
	{
		$data = array("pagename" => $page);

		if ($page == 'gallery') {
			$gallery_directory = 'images/gallery/';
			$gallery_files = array_diff(scandir($gallery_directory), array('..', '.', '.DS_Store'));

			$data['gallery_images'] = $gallery_files;
		}

		return  view($page, 
			array('data' => $data)
		);
	}

}
