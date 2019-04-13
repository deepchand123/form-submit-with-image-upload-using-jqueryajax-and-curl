<?php
if( $_POST['first_name'] && $_POST['last_name'] && $_POST['email'] && $_FILES['image']['name']){
    //print_r($_POST); print_r($_FILES);
    $form_data = array(
        'first_name' => trim($_POST['first_name']),
        'last_name' => trim($_POST['last_name']),
        'email' => trim($_POST['email']),
        'phone_number' => trim($_POST['phone_number']),
        'image' => new CURLFile($_FILES['image']['tmp_name'], $_FILES['image']['type'], $_FILES['image']['name']), //for image upload 
        'action' => 'submit'
);
    //print_r($form_data); die("Get all Data of forms");

    $submitForm = formSubmitUsingCurl($PostURL = 'http://localhost/ImageUploadUsingJqueryAjaxCurl/curl/upload.php', $form_data);
    print_r($submitForm);
}

//submit the data using curl
function formSubmitUsingCurl($PostURL, $form_data)
{
    //Initialize cURL
    $ch = curl_init();

    //Set location to post data using cURL
    curl_setopt($ch, CURLOPT_URL, $PostURL);

    //Enable POST method
    curl_setopt($ch, CURLOPT_POST, 1);

    //Enable the upload files
    curl_setopt($ch, CURLOPT_SAFE_UPLOAD, true);

    //Create a array of data
    curl_setopt($ch, CURLOPT_POSTFIELDS, $form_data);

    //Set return True
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Execute the cURL
    $server_output = curl_exec($ch);

    //return the response
    return $server_output;
    
    //Close
    curl_close($ch);
}
?>