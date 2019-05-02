<?php

namespace Core;

use App\Models\Documents;

class Helper
{

    public static function dnd($data)
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        die();
    }

    public static function currentPage()
    {
        $currentPage = filter_input(INPUT_SERVER, 'REQUEST_URI');
        if ($currentPage == PROOT || $currentPage == PROOT . 'home/index') {
            $currentPage = PROOT . 'home';
        }
        return $currentPage;
    }

    public static function getObjectProperties($obj)
    {
        return get_object_vars($obj);
    }

    public static function uploadsFile($copy_tmp, $copy_path)
    {
        return move_uploaded_file($copy_tmp, $copy_path);
    }

    public static function getRowsDoc()
    {
        $row = new Documents();
        return $row->getRows();
    }
}
