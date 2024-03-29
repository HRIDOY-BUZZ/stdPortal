<?php
    function save_image($name, $destination, $file)
    {
        $upload = 0;
        $error = false;
        $title = "";
        // echo "Value: ".$uploadOK;
        // exit;
        if(isset($file['name']) && $file['name'] != "")
        {
            $target_file = $destination . basename($file["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $check = getimagesize($file["tmp_name"]);
            // dd($check);
            // dd($imageFileType);
            if($check !== false)
            {
                
                if($imageFileType == 'jpg' || $imageFileType == 'png' || $imageFileType == 'jpeg' || $imageFileType == 'gif')
                {
                    $upload = 1;
                    // echo "Type = ".$imageFileType." Value = ".$upload."<br>";
                }
                else
                    $upload = 0;
            }
            else
                $upload = 0;

            if($upload)
            {
                $error = false;
                $title = $name.".".$imageFileType;
                if (!copy($file["tmp_name"], $destination.$title)) {
                    $error = true;
                    $title = "";
                }
            }
        }
        $value = array($error, $title);
        // dd($value);
        return $value;
    }

    function save_file($name, $destination, $file)
    {
        $upload = 0;
        $error = false;
        $title = "";
        // echo "Value: ".$uploadOK;
        // exit;
        if(isset($file['name']) && $file['name'] != "")
        {
            $target_file = $destination . basename($file["name"]);
            $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $check = filesize($file["tmp_name"]);

            if($check !== false)
            {
                // dd($FileType);
                if($FileType == 'pdf')
                {
                    $upload = 1;
                }
                else
                    $upload = 0;
            }
            else
                $upload = 0;

            if($upload)
            {
                $error = false;
                $title = $name.".".$FileType;
                // dd($file);
                if (!copy($file["tmp_name"], $destination.$title)) {
                    // dd($title);
                    $error = true;
                    $title = "";
                }
            }
        }
        $value = array($error, $title);
        // dd($value);
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