<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base;


use Patrikap\Passtore\Base\TopLevel\AssociatedAppKeys;
use Patrikap\Passtore\Base\TopLevel\ExpirationKeys;
use Patrikap\Passtore\Base\TopLevel\RelevanceKeys;
use Patrikap\Passtore\Base\TopLevel\StandardKeys;

/**
 * Class AbstractPass
 * @package Patrikap\Passtore\Base
 *
 * Abstract Pass class
 *
 * Top-Level Keys:
 * The top level of the pass.json file is a dictionary. The following sections list the required and optional keys used
 *     in this dictionary. For each key whose value is a dictionary or an array of dictionaries, there is also a
 *     section in Lower-Level Keys that lists the keys for that dictionary.
 *
 * Lower-Level Keys:
 * Keys that are used lower in the hierarchy of the pass.json file—for example, in a dictionary that is the value of a
 *     top-level key.
 *
 * Field Dictionary Keys:
 * Keys, used at the lowest level of the pass.json file, that define an individual field.
 *
 * @copyright U-CARD, Ltd. (ООО «Ю-КАРД» http://u-crd.ru)
 * @project passtore
 * @date 31.05.2020 23:04
 * @author Konstantin.K
 */
abstract class AbstractPass
{
    use StandardKeys, AssociatedAppKeys, ExpirationKeys, RelevanceKeys;
}
