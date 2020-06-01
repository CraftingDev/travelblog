<?php
class Galleries extends Base
{
    public function __construct()
    {
        parent::__construct();

    }


    ////// Image gallery
    public function index()
    {
        $categories = $this->pageModel->getGalleryCategories();

        $data =
            [
                'galleries' => $categories,
                'flex' => $this->flex,

             ];

        $this->standardHeader();
        $this->standardNav();
        $this->view('galleries/index', $data);
        $this->standardFooter();
    }


    public function show($id) {

        $images = $this->pageModel->getGalleryImages($id);

        $data =
            [
                'images' => $images
            ];

        $this->standardHeader();
        $this->standardNav();
        $this->view('galleries/show', $data);
        $this->standardFooter();
    }


}