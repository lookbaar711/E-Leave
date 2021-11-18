<?php
class EleaveApp {
	private $log;

	public function __construct() {
		//$this->log = $GLOBALS['log'];
	}
	
    public function handler($post) {
		//$this->log->info('Service', 'handler', 'input data', func_get_args());
		//$return = 'Invalid command';
		//$data = json_decode($message, TRUE);

		$data = $post;
		
        switch ($data['command']) {
            case '0100':
				$return = $this->login($data['username'],$data['password']);
				break;
			case '0200':
				$return = $this->logout($data['username']);
				break;



			case '2800':
				$return = $this->get_leave_type_list($data['company_id']);
				break;
		}
		


		return $return;
	}

	public function get_leave_type_list($company_id) {

		return $company_id;
		/*
		$obj_global = new GlobalConstant();		
		$obj_log = new LogFile();		
		$save_data_log = $_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"];

		$obj_class = new Connectdb($obj_global->getHOST_CMS(), $obj_global->getUSER_CMS() , $obj_global->getPWD_CMS(), "hr_leave",0,FALSE);
		$s_sql = "SELECT * from leave_type WHERE com_id_pk = ".$company_id." ORDER BY lt_id_pk ASC";
		$b_resp = $obj_class->selectproc($s_sql);
		$obj_log->savelog($save_data_log,"get_leave_type_list","sql=[$s_sql]");

		$datas = array();
		if ($b_resp && $obj_class->n_row>0) {
			for($i=0;$i<$obj_class->n_row;$i++){	
				$datas[$i]['lt_id_pk'] = $obj_class->getitem("lt_id_pk");
				$datas[$i]['lt_name'] = $obj_class->getitem("lt_name");
				$datas[$i]['com_id_pk'] = $obj_class->getitem("com_id_pk");

			    $obj_class->movenext();
			}
		}
		return $datas;
		*/
    }
}
?>