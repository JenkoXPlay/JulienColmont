<?php
class Router {
	private $uri;
	private $routes;
	public $params;
	private $otherwise;
	
	public function __construct() {
		$this->routes = array();
		$this->uri = $_SERVER['REQUEST_URI'];
	}
	
	public function setRoutes($route, $page) {
		$array = array('route' => $route, 'page' => $page);
		array_push($this->routes, $array);
	}
	
	public function setOtherwise($action, $truc) {
		$array = array('action' => $action, 'truc' => $truc);
		$this->otherwise = $array;
	}
	
	public function search() {
		// Pour chaque routes, on fait une variable route
		foreach($this->routes as $route) {
			$exUri = explode('/', $this->uri);
			$exRoute = explode('/', $route['route']);
			// Si il y a des paramètres, on les recup
			if(preg_match('#:([a-z0-9\-_]+)#i', $route['route'], $matches)) {
				if(count($exUri) == count($exRoute)) {
					$params = array_splice($matches, 1);
					foreach($params as $value) {
						$paramPosition = array_search(':'.$value, $exRoute);
						$exRoute[$paramPosition] = $exUri[$paramPosition];
						$this->params[$value] = $exUri[$paramPosition];
					}
				}
			}
			if($exUri == $exRoute) {
				include_once($route['page']);
				return;
			}
		}
		if($this->otherwise['action'] == 'page')
			include_once($this->otherwise['truc']);
		else
			header('Location: '.$this->otherwise['truc']);
	}
}

$router = new Router();

$router->setRoutes('/DevStorm/', 'index.php');
$router->setRoutes('/home', 'index.php');
$router->setRoutes('/portfolio', 'portfolio.php');
$router->setRoutes('/projet/:id', 'projet.php');
$router->setRoutes('/contact', 'contact.php');
$router->setRoutes('/about', 'about.php');
//$router->setRoutes('/profil/:pseudo', 'profile_user.php');
$router->setOtherwise('page', 'erreur.php');

$router->search();