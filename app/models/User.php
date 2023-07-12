<?php

    class User
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        //Register user
        public function register($data)
        {
            $this->db->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
            //Bind values
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);

            //Execute
            return $this->db->execute();
        }

        //Login user
        public function login($email, $password)
        {
            $this->db->query('SELECT * FROM users WHERE email = :email');
            //Bind value
            $this->db->bind(':email', $email);
            //Get row
            $row = $this->db->single();
            $hashed_password = $row->password;
            if (password_verify($password, $hashed_password)) {
                return $row;
            } else {
                return false;
            }
        }

        //Find user by email
        public function findUserByEmail($email)
        {
            $this->db->query('SELECT * FROM users WHERE email = :email');
            //Bind value
            $this->db->bind(':email', $email);
            //Get row
            $row = $this->db->single();

            //Check if email is already registered
            return $this->db->rowCount() > 0;
        }
    }
