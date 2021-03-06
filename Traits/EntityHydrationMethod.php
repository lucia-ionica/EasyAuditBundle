<?php

/*
 * This file is part of the XiideaEasyAuditBundle package.
 *
 * (c) Xiidea <http://www.xiidea.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Xiidea\EasyAuditBundle\Traits;

trait  EntityHydrationMethod
{
    public function fromArray($data = array())
    {
        foreach ($data as $property => $value) {
            $method = sprintf('set%s', ucwords($property));
            $this->$method($value);
        }

        return $this;
    }
}
