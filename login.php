<?php
session_start();


$msgBox = '';


//include notification page
include ('includes/notification.php');

//Include db Page
include ('includes/db.php');
include ('includes/db2.php');

//Include Function page
include ('includes/Functions.php');

//User Login

if (isset($_POST['login'])) {
    if ($_POST['LastName'] == '') {
        $msgBox = alertBox($EmailEmpty);
    } else
        if ($_POST['password'] == '') {
            $msgBox = alertBox($PasswordEmpty);

        } else {
            // Get User Info
            $Email = $mysqli->real_escape_string($_POST['LastName']);
            $Password = $mysqli->real_escape_string($_POST['password']);

            if ($stmt = $mysqli->prepare("SELECT UserId, FirstName, LastName, Email, Password, Currency from user WHERE LastName = ? AND Password = ? ")) {
                $stmt->bind_param("ss", $Email, $Password);
                $stmt->execute();
                $stmt->bind_result($UserId_, $FirstName_, $LastName_, $Email_, $Password_, $Currency_);
                $stmt->store_result();
                $stmt->fetch();
                if ($num_of_rows = $stmt->num_rows >= 1) {
                    session_start();
                    $_SESSION['UserId'] = $UserId_;
                    $_SESSION['FirstName'] = $FirstName_;
                    $_SESSION['LastName'] = $LastName_;
                    $_SESSION['Currency'] = $Currency_;
                    $UserIds = $_SESSION['UserId'];


                    // Generate default Category for New User
                    $a = "SELECT CategoryName FROM category WHERE UserId = $UserIds";
                    $b = mysqli_query($mysqli, $a);

                    if (mysqli_num_rows($b) >= 1) {
                      echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
                    } else {
                        $c = "INSERT INTO category(UserId, CategoryName, Level) VALUES ($UserIds, 'Salary', 1), ($UserIds, 'Alowance', 1), ($UserIds, 'Petty Cash', 1), ($UserIds, 'Bonus', 1), ($UserIds, 'Food', 2),
												 ($UserIds, 'Social Life', 2), ($UserIds, 'Self-Development', 2), ($UserIds, 'Transportation', 2), ($UserIds, 'Culture', 2), ($UserIds, 'Household', 2), ($UserIds, 'Apparel', 2), 
												 ($UserIds, 'Beauty', 2), ($UserIds, 'Health', 2), ($UserIds, 'Gift', 2)";
                        $d = mysqli_query($mysqli, $c);
                    }
                    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
                } else {
                    $msgBox = alertBox($LoginError);
                }
            }
        }

}
?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema Jogo do Bicho | Pará</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center"><img width="100px" height="50px" src="images/jre.png"/></h3>
                        <h3 class="panel-title text-center"><?php echo "Efetuar Login"; ?></h3>
                    </div>
                    <div class="panel-body">
						<?php if ($msgBox) {
    echo "$msgBox";
} ?>
                        <form method="post" action="" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <label for="email"><?php echo "Usuario"; ?></label>
                                    <input class="form-control"  placeholder="<?php echo
"Usuario"; ?>" name="LastName" type="text" value="">
                                </div>
                                <div class="form-group">
                                     <label for="password"><?php echo $Passwords; ?></label>
                                    <input class="form-control"  placeholder="<?php echo
$Passwords; ?>" name="password" type="password" value="">
                               </div>
                               
                               <hr>
                                <button type="submit" name="login" class="btn btn-success btn-block"><span class="glyphicon glyphicon-log-in"></span>  <?php echo
$SignIn; ?></a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <small >Sistema de Controle Administrativo JB Pará</small><br>
        </div>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
