<?php namespace App\Libs;
use Auth;
use Image;
class Imag {
  public function url($path=null,$directory=null,$name=null){
  if(!$directory){
  $directory='uploads';
}
  if($path!=null) {
    $dir=public_path().$directory;
    if(!file_exists($dir)){
    mkdir($dir, 0777, true);
    }
    $img=Image::make($path);//создали
    
    $filename=($name!=null)?$name:date('y_m_d_h_i_s').'.jpg';
    $img->resize(600, null, function ($constraint) {
      $constraint->aspectRatio();
  });
    $img->save($dir.'/'.$filename);


    $img->resize(300, null, function ($constraint) {
      $constraint->aspectRatio();
  });
    $img->save($dir.'/s'.$filename);


    $img->resize(100, null, function ($constraint) {
      $constraint->aspectRatio();
  });
    $img->save($dir.'/ss'.$filename);
    return $filename;
  } else {
    return false;
  }

  }
  
}