<?php
/**
 * Created by PhpStorm.
 * User: DhanPris
 * Date: 15/05/2018
 * Time: 11:51
 */
namespace App\Traits;

trait FileTrait
{

    public function uploadFile($file , $path){

        $extension = $file->getClientOriginalExtension();
        $filename = time().'.' . $extension;
        $file->move(public_path($path), $filename);
        return $path.$filename;
    }
}
