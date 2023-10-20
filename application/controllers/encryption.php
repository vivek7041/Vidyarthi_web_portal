
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class encryption extends CI_Controller
{
public function __construct()
     {
          parent::__construct();
          //Load form helper
          $this->load->helper('form');
          //Load encryption library
          $this->load->library('encrypt');
          //Load validation library
          $this->load->library('form_validation');
     }
     //show form
     public function index(){
         // $this->load->view('show_form');
        $this->load->view('view_form');
        }
     public function key_encoder()
     {
        $this->form_validation->set_rules('key',"Message",'trim|required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('show_form');
        }
        else{
            $key=$this->input->post('key');
            //Encoding message
            $data['encrypt_value']=$this->encrypt->encode($key);
            $this->load->view('show_form',$data);
        }

     }
     public function key_decoder(){
         $encrypt_key=$this->input->post('encrypt_key');
         //Decode Message
         $data['decrypt_value']=$this->encrypt->decode($encrypt_key);
         $this->load->view('show_form',$data);
     }
     public function data_submitted(){
                 $this->load->library('xmlrpc'); 
                 $this->load->model('loginmodel');
                $data=array(
                    'employee_name'=>$this->input->post('emp_name'),
                    'employee_email'=>$this->input->post('emp_email'),
                    'employee_gender'=>$this->input->post('select'),
                    'employee_address'=>$this->input->post('address')
                );
                //Converting $data in json
                $json_data['emp_data']=json_encode($data);
                //Send Json encoded data to model
                $return =$this->loginmodel->insert_json_in_db($json_data);
                if($return==true){
                    $data['result_msg']='Json data successfully inserted into database! ';
                }
                else{
                    $data['result_msg']="Please configure your database correctly";
                }
                //Load view to show message
                $this->load->view("view_form",$data);
     }
    
    public function fun(){
            $this->load->library('user_agent');
            $data['browser']=$this->agent->browser();
            $data['browser_version']=$this->agent->version();
            $data['os']=$this->agent->platform();
            $data['ip_address']=$this->input->ip_address();
            $data['en']=$this->agent->accept_lang('en');
            $this->load->view('user_detail',$data);
        }
        public function ajax(){
                $data['title']="CodeIgniter tuts - Check email availibility using Ajax";
                $this->load->view('email_availa',$data);
        }
                public function check_email_availability(){
                    if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                            echo '<label class="text-danger "><span class="glyphicon glyphicon-remove">Invalid email</span>';
                    }
                    else{
                        $this->load->model('loginmodel');
                      if($this->loginmodel->is_email_available($_POST["email"])){
                          echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>Email already registered</label>';

                      }
                      else{
                          echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span>Email available</label>';
                      }
                    }
                }
                public function payment(){
                    $this->load->view('product_form.php');
                }
                function check(){
                    if(!empty($_POST['stripeToken'])){
                        $token=$_POST['stripeToken'];
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $card_num=$_POST['card_num'];
                        $card_cvv=$_POST['cvv'];
                        $card_exp_month=$_POST['exp_month'];
                        $card_exp_year=$_POST['exp_year'];

                    }
                }
    }
?>