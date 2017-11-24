<?php

class Login_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function iniciar($data) {
        if (!empty($data)) {
            $email = $data['email'];
            $pass = trim(Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY));
            $sth = $this->db->prepare("select id, nombre, email from admin_usuario where email = :email and contrasena = :password");
            $sth->execute(array(
                ':email' => $email,
                ':password' => $pass
            ));
            $data = $sth->fetch();
            $count = $sth->rowCount();
            if ($count > 0) {
                Session::set('usuario', array(
                    'id' => $data['id'],
                    'nombre' => utf8_encode($data['nombre']),
                    'email' => utf8_encode($data['email']),
                    'imagen' => utf8_encode($data['imagen'])
                ));
                Session::set('loggedIn', TRUE);
                header('location: ' . URL . 'admin');
            } else {
                $mensaje = '<div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-ban"></i> Error!</h4>
                                Lo sentimos, el usuario o la contraseña ingresadas no coinceden.
                            </div>';
                Session::set('message', $mensaje);
                header('location: ' . URL . 'login/');
            }
        } else {
            header('location: ' . URL . 'login/');
        }
    }

}
