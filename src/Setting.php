<?php

namespace D4T\Admin\UI\BS5;

use Dcat\Admin\Extend\Setting as Form;

class Setting extends Form
{
    public function title()
    {
        return $this->trans('bs5-ui.title');
    }

    public function form()
    {
        $this->text('direction');
    }
}
