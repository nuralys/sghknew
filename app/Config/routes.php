<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'index', 'Главная'));
	// Router::connectNamed(array('lang'));
	Router::connect('/admin', array('controller' => 'pages', 'action' => 'index', 'admin' => true));
	Router::connect('/test', array('controller' => 'pages', 'action' => 'test'));
	Router::connect('/leaderships', array('controller' => 'leaderships', 'action' => 'index'));
	Router::connect('/albums/*', array('controller' => 'albums', 'action' => 'index'));
	Router::connect('/gallery/*', array('controller' => 'gallery', 'action' => 'index'));
	Router::connect('/news', array('controller' => 'news', 'action' => 'index'));
	Router::connect('/page/*', array('controller' => 'pages', 'action' => 'page'));
	Router::connect('/contacts', array('controller' => 'contacts', 'action' => 'index'));
	Router::connect('/:language', array('controller' => 'pages', 'action' => 'index'),array('language' => '[a-z]{2}'));

	// Router::connect('/:language/pages/*', 
	// 	array('controller' => 'pages', 'action' => 'page'),
	// 	array('language' => '[a-z]{2}')
	// );
	Router::connect('/:language/page/*', 
		array('controller' => 'pages', 'action' => 'page'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/albums/*', 
		array('controller' => 'albums', 'action' => 'index'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/gallery/*', 
		array('controller' => 'gallery', 'action' => 'index'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/news/view/*', 
		array('controller' => 'news', 'action' => 'view'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/leaderships/view/*', 
		array('controller' => 'leaderships', 'action' => 'view'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/:controller/:action/*', 
		array('controller' => ':controller', 'action' => ':action', '*'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/:controller/*', 
		array('controller' => ':controller', 'action' => 'index', '*'),
		array('language' => '[a-z]{2}')
	);
	

	// Router::connect('/:language/:controller/*', 
	// 	array(),
	// 	array('language' => '[a-z]{2}')
	// );
	Router::connect('/admin/users/:action', array('controller' => 'users'));
	Router::connect('/admin/service/:action/*', array('controller' => 'services', 'admin' => true));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'page'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
