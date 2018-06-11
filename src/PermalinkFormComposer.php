<?php

namespace Devio\Permalink\Form;

use Devio\Permalink\Permalink;
use Devio\Permalink\HasPermalinks;
use Illuminate\Contracts\View\View;

class PermalinkFormComposer
{
    public function compose(View $view)
    {
        $route = request()->route();

        $permalink = $this->getPermalinkFromView($view);

        $view->with([
            'permalink'     => $view['permalink'] ?? $permalink ?? [],
            'permalinkPath' => implode('/', Permalink::parentPath($permalink)),
            'permalinkData' => array_merge($route->parameters, $view['permalinkData'] ?? [])
        ]);
    }

    protected function getPermalinkFromView($view)
    {
        foreach ($view->getData() as $variable) {
            if (is_object($variable) && in_array(HasPermalinks::class, class_uses_recursive($variable))) {
                return $variable->permalink;
            }
        }

        return null;
    }
}