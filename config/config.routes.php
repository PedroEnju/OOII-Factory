<?php 

namespace Symfony\Component\Routing\Loader\Configurator;

return function(RoutingConfigurator $routes){
	$routes->add('home','/')
		->controller(['Site\Home','helloWorld']);
	
	$routes->add('produto','/produto')
		->controller(['Site\Produto','listarProdutos']);

	$routes->add('blog','/blog')
		->controller(['Site\Blog','ultimasPostagens']);

	$routes->add('postx','/blog/{post}')
		->controller(['Site\Blog','viewpost'])
		->defaults(['post' => 0])
		->requirements(['post' => '\d+']);

	$routes->add('blogp','/blog/pesquisar')
		->controller(['Site\Blog','pesquisar']);
};