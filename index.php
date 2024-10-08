
<?php
require_once 'controllers/MahasiswaController.php';

$controller = new MahasiswaController();

// Routing berdasarkan parameter 'action'
$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $nim = isset($_GET['nim']) ? $_GET['nim'] : '';
        $controller->edit($nim);
        break;
    case 'update':
        $nim = isset($_GET['nim']) ? $_GET['nim'] : '';
        $controller->update($nim);
        break;
    case 'delete':
        $nim = isset($_GET['nim']) ? $_GET['nim'] : '';
        $controller->delete($nim);
        break;
    default:
        $controller->index();
        break;
}
