<?php

	ob_start();
	ini_set('session.gc_maxlifetime', 120);
	// session_set_cookie_params(600);
	session_cache_expire(2);
	session_start();

	require __DIR__ . DIRECTORY_SEPARATOR . "vendor". DIRECTORY_SEPARATOR ."autoload.php";

	use CoffeeCode\Router\Router;

	$router = new Router(site());
	$router->namespace("Source\Controllers");

	/**
	 * routes
	 * The controller must be in the namespace Test\Controller
	 * this produces routes for route, route/$id, route/{$id}/profile, etc.
	 */

	// Loja
	$router->get("/", "AppSite:home", "appsite.home");

	

	// Painel de Controle
	$router->group("admin");

	// Get
	$router->get("/", "WebAdmin:login", "webadmin.login");
	$router->get("/logout", "App:logout", "app.logout");

	$router->get("/painel", "App:home", "app.home");
	$router->get("/painel/cadastro", "App:register", "app.register");
	$router->get("/painel/gerenciadores", "App:managers", "app.managers");
	$router->get("/painel/registros", "App:records", "app.records");
	$router->get("/painel/UI-icons", "App:icons", "app.icons");
	$router->get("/painel/modules", "App:modules", "app.modules");

	// Post
	$router->post("/", "Auth:login", "auth.login");

	// Erros
	$router->group("opss");
	$router->get("/{errcode}", "App:error", "app.error");

	/*
	** Route Process
	*/

	$router->dispatch();

	/*
	** Erros Process
	*/

	if ($router->error()) {
	    $router->redirect("app.error", ["errcode" => $router->error()]);
	}

	ob_end_flush();

?>