<?php



$action = 'list';
if (isset($_GET['action']))
    $action = $_GET['action'];
else if (isset($_POST['action']))
    $action = $_POST['action'];

$controller = AppConstants::USER_CONTROLLER;

$userDao = new UserDao();
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
        include('./Views/Security/login.php');
        break;
    case 'login_process':
        $id = filter_input(INPUT_POST, 'id');
        $password = filter_input(INPUT_POST, 'password');

        $ok = $userDao->CheckLogin($id, $password);

        if ($ok){
            $_SESSION['userid'] = $id;
            $_COOKIE['userid'] = $id;
            header("location: .?controller=UserController");
        }else{
            $message = "Invalid username or password";
        }
        include('./Views/Security/login.php');
        break;
    default:
        $users = $userDao->Find();

        include('./Views/Users/list.php');
        break;
}



