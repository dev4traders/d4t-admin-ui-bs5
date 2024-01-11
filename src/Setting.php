<?php

namespace D4T\Admin\UI\BS5;

use Dcat\Admin\Extend\Setting as Form;

class Setting extends Form
{
    public function title()
    {
        return ServiceProvider::trans('ui-bs5.title');
    }

    public function form()
    {
        $this->image(ServiceProvider::LOGIN_BG_IMAGE, ServiceProvider::trans('ui-bs5.login_bg_image'))->autoUpload();
    }
}
