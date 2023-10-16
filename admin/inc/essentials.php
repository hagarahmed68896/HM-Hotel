<?php
function adminlogin(){
    session_start();
    if(!(isset($_SESSION['adminlogin']) && $_SESSION['adminlogin']== true)){
        echo "  <script> 
                    window.location.href='index.php';
                </script>";
        exit;
    }
    // session_regenerate_id(true);
}

function redirect($url){
    echo "<script> 
        window.location.href='$url';
    </script>";
    exit;
}


function alert($type,$msg){
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
    echo <<<alert
    <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
        <strong class="me-2">$msg</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    alert;
}



?>