<?php
namespace UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UserBundle extends bundle{

    public function getParent()
    {
        return 'FOSUserBundle';
    }
}


