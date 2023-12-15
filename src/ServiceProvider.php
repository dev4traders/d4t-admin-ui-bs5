<?php

namespace D4T\Admin\UI\BS5;

use D4T\Admin\UI\BS5\SneatSetting;
use Dcat\Admin\Enums\ExtensionType;
use Dcat\Admin\Extend\ServiceProvider;

class ServiceProvider extends ServiceProvider
{

    public function getExtensionType(): ExtensionType
    {
        return ExtensionType::UI;
    }

	protected $js = [
	    // 'lib/codemirror.js',
		// 'mode/css/css.js',
		// 'mode/php/php.js'
    ];
	protected $css = [
		// 'lib/codemirror.css',
	];

    protected $middleware = [
        // 'middle' => [
        //     SneatUIMiddleware::class,
        // ],
    ];

	public function init()
	{
        parent::init();
	}

    public function settingForm()
    {
        return new Setting($this);
    }
}
