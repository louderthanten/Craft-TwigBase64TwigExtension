<?php

namespace Craft;

class TwigBase64Extension extends \Twig_Extension
{
  public function getFilters() {
    return array(
      'base64_encode' => new \Twig_Filter_Method($this, 'base64Encode'),
      'base64_decode' => new \Twig_Filter_Method($this, 'base64Decode'),
    );
  }

  public function getName() {
      return 'Twig Base 64 Extension';
  }

  public function base64Encode($str){
      return base64_encode($str);
  }

  public function base64Decode($str){
      return base64_decode($str);
  }
}
