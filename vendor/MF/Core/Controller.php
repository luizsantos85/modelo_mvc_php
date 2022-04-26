<?php

namespace MF\Core;

use \App\Config;

abstract class Controller
{
    protected function redirect(string $url)
    {
        header("Location: " . $this->getBaseUrl() . $url);
        exit;
    }

    private function getBaseUrl()
    {
        $base = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://';
        $base .= $_SERVER['SERVER_NAME'];

        if ($_SERVER['SERVER_PORT'] != '80') {
            $base .= ':' . $_SERVER['SERVER_PORT'];
        }
        $base .= Config::BASE_DIR;

        return $base;
    }

    private function _render(string $folder, string $viewName, array $viewData = [])
    {
        if (file_exists('../app/Views/' . $folder . '/' . $viewName . '.php')) {
            extract($viewData);
            $render = fn ($vN, $vD = []) => $this->renderPartial($vN, $vD);
            $base = $this->getBaseUrl();
            require_once '../app/Views/' . $folder . '/' . $viewName . '.php';
        }
    }

    private function renderPartial(string $viewName, array $viewData = [])
    {
        $this->_render('partials', $viewName, $viewData);
    }

    protected function render(string $viewName, array $viewData = [])
    {
        $this->_render('pages', $viewName, $viewData);
    }
}
