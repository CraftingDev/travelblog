<?php
class Videos extends Base
{

    public function __construct()
    {
        parent::__construct();

    }


    ////// Video gallery

    public function index()
    {
        $categories = $this->pageModel->getVideoCategories();

        $data =
            [
                'categories' => $categories,
                'flex' => $this->flex,

            ];

        $this->standardHeader();
        $this->standardNav();
        $this->view('videos/index', $data);
        $this->standardFooter();
    }


    public function show($id) {

        $videos = $this->pageModel->getVideosByCategory($id);

        $data =
            [
                'videos' => $videos
            ];

        $this->standardHeader();
        $this->standardNav();
        $this->view('videos/show', $data);
        $this->standardFooter();
    }


}