<?php 

// Cek Active Link
function ActiveClass($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
        

}




 //Link to page
if (isset($_GET['page']) && $_GET['page'] == 'Transaction') {
            $page = 'Transaction';
        } else if (isset($_GET['page']) && $_GET['page'] == 'AssetReport') {
            $page = "AssetReport";
        } else if (isset($_GET['page']) && $_GET['page'] == 'ManageBudget') {
            $page = "ManageBudget";
        } else if (isset($_GET['page']) && $_GET['page'] == 'ManageIncomeCategory') {
            $page = "ManageIncomeCategory";
        } else if (isset($_GET['page']) && $_GET['page'] == 'novousuario') {
            $page = "novousuario";
        } else if (isset($_GET['page']) && $_GET['page'] == 'home') {
            $page = "home";
        } else if (isset($_GET['page']) && $_GET['page'] == 'leitura') {
            $page = "leitura";    
        } else if (isset($_GET['page']) && $_GET['page'] == 'consulta') {
            $page = "consulta";   
        } else if (isset($_GET['page']) && $_GET['page'] == 'consulta2') {
            $page = "consulta2";   
        } else if (isset($_GET['page']) && $_GET['page'] == 'listaconsulta') {
            $page = "listaconsult2";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'listaconsult2') {
            $page = "listaconsult2";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'consulta3') {
            $page = "consulta3";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'listaconsult3') {
            $page = "listaconsult3";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'consulta4') {
            $page = "consulta4";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'listaconsult4') {
            $page = "listaconsult4";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'consulta5') {
            $page = "consulta5";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'listaconsult5') {
            $page = "listaconsult5";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'consulta6') {
            $page = "consulta6";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'listaconsulta6') {
            $page = "listaconsulta6";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'ponto') {
            $page = "ponto";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'sorteios') {
            $page = "sorteios";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'maquina') {
            $page = "maquina";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'regiao') {
            $page = "regiao";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'gerente') {
            $page = "gerente"; 
        } else if (isset($_GET['page']) && $_GET['page'] == 'pontoscadastrados') {
            $page = "pontoscadastrados";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'newuser3') {
            $page = "newuser3";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'consulta7') {
            $page = "consulta7";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'listaconsult7') {
            $page = "listaconsult7";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'perfil') {
            $page = "perfil";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'alter') {
            $page = "alter";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'pontocadastro') {
            $page = "pontocadastro";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'deluser') {
            $page = "deluser";  
        } else if (isset($_GET['page']) && $_GET['page'] == 'ManageExpenseCategory') {
            $page = "ManageExpenseCategory";
        } else if (isset($_GET['page']) && $_GET['page'] == 'ManageAccount') {
            $page = "ManageAccount";
        } else if (isset($_GET['page']) && $_GET['page'] == 'ManageIncome') {
            $page = "ManageIncome";
        } else if (isset($_GET['page']) && $_GET['page'] == 'Settings') {
            $page = "Settings";
        } else if (isset($_GET['page']) && $_GET['page'] == 'ExpenseReport') {
            $page = "ExpenseReport";
        } else if (isset($_GET['page']) && $_GET['page'] == 'ManageExpense') {
            $page = "ManageExpense";
        } else if (isset($_GET['page']) && $_GET['page'] == 'ReportPdf') {
            $page = "ReportPdf";
        } else if (isset($_GET['page']) && $_GET['page'] == 'IncomeVsExpense') {
            $page = "IncomeVsExpense";
        } else if (isset($_GET['page']) && $_GET['page'] == 'IncomeCalender') {
            $page = "IncomeCalender";
        } else if (isset($_GET['page']) && $_GET['page'] == 'AllIncomeReports') {
            $page = "AllIncomeReports";
        } else if (isset($_GET['page']) && $_GET['page'] == 'AllExpenseReports') {
            $page = "AllExpenseReports";    
        } else if (isset($_GET['page']) && $_GET['page'] == 'ExpenseCalender') {
            $page = "ExpenseCalender";
        } else if (isset($_GET['page']) && $_GET['page'] == 'siteSettings') {
            $page = "siteSettings";
        } else {
            $page = 'home';
        }


//get global notification
include('includes/global.php');

//Get Header
include('includes/header.php'); 


//set global message notification
$msgBox	="";

if (file_exists('pages/'.$page.'.php')) {
            // Load the Page
            include('pages/'.$page.'.php');
        } else {
            // Else Display an Error
          
            echo '
                    <div class="wrapper">
                       <h3>Err</h3>
                       <div class="alertMsg default">
                            <i class="icon-warning-sign"></i> The page "'.$page.'" could not be found.
                        </div>
                    </div>
                ';
        }

        include('includes/footer.php');
  

?>
