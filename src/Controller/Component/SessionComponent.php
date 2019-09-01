<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class SessionComponent extends Component
{
  private $val;
    public function getsession($var)
    {
        $this->val = $var;
    }

    public function setsession()
    {
        echo $this->val;
    }
}
