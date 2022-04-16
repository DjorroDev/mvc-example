<?php

// This Class Flash massage for detecting and notify when there is
// change data on website like doing CRUD

class Flasher
{

    public static function setFlash($msg, $act, $type)
    {
        $_SESSION['flash'] = [
            'msg' => $msg,
            'act' => $act,
            'type' => $type
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible fade show" role="alert">
                    Seiyuu <strong>' . $_SESSION['flash']['msg'] . '</strong> ' . $_SESSION['flash']['act'] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
        }

        unset($_SESSION['flash']);
    }
}
