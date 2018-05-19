<?php
    class Home extends CI_Controller{
        function __construct()
        {
            parent::__construct();
        }

        function index()
        {
            $this->load->view("home");
        }

        function baseurl()
        {
            echo base_url();
        }
    }
?>