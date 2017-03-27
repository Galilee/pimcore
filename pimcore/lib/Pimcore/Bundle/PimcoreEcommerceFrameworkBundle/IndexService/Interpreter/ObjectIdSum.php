<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Bundle\PimcoreEcommerceFrameworkBundle\IndexService\Interpreter;

class ObjectIdSum implements IInterpreter
{
    public static function interpret($value, $config = null)
    {
        $sum = 0;
        if (is_array($value)) {
            foreach ($value as $object) {
                if ($object instanceof \Pimcore\Model\Element\ElementInterface) {
                    $sum += $object->getId();
                }
            }
        }

        return $sum;
    }
}
