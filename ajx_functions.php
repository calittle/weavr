<?php 
	session_start();	

	require 'config.php';	
			
	// generic handler for PHP functions to be called on post.
	$par1 = isset($_POST['par1']) ? $_POST['par1'] : null;
	$par2 = isset($_POST['par2']) ? $_POST['par2'] : null;
	$par3 = isset($_POST['par3']) ? $_POST['par3'] : null;
	$par4 = isset($_POST['par4']) ? $_POST['par4'] : null;	
	$function  = isset($_POST['function']) ? $_POST['function'] : null;
	$results = null;
	
	error_log('Request Function:'.$function);
	
	switch ($function){
		case 'addrole':
			$results = userAddRole($par1,$par2);
			break;
		case 'revokerole':
			$results = userRevokeRole($par1,$par2);
			break;
		case 'approveregistrant':
			$results = registrantSetApproved($par1);
			break;
		case 'rejectregistrant':
			$results = registrantSetRejected($par1);
			break;
		case 'adddistricttoregistrant':
			$results = registrantSetDistrict($par1,$par2);
			break;
		case 'deletedistrictfromregistrant':
			$results = registrantUnsetDistrict($par1,$par2);
			break;
		case 'districtadd':
			$results = districtAdd($par1);
			break;
		case 'districtdelete':
			$results = districtDelete($par1);
			break;
		case 'districtupdate':
			$results = districtUpdate($par1,$par2);
			break;
		case 'setaffirmations':
			$results = registrantSetAffirmations($par1);			
			break;
		default:		
			$results = array();
			$results['function']= 'Unknown?';
			$results['success'] = false;
			$results['message'] = "Function not supported.";
			$results = json_encode($results);
			break;
	}
	// results hsould be JSON encoded by functions.
	echo $results;	
?>