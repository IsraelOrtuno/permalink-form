<?php

namespace Devio\Permalink\Form;

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

        $permalinkable = $this->guessPermalinkableFromView($view);

        $view->with([
            'permalink'     => $view['permalink'] ?? $permalinkable->permalink ?? [],
            'permalinkPath' => $this->getPermalinkPath($permalinkable),
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
        if ($permalink) {
            return substr(
                $permalink->final_path, 0, strrpos($permalink->final_path, "/")
            );
        }

        return '';

//        return $permalink ? implode('/', Permalink::parentPath($permalink)) : '';
    }

    /**
     * Guess the main permalinkable entity from the view.
     *
     * @param $view
     * @return null
     */
    protected function guessPermalinkableFromView($view)
    {
        foreach ($view->getData() as $variable) {
            if (is_object($variable) && in_array(HasPermalinks::class, class_uses_recursive($variable))) {
                return $variable;
            }
        }

        return null;
    }
}