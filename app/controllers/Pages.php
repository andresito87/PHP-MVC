<?php

    class Pages extends Controller
    {
        public function __construct()
        {

        }

        public function index()
        {
            // If user is logged in, redirect to posts page
            if (isLoggedIn()) {
                redirect('posts');
            }

            $data = [
                'title' => 'SharePosts',
                'description' => 'Simple social network built on the TraversyMVC PHP framework'
            ];

            $this->view('pages/index', $data);
        }

        public function about()
        {
            $data = ['title' => 'About Us',
                'description' => 'App to share posts with other users'];
            $this->view('pages/about', $data);
        }
    }