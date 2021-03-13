<?php
class App
{
    protected $controller = "Home";
    protected $action = "index";
    protected $params = [];
    protected $is404 = false;

    function __construct()
    {
        $this->params = $this->UrlProcess();
        $this->setController();
        $this->setAction();
        $this->setParameters();
        $this->routeExecute();
    }

    public function UrlProcess()
    {
        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }

    public function setController()
    {
        if ( isset($this->params[0]) ) {
            $this->controller = ucfirst($this->params[0]);
            unset($this->params[0]);
        }

        if( !file_exists("./mvc/controllers/".$this->controller.".php") ){
            $this->setErrorHandle404();
        }

        $this->includeController();
    }

    public function setAction()
    {
        if( $this->is404 ) return;

        if ( isset($this->params[1]) ) {
            $this->action = $this->params[1];
            unset($this->params[1]);
        }

        if (!method_exists( $this->controller, $this->action)) {
            $this->setErrorHandle404();
            $this->includeController();
        }
    }

    public function routeExecute()
    {
        call_user_func_array([$this->controller, $this->action], $this->params );
    }

    public function setParameters()
    {
        $this->params = $this->params ? array_values($this->params) : [];
    }

    public function setErrorHandle404()
    {
        $this->controller = 'ErrorHandler';
        $this->action = 'show404';
        $this->is404 = true;
    }

    public function includeController()
    {
        require_once "./mvc/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;
    }
}