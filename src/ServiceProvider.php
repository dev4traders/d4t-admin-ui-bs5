<?php

namespace D4T\Admin\UI\BS5;

use Dcat\Admin\Admin;
use D4T\Admin\UI\BS5\Setting;
use Dcat\Admin\Enums\ExtensionType;
use Dcat\Admin\Extend\ServiceProvider as ServiceProviderBase;

class ServiceProvider extends ServiceProviderBase
{
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
	}

    public function settingForm()
    {
        return new Setting($this);
    }
}
