<?php
    class Cart extends CI_Controller{        
        
        function __construct()
        {
            parent::__construct();

            $this->load->library("cart");
            $this->load->model("product_model");
        }

        function index()
        {
            $data = array();
            $this->load->view("cart", $data);
        }

        function add($product_id)
        {
            if(!empty($product_id))
            {
                $product_detil = $this->product_model->product_detil($product_id);

                //print_r($product_detil);

                $data = array(
                    'id'    => $product_detil['product_id'],
                    'qty'   => 1,
                    'price' => $product_detil['price'],
                    'name'  => $product_detil['product_title']
                );
                
                $this->cart->insert($data);
                redirect("index.php/cart");
                
            }else{
                show_404();
            }
        }

        function update()
        {
            $qty = $this->input->post("qty");
            $rowid = $this->input->post("rowid");
            $data = array();

            for($i=0; $i < count($qty); $i++)
            {
                array_push($data,array(
                    "rowid"=>$rowid[$i],
                    "qty"=>$qty[$i]
                ));
            }

            $this->cart->update($data);
            redirect("index.php/cart");
        }

        function delete($rowid)
        {
            $data = array(
                "rowid"=>$rowid,
                "qty"=>0
            );

            $this->cart->update($data);
            redirect("index.php/cart");
        }

        function checkout()
        {
            $this->load->model("order_model");
            $email_sess = $this->session->userdata("email");
            if(!empty($email_sess))
            {
                //order
                $order = array(
                    "user_id"=>$this->session->userdata("user_id"),
                    "total"=>$this->cart->total()
                );

                $this->order_model->insert_order($order);

                //order_detail
                foreach($this->cart->contents() as $item)
                {
                $order_detail = array(
                    "product_id"=>$item["id"],
                    "price"=>$item["price"],
                    "qty"=>$item["qty"],
                    "subtotal"=>$item["subtotal"]
                );

                $this->order_model->insert_order_detail($order_detail);
                }
                exit("back ..");
                $this->cart->destroy();

                redirect("index.pgp/product");
            }else{
                redirect("index.php/auth/login");
            }    
        }

    }
