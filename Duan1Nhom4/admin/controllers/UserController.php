<?php

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function listUsers()
    {
        $users = $this->userModel->getUsers();
        require_once './views/user/listUsers.php';
    }

    public function insertUser()
    {
        require_once './views/user/insertUser.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_insert'])) {
            $data = [
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'name' => $_POST['name']
            ];
            if ($this->userModel->insertUser($data))
                echo '<script>
            alert("Thêm user thành công!");
            window.location.href="?act=listUsers";
            </script>';

            exit();
        }
    }

    public function editUser($id)
    {
        $user = $this->userModel->getUserByID($id);
        require_once './views/user/editUser.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_update'])) {
            $data = [
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'name' => $_POST['name']
            ];
            if ($this->userModel->updateUser($id, $data))
                echo '<script>
            alert("Sửa user thành công!");
            window.location.href="?act=listUsers";
            </script>';

            exit();
        }
    }

    public function deleteUser($id)
    {
        if ($this->userModel->deleteUser($id)) {
            echo '<script>alert("Xóa người dùng thành công!");</script>';
        } else {
            echo '<script>alert("Lỗi khi xóa người dùng!");</script>';
        }
        header("location:?act=listUsers");
        exit();
    }
}
?>