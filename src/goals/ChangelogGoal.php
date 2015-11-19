<?php

/*
 * Task runner, code generator and build tool for easier continuos integration
 *
 * @link      https://github.com/hiqdev/hidev
 * @package   hidev
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2014-2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\goals;

/**
 * Goal for CHANGELOG.md file.
 */
class ChangelogGoal extends FileGoal
{
    protected $_fileType = 'changelog';

    public function init()
    {
        $this->setDeps('commits');
    }
}
