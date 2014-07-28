<?php
/**
 * Framework Exception
 *
 * PHP Version 5.4
 *
 * @category Exception
 * @package  Core
 * @author   Antoine Knockaert <antoine.knockaert@epitech.eu>
 * @license  MIT
 * @link     https://github.com/SimpleAPI
 */

namespace SimpleAPI\Core\Exceptions;

/**
 * Class FrameworkException
 *
 * @category Exception
 * @package  Core
 * @author   Antoine Knockaert <antoine.knockaert@epitech.eu>
 * @license  MIT
 * @link     https://github.com/SimpleAPI
 */
class FrameworkException extends HTTPException
{

    public function __construct($message, $error_code) {
        parent::__construct(500, $message, $error_code);
    }
}