<?php

namespace D4T\Admin\UI\BS5;

use Dcat\Admin\Admin;
use D4T\Admin\UI\BS5\Setting;
use Dcat\Admin\Enums\ExtensionType;
use Illuminate\Support\Facades\Storage;
use Dcat\Admin\Extend\ServiceProvider as ServiceProviderBase;

class ServiceProvider extends ServiceProviderBase
{

    public const LOGIN_BG_IMAGE = 'login_bg';

    public static function loginBgImage(): string
    {
        if( !empty(self::setting(self::LOGIN_BG_IMAGE)) )
            return Storage::disk(config('admin.upload.disk'))->url(self::setting(self::LOGIN_BG_IMAGE));

        return admin_asset('@dev4traders.d4t-admin-ui-bs5.path/images/logo.png');
    }

    public function getExtensionType(): ExtensionType
    {
        return ExtensionType::UI;
    }

    protected $js = [
        'js/ui-bs5.js',
    ];

    protected $css = [
        'css/ui-bs5.css'
    ];

    public function init()
    {
        parent::init();

        Admin::requireAssets('@dev4traders.d4t-admin-ui-bs5');

        $this->publishable();


//        dd(self::loginBgImage());
        //dd(admin_asset('@dev4traders.d4t-admin-ui-bs5.path/images/logo.png'));
    }

    public function settingForm()
    {
        return new Setting($this);
    }
}
