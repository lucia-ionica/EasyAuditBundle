<?php

/*
 * This file is part of the XiideaEasyAuditBundle package.
 *
 * (c) Xiidea <http://www.xiidea.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Xiidea\EasyAuditBundle\Resolver;

class DefaultEventResolver implements EventResolverInterface
{

    /**
     * @param $event
     *
     * @return array
     */
    public function getEventLogInfo($event = null)
    {
        return array(
            'description'=>$event->getname(),
            'type'=>$event->getname(),
        );
    }
}