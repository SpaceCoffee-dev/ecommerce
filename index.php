<?php

	ob_start();
	ini_set('session.gc_maxlifetime', 432000);
	session_set_cookie_params(432000);
	session_cache_expire(432000);
	date_default_timezone_set("America/Sao_Paulo");
	if(!isset($_SESSION) && empty($_SESSION)) {
	  session_start();
	}

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
	$router->get("/painel/clientes", "App:records", "app.records");
	$router->get("/painel/icones", "App:icons", "app.icons");
	$router->get("/painel/modulos", "App:modules", "app.modules");
	$router->get("/painel/modulos/add", "App:Newmodules", "app.newmodules");

	// Post
	$router->post("/", "Auth:login", "auth.login");
	$router->post("/painel/cadastro/novo", "Auth:register", "auth.register");
	$router->get("/painel/cadastro/remove/{id}", "Auth:remove", "auth.remove");
	$router->get("/painel/cadastro/module-remove/{id}", "App:modRemove", "app.modremove");

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