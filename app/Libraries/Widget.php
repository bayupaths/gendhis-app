<?php

namespace App\Libraries;

class Widget
{
    public function latesPost(array $params)
    {
        return view('widget/lates_post', $params);
    }
}
