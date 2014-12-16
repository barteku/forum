<?php

namespace Futura\ForumBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FuturaForumBundle extends Bundle
{
    public function getParent(){
        return "CCDNForumForumBundle";
    }
}
