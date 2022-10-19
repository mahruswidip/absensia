<?php
class Login extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('login_model');
  }

  function index()
  {
    $this->load->view('login_view');
  }


  function register_view()
  {
    $this->load->view('register');
  }

  function auth()
  {
    $email    = $this->input->post('user_name', TRUE);
    $password = md5($this->input->post('user_password', TRUE));
    $validate = $this->login_model->validate($email, $password);
    if ($validate->num_rows() > 0) {
      $data  = $validate->row_array();
      $name  = $data['user_name'];
      $email = $data['user_email'];
      $level = $data['user_level'];
      $sesdata = array(
        'user_name'  => $name,
        'user_email'     => $email,
        'user_level'     => $level,
        'logged_in' => TRUE
      );
      $this->session->set_userdata($sesdata);
      // access login for admin
      if ($level === '1') {
        redirect('dashboard/index');

        // access login for staff
      } elseif ($level === '2') {
        redirect('dashboard/index');

        // access login for author
      } else {
        redirect('dashboard/index');
      }
    } else {
      echo $this->session->set_flashdata('msg', 'Username or Password is Wrong');
      redirect('login');
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect('login');
  }

  public function register()
  {

    // create the data object
    $data = new stdClass();

    // load form helper and validation library
    $this->load->helper('form');
    $this->load->library('form_validation');

    // set validation rules
    $this->form_validation->set_rules('user_name', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[tbl_users.user_name]', array('is_unique' => 'This username already exists. Please choose another one.'));
    $this->form_validation->set_rules('user_email', 'Email', 'trim|required|valid_email|is_unique[tbl_users.user_email]');
    $this->form_validation->set_rules('user_password', 'Password', 'trim|required|min_length[6]');
    $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');

    if ($this->form_validation->run() === false) {

      // validation not ok, send validation errors to the view
      $this->load->view('login/register_view', $data);
    } else {

      // set variables from the form
      $user_name = $this->input->post('user_name');
      $user_email    = $this->input->post('user_email');
      $user_password = $this->input->post('user_password');

      if ($this->user_model->create_user($user_name, $user_email, $user_password)) {

        // user creation ok
        $this->load->view('login/login_view', $data);
      } else {

        // user creation failed, this should never happen
        $data->error = 'There was a problem creating your new account. Please try again.';

        // send error to the view
        $this->load->view('login/register_view', $data);
      }
    }
  }
}
