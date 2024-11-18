<?php

class UserAdminController
{
    public $userAdminModel;

    public function __construct()
    {
        $this->userAdminModel = new UserAdminModel();
    }

    public function listUserAdmins()
    {
        $userAdmins = $this->userAdminModel->getUserAdmins();
        require_once './views/useradmin/listUserAdmins.php';
    }

    public function insertUserAdmin()
    {
        require_once './views/useradmin/insertUserAdmin.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_insert'])) {
            $data = [
                'Username_admin' => $_POST['Username_admin'],
                'Password_id' => password_hash($_POST['Password_id'], PASSWORD_BCRYPT)
            ];
            $this->userAdminModel->insertUserAdmin($data);
            echo '<script>
            alert("Thêm userAdmin thành công!");
            window.location.href="?act=listUserAdmins";
            </script>';

            exit();
        }
    }

    public function editUserAdmin($id)
    {
        $userAdmin = $this->userAdminModel->getUserAdminByID($id);
        require_once '/laragon/www/Duan1Nhom4/Duan1Nhom4/admin/views/useradmin/editUserAdmin.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_update'])) {
            $data = [
                'Username_admin' => $_POST['Username_admin'],
                'Password_id' => password_hash($_POST['Password_id'], PASSWORD_BCRYPT)
            ];
            if ($this->userAdminModel->updateUserAdmin($id, $data))
                ;
            echo '<script>
            alert("Sửa userAdmin thành công!");
            window.location.href="?act=listUserAdmins";
            </script>';
            exit();
        }
    }

    public function deleteUserAdmin($id)
    {
        if ($this->userAdminModel->deleteUserAdmin($id)) {
            echo '<script>alert("Xóa admin thành công!");</script>';
        } else {
            echo '<script>alert("Lỗi khi xóa admin!");</script>';
        }
        header("location:?act=listUserAdmins");
        exit();
    }
}
?>