<?php
$n =(isset($_GET['n'])) ? $_GET['n'] : 'home-n';
switch ($n) {
	case 'home-n':
		$n_title = 'Home: Client Support';
		$content_title = 'Client Support';
		$content_path = 'n/home.php';
		break;
	//Ticket ///////////////////////////////////////////////////////////////
	case 'add-ticket':
		$n_title = 'ticket: add ticket';
		$content_title = 'add ticket';
		$content_path = 'n/add-ticket.php';
		break;
	case 'ticket':
		$n_title = 'ticket: Support Ticket List';
		$content_title = 'Support Ticket List';
		$content_path = 'n/ticket.php';
		break;
	case 'ticketAction':
		$n_title = 'ticket n : Membership Application';
		$content_title = 'edit n';
		$content_path = 'n/ticketAction.php';
		break;
	case 'edit-ticketAction':
		$n_title = 'brand n : Membership Application';
		$content_title = 'add brand';
		$content_path = 'ns/edit-ticketAction.php';
	case 'reply-ticket':
		$n_title = 'ticket: Reply ticket';
		$content_title = 'Reply ticket';
		$content_path = 'n/reply-ticket.php';
		break;
	
	//add-department////////////////////////////////////////////////////////////
	case 'add-department':
		$n_title = 'departmen: add department';
		$content_title = 'add department';
		$content_path = 'n/add-department.php';
		break;
	//add-support-agent////////////////////////////////////////////////////////////
	case 'add-support-agent':
		$n_title = 'add-support-agent: Add Support Agent';
		$content_title = 'Add Support Agent';
		$content_path = 'n/add-support-agent.php';
		break;
	case 'clientAction.php':
		$n_title = 'agent : add support agent';
		$content_title = 'add support agent';
		$content_path = 'n/clientAction.php.php';
		break;
	case 'all-brand':
		$n_title = 'brand n : Membership Application';
		$content_title = 'all brand';
		$content_path = 'ns/all-brand.php';
		break;
	case 'delete-brand':
		$n_title = 'brand n : Membership Application';
		$content_title = 'all brand';
		$content_path = 'ns/delete-brand.php';
		break;
	case 'brandAction':
		$n_title = 'brand n : Membership Application';
		$content_title = 'all brand';
		$content_path = 'ns/brandAction.php';
		break;
	case 'deleteBrandAction':
		$n_title = 'Home n : Membership Application';
		$content_title = 'view n';
		$content_path = 'ns/deleteBrandAction.php';
		break;
	case 'allBrandAction':
		$n_title = 'Home n : Membership Application';
		$content_title = 'list Action n';
		$content_path = 'ns/allBrandAction.php';
		break;
	//Product///////////////////////////////////////////////////////////////
	case 'add-product':
		$n_title = 'product n : Membership Application';
		$content_title = 'add product';
		$content_path = 'ns/add-product.php';
		break;
	case 'all-product':
		$n_title = 'product n : Membership Application';
		$content_title = 'all product';
		$content_path = 'ns/all-product.php';
		break;
	case 'edit-product':
		$n_title = 'product n : Membership Application';
		$content_title = 'edit product';
		$content_path = 'ns/edit-product.php';
		break;
	case 'productAction':
		$n_title = 'product n : Membership Application';
		$content_title = 'edit product';
		$content_path = 'ns/productAction.php';
		break;
	case 'edit-productAction':
		$n_title = 'product n : Membership Application';
		$content_title = 'edit product';
		$content_path = 'ns/edit-productAction.php';
		break;
	case 'delete-product':
		$n_title = 'product n : Membership Application';
		$content_title = 'all product';
		$content_path = 'ns/delete-product.php';
		break;
	case 'deleteproductAction':
		$n_title = 'Home n : Membership Application';
		$content_title = 'view n';
		$content_path = 'ns/deleteproductAction.php';
		break;
	case 'allproductAction':
		$n_title = 'Home n : Membership Application';
		$content_title = 'list Action n';
		$content_path = 'ns/allproductAction.php';
		break;
	//Payment Plan///////////////////////////////////////////////////////////////
	case 'add-payment-plan':
		$n_title = 'payment-plan n : Membership Application';
		$content_title = 'add payment-plan';
		$content_path = 'ns/add-payment-plan.php';
		break;
	case 'all-payment-plan':
		$n_title = 'payment-plan n : Membership Application';
		$content_title = 'all payment-plan';
		$content_path = 'ns/all-payment-plan.php';
		break;
	case 'edit-payment-plan':
		$n_title = 'payment-plan n : Membership Application';
		$content_title = 'edit payment-plan';
		$content_path = 'ns/edit-payment-plan.php';
		break;
	case 'edit-payment-planAction':
		$n_title = 'payment-plan n : Membership Application';
		$content_title = 'edit payment-plan';
		$content_path = 'ns/edit-payment-planAction.php';
		break;
	case 'delete-payment-plan':
		$n_title = 'payment-plan n : Membership Application';
		$content_title = 'all payment-plan';
		$content_path = 'ns/delete-payment-plan.php';
		break;
	case 'deletepayment-planAction':
		$n_title = 'Home n : Membership Application';
		$content_title = 'view n';
		$content_path = 'ns/deletepayment-planAction.php';
		break;
	case 'allpayment-planAction':
		$n_title = 'Home n : Membership Application';
		$content_title = 'list Action n';
		$content_path = 'ns/allpayment-planAction.php';
		break;
}

