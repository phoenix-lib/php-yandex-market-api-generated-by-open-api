<?php
/**
 * OrdersStatsSubsidyOperationType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Партнерский API Маркета
 *
 * API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.  В числе возможностей интеграции:  * управление каталогом товаров и витриной,  * обработка заказов,  * изменение настроек магазина,  * получение отчетов.
 *
 * The version of the OpenAPI document: LATEST
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * OrdersStatsSubsidyOperationType Class Doc Comment
 *
 * @category Class
 * @description Тип операции с баллами, которые используются для уменьшения стоимости размещения:  * &#x60;ACCRUAL&#x60; — начисление баллов. * &#x60;DEDUCTION&#x60; — списание баллов.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrdersStatsSubsidyOperationType
{
    /**
     * Possible values of this enum
     */
    public const ACCRUAL = 'ACCRUAL';

    public const DEDUCTION = 'DEDUCTION';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACCRUAL,
            self::DEDUCTION
        ];
    }
}


