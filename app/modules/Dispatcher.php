<?php

class Dispatcher {

    public function dispatch() {
        // at least       /controller/action1/action2/.../action_n
        // $request  [0]      [1]      [2]      [3]        [n+1]
        $request = explode('/', $_SERVER['REQUEST_URI']);

        if(count($requset) >= 3) {

        } else {
            $controller = new TopViewController();
            $controller->fireAction('show');
        }
    }
}
