<?php 
$path="";
    if(isset($_REQUEST['upload']))
    {echo $_FILES['myfile']['type'];
        if($_FILES['myfile']['error']==0)
        {
            if($_FILES['myfile']['type']==="image/jpeg"||"image/png")
            {
            $source=$_FILES['myfile']['tmp_name'];
            $des=$_SERVER['DOCUMENT_ROOT']."/PhpProject3/upload/".$_FILES['myfile']['name'];
            if(move_uploaded_file($source,$des))
            {
                $path="upload/".$_FILES['myfile']['name'];
        
            }
            else
            {
                echo "Error in Uploading the file";
            }
            }
            else 
                echo "Invalid File Format";
        }
        else
        {
            echo "File is Currpated....";
        }
    }
?>

?>