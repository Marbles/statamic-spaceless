<?php

namespace Statamic\Addons\Spaceless;

use Statamic\Extend\Tags;

class SpacelessTags extends Tags
{
    /**
     * The {{ spaceless }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        return trim(preg_replace('/>\s+</', '><', $this->parse()));
    }

}
