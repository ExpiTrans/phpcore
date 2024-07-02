<?php
/**
 * User: Expitrans
 * Date: 7/25/2024
 * Time: 10:13 AM
 */

namespace expitrans\mvccore;

use expitrans\mvccore\db\DbModel;

/**
 * Class UserModel
 *
 * @author  Irish <irish@expitrans.com>
 * @package expitrans\mvccore
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}