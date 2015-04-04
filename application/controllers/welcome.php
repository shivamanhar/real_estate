<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Welcome extends CI_Controller 
{

	/**
	 * Index Page for this controller.
	 * Author: Shiva Manhar
	 * Descripation: 	welcome class is base controller in this real estate application 
	 *			It is simple inventory application here add customer detail and EMI alert
	 *			and management of customer.
	 */
	public function __construct()
	{
		 parent::__construct();
		 $this->load->model('m_logic');
	}
	public function index()
	{
		$this->entry_form();
	}
	//inventory entry form display
	public function entry_form()
	{
		$data['page'] = 'entry_form';
		$data['title'] = 'Entry Form';
		$this->load->view('template/contant', $data);
	}
	//inventory data save in data base
	//check here form validation
	
	public function form_insert()
	{
		
		$this->form_validation->set_rules('name', 'Name', 'required|trim|strtolower');
		$this->form_validation->set_rules('plot_area', 'Plot Area', 'required|numeric|trim');
		$this->form_validation->set_rules('rakba', 'Rakba', 'required|numeric|trim');
		$this->form_validation->set_rules('face', 'face', 'required|trim');
		$this->form_validation->set_rules('booking_amount', 'Booking Amount', 'required|trim|numeric');
		$this->form_validation->set_rules('owner_name', 'Owner Name', 'required|trim');
		$this->form_validation->set_rules('father_name', 'Father Name', 'required|trim');
		$this->form_validation->set_rules('address', 'Address', 'required|trim');
		$this->form_validation->set_rules('mobile_no', 'mobile_no', 'required|integer|trim|max_length[10]');
		$this->form_validation->set_rules('owner_rakba', 'owner_rakba', 'required|numeric|trim');
		$this->form_validation->set_rules('project_name', 'project_name', 'required|trim');
		$this->form_validation->set_rules('booking_date', 'booking_date', 'required|trim');
		$this->form_validation->set_rules('registration_date', 'registration_date', 'required|trim');
		$this->form_validation->set_rules('posesion_date', 'posesion_date', 'required|trim');
		$this->form_validation->set_rules('pramanikarna_date', 'pramanikarna_date', 'required|trim');
		
		if($this->form_validation->run() == false)
		{
			$this->load->view('entry_form');
		}
		else
		{
			$data = array(
					'name' => $this->input->post('name'),
					'plot_area' => $this->input->post('plot_area'),
					'rakba' => $this->input->post('rakba'),
					'face' => $this->input->post('face'),
					'booking_amount' => $this->input->post('booking_amount'),
					'owner_name' => $this->input->post('owner_name'),
					'father_name' => $this->input->post('father_name'),
					'address' => $this->input->post('address'),
					'mobile_no' => $this->input->post('mobile_no'),
					'owner_rakba' => $this->input->post('owner_rakba'),
					'project_name' => $this->input->post('project_name'),
					'booking_date' => strtotime($this->input->post('booking_date')),
					'registration_date' => strtotime($this->input->post('registration_date')),
					'posesion_date' => strtotime($this->input->post('posesion_date')),
					'pramanikarna_date' => strtotime($this->input->post('pramanikarna_date'))
				     );
			
			$insert_id = $this->m_logic->db_insert('info_form', $data);
			 $url = base_url();
			redirect($url.'welcome/successful_insert/'.$insert_id, 'refresh');
		}
	}
	//successful enter data
	public function successful_insert($insert_id = NULL)
	{
		
		$data['info_form'] = $this->m_logic->db_where('info_form', 'id',$insert_id);
		$data['page'] = 'insert_data';
		$data['title'] = 'Successful Insert';
		$this->load->view('template/contant', $data);
	}
	//function for payment
	public function payment($customer = NULL)
	{
		$data['page'] = 'payment';
		$data['title'] = 'Customer payment record';
		$data['info_form'] = $this->m_logic->db_where('info_form', 'id',$customer);
		$this->load->view('template/contant', $data);
	}
	public function report($customer = NULL)
	{
		$data['page'] = 'customer';
		$data['title'] = 'Report';
		$data['customer'] = $this->m_logic->db_like('info_form', 'name', $customer);
		$this->load->view('template/contant', $data);
	}
	public function get_customer($customer_id = 'NULL')
	{
			
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */