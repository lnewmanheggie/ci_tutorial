<?php
    class Users extends CI_Controller {

        public function register() {
            $data['title'] = 'Sign Up';

            $this->load->helper(['form', 'url']);
            $this->load->library('form_validation');

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
            $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('users/register', $data);
                $this->load->view('templates/footer');
            } else {
                //Encrypt password
                $enc_password = md5($this->input->post('password'));

                $this->user_model->register($enc_password);

                // set message

                $this->session->set_flashdata('user_registered', 'You are now registered and can log in!');

                redirect('posts');
            }
        }

        public function login() {
            $data['title'] = 'Sign in';

            $this->load->helper(['form', 'url']);
            $this->load->library('form_validation');

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('users/login', $data);
                $this->load->view('templates/footer');
            } else {
                //get username
                $username = $this->input->post('username');

                $password = md5($this->input->post('password'));

                // Login user
                $user_id = $this->user_model->login($username, $password);

                if ($user_id) {
                    $user_data = [
                        'user_id' => $user_id,
                        'username' => $username,
                        'logged_in' => true,
                    ];

                    $this->session->set_userdata($user_data);

                    redirect('posts');
                } else {
                    redirect('users/login');
                }

                // set message

                // $this->session->set_flashdata('user_registered', 'You are now registered and can log in!');

                redirect('posts');
            }
        }

        public function logout() {
            // unset user data
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('user_id');

            redirect('users/login');
        }

        // check if username exists
        function check_username_exists($username) {
            $this->form_validation->set_message('check_username_exists', 'username taken.');

            if ($this->user_model->check_username_exists($username)) {
                return true;
            } else {
                return false;
            }
        }

        function check_email_exists($email) {
            $this->form_validation->set_message('check_email_exists', 'email taken.');

            if ($this->user_model->check_email_exists($email)) {
                return true;
            } else {
                return false;
            }
        }
    }