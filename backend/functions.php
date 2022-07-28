<?php
    function save_image($name, $destination, $file)
    {
        $uploadOK = 0;
        $error = false;
        $title = "";
        // echo "Value: ".$uploadOK;
        // exit;
        if(isset($file['name']) && $file['name'] != "")
        {
            $target_file = $destination . basename($file["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $check = getimagesize($file["tmp_name"]);

            if($check !== false)
            {
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
                    $uploadOk = 0;
                else
                    $uploadOk = 1;
            }
            else
                $uploadOk = 0;

            if($uploadOK)
            {
                $error = false;
                $title = $name."_".time().".".$imageFileType;
                if (!move_uploaded_file($files["tmp_name"], $destination.$title)) {
                    $error = true;
                    $title = "";
                }
            }
        }
        $value = array($error, $title);
        dd($value);
        return $value;
    }

    function message($type, $msg)
    {
        $class = "";
        if($type == 'success')
            $class = "alert alert-success";
        else if($type = 'error')
            $class = "alert alert-danger";

        $alert = '<div class="'.$class.'" role="alert"> ';
        $alert .= $msg;
        $alert .= '</div>';

        return $alert;
    }
?>