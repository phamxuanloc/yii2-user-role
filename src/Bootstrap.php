<?php
/**
 * Created by Navatech.
 * @project yii2-user-role
 * @author  Phuong
 * @email   phuong17889[at]gmail.com
 * @date    05/07/2016
 * @time    11:50 PM
 */
namespace navatech\role;

use yii\base\Application;
use yii\base\BootstrapInterface;
use yii\i18n\PhpMessageSource;

class Bootstrap implements BootstrapInterface {

	/**
	 * Bootstrap method to be called during application bootstrap stage.
	 *
	 * @param Application $app the application currently running
	 */
	public function bootstrap($app) {
		if (!isset($app->get('i18n')->translations['role*'])) {
			$app->get('i18n')->translations['role*'] = [
				'class'          => PhpMessageSource::className(),
				'basePath'       => __DIR__ . '/messages',
				'sourceLanguage' => 'en-US',
			];
		}
	}
}