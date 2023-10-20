<?php
class loginmodel extends CI_Model
 {  
    public function selectTeam(){
        $q=$this->db->select()
                    ->from('addteammember')
                     ->get();
                  return $q->result();
          }
  
          public function del($id){
             return $this->db->delete('addteammember',['teamleader_id'=>$id]); 
        } 
                    public function createTeam($post){ 
                     $login= $post['loginId'];  
                       $q=$this->db->query("Select * from createteam where `login_id`='$login'") ;
                       if($q->num_rows()){ 
                        echo "Already data here" ;
                        return false; 
                       }        
                       else{
                        $name=$post['name'];
                        $teamSize= $post['teamSize'];
                       $teamDescription=$post['teamDescription']; 
                    $sql=$this->db->query("INSERT INTO `createteam`( `name`, `teamSize`, `teamDescription`, `login_id`) VALUES ('$name','$teamSize','$teamDescription','$login')");
                       if($sql){
                        return true;
                   }
                         
                    }
                }

        public function isvalidate($username,$password)
        {
            $q=$this->db->where(['email'=>$username,'password'=>$password])
                        ->get('student_data'); 
                    if($q->num_rows()){ 
                        return ($q->row());
                    }
                    else{
                        return false;
                    }
        }
        // faculty login
        public function isvalidateLoginFaculty($username,$password)
        {
            $q=$this->db->where(['email'=>$username,'password'=>$password])
                        ->get('facultyLogin'); 
                    if($q->num_rows()){ 
                        return ($q->row());
                    }
                    else{
                        return false;
                    }
        }

        public function add_user($array){
            return $this->db->insert('student_data', $array);
        }
        public function  addTeamMember($email,$mobile){  
                    $q=$this->db->where(['email'=> $email,'mobile'=>$mobile])
                                ->get('Student_data'); 
                    if($q->num_rows()){ 
                        return ($q->row());
                    }
                    else{ 
                       return false;   
                    }   
        }

      //table data insert in addTeamMember
      public function  insertAddTeamMember($memberName,$memberEmail,$mobile,$teamleader_id,$image_path){ 
     if($this->db->query("INSERT INTO `addteammember`( `memberName`, `memberEmail`, `mobile`, `teamleader_id`, `image_path`) VALUES ('$memberName','$memberEmail','$mobile','$teamleader_id','$image_path')")){
        return true;
     }
     else{
        return false;
     }
      } 
        public function participate_event($student_id){
            $sql=$this->db->where(['student_id'=>$student_id ])
                        ->from('participate_event')
                        ->get();
                        return $sql->result();
        }
      public function Addevent($array){
        return $this->db->insert('addevent', $array);
    }
    public function show_event(){
            $q=$this->db->select()
                        ->from('addevent')
                        ->get(); 
                      return $q->result();
              }   
              public function show_data($id){ 
                $q=$this->db->where(['id'=>$id])
                            ->get('addevent');  
                             return $q->row();
                              
                  }   
                  public function find_student($id){
                    $q=$this->db->where(['id'=>$id])
                    ->get('student_data');  
                     return $q->row();
                  }
                public function  insert_data($insert){
                   $student_id=$insert['student_id'];
                   
            $sql=$this->db->query("SELECT * FROM `participate_event` WHERE `student_id`='$student_id'");
                   if(!$sql){
                       echo "Something went wrong";
                   }
                   else{
                    return $this->db->insert('participate_event', $insert);
                }
            }
                public function sort(){
            $this->db->select('*');
$this->db->from('addevent');
$this->db->order_by('name');
$query = $this->db->get();
return $query->result();
      }
     public function fetchData(){
                $fetch=$this->db->query("SELECT * FROM `participate_event` ;");
                return $fetch->result();
      }


      public function all_articles_count(){
          $q=$this->db->select()
                      ->from('addevent')
                      ->get();
                    return $q->num_rows();
      }
      public function all_articleslist($limit,$offset){
        $query=$this->db->select()
                    ->from('addevent')
                    ->limit($limit,$offset)
                    ->get();
                    return $query->result();
      }
 

      public function insert_json_in_db($json_data){
        $this->db->insert('employee_info',$json_data);
        if($this->db->affected_rows()>0){
            return true;
        }
        else{ return false; }
      }

      function is_email_available($email){
        $this->db->where('email',$email);
        $query=$this->db->get("register");
        if($query->num_rows()>0){
            return true;
        }
        else{
            return false;
        }
      }
            function event_complete_details($event_name){
               $q=$this->db->where('name',$event_name)
                        ->from('addevent')
                        ->get(); 
                        return $q->row();
            }

};
?>