<?php
namespace App\ui;
class HtmlHelper
{
    /*
     * コンストラクタ
     */
    public function __construct() {}
    //get BaseHtml
    public function getBaseHtml()
    {    
        $publicDir = 'public20220304';
        $html  = '';
        $html .= '<link rel="icon" type="image/gif/png" href="' . $publicDir . '/images/logo.jpg">';
        $html .= '<link rel="stylesheet" href="' . $publicDir . '/css/tho.css">';
        $html .= '<link rel="stylesheet" href="' . $publicDir . '/webix/webix.css" type="text/css">';
        $html .= '<script src="' . $publicDir . '/webix/webix.js" type="text/javascript"></script>';
        $html .= '<script src="' . $publicDir . '/js/THO.js" type="text/javascript"></script>';
        $baseHtml = [
            'header' => $html,
            'logo'   => '<img class="logo" src="' . $publicDir . '/images/logo.jpg" width="60" height="60">',
        ];
        return $baseHtml;
    }
}