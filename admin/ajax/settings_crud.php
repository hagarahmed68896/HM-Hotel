<?php
require('../inc/db_config.php');
require('../inc/essentials.php');
adminlogin();

if(isset($_POST['get_general'])){
    $q = "SELECT * FROM `settings` WHERE `sr_no`=?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);
    echo json_encode($data);   // Encode the data as JSON and echo it
}


    if(isset($_POST['update_general'])){
        $frm_data = filteration($_POST);
        $q =" UPDATE `settings` SET `site_title`=?,`site_about`=? WHERE `sr_no`=?";
        $values = [$frm_data['site_title'],$frm_data['site_about'],1];
        $res = update($q,$values,"ssi");     // ssi => are datatypes (string,string,integer)
        echo $res;
    }
    
    if(isset($_POST['upd_shutdown'])){
        $frm_data = ($_POST['upd_shutdown'] == 0) ? 1 :0;
        $q =" UPDATE `settings` SET `shutdown`=? WHERE `sr_no`=?";
        $values = [$frm_data,1];
        $res = update($q,$values,"ii");
        echo $res;
    }


    if(isset($_POST['get_contacts'])){
            $q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
            $values = [1];
            $res = select($q, $values, "i");
            $data = mysqli_fetch_assoc($res);
            echo json_encode($data); 
    }


    
    if(isset($_POST['upd_contacts'])){
        $frm_data = filteration($_POST);
        $q ="UPDATE `contact_details` SET `address`=?,`gmap`=?,`pn1`=?,`pn2`=?,`email`=?,`fb`=?,`insta`=?,`tw`=?,`iframe`=? WHERE `sr_no`=?";
        $values = [$frm_data['address'],$frm_data['gmap'],$frm_data['pn1'],$frm_data['pn2'],$frm_data['email'],$frm_data['fb'],$frm_data['insta'],$frm_data['tw'],$frm_data['iframe'],1];
        $res = update($q,$values,"sssssssssi");    
        echo $res;
    }
    
?>