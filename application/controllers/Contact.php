<?php
    class Contact extends CI_Controller{
        function __construct()
        {
            parent::__construct();
        }

        function index()
        {
            $this->load->view("contact");

        }
        
        function page()
        {
            echo "<h2>Page Contact</h2>";
            echo "<hr>";
        }
    }
?>