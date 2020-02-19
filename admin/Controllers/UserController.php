<?php
session_start();


$action = 'list';

if (isset($_GET['action']))
    $action = $_GET['action'];
else if (isset($_POST['action']))
    $action = $_POST['action'];

$controller = AppConstants::USER_CONTROLLER;
$userDao = new UserDao();

if ($action != "login_process") {
       $userDao -> CheckLoginProcess();

switch ($action) {
    case 'view':
        $id = filter_input(INPUT_GET, 'id');
        $user = $userDao->FindOne($id);

        include('./Views/Users/view.php');
        break;
    case 'add':
        include('./Views/Users/add.php');
        break;
    case 'add_save':
        $user = new User();
        $user->RetrieveRequestParam();
        $userDao->file_upload();

        $userDao->Insert($user);
        $message = "The User $user->Name has been saved!";
        include('./Views/Users/add.php');
        break;
    case 'edit':
        $id = filter_input(INPUT_GET, 'id');
        $user = $userDao->FindOne($id);

        include('./Views/Users/edit.php');
        break;
    case 'edit_save':
        $user = new User();
        $user->RetrieveRequestParam();

        $userDao->Update($user);

        $message = "The User $user->Name has been updated!";
        include('./Views/Users/edit.php');
        break;
    case 'delete':
        $id = filter_input(INPUT_GET, 'id');
        $userDao->Delete($id);

        $message = "The User $id has been delete!";
        
        $users = $userDao->Find();
        include('./Views/Users/list.php');
        break;
    case 'find':
        $name = filter_input(INPUT_GET, 'name');
        if ($name != null){
            $users = $userDao->FindByName($name);

            // if (isset($users['name']))
            //     $users = array($users);
        }else 
            $users = array();

        include('./Views/Users/find.php');
        break;
    case 'login':
        //Auto login
        if (isset($_COOKIE['username'])){
            $_SESSION['username'] = $_COOKIE['username'];
            header("location: .?controller=UserController");
        }

        include('./Views/Security/login.php');
        break;

    case 'logout':
        unset($_SESSION['username']);
        //setcookie('username', '', time() - 60);
        header('location: .?controller=UserController&action=login');
        break;
    default:
        $users = $userDao->Find();
        include('./Views/Users/list.php');
        break;
} 
}else {
    $name = filter_input(INPUT_POST, 'name');
        $password = filter_input(INPUT_POST, 'password');
        $remember = filter_input(INPUT_POST, 'remember');
        $ok = $userDao->CheckLogin($name, $password);

        if ($ok){
            $_SESSION['username'] = $name;

            if ($remember != null) {
               // setcookie('username', $name, 60 * 60 * 60 + time());
            }
            echo "<script>alert('Đăng nhập thành công!')</script>";
            header("location: ?controller=UserController&action=list");

        }else{
            $user = $userDao->FindOne($name);

            $message = "Invalid username or password";
        }
        include('./Views/Security/login.php');

}
