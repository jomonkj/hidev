<?php

/*
 * Task runner, code generator and build tool for easier continuos integration
 *
 * @link      https://hidev.me/
 * @package   hidev
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2014-2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\goals;

/**
 * Update goal.
 */
class UpdateGoal extends DefaultGoal
{
    public function actionPerform()
    {
        exec('cd .hidev;composer update --prefer-source');
        $this->module->runRequest('');
    }
}