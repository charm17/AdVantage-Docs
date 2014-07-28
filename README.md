<?php if (!defined('BASEPATH')) die();

class Main extends Main_Controller {

   function __construct()
   {
      parent::__construct();
   }

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('frontpage');
      $this->load->view('include/footer');
	}

	public function page()
	{
      $this->load->library("form_validation");
		$this->load->view('pages/access/test2');
	}

   public function valid_mobile($str) //--> mobile validation if mobile starts to 63
   {
      $start = substr($str, 0, 2);
      // var_dump($start); --> check value inside $start
      if ($start == '63')
      {
         return TRUE;
      }
      else
      {
         return FALSE;
      }
   }

   function process_form()
   {
      $this->load->library("form_validation");
      $mn = $this->input->post('mobile_number');
      if ($mn && $this->valid_mobile($mn)) // --> check if there's input
     {
         $data = array(       // to insert data in dbase
               'mobile_number' => $mn // $mn is a variable for mobile_number
            );
         $this->db->insert('phonebook', $data);
         $this->load->view('pages/access/success');
      }
      else
      {
         $this->load->library("form_validation");

         $data['error'] = "Your mobile format should be 63 + 10 digits.";

         $this->load->view('pages/access/test2',$data); 
         // echo "Your mobile format should be 63 + 10 digits.";
      }
   }     

   // function test_db()
   // {
   //    $this->load->library("form_validation");
   //    $this->load->helper('date');
      
   //    $query = $this->db->query("INSERT into phonebook (mobile_number) VALUES (789489)");
   // }
}


/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */

