<?php
  include 'init.php';
  include "auth_user.inc.php";
  $tag="stmt_acc";
?>

<?php
    if(isset($_POST['forward_stmt_acc'])){
        $secretary_id=$secretary->get_user_id();
        $query_msg=$_POST['query_msg'];
        json_decode($secretary->forward_stmt_of_acc_query($query_msg,$secretary_id),true);
    }

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HOD PAGE</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/jquery-ui.css"/>
      <!-- Bootstrap Core CSS -->
      <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom CSS -->
      <link href="../../assets/css/sb-admin.css" rel="stylesheet">

      <!-- Morris Charts CSS -->
      <link href="../../assets/css/plugins/morris.css" rel="stylesheet">

      <!-- Custom Fonts -->
      <link href="../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  	<link rel="stylesheet" href="../../assets/css/style.css" type="text/css"/>
</head>

<body>
	<div id="wrapper">

        <?php
            include("side_nav.php");
        ?>

        <div id="page-wrapper" class="" style="min-height:500px">

            <div class="container-fluid">
            <div style="color:#003;font-size:20px;font-weight:bold">
                <div class="col-xs-offset-1">FORWARD STATEMENT OF ACCOUNT TO H.O.D</div>
                <div style="font-size:15px;color:#025" class="alert alert-danger"><span class="col-xs-offset-1">Some features are not supported</span></div>
            </div>
            <div>
            
                <form action="sec_stmt_acc.php" method="POST">
                    <textarea name="query_msg" id="stmtAcc" cols="30" rows="10">
                    
                    </textarea>
                    <br/>
                    <input type="submit" value="Forward" name="forward_stmt_acc" class="btn btn-success"/>
                </form>
            </div>

            </div>
            <!-- /.container-fluid -->
            <div>

            </div>
        </div>
        <!-- /#page-wrapper  hod_exp_rep-->

      </div>





<script type="text/javascript" src="../../assets/js/jquery.js"> </script>
  <script type="text/javascript" src="../../assets/js/jquery-ui.js"> </script>
  <script type="text/javascript" src="../../assets/js/bootstrap.min.js"> </script>
  <script type="text/javascript" src="../../assets/js/ckeditor/ckeditor.js"> </script>
  <script src="../../assets/js/plugins/morris/raphael.min.js"></script>
  <script src="../../assets/js/plugins/morris/morris.min.js"></script>
  <script src="../../assets/js/plugins/morris/morris-data.js"></script>

    <script>
    CKEDITOR.replace('query_msg');
    </script>

</body>
</html>

