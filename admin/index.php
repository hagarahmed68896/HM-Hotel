<?php require("inc/db_config.php") ;
      require("inc/essentials.php");
      session_start();
      if((isset($_SESSION['adminlogin']) && $_SESSION['adminlogin']== true)){
          redirect("dashboard.php");
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require("inc/links.php"); ?>
    
    <style>
        .login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
        }
        .custom-alert{
        position: fixed;
        top: 25px;
        right: 25px;
}
    </style>
</head>
<body class="bg-light">
    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST" action="">
            <h4 class="bg-dark py-3 text-white ">ADMIN LOGIN PANEL</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name"  required type="text" class="form-control shadw-none text-center" placeholder="Admin Name">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" required type="password" class="form-control shadw-none text-center" placeholder="Password">
                </div>
                    <button name="login" type="submit" class="btn custom-bg text-white shadw-none">LOGIN</button> 
            </div>
           
        </form>
    </div>
    
    <?php 
        if(isset($_POST['login'])){
            $frm_data = filteration($_POST);
            $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
            $values = [$frm_data['admin_name'], $frm_data['admin_pass']];
            $res = select($query, $values,"ss");
            if($res->num_rows==1){
                $row = mysqli_fetch_assoc($res);
                session_start();
                $_SESSION['adminlogin'] = true;
                $_SESSION['adminId'] = $row['stf_no'];
                redirect('dashboard.php');
                exit;
            }
            else{
             alert('error','Login failed - Inavlid credentials!');
            }
        }
    ?>

    <?php require("inc/script.php")?>
</body>
</html>