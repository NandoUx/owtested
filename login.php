<?PHP
$data = '';

//login.php?username=dGVzdA==&password=dGVzdHBhc3M=
if (!empty($_GET) ) {
    if (!empty($_GET['username']) && !empty($_GET['password'])) {
        if (base64_decode($_GET['username']) == '1' && base64_decode($_GET['password']) == '1') {
            $data->code = "1";
			$data->msg = "successfully logged in!";
        }else{
			$data->code = "0";
			$data->msg = "Incorrect username or password!";
        }
    }else{
		$data->code = "0";
		$data->msg = "Fill in username and password!";
    }
}

header('Content-Type: text/plain');
echo json_encode($data);
