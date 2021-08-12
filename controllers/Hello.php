<?php 

class Hello extends CI_Controller
{
	
    public function __construct()
	{
	parent::__construct();
	
	$this->load->database();

	$this->load->helper('url');
	
	$this->load->model('Hello_Model');
	}

	public function index()
	{
		
	}


	public function dispdata()
	{
		$result['data']=$this->Hello_Model->displayrecords();
		$this->load->view('registration',$result);
	}

	   function savingdata()  
    {  
        //this array is used to get fetch data from the view page.  
        $data = array(  
                        'name'     => $this->input->post('name'),   
                        'email'   => $this->input->post('email'),  
                        'mobile' => $this->input->post('mobile'),
                        'gender' => $this->input->post('gender'),
                        'hobbies' => $this->input->post('hobbies'), 
                        'address' => $this->input->post('address'), 
                         'city' => $this->input->post('city'), 
                        'avtar' => $this->input->post('avtar'), 
                     );  
        //insert data into database table.  
        $this->db->insert('users',$data);  
  
        redirect("Hello/dispdata");  
    }  

    public function updatedata()
    {
    	$id=$this->input->get('id');
    	$result['data']=$this->Hello_Model->displayrecordsById($id);
    	$this->load->view('update_records',$result);
    	if($this->input->post('update'))
      {
        $n=$this->input->post('name');
         $e=$this->input->post('email');
         $m=$this->input->post('mobile');
         $g=$this->input->post('gender');
         $h=$this->input->post('hobbies');
          $a=$this->input->post('address');
           $c=$this->input->post('city');
            $i=$this->input->post('avtar');

         $this->Hello_Model->updaterecords($n,$e,$m,$g,$h,$a,$c,$i);
         redirect("Hello/dispdata");

        }
     }

     public function deletedata()
     {
        $id=$this->input->get('id');
        $this->Hello_Model->deleterecords($id);
        redirect("Hello/dispdata");

	}
    public function create()
    {
        $this->load->view('display');
    }

  }




?>