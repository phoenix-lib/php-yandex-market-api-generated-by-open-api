# OpenAPI\Client\SupplyRequestsApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSupplyRequestDocuments()**](SupplyRequestsApi.md#getSupplyRequestDocuments) | **POST** /campaigns/{campaignId}/supply-requests/documents | Получение документов по заявке на поставку, вывоз или утилизацию |
| [**getSupplyRequestItems()**](SupplyRequestsApi.md#getSupplyRequestItems) | **POST** /campaigns/{campaignId}/supply-requests/items | Получение товаров в заявке на поставку, вывоз или утилизацию |
| [**getSupplyRequests()**](SupplyRequestsApi.md#getSupplyRequests) | **POST** /campaigns/{campaignId}/supply-requests | Получение информации о заявках на поставку, вывоз и утилизацию |


## `getSupplyRequestDocuments()`

```php
getSupplyRequestDocuments($campaign_id, $get_supply_request_documents_request): \OpenAPI\Client\Model\GetSupplyRequestDocumentsResponse
```

Получение документов по заявке на поставку, вывоз или утилизацию

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getSupplyRequestDocuments.md) %}  Возвращает документы по заявке.  |**:no-translate[⚙️] Лимит:** 1 000 запросов в час| |-|

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


$apiInstance = new OpenAPI\Client\Api\SupplyRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах.
$get_supply_request_documents_request = new \OpenAPI\Client\Model\GetSupplyRequestDocumentsRequest(); // \OpenAPI\Client\Model\GetSupplyRequestDocumentsRequest

try {
    $result = $apiInstance->getSupplyRequestDocuments($campaign_id, $get_supply_request_documents_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplyRequestsApi->getSupplyRequestDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | |
| **get_supply_request_documents_request** | [**\OpenAPI\Client\Model\GetSupplyRequestDocumentsRequest**](../Model/GetSupplyRequestDocumentsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetSupplyRequestDocumentsResponse**](../Model/GetSupplyRequestDocumentsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplyRequestItems()`

```php
getSupplyRequestItems($campaign_id, $get_supply_request_items_request, $page_token, $limit): \OpenAPI\Client\Model\GetSupplyRequestItemsResponse
```

Получение товаров в заявке на поставку, вывоз или утилизацию

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getSupplyRequestItems.md) %}  Возвращает список товаров в заявке и информацию по ним.  |**:no-translate[⚙️] Лимит:** 1 000 запросов в час| |-|

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


$apiInstance = new OpenAPI\Client\Api\SupplyRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах.
$get_supply_request_items_request = new \OpenAPI\Client\Model\GetSupplyRequestItemsRequest(); // \OpenAPI\Client\Model\GetSupplyRequestItemsRequest
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра :no-translate[`nextPageToken`], полученное при последнем запросе.  Если задан :no-translate[`page_token`] и в запросе есть параметры :no-translate[`page`] и :no-translate[`pageSize`], они игнорируются.
$limit = 20; // int | Количество значений на одной странице.

try {
    $result = $apiInstance->getSupplyRequestItems($campaign_id, $get_supply_request_items_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplyRequestsApi->getSupplyRequestItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | |
| **get_supply_request_items_request** | [**\OpenAPI\Client\Model\GetSupplyRequestItemsRequest**](../Model/GetSupplyRequestItemsRequest.md)|  | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра :no-translate[&#x60;nextPageToken&#x60;], полученное при последнем запросе.  Если задан :no-translate[&#x60;page_token&#x60;] и в запросе есть параметры :no-translate[&#x60;page&#x60;] и :no-translate[&#x60;pageSize&#x60;], они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetSupplyRequestItemsResponse**](../Model/GetSupplyRequestItemsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplyRequests()`

```php
getSupplyRequests($campaign_id, $page_token, $limit, $get_supply_requests_request): \OpenAPI\Client\Model\GetSupplyRequestsResponse
```

Получение информации о заявках на поставку, вывоз и утилизацию

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getSupplyRequests.md) %}  По указанным фильтрам возвращает заявки на поставку, вывоз и утилизацию, а также информацию по ним.  |**:no-translate[⚙️] Лимит:** 1 000 запросов в час| |-|

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


$apiInstance = new OpenAPI\Client\Api\SupplyRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах.
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра :no-translate[`nextPageToken`], полученное при последнем запросе.  Если задан :no-translate[`page_token`] и в запросе есть параметры :no-translate[`page`] и :no-translate[`pageSize`], они игнорируются.
$limit = 20; // int | Количество значений на одной странице.
$get_supply_requests_request = new \OpenAPI\Client\Model\GetSupplyRequestsRequest(); // \OpenAPI\Client\Model\GetSupplyRequestsRequest

try {
    $result = $apiInstance->getSupplyRequests($campaign_id, $page_token, $limit, $get_supply_requests_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplyRequestsApi->getSupplyRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра :no-translate[&#x60;nextPageToken&#x60;], полученное при последнем запросе.  Если задан :no-translate[&#x60;page_token&#x60;] и в запросе есть параметры :no-translate[&#x60;page&#x60;] и :no-translate[&#x60;pageSize&#x60;], они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |
| **get_supply_requests_request** | [**\OpenAPI\Client\Model\GetSupplyRequestsRequest**](../Model/GetSupplyRequestsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetSupplyRequestsResponse**](../Model/GetSupplyRequestsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
