<?php

namespace Futura\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FuturaUserBundle extends Bundle
{
    public function getParent() {
        return 'FOSUserBundle';
    }
    
}
