<?php

use Google\Service\Blogger\Post;

defined('BASEPATH') or exit('No direct script access allowed');
class Welcome extends CI_Controller
{

	public function index()
	{
		
          $this->load->view('index');
          log_message('error','error message in this line');
           
	}
	public function login()   
	{
		$this->form_validation->set_rules('uname', 'Email', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required|max_length[20]');
		$this->load->model('loginmodel');
		
		if ($this->form_validation->run()) {
			$uname = $this->input->post('uname');
			$pass = $this->input->post('pass');
			$login = $this->loginmodel->isvalidate($uname, $pass);
			if ($login) {
				$array = (array) $login;
				$this->session->set_userdata('data', $array['name']);
				$this->session->set_userdata('email', $array['email']);
				$this->session->set_userdata('id', $array['id']);
				return redirect('Welcome/studentdashboard');
			} else {
				$this->session->set_flashdata('Login_failed', "Invalid Username/Password");
				redirect('Welcome/login');
			}
		} else {
			$this->load->view('login');
		}
	}
	public function facultyLogin()
	{

		$this->form_validation->set_rules('uname', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('pass', 'Password', 'required|max_length[20]');
		if ($this->form_validation->run()) {
			$this->load->model('loginmodel');
			$uname = $this->input->post('uname');
			$pass = $this->input->post('pass');
			if ($this->form_validation->run()) {
				$login = $this->loginmodel->isvalidateLoginFaculty($uname, $pass);
				if ($login) {
					$array = (array) $login;
					$this->session->set_userdata('data', $array['name']);
					$this->session->set_userdata('email', $array['email']);
					$this->session->set_userdata('id', $array['id']);
// ------------------------------------------------------------------------------------------------//
		         	$data=$this->loginmodel->show_event(); 
					$this->load->view('facultyDashboard',['data'=> $data]);
// ------------------------------------------------------------------------------------------------//					
				} else {
					$this->session->set_flashdata('Login_failed', "Invalid Username/Password");
					redirect('Welcome/facultyLogin');
				}
			}
		} else {
			$this->load->view('facultyLogin.php');
		}
	}

	public function signup()
	{ 
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[student_data.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[20]');
			$this->form_validation->set_rules('name', 'Full name', 'required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'required|max_length[10]|is_unique[student_data.mobile]');
			$this->form_validation->set_rules('dob', 'DOB', 'required');
			$this->form_validation->set_rules('institute', 'School/College', 'required');
			$this->form_validation->set_rules('course', 'Course/Class', 'required');
			$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required');
			//  $this->form_validation->set_rules('gender','Gender','required'); 
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('aoi','Area of interest','required');
		 

			//   $this->form_validation->set_errors_delimiters('<div class="text-danger">','</div>');  
			// ---------------------------image upload code here: -------------------------------------//
			$config=[
				'upload_path'=>'./upload/',
				'allowed_types'=>'gif|jpg|png'
			];
			$this->load->library('upload',$config);

			//----------------------------		END			-----------------------------------------// 

			if ($this->form_validation->run() && $this->upload->do_upload()) {
				$this->load->model('loginmodel', 'student_data');
				$post = $this->input->post(); 
				$data=$this->upload->data();
                    
                    $image_path=base_url("upload/".$data['raw_name'].$data['file_ext']);
                    
                    $post['image_path']=$image_path;
                    
				if ($this->student_data->add_user($post)) {
					$this->session->set_flashdata('data', "Student added successfully!!!");
							$this->session->set_flashdata('data_class', "alert-success");
						} else {
							$this->session->set_flashdata('data', "Student not added successfully!!!");
							$this->session->set_flashdata('data_class', "alert-danger");
						}
						return redirect('Welcome/login');	          
						
				//   $this->load->library('email');
				//   $this->email->from(set_value('email'),set_value('name'));
				//   $this->email->to('vivekvermacs7052@gmail.com');
				//   $this->email->subject("Registration Greeting...");
				//   $this->email->message("Thank you for registration");
				//   $this->email->set_newline("\r\n");
				//   $this->email->send();
				// 	if(!$this->email->send()){
				// 		show_error($this->email->print_debugger());
				// 	}
				// 	else{
				// 		echo "Email sent succesfully";    }
				  	}
			  else {
				$upload_error=$this->upload->display_errors();
			 $this->load->view('signup',compact('upload_error'));
			
			}
		
	}
	public function messages()
	{
		 
		$this->load->view('student_messages.php');
	}


	// --------------Enrolled events-----------
	public function events()
	{	 $id=$this->session->userdata('id'); 
		    $student_id=$id;
		$var=$this->loginmodel->participate_event($student_id);
		$this->load->view('enrolled_stu_data.php',compact('var'));
		 	
			 
	}
	// ----------------------------


	public function team_details()
	{
		$this->load->view('a1.php');
	}
	public function studentdashboard()
	{
              
               $this->load->library('pagination');
               $config=[
                    'base_url'=>base_url('index.php/Welcome/studentdashboard'),
                    'per_page'=>3,
                    'total_rows'=>$this->loginmodel->all_articles_count(),
					 'full_tag_open'=>'<ul class="pagination">',
					'full_tag_close'=>'</ul>',
					'attributes'=> 'class="page-link"',
					'first_link'=>false,
					 'last_link' =>false,
					'first_tag_open'=> '<li class="page-item">',
					'first_tag_close' => '</li>',
					'prev_link' => '&laquo',
					'prev_tag_open' => '<li class="page-item page-link">',
					'prev_tag_close' => '</li>',
					'next_link' => '&raquo',
					'next_tag_open' => '<li class="page-item page-link">',
					'next_tag_close' => '</li>',
					 
					'cur_tag_open'=> '<li class="page-item active "><a href="#" class="page-link">',
					'cur_tag_close'=> '</a></li>',
					'num_tag_open'=>'<li class="page-item page-link">',
					'num_tag_close'=> '</li>'
               ];
			   $this->pagination->initialize($config);
			  
			   $articles=$this->loginmodel->all_articleslist($config['per_page'],$this->uri->segment(3));
			   
				//$data=$this->loginmodel->show_event(); 
				// $var = $this->loginmodel->selectTeamlist($config['per_page'],$this->uri->segment(3));
				$var=$this->loginmodel->selectTeam();
			$this->load->view('student-dashboard.php',compact('articles','var'));
	}
	public function logout()
	{
		$this->session->unset_userdata('name');
		return $this->load->view('index');
	}

	public function createTeam()
	{
		$this->form_validation->set_rules('name', 'Full name', 'required|is_unique[createteam.name]');
		$this->form_validation->set_rules('teamSize', 'Team size', 'required');
		$this->load->model('loginmodel');
		if ($this->form_validation->run()) {
			$post = $this->input->post();
			$teampost = $this->loginmodel->createTeam($post);
			if ($teampost) {
				$this->session->set_flashdata('meta', "Team created successfully!!!");
				$this->session->set_flashdata('meta_class', "alert-success");
				$this->load->view('createTeam.php');
			} else {
				$this->session->set_flashdata('meta', "Team already created");
				$this->session->set_flashdata('meta_class', "alert-danger");
				$this->load->view('createTeam.php');
			}
		} else {
			$this->load->view('createTeam.php');
		}
	}
	public function addTeam()
	{
		$this->form_validation->set_rules('name', 'Full name', '');
		$this->form_validation->set_rules('email', 'Email address', 'required|valid_email');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|max_length[10]');
		$this->load->model('loginmodel');
		if ($this->form_validation->run()) {
			$email = $this->input->post('email');
			$mobile = $this->input->post('mobile');
			$login = $this->loginmodel->addTeamMember($email, $mobile);
			if ($login) {
				$this->load->model('loginmodel');
				$loadData = (array) $login;
				$memberName = $loadData['name'];
				$memberEmail = $loadData['email'];
				$mobile = $loadData['mobile'];
				$teamleader_id = $loadData['id'];
				$image_path=$loadData['image_path'];
				$q = $this->db->where('memberEmail', $email)
					->get('addteammember');
				if ($q->num_rows()) {
					$this->session->set_flashdata('msg', "User already added");
					$this->session->set_flashdata('dc', "alert-danger");
					$this->load->view('addTeam.php');
				} else {
					$inserttable = $this->loginmodel->insertAddTeamMember($memberName, $memberEmail, $mobile, $teamleader_id, $image_path);
					if ($inserttable) {
						$this->session->set_flashdata('msg', "User added sucessfully");
						$this->session->set_flashdata('dc', "alert-success"); 
						$this->load->view('addTeam.php');
					} else {
						$this->session->set_flashdata('msg', "Something happens unexpected!");
						$this->session->set_flashdata('dc', "alert-danger");
						$this->load->view('addTeam.php');
					}
				}
			} else {
				$this->session->set_flashdata('msg', "User not exists, Please create user account");
				$this->session->set_flashdata('dc', "alert-danger");
				$this->load->view('addTeam.php');
			}
		} else {
			$this->load->view('addTeam.php');
		}
	}
	public function manageTeam()
	{
		$this->load->model('loginmodel');
		$var = $this->loginmodel->selectTeam();
		$this->load->view('manageTeam.php', ['var' => $var]);
	}
	public function edituser()
	{
		$this->session->set_flashdata('editable', 'Editing is not allowed here!');
		$this->session->set_flashdata('editable_class', "alert-danger");
		return  redirect('Welcome/manageTeam');
	}
	public function pm()
	{
		$this->load->view('project-management');
	}
	public function deleteuser()
	{
		$id = $this->input->post('id');
		$this->load->model('loginmodel', 'delarticle');
		if ($this->delarticle->del($id)) {
			$this->session->set_flashdata('editable', "Team member deleted successfully!!!");
			$this->session->set_flashdata('editable_class', "alert-success");
		} else {
			$this->session->set_flashdata('editable', "Please try again, something unexpected!");
			$this->session->set_flashdata('editable_class', "alert-danger");
		}
		return  redirect('Welcome/manageTeam');
	}
/**  ------------------  Add Event module  ----------------------------*/
	public function AddEvent()
	{
		$this->form_validation->set_rules('name', 'Event name', 'required|is_unique[addEvent.name]');
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('about', 'About', 'required'); 
		$this->load->model('loginmodel');

		$config=[
			'upload_path'=>'./eventpicUpload/',
			'allowed_types'=>'jpeg|jpg|png'
		];
		$this->load->library('upload',$config);
  
			$post = $this->input->post(); 
			$data=$this->upload->data();
				
				$image_path=base_url("eventpicUpload/".$data['raw_name'].$data['file_ext']); 
				$post['image_path']=$image_path; 
		if ($this->form_validation->run() && $this->upload->do_upload()) {
			$post = $this->input->post();
			 
			$add = $this->loginmodel->addEvent($post);
			if ($add) {
				$this->session->set_flashdata('meta', "Event added successfully:)");
				$this->session->set_flashdata('meta_class', "alert-success");
				$this->load->view('addEvent.php');
			} else {
				$this->session->set_flashdata('meta', "Something went wrong:(");
				$this->session->set_flashdata('meta_class', "alert-danger");
				$this->load->view('addEvent.php');
			}
		} else {
			$this->load->view('addEvent.php');
		}
	}
public function contactus(){
	$this->load->view('contactus.php');
}
	public function participation(){
		$this->load->model('loginmodel');
		$data=$this->loginmodel->show_event();
		 
		$this->load->view('student-browse-courses.php',['data'=>$data]); 
	}
	public function register_contest(){
				$this->load->model('loginmodel'); 
				 $id=$this->input->post('id'); 
				$event_data=$this->loginmodel->show_data($id); 
				$student_id=$this->session->userdata('id'); 
				$student_data=$this->loginmodel->find_student($student_id);
			$student_id=$student_data->id;
			$student_name=$student_data->name;
			$student_course= $student_data->course;
			// Event_details:---
			$event_id=$event_data->id;
			$event_name= $event_data->name;
			$event_category= $event_data->category;
			$event_faculty_id=$event_data->faculty_id;

			$insert = array("student_id"=>$student_id, 
			"student_name"=>$student_name,
			"student_course"=>	$student_course,
			"event_id"=>$event_id,
			"event_name"=>$event_name,
			 "event_category"=>$event_category,
			 "event_faculty_id"=>$event_faculty_id
		); 
	   $recieved= $this->loginmodel->insert_data($insert); 
			redirect('welcome/participation');
	}
	public function msg(){
		$this->load->view('instructor-messages.php');	 
	}
	public function sort(){
		$this->load->model('loginmodel'); 
			$data=$this->loginmodel->sort();
			$this->load->view('student-dashboard.php',['data'=>$data]);
	}
					public function participation_data(){
						$this->load->model('loginmodel');
						$data=$this->loginmodel->fetchData(); 
						$this->load->view('fetch_stu_data.php',['data'=>$data]);
					}
					public function fetch(){
					$this->load->view('fetch_stu_data.php');
					}
					public function event_complete_details(){
				 $event_name=$this->input->post('event_name');  
				$sql=$this->loginmodel->event_complete_details($event_name); 
				 
						$this->load->view('event_complete_details',['sql'=>$sql]);
					}

}
 