<?php
declare(strict_types = 1);


namespace Patrikap\Passtore;


use Exception;
use Throwable;

/**
 * Class PkPassException
 * @package Patrikap\Passtore
 *
 * Exception for Pass classes
 *
 * @copyright U-CARD, LLC. (ООО «Ю-КАРД» https://u-crd.ru)
 * @project u-crd.lc
 * @date 31.05.2020 21:35
 * @author Konstantin.K
 */
class PassException extends Exception
{
    /****** CONSTANTS ******/
    /** @var int unknown error code */
    protected const UNKNOWN_ERROR_CODE = 0;
    /** @var int json decode exception */
    public const    JSON_DECODE_EXCEPTION = 1;
    /** @var int no property exception */
    public const    NO_PROPERTY_EXCEPTION = 2;
    /****** MESSAGES ******/
    /** @var string unknown error message */
    protected const UNKNOWN_ERROR_MESSAGE = "Unknown Pass exception";
    /** @var string json decode error message */
    protected const JSON_DECODE_ERROR_MESSAGE = "Can't decode %s from json";
    /** @var string no property error message */
    protected const NO_PROPERTY_ERROR_MESSAGE = "Class %s has no property '%s'";

    /**
     * Возвращает текст сообщения об ошибке, по её коду
     *
     * @param int $code код ошибки
     * @param array|mixed $additional дополнительная информация для исключения
     * @return string
     */
    protected static function getMessageByCode(int $code, array $additional = []): string
    {
        $message = static::UNKNOWN_ERROR_MESSAGE;
        switch ($code) {
            case self::UNKNOWN_ERROR_CODE:
                $message = self::UNKNOWN_ERROR_MESSAGE;
                break;
            case self::JSON_DECODE_EXCEPTION:
                $message = sprintf(static::JSON_DECODE_ERROR_MESSAGE, current($additional));
                break;
            case self::NO_PROPERTY_EXCEPTION:
                $message = sprintf(static::NO_PROPERTY_ERROR_MESSAGE, $additional[0], $additional[1]);
                break;
        }

        return $message;
    }

    /**
     * Возвращает проинициализированный объект исключения
     *
     * @param int $code код ошибки
     * @param array|mixed|null $messageAdditional дополнительная информация для исключения
     * @param Throwable $prevException
     * @return static
     */
    public static function create(int $code, ?array $messageAdditional = null, ?Throwable $prevException = null): self
    {
        return new static(static::getMessageByCode($code, $messageAdditional), $code, $prevException);
    }
}
