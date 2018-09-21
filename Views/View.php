<?php
namespace Views;

/**
 * Class View
 * @package Views
 */
class View {

    /**
     * @param $view
     */
    public function renderView($view)
    {
        $view .= '.php';

        include ($view);
    }

}