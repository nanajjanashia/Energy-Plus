<?php 

class Admin extends MY_Controller 
{	
	function __constract()
	{
		parent::__constract();
	}
	
    function logged_in()
    {
      if ($this->session->userdata('level')==1){
        return true;
	}else {
		$this->load->view('admin/header');
		$this->load->view('admin/login');
		$this->load->view('admin/footer');	
		}
    }
	
	function index($category = null )	
	{
	  if (!$this->logged_in())return false;
		$this->load->model('admin_model');
		$this->data["logoes"] = $this->admin_model->getLogoes( $_POST );
		$this->data["worktime"] = $this->admin_model->getworkTimes( $_POST );
		$this->data["mainhead"] = $this->admin_model->getMain( $_POST );
		
		$this->load->view('admin/pages/header', $this->data);
		$this->load->view('admin/pages/sidebar', $this->data);
		$this->load->view('admin/pages/home', $this->data);
		$this->load->view('admin/pages/footer', $this->data);		
	}
	
	public function changeLogo()
	{
		if (!$this->logged_in())return false;
		$this->load->model('admin_model');
		$result = $this->admin_model->changeLogo( $_POST );
		
		if( $result ){
			echo 'Updated';
		}
		else 
			echo 'Failed';
	}
	
	public function updateWorkTime()
	{
		if (!$this->logged_in())return false;
		$this->load->model('admin_model');
		$result = $this->admin_model->updateWorkTime( $_POST );
		
		if( $result ){
			echo 'Updated';
		}
		else 
			echo 'Failed';
	}
	
	public function updateMain()
	{
		if (!$this->logged_in())return false;
		$this->load->model('admin_model');
		$result = $this->admin_model->updateMain( $_POST );
		
		if( $result ){
			echo 'Updated';
		}
		else 
			echo 'Failed';
	}
	
