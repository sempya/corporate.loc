<?php

namespace Corp\Repositories;

use Corp\Portfolio;

class PortfoliosRepository extends \Corp\Repositories\Repository
{
    public function __construct(Portfolio $portfolio)
    {
        $this->model = $portfolio;
    }

    public function one($alias, $attr = array())
    {
        $portfolio = parent::one($alias, $attr);

        if ($portfolio && $portfolio->img)
        {
            $portfolio->img = json_decode($portfolio->img);
        }
        return $portfolio;
    }
}