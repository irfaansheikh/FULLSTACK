    <?php
    	
 	include 'config.php';

	$action = $_GET['action'];
	if($action == 'form_submission'){
	    
	    //$rawprice = explode('</span>', $_POST['price']);
	    $rawprice = $_POST['price'];
	    $raw_details = explode('<div class="slimScrollBar"', $_POST['title']);
	    
	   

		$name = htmlentities($_POST['name']);
		$email = htmlentities($_POST['email']);
		$phone = htmlentities($_POST['phone']);
		$url = htmlentities($_POST['url']);
		$domain = htmlentities($_POST['domain']);
		$subject = htmlentities($_POST['subject']);
		$price = htmlentities($rawprice);
		$pkgdetails = htmlentities($raw_details[0]);
		$pkgctgry = $_POST['pkgctgry'];
		$pkgtitle = $_POST['pkgtitle'];
		$randomNum = substr($_POST['randomnum'], 1);
		$sysip = $_POST['sysip'];
		$addressl = $_POST['addressl'];
		$message = '';
		$currentdate = time();
		$optional = '';
		
		$return_table = insert_into_table($name, $email, $phone, $url, $domain, $subject, $conn, $price, $pkgdetails, $pkgctgry, $pkgtitle, $randomNum, $currentdate, $sysip, $addressl);
		$return_param = send_mail_to_admin($name, $email, $phone, $url, $sysip, $addressl);
		
		echo json_encode(array('response' => $return_param, 'response_table' => $return_table));
	}

	function insert_into_table($name, $email, $number, $url, $domain, $subject, $conn, $price, $pkgdetails, $pkgctgry, $pkgtitle, $randomNum, $currentdate, $sysip, $addressl){
		
	     $sql = "INSERT INTO leads (id, token, name, email, phone, url, domain, subject, services, pkgctgry, pkgname, price, date, ip, location, address, zipcode)
				VALUES (0, '$randomNum', '$name', '$email', '$number', '$url', '$domain', '$subject', '$pkgdetails', '$pkgctgry', '$pkgtitle', '$price', '$currentdate', '$sysip', '$addressl', '', '')";
    
	 	if ($conn->query($sql)) {
	 	    
			//echo "working";
	 		
	 	} else {
	 	    
			 //echo "not working";
		}
		 
	 	return 1;
	}
	
	$url = 'https://crm.weblanez.com/api/store';
    $data = array("firstname" => $name, "email" => $email, "phone" => $phone, "lead_description" => "", "lead_title" => "Need A Quote", "lead_creatorid" => 2, "lead_categoryid"=>61, "lead_source" => $subject, "lead_custom_field_1" => $sysip, "lead_custom_field_6" => $addressl);
    
    $postdata = json_encode($data);
    
    $ch = curl_init($url); 
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $result = curl_exec($ch);
    curl_close($ch);

	function send_mail_to_admin($name, $email, $phone, $url, $sysip, $addressl) {
	    
		$to = 'info@weblanez.com';
		
		$subject = 'weblanez Lead Form Filled by '.$name;
		
		$headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $headers[] = 'From: Weblanez <info@weblanez.com>';
        $headers[] = 'Bcc: naeem4every1@gmail.com';

		$message  = '<table border="1">';
		if($name) { $message .= '<tr><td style="font-weight:bold; padding:10px;">Name</td><td style="padding:10px;">'.$name.'</td></tr>'; }
		if($email) { $message .= '<tr><td style="font-weight:bold; padding:10px;">Email Address</td><td style="padding:10px;">'.$email.'</td></tr>'; }
		if($phone) { $message .= '<tr><td style="font-weight:bold; padding:10px;">Phone Number</td><td style="padding:10px;">'.$phone.'</td></tr>'; }
		if($url) { $message .= '<tr><td style="font-weight:bold; padding:10px;">URL</td><td style="padding:10px;">'.$url.'</td></tr>'; }
		if($sysip) { $message .= '<tr><td style="font-weight:bold; padding:10px;">IP Address</td><td style="padding:10px;">'.$sysip.'</td></tr>'; }
		if($addressl) { $message .= '<tr><td style="font-weight:bold; padding:10px;">IP Location</td><td style="padding:10px;">'.$addressl.'</td></tr>'; }
		$message .= '</table>';
		
		if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
		    
	        $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	        
	    } else {
	        
	        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	        
	    }
	    
	    $url_components = parse_url($url);

	    if ($url_components['host'] == 'localhost') {
	        
	    	return true;
	    }
	    
	    if(mail($to, $subject, $message, implode("\r\n", $headers))) {
	        
			return true;
			
		} else {
		    
			return false;
		}
	}
	
?>