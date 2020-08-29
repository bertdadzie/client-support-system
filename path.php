<?php
$n =(isset($_GET['n'])) ? $_GET['n'] : 'home';
switch ($n) {
	case 'home':
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
	
	//add-department////////////////////////////////////////////////////////////
	case 'add-department':
		$n_title = 'department: add department';
		$content_title = 'add department';
		$content_path = 'n/add-department.php';
		break;
	//add-support-agent////////////////////////////////////////////////////////////
	case 'add-support-agent':
		$n_title = 'add-support-agent: Add Support Agent';
		$content_title = 'Add Support Agent';
		$content_path = 'n/add-support-agent.php';
		break;
	case 'support-team':
		$n_title = 'support: Support Team';
		$content_title = 'Support Team';
		$content_path = 'n/support-team.php';
		break;
	case 'profile':
		$n_title = 'profile';
		$content_title = 'profile';
		$content_path = 'n/profile.php';
		break;
	//reply////////////////////////////////////////////////////////////
	case 'reply-ticket':
		$n_title = 'ticket: Reply ticket';
		$content_title = 'Reply ticket';
		$content_path = 'n/reply-ticket.php';
		break;
	case 'replies_action':
		$n_title = 'replies action';
		$content_title = 'replies action';
		$content_path = 'n/replies_action.php';
		break;
	//client////////////////////////////////////////////////////////////
	case 'ticketActionclient':
		$n_title = 'Client Support: Client Support';
		$content_title = 'Client Support';
		$content_path = 'n/ticketActionclient.php';
		break;
	case 'Client-support-ps.php':
		$n_title = 'Client Support';
		$content_title = 'Client Support';
		$content_path = 'n/Client-support-ps.php';
		break;
	case 'update-status':
		$n_title = 'update status';
		$content_title = 'update status';
		$content_path = 'n/update-status.php';
		break;
	case 'update-priority':
		$n_title = 'update priority';
		$content_title = 'update priority';
		$content_path = 'n/update-priority.php';
		break;
	case 'update-department':
		$n_title = 'update department';
		$content_title = 'update department';
		$content_path = 'n/update-department.php';
		break;
	case 'fetch':
		$n_title = 'fetch';
		$content_title = 'fetch';
		$content_path = 'n/fetch.php';
		break;
	case 'feedbacks':
		$n_title = 'feedbacks';
		$content_title = 'feedbacks';
		$content_path = 'n/feedbacks.php';
		break;
	case 'account-setting':
		$n_title = 'Account setting';
		$content_title = 'Account setting';
		$content_path = 'n/account-setting.php';
		break;
	case 'account-setting-action':
		$n_title = 'account-setting';
		$content_title = 'account-setting';
		$content_path = 'n/account-setting-action.php';
		break;
	case 'ticket-academics':
		$n_title = 'ticket-academics';
		$content_title = 'ticket-academics';
		$content_path = 'n/ticket-academics.php';
		break;
	case 'a':
		$n_title = 'a';
		$content_title = 'a';
		$content_path = 'n/a.php';
		break;
}

