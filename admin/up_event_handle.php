<?php
// Include the database configuration file
include '../conn.php';
$statusMsg = '';

// File upload path
$targetDir = "../uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    $event_name=$_POST['event_name'];
    $event_desc=$_POST['event_desc'];
    $event_status=$_POST['event_status'];
    $event_badge=$_POST['event_badge'];
    $event_badge_color=$_POST['event_badge_color'];
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $connect1->query("INSERT INTO `event` (`event_name`, `event_desc`, `event_img`, `event_status`, `event_badge`, `event_badge_color`) VALUES ('$event_name', '$event_desc', '$fileName', '$event_status', '$event_badge', '$event_badge_color')");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                echo mysqli_error($connect1);
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>