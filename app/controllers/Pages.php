<?php

    class Pages extends Controller
    {
        public function __construct()
        {
<<<<<<< HEAD
            $this->postModel = $this->model('Post');
=======

>>>>>>> 4e8c5d2 (first commit after merge with develop branch)
        }

        public function index()
        {
<<<<<<< HEAD
            $posts= $this->postModel->getPosts();
            $data = ['title' => 'Welcome',
                     'posts' => $posts];
=======
            $posts = $this->postModel->getPosts();
            $data = [
                'title' => 'Welcome'
            ];
>>>>>>> 4e8c5d2 (first commit after merge with develop branch)

            $this->view('pages/index', $data);
        }

        public function about()
        {
            $data = ['title' => 'About Us'];
            $this->view('pages/about', $data);
        }
    }