	public function login()
	{			
	
		$rules = array(	"email" => array( "field" => "email", "label" => "email", "rules" => "required|trim" ),
						"password" => array( "field" => "password", "label" => "password", "rules" => "required" )	);
						
			$this->form_validation->set_message('required', 'ველის შევსება აუცილებელია');
			$this->form_validation->set_rules($rules);

			if( $this->form_validation->run() != true )
			{
				die(json_encode(array(	
					"code" => 0,
					"text" => "ყველა ველის შევსება სავალდებულოა"
			    )));
			} 
			else{

				$ip = $_SERVER["REMOTE_ADDR"];
				$input = $this->input->post("email");    
				
					
				$checking = $this->db->where('ip', $ip)->get('checklogin');
														
				if($checking->num_rows() == 0){
					$data = array(
					   'ip' => $ip,
					   'user' => mysql_real_escape_string(addslashes(strip_tags($input))),
					   'time' => date('Y-m-d H:i:s'),
					   'cda' => 0
					);
					$this->db->insert('checklogin', $data); 						
				}		

					$checking = $this->db->where('ip', $ip)->get('checklogin');
							
					$get = $checking->row_array();
					$sulCda = $get['cda'] + 1;
							
					$last = strtotime($get['time']);
					$now = strtotime(date('Y-m-d H:i:s', strtotime("-1 hours")));
							
					if($sulCda > 3 && ($now < $last)){
						   die(json_encode(array(
										"code" => 3,
										"text" => "3-ჯერ არასწორი პაროლი. თქვენ ვერ შეხვალთ 1 საათის განმავლობაში"
								   )));
					}
								
					$data = array(
					   'user' => mysql_real_escape_string(addslashes(strip_tags($input))),
					   'time' => date('Y-m-d H:i:s'),
					   'cda' => $sulCda
					);
								
					$this->db
							->where('id', $get['id'])
							->update('checklogin', $data); 	
						
					$password = md5($this->input->post("password")); 
					$this->load->helper("email");
					 $sql = "SELECT * FROM `users` WHERE `email` = '".mysql_real_escape_string(addslashes(strip_tags($input)))."' ";
					$sql = $this->db->query($sql) or die(mysql_error());

                    if( $sql->num_rows() > 0 )
                    {							
							foreach($sql->result() as $data)
							{
									$chemiid= $data->id;
									$db_password = $data->password;
									$db_email    = $data->email;
									$name        = $data->name;
									$level       = (int)$data->level;
							}
							if( $password == $db_password )
							{
									$this->session->set_userdata("logged_in", true);
									$this->session->set_userdata("userid", $chemiid);
									$this->session->set_userdata("email", $db_email);
									$this->session->set_userdata("level", $level);
									$this->session->set_userdata("name", $name);
									$this->session->set_flashdata("notification", "წარმატებული შესვლა $db_email");
							
							    $data = array( 'cda' => 0 );								
								$this->db->where('id', $get['id'])->update('checklogin', $data); 	
															
									   die(json_encode(array(
										"code" => 1,
										"text" => "წარმატებული შესვლა",
										"user" => $db_email
								   )));
								   											
							} else {
								   die(json_encode(array(
										"code" => 3,
										"text" => "პაროლი არასწორია"
								   )));
							}
						
                    } else {
						die(json_encode(array( "code" => 2, "text" => "მეილი არასწორია" )));
					}
			}		
	}
	
	
	function products()	
	{
	  if (!$this->logged_in())return false;
	  
			$this->load->model('admin_model');
			$this->data['products'] = $this->admin_model->getProducts();
			$this->data['prmain'] = $this->admin_model->getPrMain();
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/products', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	function widgets()	
	{
	  if (!$this->logged_in())return false;
	  
			$this->load->model('admin_model');
			$this->data['widgets'] = $this->admin_model->getWidgets();
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/widgets', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	public function editWidget( $id=null )	
	{
	  if (!$this->logged_in())return false;
			
			$this->load->model('admin_model');
			$this->data['widget'] = $this->admin_model->editWidget( $id );
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/editWidget', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	public function updateWidget()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->updateWidget( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
	function addWidget()	
	{
	  if (!$this->logged_in())return false;
			
		$this->load->view('admin/pages/header', $this->data);
		$this->load->view('admin/pages/sidebar', $this->data);
		$this->load->view('admin/pages/addWidget', $this->data);
		$this->load->view('admin/pages/footer', $this->data);		
	}
	
	public function saveWidget()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->insertWidget( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
		
	public function deleteWidget( $id = null )
	{
		if (!$this->logged_in())return false;
		
			if (!ctype_digit($id)) {
				echo "Invalid Argument Supplied";
			}
			
			$lang = $this->lang->lang();
			
			$this->load->model('admin_model');
			$result = $this->admin_model->deleteWidget( $id );
					
			if( $result ){
				Redirect(base_url()."/".$lang."/admin/widgets", false);
			}
			else echo 'Fail';		
	}
	
	public function editProduct( $id=null )	
	{
	  if (!$this->logged_in())return false;
			
			$this->load->model('admin_model');
			$this->data['product'] = $this->admin_model->getProduct( $id );
			$this->data['maincategory'] = $this->admin_model->getMainCategory();
			$this->data['subcategory'] = $this->admin_model->getSubCategory();
			$this->data['category'] = $this->admin_model->getCategory( $id );
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/editProduct', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	function addProduct()	
	{
	  if (!$this->logged_in())return false;
	  
			$this->load->model('admin_model');
			$this->data['maincategory'] = $this->admin_model->getMainCategory();
			$this->data['subcategory'] = $this->admin_model->getSubCategory();
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/addProduct', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
		
	function addMainCategory()	
	{
	  if (!$this->logged_in())return false;
	  
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/addMainCategory', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	function addSubCategory()	
	{
	  if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$this->data["category"] = $this->admin_model->getMainCategory( $_POST );
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/addSubCategory', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	public function saveMainCategory()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->saveMainCategory( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
	public function saveSubCategory()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->saveSubCategory( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}

	public function saveProduct()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->insertProduct( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
	public function updateProduct()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->updateProduct( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
	public function deleteProduct( $id = null )
	{
		if (!$this->logged_in())return false;
		
			if (!ctype_digit($id)) {
				echo "Invalid Argument Supplied";
			}
			
			$lang = $this->lang->lang();
			
			$this->load->model('admin_model');
			$result = $this->admin_model->deleteProduct( $id );
					
			if( $result ){
				Redirect(base_url()."/".$lang."/admin/products", false);
			}
			else echo 'Fail';		
	}
	
	function terms()	
	{
	  if (!$this->logged_in())return false;	  
			$this->load->model('admin_model');
			$this->data['faqs'] = $this->admin_model->getFaqs();
						
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/terms', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	function addFaqs()	
	{
	  if (!$this->logged_in())return false;	  		
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/addFaqs', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	public function saveFAQS()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->insertFAQS( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
	public function allFaqs()	
	{
	  if (!$this->logged_in())return false;	  		
			$this->load->model('admin_model');
			$this->data['allfaqs'] = $this->admin_model->getFaqs();
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/allFaqs', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	public function editFaqs($id=null)	
	{
	  if (!$this->logged_in())return false;	  		
			$this->load->model('admin_model');
			$this->data['cteditfaqs'] = $this->admin_model->getFaqsByOne($id);
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/editFaqs', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	
	public function deleteFAQS( $id = null )
	{
		if (!$this->logged_in())return false;		
			if (!ctype_digit($id)) {
				echo "Invalid Argument Supplied";
			}			
			$lang = $this->lang->lang();
			
			$this->load->model('admin_model');
			$result = $this->admin_model->deleteFAQS( $id );
					
			if( $result ){
				Redirect(base_url()."/".$lang."/admin/terms", false);
			}
			else echo 'Fail';		
	}
		
	public function searchFAQS()
	{
		if (!$this->logged_in())return false;
		$lang = $this->lang->lang();
			$this->load->model('admin_model');
			$result = $this->admin_model->searchFAQS( $_POST );
			$str = "";
			if( $result ){
				$str.='
                <thead>
                <tr>
                  <th>#</th>
                  <th>კითხვა/სათაური ქართულად</th>
				  <th>კითხვა/სათაური ინგლისურად</th>
				  <th></th>	
				  <th><a class="btn btn-success" href="'.base_url().'/'.$lang.'/admin/addQT"><i class="fa fa-plus-circle"></i> დამატება</a></th>				  
                </tr>
                </thead>
                <tbody>';				
				
						$url = base_url().'/'.$lang;
						$i = 1;
						foreach( $result as $k=>$v )
						{
							$str.= '
								 <tr>
								  <td>'.$i.'</td>
								  <td>'.$v["titlege"].'</td>
								  <td>'.$v["titleen"].'</td>							  
								  <td><a class="btn btn-warning" href="'.$url.'/admin/editQT/'.$v["id"].'"><i class="fa fa-edit"></i> რედაქტირება</a></td>
								  <td><a class="btn btn-danger delete-button" onclick="return confirm(\'ნამდვილად გსურთ წაშლა?\');" href="'.$url.'/admin/deleteQT/'.$v["id"].'"><i class="	fa fa-remove"></i> წაშლა</a></td>
								</tr>
							';
							$i++;
						}	
             
               $str.='</tbody>               
              ';
				echo  $str;
			}
			else 
			{
				$str.='<br><p style="color:red">ჩანაწერები არ მოიძებნა</p><br><a class="btn btn-success" href="'.base_url().'/'.$lang.'/admin/addQT"><i class="fa fa-plus-circle"></i> დამატება</a><br>';
				echo  $str;
			}
	}
	
	public function addQT($id=null)	
	{
	  if (!$this->logged_in())return false;
		$this->load->model('admin_model');
		$this->data['allfaqs'] = $this->admin_model->getFaqs();
			
		$this->load->view('admin/pages/header', $this->data);
		$this->load->view('admin/pages/sidebar', $this->data);
		$this->load->view('admin/pages/addQT', $this->data);
		$this->load->view('admin/pages/footer', $this->data);		
	}
	
	public function saveQT()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->insertQT( $_POST );			
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
	public function editQT($id=null)	
	{
	  if (!$this->logged_in())return false;
	    $this->load->model('admin_model');
	    $this->data["qts"] = $this->admin_model->editQT($id);
		$this->data['allfaqs'] = $this->admin_model->getFaqs();
		
		$this->load->view('admin/pages/header', $this->data);
		$this->load->view('admin/pages/sidebar', $this->data);
		$this->load->view('admin/pages/editQT', $this->data);
		$this->load->view('admin/pages/footer', $this->data);		
	}
	
	public function updateQT()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->updateQT( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
	public function deleteQT( $id = null )
	{
		if (!$this->logged_in())return false;		
			if (!ctype_digit($id)) {
				echo "Invalid Argument Supplied";
			}			
			$lang = $this->lang->lang();
			
			$this->load->model('admin_model');
			$result = $this->admin_model->deleteQT( $id );
					
			if( $result ){
				Redirect(base_url()."/".$lang."/admin/terms", false);
			}
			else echo 'Fail';		
	}
	
	public function updateFaqs()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->updateFaqs( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
	public function icons()	
	{
	  if (!$this->logged_in())return false;	  
			$this->load->model('admin_model');
			$this->data['icons'] = $this->admin_model->getIcons();
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/icons', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	public function editIcons($id=null)	
	{
	  if (!$this->logged_in())return false;
	    $this->load->model('admin_model');
	    $this->data["icon"] = $this->admin_model->getIcon($id);
		
		$this->load->view('admin/pages/header', $this->data);
		$this->load->view('admin/pages/sidebar', $this->data);
		$this->load->view('admin/pages/editIcon', $this->data);
		$this->load->view('admin/pages/footer', $this->data);		
	}
	
	public function updateIcon()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->updateIcon( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
	function addIcon($id=null)	
	{
	  if (!$this->logged_in())return false;
		
		$this->load->view('admin/pages/header', $this->data);
		$this->load->view('admin/pages/sidebar', $this->data);
		$this->load->view('admin/pages/addIcon', $this->data);
		$this->load->view('admin/pages/footer', $this->data);		
	}
	
	public function saveIcon()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->insertIcon( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
	public function deleteIcon( $id = null )
	{
		if (!$this->logged_in())return false;		
			if (!ctype_digit($id)) {
				echo "Invalid Argument Supplied";
			}			
			$lang = $this->lang->lang();
			
			$this->load->model('admin_model');
			$result = $this->admin_model->deleteIcon( $id );
					
			if( $result ){
				Redirect(base_url()."/".$lang."/admin/icons", false);
			}
			else echo 'Fail';		
	}
	
	
	function socialIcons()	
	{
	  if (!$this->logged_in())return false;	  
			$this->load->model('admin_model');
			$this->data['socicons'] = $this->admin_model->getSocIcons();
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/socialIcons', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	function editSocIcon($id=null)	
	{
	  if (!$this->logged_in())return false;
	    $this->load->model('admin_model');
	    $this->data["socicon"] = $this->admin_model->getSocIcon($id);
		
		$this->load->view('admin/pages/header', $this->data);
		$this->load->view('admin/pages/sidebar', $this->data);
		$this->load->view('admin/pages/editSocIcon', $this->data);
		$this->load->view('admin/pages/footer', $this->data);		
	}
	
	public function updateSocIcon()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->updateSocIcon( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
	public function deleteSocIcon( $id = null )
	{
		if (!$this->logged_in())return false;		
			if (!ctype_digit($id)) {
				echo "Invalid Argument Supplied";
			}			
			$lang = $this->lang->lang();
			
			$this->load->model('admin_model');
			$result = $this->admin_model->deleteSocIcon( $id );
					
			if( $result ){
				Redirect(base_url()."/".$lang."/admin/socialIcons", false);
			}
			else echo 'Fail';		
	}
	
	function services()	
	{
	  if (!$this->logged_in())return false;	  
			$this->load->model('admin_model');
			$this->data['services'] = $this->admin_model->getServices();
			$this->data['servmain'] = $this->admin_model->getServMainText();
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/services', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	public function updateServText()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->updateServText( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
	public function updatePrText()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->updatePrText( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
	function addService()	
	{
	  if (!$this->logged_in())return false;
	  
			$this->load->model('admin_model');
			$this->data['servicecategory'] = $this->admin_model->getServiceCategory();
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/addService', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	function editMainCategory()	
	{
	  if (!$this->logged_in())return false;
	    $this->load->model('admin_model');
	    $this->data["maincats"] = $this->admin_model->getMainCategory();
		
		$this->load->view('admin/pages/header', $this->data);
		$this->load->view('admin/pages/sidebar', $this->data);
		$this->load->view('admin/pages/editMainCategory', $this->data);
		$this->load->view('admin/pages/footer', $this->data);		
	}
	
	function editSubCategory()	
	{
	  if (!$this->logged_in())return false;
	    $this->load->model('admin_model');
	    $this->data["subcats"] = $this->admin_model->getFullSubCategories();
		
		$this->load->view('admin/pages/header', $this->data);
		$this->load->view('admin/pages/sidebar', $this->data);
		$this->load->view('admin/pages/editSubCategory', $this->data);
		$this->load->view('admin/pages/footer', $this->data);		
	}
	
	function addServiceCategory()	
	{
	  if (!$this->logged_in())return false;
	  
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/addServiceCategory', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}

	public function saveServiceCategory()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->saveServiceCategory( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}	
	
	public function updateServiceCategory()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->updateServiceCategory( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
	public function updateMainCategory()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->updateMainCategory( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
		
	public function updateSubCategory()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->updateSubCategory( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
	public function deleteServiceCategory( $id=null )
	{
		if (!$this->logged_in())return false;		
			if (!ctype_digit($id)) {
				echo "Invalid Argument Supplied";
			}			
			$lang = $this->lang->lang();			
			$this->load->model('admin_model');
			$result = $this->admin_model->deleteServiceCategory( $id );
					
			if( $result ){
				Redirect(base_url()."/".$lang."/admin/editServiceCategory", false);
			}
			else echo 'Fail';		
	}
	
	public function deleteMainCategory( $id=null )
	{
		if (!$this->logged_in())return false;		
			if (!ctype_digit($id)) {
				echo "Invalid Argument Supplied";
			}			
			$lang = $this->lang->lang();			
			$this->load->model('admin_model');
			$result = $this->admin_model->deleteMainCategory( $id );
					
			if( $result ){
				Redirect(base_url()."/".$lang."/admin/editServiceCategory", false);
			}
			else echo 'Fail';		
	}
	
	public function deleteSubCategory( $id=null )
	{
		if (!$this->logged_in())return false;		
			if (!ctype_digit($id)) {
				echo "Invalid Argument Supplied";
			}			
			$lang = $this->lang->lang();			
			$this->load->model('admin_model');
			$result = $this->admin_model->deleteSubCategory( $id );
					
			if( $result ){
				Redirect(base_url()."/".$lang."/admin/editSubCategory", false);
			}
			else echo 'Fail';		
	}
	
	public function saveService()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->insertService( $_POST );
			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
	public function editService( $id=null )	
	{
	  if (!$this->logged_in())return false;
			
			$this->load->model('admin_model');
			$this->data['service'] = $this->admin_model->getService( $id );
			$this->data['category'] = $this->admin_model->getServiceCategory();
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/editService', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	public function updateService()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->updateService( $_POST );			
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
	public function deleteService( $id = null )
	{
		if (!$this->logged_in())return false;		
			if (!ctype_digit($id)) {
				echo "Invalid Argument Supplied";
			}			
			$lang = $this->lang->lang();
			
			$this->load->model('admin_model');
			$result = $this->admin_model->deleteService( $id );
					
			if( $result ){
				Redirect(base_url()."/".$lang."/admin/services", false);
			}
			else echo 'Fail';		
	}
	
	
	public function editServiceCategory()	
	{
	  if (!$this->logged_in())return false;
	  
			$this->load->model('admin_model');
			$this->data['servcats'] = $this->admin_model->getServiceCategory();
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/editServiceCategory', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	public function editSingeServiceCategory( $id=null )	
	{
	  if (!$this->logged_in())return false;	  
			$this->load->model('admin_model');
			$this->data['servcatssingle'] = $this->admin_model->getSingeServiceCategory($id);
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/editSingeServiceCategory', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}

	public function editSingeMainCategory( $id=null )	
	{
	  if (!$this->logged_in())return false;	  
			$this->load->model('admin_model');
			$this->data['maincat'] = $this->admin_model->getSingeMainCategory($id);
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/editSingeMainCategory', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	public function editSingeSubCategory( $id=null )	
	{
	  if (!$this->logged_in())return false;	  
			$this->load->model('admin_model');
			$this->data['subcat'] = $this->admin_model->getSingeSubCategory($id);
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/editSingleSubCategory', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	
	
	public function about($category = null )	
	{
	  if (!$this->logged_in())return false;
	  
			$this->load->model('admin_model');
			$this->data['about'] = $this->admin_model->getAbout();
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/about', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	
	public function updateAbout()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->updateAbout( $_POST );
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
	public function contact($category = null )	
	{
	    if (!$this->logged_in())return false;
	  
			$this->load->model('admin_model');
			$this->data['contact'] = $this->admin_model->getContact();
			
			$this->load->view('admin/pages/header', $this->data);
			$this->load->view('admin/pages/sidebar', $this->data);
			$this->load->view('admin/pages/contact', $this->data);
			$this->load->view('admin/pages/footer', $this->data);		
	}
	
	public function updateContact()
	{
		if (!$this->logged_in())return false;
			$this->load->model('admin_model');
			$result = $this->admin_model->updateContact( $_POST );
			if( $result ){
				echo 'Updated';
			}
			else 
				echo 'Failed';
	}
	
		
	public function signout()
	{
		if (!$this->logged_in())return false;
		$lang = $this->lang->lang();
		$this->session->unset_userdata('userid');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('name');
		
		Redirect(base_url()."".$lang."/admin", false);
					
	}
	
}