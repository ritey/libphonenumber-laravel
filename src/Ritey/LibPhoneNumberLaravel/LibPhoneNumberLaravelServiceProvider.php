<?php namespace Ritey\LibPhoneNumberLaravel;
/**
* Libphonenumber-for-php service provider package for Laravel by David Wright.
*
* NOTICE OF LICENSE
*
* Licensed under the terms from David Wright
*
* @package LibPhoneNumberLaravel
* @version 1.0.0
* @author @ritey
* @license MIT
* @copyright (c) 2015, David Wright
* @link http://twitter.com/ritey
*/

use Illuminate\Support\ServiceProvider;
use libphonenumber\PhoneNumberUtil;

class LibPhoneNumberLaravelServiceProvider extends ServiceProvider {

	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{

	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('libphonenumber', function ($app)
		{
			return PhoneNumberUtil::getInstance();
		});

		$this->app->alias('libphonenumber', 'libphonenumber\PhoneNumberUtil');
	}

	 /**
     * Get the services provided by the provider.
     *
	 * @return array
	 */
	public function provides()
	{
		return ['libphonenumber','libphonenumber\PhoneNumberUtil'];
	}
}