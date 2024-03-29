<?php
namespace App\api;
class ApiBase 
{
   protected $session;
   protected $HtmlHelper;
   protected $tablesData;
   public function __construct () {
   }
   public function toError($ErrorMsg)
   {
      http_response_code(500);
      die($ErrorMsg);
   }
   public function toJson($rtnData)
   {
      http_response_code(200);
      return json_encode($rtnData, JSON_UNESCAPED_UNICODE);
   }
}
