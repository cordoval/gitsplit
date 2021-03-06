<?php

/*
 * This file is part of the GitSplit package.
 *
 * Copyright (c) 2015 Marc Morera
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */

namespace Gitsplit\EngineBundle\Factory;

use Gitsplit\EngineBundle\Entity\Suite;
use Gitsplit\EngineBundle\Entity\Work;

/**
 * Class WorkFactory
 */
class WorkFactory
{
    /**
     * @param Suite  $suite
     * @param string $path
     * @param string $remote
     *
     * @return Suite
     */
    public function create(
        Suite $suite,
        $path,
        $remote
    )
    {
        return new Work(
            $suite,
            $path,
            $remote
        );
    }
}
