<?php
class accountsController extends http\controller
{
    public static function show()
    {
        $record = accounts::findOne($_REQUEST['id']);
        self::getTemplate('show', $record);
    }
    public static function all()
    {
        $records = accounts::findAll();
        self::getTemplate('accountsall', $records);
    }
      public static function register()
    {
         self::getTemplate('register');
    }
    //this is the function to save the user the new user for registration
    public static function store()
    {
        $user = accounts::findUserbyEmail($_REQUEST['email']);
        if ($user == FALSE) {
            $user = new account();
            $user->email = $_POST['email'];
            $user->fname = $_POST['fname'];
            $user->lname = $_POST['lname'];
            $user->phone = $_POST['phone'];
            $user->birthday = $_POST['birthday'];
            $user->gender = $_POST['gender'];
            $user->password = account::setPassword($_POST['password']);
            $user->save();
             header("Location: index.php?page=accounts&action=all");
        } else {
            $error = 'already registered';
            self::getTemplate('error', $error);
        }
    }
    public static function edit()
    {
        $record = accounts::findOne($_REQUEST['id']);
        self::getTemplate('edit', $record);
    }
    public static function save() {
        $user = accounts::findOne($_REQUEST['id']);
        $user->email = $_POST['email'];
        $user->fname = $_POST['fname'];
        $user->lname = $_POST['lname'];
        $user->phone = $_POST['phone'];
        $user->birthday = $_POST['birthday'];
        $user->gender = $_POST['gender'];
        $user->save();
        header("Location: index.php?page=accounts&action=all");
    }
    public static function delete() {
        $record = accounts::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=accounts&action=all");
    }
     public static function login()
    {
        $user = accounts::findUserbyEmail($_REQUEST['email']);
        if ($user == FALSE) {
            echo 'user not found';
        } else {
            if($user->checkPassword($_POST['password']) == TRUE) {
                echo 'login';
                session_start();
                $_SESSION["userID"] = $user->id;
                header("Location: index.php?page=tasks&action=fetchTodo");
                    print_r($_SESSION);
            } else {
                echo 'password does not match';
            }
        }
        }
        
     public static function logout()
     {
          session_start();
          session_destroy();
          header("Location: index.php?page=homepage&action=show");
          exit();
     }
     
       public static function profile()
          {
     
                 if (session_status()==PHP_SESSION_NONE)
                 {
                   session_start();
                     
                 }
                 $record = accounts::findOne($_SESSION['userID']);
                 self::getTemplate('show_account', $record);
     
              }
     
}
