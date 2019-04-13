<?php
if(isset($_POST['action'])){
    //print_r($_POST); print_r($_FILES); 
    //die("get all data on upload page");
    if(isset($_FILES['image'])){
        if(is_uploaded_file($_FILES['image']['tmp_name'])) {
            $imageTempname = $_FILES['image']['tmp_name'];
            $imageType = $_FILES['image']['type'];
            $imageName = $_FILES['image']['name'];
            $imageSize = $_FILES['image']['size'];
            $imageSize = $_FILES['image']['size'];
            //echo json_encode(array('image_tempname' => $imageTempname, 'image_type'=> $imageType, 'image_name' =>$imageName, 'image_size' => $imageSize));
            $sourcePath = $imageTempname;
            $targetPath = "uploads/".time().$imageName;
            $allowed = array('gif','png' ,'jpg','jpeg'); //allow the file extension
            $ext = pathinfo($imageName, PATHINFO_EXTENSION); //get the file extension
            if(!in_array($ext, $allowed) ) {
                echo json_encode(array('status' => 400, 'msg' => 'Image is accept only png, jpg, jpeg, gif formate'));
}
            else {
                if(move_uploaded_file($sourcePath,$targetPath)) {
                    echo json_encode(array('status' => 200, 'msg' => 'Image upload successfully'));
} else{
                    echo json_encode(array('status' => 400, 'msg' => 'Error, Image not uploaded'));
      }
    }
   }
 }
}
?>