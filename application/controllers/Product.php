<?php
    class Product extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->model("product_model");
        }

        function index()
        {
           
            
           $this->load->library("pagination");  //load library
           $page = isset($_GET["page"]) ? $_GET["page"] : 1; // ini halaman ke..

           $strcount = "SELECT count(product_id) as 'count' FROM product_tbl";
           $q2 = $this->db->query($strcount);
           $jml_data = $q2->row_array();

           //print_r($jml_data);
           
           //===================================
           $limit = 5;
           $start = ($page - 1) * $limit;
           //print_r($jml_data);

           $config['base_url'] = base_url('index.php/product');
           $config['total_rows'] = $jml_data['count'];
           $config['per_page'] = $limit;
           $config['page_query_string'] = TRUE; //set jadi query string
           $config['use_page_numbers'] = TRUE; //memunculkan halaman string
           $config['query_string_segment'] = 'page';  //query string

           // setting tampilan number
           $config['full_tag_open'] = "<nav class='float-left'><ul class='pagination'>";
           $config['full_tag_close'] = "</ul></nav>";

           $config['next_link'] = "&gt;";
           $config['next_tag_open'] = "<li class='page-item'>";
           $config['next_tag_close'] = "</li>";

           $config['prev_linnk'] = "&lt;";
           $config['prev_tag_open'] = "<li class='page_item'>"; 
           $config['prev_tag_close'] = "</li>"; 

           $config['cur_tag_open'] = "<li class='page-item active disabled'>
           <a class='page-link'>";
           $config['cur_tag_close'] = "</a></li>";

           $config['attributes'] = array('class' => 'page-link');

           $this->pagination->initialize($config);
           
           $data["page_number"] = $this->pagination->create_links(); 

            $data["product"]= $this->product_model->product_list_limit($start,$limit);
            $this->load->view("product",$data);
        }
    }


    