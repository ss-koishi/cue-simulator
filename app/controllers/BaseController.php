<?php
require_once('../modules/TemplateEngine.php');

abstract class BaseController
{
    protected $tpl;

    public function __construct()
    {
        $this->tpl = new TemplateEngine();
    }

    /**
     * 渡されたアクションを実行する
     * @param string $action_name アクション名
     */
    public function fireAction(string $action_name): void
    {
        $action = $action_name . "Action";
        if(method_exists($this, $action)) {
            $this->$action();
        } else {
            // TODO: Not found any action
        }
    }
}
