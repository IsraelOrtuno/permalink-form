<?php

namespace Devio\Permalink\Form;

use Devio\Permalink\Permalink;
use Devio\Permalink\HasPermalinks;
use Illuminate\Contracts\View\View;

class PermalinkFormComposer
{
    /**
     * Run the composer.
     *
     * @param View $view
     */
    public function compose(View $view)
    {
        $route = request()->route();

        $permalink = $this->guessPermalinkFromView($view);

        $view->with([
            'permalink'     => $view['permalink'] ?? $permalink ?? [],
            'permalinkPath' => $this->getPermalinkPath($permalink),
            'permalinkData' => array_merge($route->parameters, $view['permalinkData'] ?? [])
        ]);
    }

    /**
     * Get the heritage for the given permalink
     *
     * @param null $permalink
     * @return array|string
     */
    protected function getPermalinkPath($permalink = null)
    {
        return $permalink ? implode('/', Permalink::parentPath($permalink)) : '';
    }

    /**
     * Guess the main permalinkable entity from the view.
     *
     * @param $view
     * @return null
     */
    protected function guessPermalinkFromView($view)
    {
        foreach ($view->getData() as $variable) {
            if (is_object($variable) && in_array(HasPermalinks::class, class_uses_recursive($variable))) {
                return $variable->permalink;
            }
        }

        return null;
    }
}