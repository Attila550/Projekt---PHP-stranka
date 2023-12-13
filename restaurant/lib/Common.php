<?php

namespace restaurant\lib;

class Common
{
    private $menu = [
        1 => [
            "Home" => "index.php",
            "Story" => "about.php",
            "Menu" => "menu.php",
            "Our Updates" => "news.php"
        ]
    ];
    public function printRow(int $numOfRows, string $mainText, string $secondText): string
    {
        $html = "";
        for ($i = 0; $i < $numOfRows; $i++) {
            $html .= '<div class="row">
        <div class="col-50">
          <h2>'.$mainText.'</h2>
        </div>
        <div class="col-50">
          '.$secondText.'
        </div>
      </div>';
        }

        return $html;
    }

    public function getMenu(int $type): void
    {
        $printMenu = "";

        if($type === 1) {
            foreach ($this->menu[$type] as $menuName => $menuUrl) {
                $printMenu .= '<li><a href="'.$menuUrl.'">'.$menuName.'</a></li>';
            }
        } else {
            throw new \Exception('Nevalidne menu');
        }

        echo $printMenu;
    }

   
}