<?php

class Router {

	private $routes = array();

	public function route($method, $pattern, $callback, $args) {
		$pattern = '/^' . str_replace('/', '\/', $pattern) . '[\?a-zA-Z0-9=_&-]*$/';
		$this->routes[$pattern] = array(
            'method' => $method,
            'callback' => $callback,
            'args' => $args
        );
	}

	public function execute($url) {
		foreach ($this->routes as $pattern => $info) {
			if ($info['method'] == $_SERVER['REQUEST_METHOD'] && preg_match($pattern, $url, $params) === 1) {
				array_shift($params);
				return call_user_func_array($info['callback'], $info['args']);
			}
		}
	}

}
