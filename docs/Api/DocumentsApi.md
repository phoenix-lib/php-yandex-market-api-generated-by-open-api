# OpenAPI\Client\DocumentsApi



All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDocuments()**](DocumentsApi.md#createDocuments) | **POST** /v1/businesses/{businessId}/offers/documents/create | Создание документов |
| [**deleteDocuments()**](DocumentsApi.md#deleteDocuments) | **POST** /v1/businesses/{businessId}/offers/documents/delete | Удаление документов |
| [**getDocuments()**](DocumentsApi.md#getDocuments) | **POST** /v1/businesses/{businessId}/offers/documents | Получение документов |
| [**updateDocuments()**](DocumentsApi.md#updateDocuments) | **POST** /v1/businesses/{businessId}/offers/documents/update | Обновление документов |


## `createDocuments()`

```php
createDocuments($business_id, $create_documents_request): \OpenAPI\Client\Model\CreateDocumentsResponse
```

Создание документов

{% include notitle [access](../../_auto/method_scopes/createDocuments.md) %}  Создает для указанного бизнеса документы на товары. За один запрос можно создать не более 100 документов.  Для привязки документа к товару передайте его номер в поле `certificates` метода [POST v2/businesses/{businessId}/offer-mappings/update](../../reference/business-offer-mappings/updateOfferMappings.md).  Если документ с таким номером уже существует, результат для документа содержит ошибку `DOCUMENT_ALREADY_EXISTS`. Существующий документ при этом не возвращается. Ошибка одного документа не мешает обработке остальных.  {% include notitle [limit](../../_auto/method_limits/createDocuments.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$create_documents_request = new \OpenAPI\Client\Model\CreateDocumentsRequest(); // \OpenAPI\Client\Model\CreateDocumentsRequest

try {
    $result = $apiInstance->createDocuments($business_id, $create_documents_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->createDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **create_documents_request** | [**\OpenAPI\Client\Model\CreateDocumentsRequest**](../Model/CreateDocumentsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateDocumentsResponse**](../Model/CreateDocumentsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDocuments()`

```php
deleteDocuments($business_id, $delete_documents_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Удаление документов

{% include notitle [access](../../_auto/method_scopes/deleteDocuments.md) %}  Удаляет документы на товары по их идентификаторам. За один запрос можно удалить не более 100 документов.  Повторный запрос на удаление возвращает успешный ответ. Отсутствие одного документа не мешает обработке остальных.  {% include notitle [limit](../../_auto/method_limits/deleteDocuments.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$delete_documents_request = new \OpenAPI\Client\Model\DeleteDocumentsRequest(); // \OpenAPI\Client\Model\DeleteDocumentsRequest

try {
    $result = $apiInstance->deleteDocuments($business_id, $delete_documents_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->deleteDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **delete_documents_request** | [**\OpenAPI\Client\Model\DeleteDocumentsRequest**](../Model/DeleteDocumentsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EmptyApiResponse**](../Model/EmptyApiResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocuments()`

```php
getDocuments($business_id, $get_documents_request, $page_token, $limit): \OpenAPI\Client\Model\GetDocumentsResponse
```

Получение документов

{% include notitle [access](../../_auto/method_scopes/getDocuments.md) %}  Возвращает страницу документов на товары с учетом переданных фильтров.  {% include notitle [limit](../../_auto/method_limits/getDocuments.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$get_documents_request = new \OpenAPI\Client\Model\GetDocumentsRequest(); // \OpenAPI\Client\Model\GetDocumentsRequest
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 50; // int | {{ limit-param-description }}

try {
    $result = $apiInstance->getDocuments($business_id, $get_documents_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **get_documents_request** | [**\OpenAPI\Client\Model\GetDocumentsRequest**](../Model/GetDocumentsRequest.md)|  | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\GetDocumentsResponse**](../Model/GetDocumentsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDocuments()`

```php
updateDocuments($business_id, $update_documents_request): \OpenAPI\Client\Model\UpdateDocumentsResponse
```

Обновление документов

{% include notitle [access](../../_auto/method_scopes/updateDocuments.md) %}  Полностью обновляет номер, тип и даты документов на товары. За один запрос можно обновить не более 100 документов.  Для каждого документа передайте его идентификатор и актуальные значения номера, типа и дат. Если дата не указана, ранее сохраненная дата будет удалена. Ошибка одного документа не мешает обработке остальных.  {% include notitle [limit](../../_auto/method_limits/updateDocuments.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$update_documents_request = new \OpenAPI\Client\Model\UpdateDocumentsRequest(); // \OpenAPI\Client\Model\UpdateDocumentsRequest

try {
    $result = $apiInstance->updateDocuments($business_id, $update_documents_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->updateDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **update_documents_request** | [**\OpenAPI\Client\Model\UpdateDocumentsRequest**](../Model/UpdateDocumentsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateDocumentsResponse**](../Model/UpdateDocumentsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
