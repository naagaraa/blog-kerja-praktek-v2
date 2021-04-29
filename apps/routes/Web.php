<?php

namespace MiniMvc\Apps\Routes\Bootstraping;

use MiniMvc\Apps\Core\Bootstraping\Routes;
use \Bramus\Router\Router;

class Web extends Routes
{
	/**
	 * -------------------------------------------------------------------------------
	 * Documentasi Code Web
	 * Author : nagara
	 * -------------------------------------------------------------------------------
	 * 
	 *  untuk mengatur Route view yang diambil pada controller
	 *  Route menggunakan library bramus/router
	 * 
	 * -------------------------------------------------------------------------------
	 *  Example 
	 * -------------------------------------------------------------------------------
	 * 
	 * 	$router->get('/login', function () {
	 *      // handle here
	 *  	$this->Routing('folder/controller', 'method');
	 *  die;
	 * 	});
	 * 
	 * 	$router->get('/news/{slug}', function ($slug) {
	 * 		// handle here
	 *  	$this->Routing('folder/controller', 'method',[$slug]);
	 *  die;
	 * 	});
	 * 
	 * 	$router->get('/about', function () {
	 * 		// handle here
	 *  	$this->Routing('controller', 'method');
	 * 	die;
	 * 	});
	 * 
	 * 	$router->get('/info', function () {
	 * 		// handle here
	 *  	phpinfo();
	 *  die;
	 * 	});
	 * --------------------------------------------------------------------------------
	 * 
	 * 
	 */

	public function __construct()
	{
		// Create a Router object
		$router = new Router();

		// blog routing
		$router->get('/', function () {
			$this->Routing('blog/HomeController', 'index');
		});
		$router->get('/about', function () {
			$this->Routing('blog/AboutController', 'index');
		});
		$router->get('/feature', function () {
			$this->Routing('blog/FeatureController', 'index');
		});
		$router->get('/news', function () {
			$this->Routing('blog/NewsController', 'index');
		});
		$router->post('/news/search', function () {
			$this->Routing('blog/NewsController', 'search');
		});

		$router->post('/news/view', function () {
			$this->Routing('blog/NewsController', 'viewpost');
		});

		$router->get('/news/page/{slug}', function ($slug) {
			$this->Routing('blog/NewsController', 'page', [$slug]);
		});
		$router->get('/news/detail/{slug}', function ($slug) {
			$this->Routing('blog/NewsController', 'detail', [$slug]);
		});
		$router->get('/service', function () {
			$this->Routing('blog/ServiceController', 'index');
		});
		$router->post('/contact/send', function () {
			$this->Routing('blog/AboutController', 'send');
		});




		
		// admin Route
		$router->post('/register/create', function () {
			$this->Routing('cms/RegisterController', 'create');
		});

		// auth routing
		$router->get('/login', function () {
			$this->Routing('cms/LoginController', 'index');
		});
		$router->post('/login/auth', function () {
			$this->Routing('cms/LoginController', 'auth');
		});
		$router->get('/logout', function () {
			$this->Routing('cms/LoginController', 'logout');
		});
		$router->get('/register', function () {
			$this->Routing('cms/RegisterController', 'index');
		});
	
		// user routing
		$router->get('/user/profile', function () {
			$this->Routing('cms/ProfileController', 'index');
		});
		$router->post('/user/update', function () {
			$this->Routing('cms/ProfileController', 'update');
		});
		$router->get('/user/list', function () {
			$this->Routing('cms/UserController', 'index');
		});
		$router->get('/user/remove/{slug}', function ($slug) {
			$this->Routing('cms/UserController', 'remove', [$slug]);
		});
		$router->get('/user/approve/{slug}', function ($slug) {
			$this->Routing('cms/UserController', 'approve', [$slug]);
		});
		$router->get('/user/unapprove/{slug}', function ($slug) {
			$this->Routing('cms/UserController', 'unapprove', [$slug]);
		});

		// dashboard
		$router->get('/dashboard', function () {
			$this->Routing('cms/DashboardController', 'index');
		});

		// artikel routing
		$router->get('/artikel/edit/{slug}', function ($slug) {
			$this->Routing('cms/NewsController', 'show', [$slug]);
		});
		$router->post('/artikel/update/', function () {
			$this->Routing('cms/NewsController', 'update');
		});
		$router->get('/artikel/tambah', function () {
			$this->Routing('cms/NewsController', 'insert');
		});
		$router->post('/artikel/create', function () {
			$this->Routing('cms/NewsController', 'create');
		});
		$router->get('/artikel/list', function () {
			$this->Routing('cms/NewsController', 'index');
		});
		$router->get('/artikel/remove/{slug}', function ($slug) {
			$this->Routing('cms/NewsController', 'remove', [$slug]);
		});
		$router->get('/artikel/publish/{slug}', function ($slug) {
			$this->Routing('cms/NewsController', 'publishArtikel', [$slug]);
		});
		$router->get('/artikel/unpublish/{slug}', function ($slug) {
			$this->Routing('cms/NewsController', 'unpublishArtikel', [$slug]);
		});

		// report routing
		$router->get('/contact/list', function () {
			$this->Routing('cms/ContactController', 'index');
		});
		$router->get('/contact/preview/{slug}', function ($slug) {
			$this->Routing('cms/ContactController', 'print', [$slug]);
		});
		$router->get('/report', function () {
			$this->Routing('cms/ReportController', 'index');
		});
		$router->get('/visit/list', function () {
			$this->Routing('cms/WebviewController', 'index');
		});

		// theme routing
		$router->get('/theme', function () {
			$this->Routing('cms/ThemeController', 'index');
		});
		$router->get('/theme/sosmed', function () {
			$this->Routing('cms/ThemeController', 'sosmedtheme');
		});
		$router->post('/theme/sosmed/insert', function () {
			$this->Routing('cms/ThemeController', 'insert_sosmedtheme');
		});

		$router->get('/theme/image', function () {
			$this->Routing('cms/ThemeController', 'imagetheme');
		});
		$router->post('/theme/image/insert', function () {
			$this->Routing('cms/ThemeController', 'insert_imagetheme');
		});

		$router->get('/theme/text', function () {
			$this->Routing('cms/ThemeController', 'texttheme');
		});
		$router->post('/theme/text/insert', function () {
			$this->Routing('cms/ThemeController', 'insert_texttheme');
		});



		// test
		$router->get('/info', function () {
			phpinfo();
		});

		// development route
		$router->get('/info-php', function () {
			$this->Routing('welcome', 'show');
		});
		// run route!
		$router->run();
	}
}