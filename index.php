<?php

spl_autoload_register(
    function ($class) {
        include './conf/Db.php';
        include './app/Person.php';
    }
);

$person = new Person();
$action = $_GET['act'] ?? null;
$id = $_GET['id'] ?? null;

// print_r($_POST['name']);

switch ($action) {
    case 'form':
        $person = isset($id) ? $person->form($id) : null;
        include 'view/form.php';        
        break;
    
    case 'delete':
        $person->delete($id);
        $sth = $person->index();
        include 'view/index.php';
        break;
    
    default:
        if (!empty($_POST['user_id'])) {
            if (!empty($_POST['name']) || !empty($_POST['surname']) || !empty($_POST['patronymic']) || !empty($_POST['age'])) {
                $person->update($_POST['user_id'], $_POST);
            } else {
                $person->delete($_POST['user_id']);
            }
        } elseif (isset($_POST['user_id']) && empty($_POST['user_id'])) {
            $person->store($_POST);
        }
        
        $sth = $person->index();
        include 'view/index.php';
}
