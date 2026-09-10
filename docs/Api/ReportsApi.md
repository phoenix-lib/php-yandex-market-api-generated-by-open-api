# OpenAPI\Client\ReportsApi



All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateBannersStatisticsReport()**](ReportsApi.md#generateBannersStatisticsReport) | **POST** /v2/reports/banners-statistics/generate | Отчет по охватному продвижению |
| [**generateBarcodesReport()**](ReportsApi.md#generateBarcodesReport) | **POST** /v1/reports/documents/barcodes/generate | Получение файла со штрихкодами |
| [**generateBoostConsolidatedReport()**](ReportsApi.md#generateBoostConsolidatedReport) | **POST** /v2/reports/boost-consolidated/generate | Отчет по бусту продаж |
| [**generateClosureDocumentsDetalizationReport()**](ReportsApi.md#generateClosureDocumentsDetalizationReport) | **POST** /v2/reports/closure-documents/detalization/generate | Отчет по схождению с закрывающими документами |
| [**generateClosureDocumentsReport()**](ReportsApi.md#generateClosureDocumentsReport) | **POST** /v2/reports/closure-documents/generate | Закрывающие документы |
| [**generateCompetitorsPositionReport()**](ReportsApi.md#generateCompetitorsPositionReport) | **POST** /v2/reports/competitors-position/generate | Отчет «Конкурентная позиция» |
| [**generateGoodsFeedbackReport()**](ReportsApi.md#generateGoodsFeedbackReport) | **POST** /v2/reports/goods-feedback/generate | Отчет по отзывам о товарах |
| [**generateGoodsMovementReport()**](ReportsApi.md#generateGoodsMovementReport) | **POST** /v2/reports/goods-movement/generate | Отчет по движению товаров |
| [**generateGoodsPricesReport()**](ReportsApi.md#generateGoodsPricesReport) | **POST** /v2/reports/goods-prices/generate | Отчет «Цены» |
| [**generateGoodsRealizationReport()**](ReportsApi.md#generateGoodsRealizationReport) | **POST** /v2/reports/goods-realization/generate | Отчет по реализации |
| [**generateGoodsTurnoverReport()**](ReportsApi.md#generateGoodsTurnoverReport) | **POST** /v2/reports/goods-turnover/generate | Отчет по оборачиваемости |
| [**generateJewelryFiscalReport()**](ReportsApi.md#generateJewelryFiscalReport) | **POST** /v2/reports/jewelry-fiscal/generate | Отчет по заказам с ювелирными изделиями |
| [**generateKeyIndicatorsReport()**](ReportsApi.md#generateKeyIndicatorsReport) | **POST** /v2/reports/key-indicators/generate | Отчет по ключевым показателям |
| [**generateMarketingDetalizationReport()**](ReportsApi.md#generateMarketingDetalizationReport) | **POST** /v1/businesses/{businessId}/reports/marketing-detalization/generate | Отчет по счету маркетинга |
| [**generateMassOrderLabelsReport()**](ReportsApi.md#generateMassOrderLabelsReport) | **POST** /v2/reports/documents/labels/generate | Готовые ярлыки‑наклейки на все коробки в нескольких заказах |
| [**generateSalesGeographyReport()**](ReportsApi.md#generateSalesGeographyReport) | **POST** /v2/reports/sales-geography/generate | Отчет по географии продаж |
| [**generateShelfsStatisticsReport()**](ReportsApi.md#generateShelfsStatisticsReport) | **POST** /v2/reports/shelf-statistics/generate | Отчет по полкам |
| [**generateShipmentListDocumentReport()**](ReportsApi.md#generateShipmentListDocumentReport) | **POST** /v2/reports/documents/shipment-list/generate | Получение листа сборки |
| [**generateShowsBoostReport()**](ReportsApi.md#generateShowsBoostReport) | **POST** /v2/reports/shows-boost/generate | Отчет по бусту показов |
| [**generateShowsSalesReport()**](ReportsApi.md#generateShowsSalesReport) | **POST** /v2/reports/shows-sales/generate | Отчет «Аналитика продаж» |
| [**generateStocksOnWarehousesReport()**](ReportsApi.md#generateStocksOnWarehousesReport) | **POST** /v2/reports/stocks-on-warehouses/generate | Отчет по остаткам на складах |
| [**generateStocksReport()**](ReportsApi.md#generateStocksReport) | **POST** /v3/businesses/{businessId}/reports/stocks/generate | Отчет по остаткам на складах партнера |
| [**generateUnitedMarketplaceServicesReport()**](ReportsApi.md#generateUnitedMarketplaceServicesReport) | **POST** /v2/reports/united-marketplace-services/generate | Отчет по стоимости услуг |
| [**generateUnitedNettingReport()**](ReportsApi.md#generateUnitedNettingReport) | **POST** /v2/reports/united-netting/generate | Отчет по платежам |
| [**generateUnitedOrdersReport()**](ReportsApi.md#generateUnitedOrdersReport) | **POST** /v2/reports/united-orders/generate | Отчет по заказам |
| [**generateUnitedReturnsReport()**](ReportsApi.md#generateUnitedReturnsReport) | **POST** /v2/reports/united-returns/generate | Отчет по невыкупам и возвратам |
| [**getReportInfo()**](ReportsApi.md#getReportInfo) | **GET** /v2/reports/info/{reportId} | Получение заданного отчета или документа |


## `generateBannersStatisticsReport()`

```php
generateBannersStatisticsReport($generate_banners_statistics_request, $format, $source_type): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по охватному продвижению

{% include notitle [access](../../_auto/method_scopes/generateBannersStatisticsReport.md) %}  Запускает генерацию сводного отчета по охватному продвижению. {% if audience == \"partner\" %}Что это за отчет: [для баннеров](https://yandex.ru/support/marketplace/ru/marketing/advertising-tools/banner#statistics), [для пуш-уведомлений](https://yandex.ru/support/marketplace/ru/marketing/advertising-tools/push-notifications#statistics).{% endif %}  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/incuts/banners_statistics.md) %}  {% if audience != \"advertiser\" %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-400-days.md) %}  {% endif %}  {% include notitle [limit](../../_auto/method_limits/generateBannersStatisticsReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_banners_statistics_request = new \OpenAPI\Client\Model\GenerateBannersStatisticsRequest(); // \OpenAPI\Client\Model\GenerateBannersStatisticsRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.
$source_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SourceType(); // \OpenAPI\Client\Model\SourceType | Признак типа кабинета, от имени которого вызывается метод: {% if audience == \"partner\" %}  - `SELLER` — продавец.  {% endif %}  - `ADVERTISER` — рекламодатель.  {% if audience == \"advertiser\" %}  {% note info \"Обязательно указывайте sourceType=ADVERTISER в каждом запросе.\" %}     {% endnote %}  {% endif %}

try {
    $result = $apiInstance->generateBannersStatisticsReport($generate_banners_statistics_request, $format, $source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateBannersStatisticsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_banners_statistics_request** | [**\OpenAPI\Client\Model\GenerateBannersStatisticsRequest**](../Model/GenerateBannersStatisticsRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |
| **source_type** | [**\OpenAPI\Client\Model\SourceType**](../Model/.md)| Признак типа кабинета, от имени которого вызывается метод: {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  - &#x60;SELLER&#x60; — продавец.  {% endif %}  - &#x60;ADVERTISER&#x60; — рекламодатель.  {% if audience &#x3D;&#x3D; \&quot;advertiser\&quot; %}  {% note info \&quot;Обязательно указывайте sourceType&#x3D;ADVERTISER в каждом запросе.\&quot; %}     {% endnote %}  {% endif %} | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateBarcodesReport()`

```php
generateBarcodesReport($generate_barcodes_report_request): \OpenAPI\Client\Model\GenerateReportResponse
```

Получение файла со штрихкодами

{% include notitle [access](../../_auto/method_scopes/generateBarcodesReport.md) %}  Запускает генерацию PDF-файла со штрихкодами переданных товаров или товаров в указанной заявке на поставку.  Файл не получится сгенерировать, если в нем будет более 1 500 штрихкодов.  Узнать статус генерации и получить ссылку на готовый файл можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [limit](../../_auto/method_limits/generateBarcodesReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_barcodes_report_request = new \OpenAPI\Client\Model\GenerateBarcodesReportRequest(); // \OpenAPI\Client\Model\GenerateBarcodesReportRequest

try {
    $result = $apiInstance->generateBarcodesReport($generate_barcodes_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateBarcodesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_barcodes_report_request** | [**\OpenAPI\Client\Model\GenerateBarcodesReportRequest**](../Model/GenerateBarcodesReportRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateBoostConsolidatedReport()`

```php
generateBoostConsolidatedReport($generate_boost_consolidated_request, $format, $source_type): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по бусту продаж

{% include notitle [access](../../_auto/method_scopes/generateBoostConsolidatedReport.md) %}  Запускает генерацию сводного отчета по бусту продаж за заданный период. {% if audience == \"partner\" %}[Что такое буст продаж](https://yandex.ru/support/marketplace/ru/marketing/campaigns){% endif %}  Отчет содержит информацию по всем кампаниям, созданным и через API, и в кабинете.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports]({{ report-columns-boost-consolidated }}) %}  {% if audience != \"advertiser\" %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-400-days.md) %}  {% endif %}  {% include notitle [limit](../../_auto/method_limits/generateBoostConsolidatedReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_boost_consolidated_request = new \OpenAPI\Client\Model\GenerateBoostConsolidatedRequest(); // \OpenAPI\Client\Model\GenerateBoostConsolidatedRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.
$source_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SourceType(); // \OpenAPI\Client\Model\SourceType | Признак типа кабинета, от имени которого вызывается метод: {% if audience == \"partner\" %}  - `SELLER` — продавец.  {% endif %}  - `ADVERTISER` — рекламодатель.  {% if audience == \"advertiser\" %}  {% note info \"Обязательно указывайте sourceType=ADVERTISER в каждом запросе.\" %}     {% endnote %}  {% endif %}

try {
    $result = $apiInstance->generateBoostConsolidatedReport($generate_boost_consolidated_request, $format, $source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateBoostConsolidatedReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_boost_consolidated_request** | [**\OpenAPI\Client\Model\GenerateBoostConsolidatedRequest**](../Model/GenerateBoostConsolidatedRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |
| **source_type** | [**\OpenAPI\Client\Model\SourceType**](../Model/.md)| Признак типа кабинета, от имени которого вызывается метод: {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  - &#x60;SELLER&#x60; — продавец.  {% endif %}  - &#x60;ADVERTISER&#x60; — рекламодатель.  {% if audience &#x3D;&#x3D; \&quot;advertiser\&quot; %}  {% note info \&quot;Обязательно указывайте sourceType&#x3D;ADVERTISER в каждом запросе.\&quot; %}     {% endnote %}  {% endif %} | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateClosureDocumentsDetalizationReport()`

```php
generateClosureDocumentsDetalizationReport($generate_closure_documents_detalization_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по схождению с закрывающими документами

{% include notitle [access](../../_auto/method_scopes/generateClosureDocumentsDetalizationReport.md) %}  Запускает генерацию отчета по схождению с закрывающими документами в зависимости от типа договора.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% list tabs %}  - Договор на размещение    {% include notitle [reports](../../_auto/reports/period_closure/period_closure_income.md) %}  - Договор на продвижение    {% include notitle [reports](../../_auto/reports/period_closure/period_closure_outcome.md) %}  {% endlist %}  {% include notitle [limit](../../_auto/method_limits/generateClosureDocumentsDetalizationReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_closure_documents_detalization_request = new \OpenAPI\Client\Model\GenerateClosureDocumentsDetalizationRequest(); // \OpenAPI\Client\Model\GenerateClosureDocumentsDetalizationRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateClosureDocumentsDetalizationReport($generate_closure_documents_detalization_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateClosureDocumentsDetalizationReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_closure_documents_detalization_request** | [**\OpenAPI\Client\Model\GenerateClosureDocumentsDetalizationRequest**](../Model/GenerateClosureDocumentsDetalizationRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateClosureDocumentsReport()`

```php
generateClosureDocumentsReport($generate_closure_documents_request): \OpenAPI\Client\Model\GenerateReportResponse
```

Закрывающие документы

{% include notitle [access](../../_auto/method_scopes/generateClosureDocumentsReport.md) %}  Возвращает ZIP-архив с закрывающими документами в формате PDF за указанный месяц.  {% cut \"Состав документов в зависимости от типа договора\" %}  * **Договор на размещение**    * [акт об оказанных услугах](*acts-main-act)   * [счет-фактура](*acts-main-invoice)   * [сводный отчет по данным статистики](*acts-main-report)   * [отчет об исполнении поручения и о зачете взаимных требований](*acts-main-agent) (отчет агента)  * **Договор на продвижение** (в России не заключается после 30 сентября 2024 года)    * [акт об оказании услуг](*acts-discounts-act)   * [счет-фактура](*acts-discounts-invoice), если этого требует схема налогообложения  * **Договор на маркетинг**    * [акт об оказанных услугах](*acts-marketing-act)   * [счет-фактура](*acts-main-invoice)   * [счет-фактура на аванс](*acts-marketing-invoice)   * [выписка по лицевому счету](*acts-marketing-account)   * [детализация к акту](*acts-marketing-details)  {% endcut %}  Узнать статус генерации и получить ссылку на архив можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [limit](../../_auto/method_limits/generateClosureDocumentsReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_closure_documents_request = new \OpenAPI\Client\Model\GenerateClosureDocumentsRequest(); // \OpenAPI\Client\Model\GenerateClosureDocumentsRequest

try {
    $result = $apiInstance->generateClosureDocumentsReport($generate_closure_documents_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateClosureDocumentsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_closure_documents_request** | [**\OpenAPI\Client\Model\GenerateClosureDocumentsRequest**](../Model/GenerateClosureDocumentsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateCompetitorsPositionReport()`

```php
generateCompetitorsPositionReport($generate_competitors_position_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет «Конкурентная позиция»

{% include notitle [access](../../_auto/method_scopes/generateCompetitorsPositionReport.md) %}  Запускает генерацию отчета «Конкурентная позиция» за заданный период. [Что это за отчет](https://yandex.ru/support2/marketplace/ru/analytics/competitors.html)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% note info \"Значение -1 в отчете\" %}  Если в CSV-файле в столбце :no-translate[**POSITION**] стоит -1, в этот день не было заказов с товарами в указанной категории.  {% endnote %}  {% include notitle [reports](../../_auto/reports/masterstat/competitors_position.md) %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-400-days.md) %}  {% include notitle [limit](../../_auto/method_limits/generateCompetitorsPositionReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_competitors_position_report_request = new \OpenAPI\Client\Model\GenerateCompetitorsPositionReportRequest(); // \OpenAPI\Client\Model\GenerateCompetitorsPositionReportRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateCompetitorsPositionReport($generate_competitors_position_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateCompetitorsPositionReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_competitors_position_report_request** | [**\OpenAPI\Client\Model\GenerateCompetitorsPositionReportRequest**](../Model/GenerateCompetitorsPositionReportRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateGoodsFeedbackReport()`

```php
generateGoodsFeedbackReport($generate_goods_feedback_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по отзывам о товарах

{% include notitle [access](../../_auto/method_scopes/generateGoodsFeedbackReport.md) %}  Запускает генерацию отчета по отзывам о товарах. [Что это за отчет](https://yandex.ru/support/marketplace/ru/marketing/plus-reviews#stat)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/paid_opinion_models/paid_opinion_models.md) %}  {% include notitle [tariff-period](../../_includes/common/simultaneously-generated-reports-amount.md) %}  {% include notitle [limit](../../_auto/method_limits/generateGoodsFeedbackReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_feedback_request = new \OpenAPI\Client\Model\GenerateGoodsFeedbackRequest(); // \OpenAPI\Client\Model\GenerateGoodsFeedbackRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateGoodsFeedbackReport($generate_goods_feedback_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateGoodsFeedbackReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_feedback_request** | [**\OpenAPI\Client\Model\GenerateGoodsFeedbackRequest**](../Model/GenerateGoodsFeedbackRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateGoodsMovementReport()`

```php
generateGoodsMovementReport($generate_goods_movement_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по движению товаров

{% include notitle [access](../../_auto/method_scopes/generateGoodsMovementReport.md) %}  Запускает генерацию отчета по движению товаров. [Что это за отчет](https://yandex.ru/support/marketplace/analytics/reports-fby-fbs.html#flow)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/sku/movement/movement_config.md) %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-unchanged.md) %}  {% include notitle [limit](../../_auto/method_limits/generateGoodsMovementReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_movement_report_request = new \OpenAPI\Client\Model\GenerateGoodsMovementReportRequest(); // \OpenAPI\Client\Model\GenerateGoodsMovementReportRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateGoodsMovementReport($generate_goods_movement_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateGoodsMovementReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_movement_report_request** | [**\OpenAPI\Client\Model\GenerateGoodsMovementReportRequest**](../Model/GenerateGoodsMovementReportRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateGoodsPricesReport()`

```php
generateGoodsPricesReport($generate_goods_prices_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет «Цены»

{% include notitle [access](../../_auto/method_scopes/generateGoodsPricesReport.md) %}  Запускает генерацию отчета «Цены».  **Какая информация вернется:**  * если передать `businessId` — по единым ценам кабинета; * если [включены магазинные цены](*onlyDefaultPrice-false) и указать `campaignId` — по ценам в соответствующем магазине.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% list tabs %}  - Цены во всех магазинах кабинета    {% include notitle [reports](../../_auto/reports/prices/mass_assortment_business_price_v2.md) %}  - Магазинные цены    {% include notitle [reports](../../_auto/reports/prices/mass_assortment_price_v2.md) %}  {% endlist %}  {% include notitle [tariff-period](../../_includes/common/simultaneously-generated-reports-amount.md) %}  {% include notitle [limit](../../_auto/method_limits/generateGoodsPricesReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_prices_report_request = new \OpenAPI\Client\Model\GenerateGoodsPricesReportRequest(); // \OpenAPI\Client\Model\GenerateGoodsPricesReportRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateGoodsPricesReport($generate_goods_prices_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateGoodsPricesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_prices_report_request** | [**\OpenAPI\Client\Model\GenerateGoodsPricesReportRequest**](../Model/GenerateGoodsPricesReportRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateGoodsRealizationReport()`

```php
generateGoodsRealizationReport($generate_goods_realization_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по реализации

{% include notitle [access](../../_auto/method_scopes/generateGoodsRealizationReport.md) %}  Запускает генерацию отчета по реализации за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/ru/accounting/transactions#sales-report)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% list tabs %}  - FBY, FBS, Экспресс    {% include notitle [reports](../../_auto/reports/united/statistics/generator/united_statistics_v2.md) %}  - DBS    {% include notitle [reports](../../_auto/reports/united/statistics/generator/united_statistics_v2_dbs.md) %}  {% endlist %}  {% include notitle [limit](../../_auto/method_limits/generateGoodsRealizationReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_realization_report_request = new \OpenAPI\Client\Model\GenerateGoodsRealizationReportRequest(); // \OpenAPI\Client\Model\GenerateGoodsRealizationReportRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateGoodsRealizationReport($generate_goods_realization_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateGoodsRealizationReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_realization_report_request** | [**\OpenAPI\Client\Model\GenerateGoodsRealizationReportRequest**](../Model/GenerateGoodsRealizationReportRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateGoodsTurnoverReport()`

```php
generateGoodsTurnoverReport($generate_goods_turnover_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по оборачиваемости

{% include notitle [access](../../_auto/method_scopes/generateGoodsTurnoverReport.md) %}  Запускает генерацию отчета по оборачиваемости за заданную дату.  [Что это за отчет](https://yandex.ru/support/marketplace/ru/storage/logistics#turnover)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/turnover/turnover.md) %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-unchanged.md) %}  {% include notitle [limit](../../_auto/method_limits/generateGoodsTurnoverReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_turnover_request = new \OpenAPI\Client\Model\GenerateGoodsTurnoverRequest(); // \OpenAPI\Client\Model\GenerateGoodsTurnoverRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateGoodsTurnoverReport($generate_goods_turnover_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateGoodsTurnoverReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_turnover_request** | [**\OpenAPI\Client\Model\GenerateGoodsTurnoverRequest**](../Model/GenerateGoodsTurnoverRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateJewelryFiscalReport()`

```php
generateJewelryFiscalReport($generate_jewelry_fiscal_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по заказам с ювелирными изделиями

{% include notitle [access](../../_auto/method_scopes/generateJewelryFiscalReport.md) %}  Запускает генерацию отчета по заказам с ювелирными изделиями.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/identifiers/jewelry/orders_jewelry_fiscal.md) %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-unchanged.md) %}  {% include notitle [limit](../../_auto/method_limits/generateJewelryFiscalReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_jewelry_fiscal_report_request = new \OpenAPI\Client\Model\GenerateJewelryFiscalReportRequest(); // \OpenAPI\Client\Model\GenerateJewelryFiscalReportRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateJewelryFiscalReport($generate_jewelry_fiscal_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateJewelryFiscalReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_jewelry_fiscal_report_request** | [**\OpenAPI\Client\Model\GenerateJewelryFiscalReportRequest**](../Model/GenerateJewelryFiscalReportRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateKeyIndicatorsReport()`

```php
generateKeyIndicatorsReport($generate_key_indicators_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по ключевым показателям

{% include notitle [access](../../_auto/method_scopes/generateKeyIndicatorsReport.md) %}  Запускает генерацию отчета по ключевым показателям. [Что это за отчет](https://yandex.ru/support/marketplace/ru/analytics/key-metrics)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/key_indicators/key_indicators.md) %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-400-days.md) %}  {% include notitle [limit](../../_auto/method_limits/generateKeyIndicatorsReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_key_indicators_request = new \OpenAPI\Client\Model\GenerateKeyIndicatorsRequest(); // \OpenAPI\Client\Model\GenerateKeyIndicatorsRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateKeyIndicatorsReport($generate_key_indicators_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateKeyIndicatorsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_key_indicators_request** | [**\OpenAPI\Client\Model\GenerateKeyIndicatorsRequest**](../Model/GenerateKeyIndicatorsRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateMarketingDetalizationReport()`

```php
generateMarketingDetalizationReport($business_id, $generate_marketing_detalization_request, $format, $source_type): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по счету маркетинга

{% include notitle [access](../../_auto/method_scopes/generateMarketingDetalizationReport.md) %}  Запускает генерацию отчета по счету маркетинга.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/advertiser_billing_operations/advertiser_billing_operations.md) %}  {% include notitle [limit](../../_auto/method_limits/generateMarketingDetalizationReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$generate_marketing_detalization_request = new \OpenAPI\Client\Model\GenerateMarketingDetalizationRequest(); // \OpenAPI\Client\Model\GenerateMarketingDetalizationRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.
$source_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SourceType(); // \OpenAPI\Client\Model\SourceType | Признак типа кабинета, от имени которого вызывается метод: {% if audience == \"partner\" %}  - `SELLER` — продавец.  {% endif %}  - `ADVERTISER` — рекламодатель.  {% if audience == \"advertiser\" %}  {% note info \"Обязательно указывайте sourceType=ADVERTISER в каждом запросе.\" %}     {% endnote %}  {% endif %}

try {
    $result = $apiInstance->generateMarketingDetalizationReport($business_id, $generate_marketing_detalization_request, $format, $source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateMarketingDetalizationReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **generate_marketing_detalization_request** | [**\OpenAPI\Client\Model\GenerateMarketingDetalizationRequest**](../Model/GenerateMarketingDetalizationRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |
| **source_type** | [**\OpenAPI\Client\Model\SourceType**](../Model/.md)| Признак типа кабинета, от имени которого вызывается метод: {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  - &#x60;SELLER&#x60; — продавец.  {% endif %}  - &#x60;ADVERTISER&#x60; — рекламодатель.  {% if audience &#x3D;&#x3D; \&quot;advertiser\&quot; %}  {% note info \&quot;Обязательно указывайте sourceType&#x3D;ADVERTISER в каждом запросе.\&quot; %}     {% endnote %}  {% endif %} | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateMassOrderLabelsReport()`

```php
generateMassOrderLabelsReport($generate_mass_order_labels_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Готовые ярлыки‑наклейки на все коробки в нескольких заказах

{% include notitle [access](../../_auto/method_scopes/generateMassOrderLabelsReport.md) %}  Запускает генерацию PDF-файла с ярлыками для переданных заказов. Подробно о том, зачем они нужны и как выглядят, рассказано [в Справке Маркета для продавцов](https://yandex.ru/support/marketplace/orders/fbs/packaging/marking.html).  Чтобы на ярлыке отображался внешний идентификатор заказа, передайте его в методе [POST v2/campaigns/{campaignId}/orders/{orderId}/external-id](../../reference/orders/updateExternalOrderId.md).  Узнать статус генерации и получить ссылку на готовый файл можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [limit](../../_auto/method_limits/generateMassOrderLabelsReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_mass_order_labels_request = new \OpenAPI\Client\Model\GenerateMassOrderLabelsRequest(); // \OpenAPI\Client\Model\GenerateMassOrderLabelsRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PageFormatType(); // \OpenAPI\Client\Model\PageFormatType | Настройка размещения ярлыков на странице. Если параметра нет, возвращается PDF с ярлыками формата :no-translate[A7].

try {
    $result = $apiInstance->generateMassOrderLabelsReport($generate_mass_order_labels_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateMassOrderLabelsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_mass_order_labels_request** | [**\OpenAPI\Client\Model\GenerateMassOrderLabelsRequest**](../Model/GenerateMassOrderLabelsRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\PageFormatType**](../Model/.md)| Настройка размещения ярлыков на странице. Если параметра нет, возвращается PDF с ярлыками формата :no-translate[A7]. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateSalesGeographyReport()`

```php
generateSalesGeographyReport($generate_sales_geography_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по географии продаж

{% include notitle [access](../../_auto/method_scopes/generateSalesGeographyReport.md) %}  Запускает генерацию отчета по географии продаж. [Что это за отчет](https://yandex.ru/support/marketplace/ru/analytics/sales-geography)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/locality/locality_offers_report_v2.md) %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-400-days.md) %}  {% include notitle [limit](../../_auto/method_limits/generateSalesGeographyReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_sales_geography_request = new \OpenAPI\Client\Model\GenerateSalesGeographyRequest(); // \OpenAPI\Client\Model\GenerateSalesGeographyRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateSalesGeographyReport($generate_sales_geography_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateSalesGeographyReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_sales_geography_request** | [**\OpenAPI\Client\Model\GenerateSalesGeographyRequest**](../Model/GenerateSalesGeographyRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateShelfsStatisticsReport()`

```php
generateShelfsStatisticsReport($generate_shelfs_statistics_request, $format, $source_type): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по полкам

{% include notitle [access](../../_auto/method_scopes/generateShelfsStatisticsReport.md) %}  Запускает генерацию сводного отчета по полкам — рекламным блокам с баннером или видео и набором товаров. {% if audience == \"partner\" %}Подробнее о них читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/marketing/shelf).{% endif %}  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/incuts/shelfs_statistics.md) %}  {% if audience != \"advertiser\" %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-400-days.md) %}  {% endif %}  {% include notitle [limit](../../_auto/method_limits/generateShelfsStatisticsReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_shelfs_statistics_request = new \OpenAPI\Client\Model\GenerateShelfsStatisticsRequest(); // \OpenAPI\Client\Model\GenerateShelfsStatisticsRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.
$source_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SourceType(); // \OpenAPI\Client\Model\SourceType | Признак типа кабинета, от имени которого вызывается метод: {% if audience == \"partner\" %}  - `SELLER` — продавец.  {% endif %}  - `ADVERTISER` — рекламодатель.  {% if audience == \"advertiser\" %}  {% note info \"Обязательно указывайте sourceType=ADVERTISER в каждом запросе.\" %}     {% endnote %}  {% endif %}

try {
    $result = $apiInstance->generateShelfsStatisticsReport($generate_shelfs_statistics_request, $format, $source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateShelfsStatisticsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_shelfs_statistics_request** | [**\OpenAPI\Client\Model\GenerateShelfsStatisticsRequest**](../Model/GenerateShelfsStatisticsRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |
| **source_type** | [**\OpenAPI\Client\Model\SourceType**](../Model/.md)| Признак типа кабинета, от имени которого вызывается метод: {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  - &#x60;SELLER&#x60; — продавец.  {% endif %}  - &#x60;ADVERTISER&#x60; — рекламодатель.  {% if audience &#x3D;&#x3D; \&quot;advertiser\&quot; %}  {% note info \&quot;Обязательно указывайте sourceType&#x3D;ADVERTISER в каждом запросе.\&quot; %}     {% endnote %}  {% endif %} | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateShipmentListDocumentReport()`

```php
generateShipmentListDocumentReport($generate_shipment_list_document_report_request): \OpenAPI\Client\Model\GenerateReportResponse
```

Получение листа сборки

{% include notitle [access](../../_auto/method_scopes/generateShipmentListDocumentReport.md) %}  Запускает генерацию **листа сборки** для отгрузки.  Чтобы на в листе сборки отображался внешний идентификатор заказа, передайте его в методе [POST v2/campaigns/{campaignId}/orders/{orderId}/external-id](../../reference/orders/updateExternalOrderId.md).  Узнать статус генерации и получить ссылку на готовый документ можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [limit](../../_auto/method_limits/generateShipmentListDocumentReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_shipment_list_document_report_request = new \OpenAPI\Client\Model\GenerateShipmentListDocumentReportRequest(); // \OpenAPI\Client\Model\GenerateShipmentListDocumentReportRequest

try {
    $result = $apiInstance->generateShipmentListDocumentReport($generate_shipment_list_document_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateShipmentListDocumentReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_shipment_list_document_report_request** | [**\OpenAPI\Client\Model\GenerateShipmentListDocumentReportRequest**](../Model/GenerateShipmentListDocumentReportRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateShowsBoostReport()`

```php
generateShowsBoostReport($generate_shows_boost_request, $format, $source_type): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по бусту показов

{% include notitle [access](../../_auto/method_scopes/generateShowsBoostReport.md) %}  Запускает генерацию сводного отчета по бусту показов за заданный период. {% if audience == \"partner\" %}[Что такое буст показов](https://yandex.ru/support/marketplace/ru/marketing/boost-shows){% endif %}  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports]({{ report-columns-shows-boost }}) %}  {% if audience != \"advertiser\" %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-400-days.md) %}  {% endif %}  {% include notitle [limit](../../_auto/method_limits/generateShowsBoostReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_shows_boost_request = new \OpenAPI\Client\Model\GenerateShowsBoostRequest(); // \OpenAPI\Client\Model\GenerateShowsBoostRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.
$source_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SourceType(); // \OpenAPI\Client\Model\SourceType | Признак типа кабинета, от имени которого вызывается метод: {% if audience == \"partner\" %}  - `SELLER` — продавец.  {% endif %}  - `ADVERTISER` — рекламодатель.  {% if audience == \"advertiser\" %}  {% note info \"Обязательно указывайте sourceType=ADVERTISER в каждом запросе.\" %}     {% endnote %}  {% endif %}

try {
    $result = $apiInstance->generateShowsBoostReport($generate_shows_boost_request, $format, $source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateShowsBoostReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_shows_boost_request** | [**\OpenAPI\Client\Model\GenerateShowsBoostRequest**](../Model/GenerateShowsBoostRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |
| **source_type** | [**\OpenAPI\Client\Model\SourceType**](../Model/.md)| Признак типа кабинета, от имени которого вызывается метод: {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  - &#x60;SELLER&#x60; — продавец.  {% endif %}  - &#x60;ADVERTISER&#x60; — рекламодатель.  {% if audience &#x3D;&#x3D; \&quot;advertiser\&quot; %}  {% note info \&quot;Обязательно указывайте sourceType&#x3D;ADVERTISER в каждом запросе.\&quot; %}     {% endnote %}  {% endif %} | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateShowsSalesReport()`

```php
generateShowsSalesReport($generate_shows_sales_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет «Аналитика продаж»

{% include notitle [access](../../_auto/method_scopes/generateShowsSalesReport.md) %}  Запускает генерацию отчета «Аналитика продаж» за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/analytics/shows-sales.html)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/masterstat/sales_funnel_by_created_at.md) %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-400-days.md) %}  {% include notitle [limit](../../_auto/method_limits/generateShowsSalesReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_shows_sales_report_request = new \OpenAPI\Client\Model\GenerateShowsSalesReportRequest(); // \OpenAPI\Client\Model\GenerateShowsSalesReportRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateShowsSalesReport($generate_shows_sales_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateShowsSalesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_shows_sales_report_request** | [**\OpenAPI\Client\Model\GenerateShowsSalesReportRequest**](../Model/GenerateShowsSalesReportRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateStocksOnWarehousesReport()`

```php
generateStocksOnWarehousesReport($generate_stocks_on_warehouses_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по остаткам на складах

{% include notitle [access](../../_auto/method_scopes/generateStocksOnWarehousesReport.md) %}  Запускает генерацию отчета по остаткам на складах. [Что это за отчет](https://yandex.ru/support/marketplace/ru/storage/logistics#remains-history)  {% note warning \"Когда использовать этот метод\" %}  Метод актуален:  * для моделей FBY и LaaS; * для моделей FBS, DBS и Экспресс, если в кабинете есть группы складов.  Если в кабинете нет групп складов и вы работаете с моделями FBS, DBS или Экспресс, используйте метод [POST v3/businesses/{businessId}/reports/stocks/generate](../../reference/reports/generateStocksReport.md). [Что такое группы складов и зачем они нужны](https://yandex.ru/support/marketplace/assortment/operations/stocks.html#unified-stocks).  {% endnote %}  **Какая информация вернется:**  * Для моделей FBY и LaaS, если указать `campaignId`, — об остатках на складах Маркета. * Для остальных моделей, если указать `campaignId`, — об остатках на соответствующем складе магазина. * Для остальных моделей, если указать `businessId`, — об остатках на всех складах магазинов в кабинете, кроме FBY и LaaS. Используйте фильтр `campaignIds`, чтобы указать определенные магазины.  ⚠️ Не передавайте одновременно `campaignId` и `businessId`.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% list tabs %}  - Склад Маркета    {% include notitle [reports](../../_auto/reports/stocks/stocks_on_warehouses.md) %}  - Склад магазина    {% include notitle [reports](../../_auto/reports/offers/mass/mass_shared_stocks_business_csv_config.md) %}  - Все склады магазинов в кабинете, кроме FBY и LaaS    {% include notitle [reports](../../_auto/reports/offers/stocks_business_config.md) %}  {% endlist %}  {% include notitle [limit](../../_auto/method_limits/generateStocksOnWarehousesReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_stocks_on_warehouses_report_request = new \OpenAPI\Client\Model\GenerateStocksOnWarehousesReportRequest(); // \OpenAPI\Client\Model\GenerateStocksOnWarehousesReportRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateStocksOnWarehousesReport($generate_stocks_on_warehouses_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateStocksOnWarehousesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_stocks_on_warehouses_report_request** | [**\OpenAPI\Client\Model\GenerateStocksOnWarehousesReportRequest**](../Model/GenerateStocksOnWarehousesReportRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateStocksReport()`

```php
generateStocksReport($business_id, $format, $generate_stocks_report_request): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по остаткам на складах партнера

{% include notitle [access](../../_auto/method_scopes/generateStocksReport.md) %}  Запускает генерацию отчета по остаткам на складах магазинов в кабинете. [Что это за отчет](https://yandex.ru/support/marketplace/ru/storage/logistics#remains-history)  **Какая информация вернется:**  * Об остатках на всех складах магазинов в кабинете (модели DBS, FBS и Экспресс). * По каждому товару — ваш SKU, название, модель работы, склад, доступное для заказа количество, резерв, цену и статус.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% list tabs %}  - Все склады магазинов в кабинете    {% include notitle [reports](../../_auto/reports/offers/stocks_business_config.md) %}  {% endlist %}  {% note warning \"Метод подходит, только если в кабинете нет групп складов\" %}  Если в кабинете есть группы складов, используйте метод [POST v2/reports/stocks-on-warehouses/generate](../../reference/reports/generateStocksOnWarehousesReport.md). [Что такое группы складов и зачем они нужны](https://yandex.ru/support/marketplace/assortment/operations/stocks.html#unified-stocks).  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/generateStocksReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.
$generate_stocks_report_request = new \OpenAPI\Client\Model\GenerateStocksReportRequest(); // \OpenAPI\Client\Model\GenerateStocksReportRequest

try {
    $result = $apiInstance->generateStocksReport($business_id, $format, $generate_stocks_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateStocksReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |
| **generate_stocks_report_request** | [**\OpenAPI\Client\Model\GenerateStocksReportRequest**](../Model/GenerateStocksReportRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateUnitedMarketplaceServicesReport()`

```php
generateUnitedMarketplaceServicesReport($generate_united_marketplace_services_report_request, $format, $language): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по стоимости услуг

{% include notitle [access](../../_auto/method_scopes/generateUnitedMarketplaceServicesReport.md) %}  Запускает генерацию отчета по стоимости услуг за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/ru/accounting/transactions#reports)  Тип отчета зависит от того, какие поля заполнены в запросе:  |**Тип отчета**               |**Какие поля нужны**             | |-----------------------------|---------------------------------| |По дате начисления услуги    |`dateFrom` и `dateTo`            | |По дате формирования акта    |`year` и `month`                 |  Заказать отчеты обоих типов одним запросом нельзя.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/united/services/generator/united_marketplace_services.md) %}  {% include notitle [limit](../../_auto/method_limits/generateUnitedMarketplaceServicesReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_united_marketplace_services_report_request = new \OpenAPI\Client\Model\GenerateUnitedMarketplaceServicesReportRequest(); // \OpenAPI\Client\Model\GenerateUnitedMarketplaceServicesReportRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.
$language = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportLanguageType(); // \OpenAPI\Client\Model\ReportLanguageType | Язык отчета или документа.

try {
    $result = $apiInstance->generateUnitedMarketplaceServicesReport($generate_united_marketplace_services_report_request, $format, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateUnitedMarketplaceServicesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_united_marketplace_services_report_request** | [**\OpenAPI\Client\Model\GenerateUnitedMarketplaceServicesReportRequest**](../Model/GenerateUnitedMarketplaceServicesReportRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |
| **language** | [**\OpenAPI\Client\Model\ReportLanguageType**](../Model/.md)| Язык отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateUnitedNettingReport()`

```php
generateUnitedNettingReport($generate_united_netting_report_request, $format, $language): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по платежам

{% include notitle [access](../../_auto/method_scopes/generateUnitedNettingReport.md) %}  Запускает генерацию отчета по платежам за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/ru/accounting/transactions#all-pay)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  Тип отчета зависит от того, какие поля заполнены в запросе:  #| || **Тип отчета** | **Какие поля нужны** | **Комментарий** || || О платежах за период | `dateFrom` и `dateTo` |   В отчет попадают все платежи, которые были выплачены и начислены в выбранный период.    Пример: если перевод выполнен 31 августа и зачислен 1 сентября, он попадет в отчет за оба месяца. || || О платежном поручении | `bankOrderId` и `bankOrderDateTime` |—|| || [О баллах Маркета](*баллы_маркета) | `monthOfYear` |—|| |#  Заказать отчеты нескольких типов одним запросом нельзя.  {% include notitle [reports](../../_auto/reports/united/netting/generator/united_netting.md) %}  {% include notitle [limit](../../_auto/method_limits/generateUnitedNettingReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_united_netting_report_request = new \OpenAPI\Client\Model\GenerateUnitedNettingReportRequest(); // \OpenAPI\Client\Model\GenerateUnitedNettingReportRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.
$language = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportLanguageType(); // \OpenAPI\Client\Model\ReportLanguageType | Язык отчета или документа.

try {
    $result = $apiInstance->generateUnitedNettingReport($generate_united_netting_report_request, $format, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateUnitedNettingReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_united_netting_report_request** | [**\OpenAPI\Client\Model\GenerateUnitedNettingReportRequest**](../Model/GenerateUnitedNettingReportRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |
| **language** | [**\OpenAPI\Client\Model\ReportLanguageType**](../Model/.md)| Язык отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateUnitedOrdersReport()`

```php
generateUnitedOrdersReport($generate_united_orders_request, $format, $language): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по заказам

{% include notitle [access](../../_auto/method_scopes/generateUnitedOrdersReport.md) %}  Запускает генерацию отчета по заказам за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/ru/accounting/transactions#get-report)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/united/orders/generator/united_orders.md) %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-unchanged.md) %}  {% include notitle [limit](../../_auto/method_limits/generateUnitedOrdersReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_united_orders_request = new \OpenAPI\Client\Model\GenerateUnitedOrdersRequest(); // \OpenAPI\Client\Model\GenerateUnitedOrdersRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.
$language = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportLanguageType(); // \OpenAPI\Client\Model\ReportLanguageType | Язык отчета или документа.

try {
    $result = $apiInstance->generateUnitedOrdersReport($generate_united_orders_request, $format, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateUnitedOrdersReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_united_orders_request** | [**\OpenAPI\Client\Model\GenerateUnitedOrdersRequest**](../Model/GenerateUnitedOrdersRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |
| **language** | [**\OpenAPI\Client\Model\ReportLanguageType**](../Model/.md)| Язык отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateUnitedReturnsReport()`

```php
generateUnitedReturnsReport($generate_united_returns_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по невыкупам и возвратам

{% include notitle [access](../../_auto/method_scopes/generateUnitedReturnsReport.md) %}  Запускает генерацию сводного отчета по невыкупам и возвратам за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/ru/orders/returns/logistic#rejected-orders)  Отчет содержит информацию о невыкупах и возвратах за указанный период, а также о тех, которые готовы к выдаче.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/united/returns/generator/united_returns.md) %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-unchanged.md) %}  {% include notitle [limit](../../_auto/method_limits/generateUnitedReturnsReport.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_united_returns_request = new \OpenAPI\Client\Model\GenerateUnitedReturnsRequest(); // \OpenAPI\Client\Model\GenerateUnitedReturnsRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateUnitedReturnsReport($generate_united_returns_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateUnitedReturnsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_united_returns_request** | [**\OpenAPI\Client\Model\GenerateUnitedReturnsRequest**](../Model/GenerateUnitedReturnsRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportInfo()`

```php
getReportInfo($report_id, $source_type): \OpenAPI\Client\Model\GetReportInfoResponse
```

Получение заданного отчета или документа

{% include notitle [access](../../_auto/method_scopes/getReportInfo.md) %}  Возвращает статус генерации заданного отчета или документа и, если он готов, ссылку для скачивания.  Чтобы воспользоваться этим запросом, вначале нужно запустить генерацию отчета или документа. [Инструкция](../../step-by-step/reports.md)  {% include notitle [limit](../../_auto/method_limits/getReportInfo.md) %}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | Идентификатор отчета или документа, который вы получили после запуска генерации.
$source_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SourceType(); // \OpenAPI\Client\Model\SourceType | Признак типа кабинета, от имени которого вызывается метод: {% if audience == \"partner\" %}  - `SELLER` — продавец.  {% endif %}  - `ADVERTISER` — рекламодатель.  {% if audience == \"advertiser\" %}  {% note info \"Обязательно указывайте sourceType=ADVERTISER в каждом запросе.\" %}     {% endnote %}  {% endif %}

try {
    $result = $apiInstance->getReportInfo($report_id, $source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| Идентификатор отчета или документа, который вы получили после запуска генерации. | |
| **source_type** | [**\OpenAPI\Client\Model\SourceType**](../Model/.md)| Признак типа кабинета, от имени которого вызывается метод: {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  - &#x60;SELLER&#x60; — продавец.  {% endif %}  - &#x60;ADVERTISER&#x60; — рекламодатель.  {% if audience &#x3D;&#x3D; \&quot;advertiser\&quot; %}  {% note info \&quot;Обязательно указывайте sourceType&#x3D;ADVERTISER в каждом запросе.\&quot; %}     {% endnote %}  {% endif %} | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetReportInfoResponse**](../Model/GetReportInfoResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
