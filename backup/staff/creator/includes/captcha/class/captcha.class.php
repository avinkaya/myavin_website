<?php

  /******************************************************************

   Projectname:   CAPTCHA class
   Version:       2.0
   Author:        Pascal Rehfeldt <Pascal@Pascal-Rehfeldt.com>
   Last modified: 15. January 2006

   * GNU General Public License (Version 2, June 1991)
   *
   * This program is free software; you can redistribute
   * it and/or modify it under the terms of the GNU
   * General Public License as published by the Free
   * Software Foundation; either version 2 of the License,
   * or (at your option) any later version.
   *
   * This program is distributed in the hope that it will
   * be useful, but WITHOUT ANY WARRANTY; without even the
   * implied warranty of MERCHANTABILITY or FITNESS FOR A
   * PARTICULAR PURPOSE. See the GNU General Public License
   * for more details.

   Description:
   This class can generate CAPTCHAs, see README for more details!

  ******************************************************************/

  error_reporting(E_ALL);

  require('./class/filter.class.php');  
  require('./class/error.class.php');

  class captcha
  {

    var $Length;
    var $CaptchaString;
    var $fontpath;
    var $fonts;

    function captcha ($length = 5)
    {

      header('Content-type: image/jpeg');
      
      $this->Length   = $length;
      
      //$this->fontpath = dirname($_SERVER['SCRIPT_FILENAME']) . '/fonts/';
      $this->fontpath = './fonts/';      
      $this->fonts    = $this->getFonts();
      $errormgr       = new error;

      if ($this->fonts == FALSE)
      {

      	//$errormgr = new error;
      	$errormgr->addError('No fonts available!');
      	$errormgr->displayError();
      	die();
      	
      }

      if (function_exists('imagettftext') == FALSE)
      {

        $errormgr->addError('');
        $errormgr->displayError();
        die();

      }

      $this->stringGen();

      $this->makeCaptcha();

    } //captcha
    
    function getFonts ()
    {
    
      $fonts = array();
    
      if ($handle = @opendir($this->fontpath))
      {
   
        while (($file = readdir($handle)) !== FALSE)
        {
       
          $extension = strtolower(substr($file, strlen($file) - 3, 3));
       
          if ($extension == 'ttf')
          {
          	
            $fonts[] = $file;
            
          }
        
        }
        
        closedir($handle);

      }
      else
      {
      	
      	return FALSE;
      	
      }
      
      if (count($fonts) == 0)
      {
      	
      	return FALSE;
      	
      }
      else
      {
      	
      	return $fonts;
      	
      }
    
    } //getFonts
    
    function getRandFont ()
    {
    
      return $this->fontpath . $this->fonts[mt_rand(0, count($this->fonts) - 1)];
    
    } //getRandFont

    function stringGen ()
    {

      $uppercase  = range('A', 'Z');
      //$lowercase  = range('a', 'z');
      $numeric    = range(0, 9);

      $CharPool   = array_merge($uppercase, $numeric);
      $PoolLength = count($CharPool) - 1;

      for ($i = 0; $i < $this->Length; $i++)
      {

        $this->CaptchaString .= $CharPool[mt_rand(0, $PoolLength)];

      }

    } //StringGen

    function makeCaptcha ()
    {

      $imagelength = $this->Length * 25 + 10;
      $imageheight = 35;

      $image       = imagecreate($imagelength, $imageheight);

      //$bgcolor     = imagecolorallocate($image, 222, 222, 222);
      $bgcolor     = imagecolorallocate($image, 255, 255, 255);

      $stringcolor = imagecolorallocate($image, 0, 0, 0);

      $filter      = new filters;

      $filter->signs($image, $this->getRandFont());

      for ($i = 0; $i < strlen($this->CaptchaString); $i++)
      {
      
        imagettftext($image, 25, mt_rand(-15, 15), $i * 25 + 10,
                     mt_rand(30, 30),
                     $stringcolor,
                     $this->getRandFont(),
                     $this->CaptchaString{$i});
      
      }

      //$filter->noise($image, 10);
      //$filter->blur($image, 6);

      imagejpeg($image);
      
      imagedestroy($image);

    } //MakeCaptcha

    function getCaptchaString ()
    {

      return $this->CaptchaString;

    } //GetCaptchaString
    
  } //class: captcha

?>
