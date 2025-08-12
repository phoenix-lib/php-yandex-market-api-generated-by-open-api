# OpenAPI\Client\ContentApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCategoryContentParameters()**](ContentApi.md#getCategoryContentParameters) | **POST** /category/{categoryId}/parameters | Списки характеристик товаров по категориям |
| [**getOfferCardsContentStatus()**](ContentApi.md#getOfferCardsContentStatus) | **POST** /businesses/{businessId}/offer-cards | Получение информации о заполненности карточек магазина |
| [**updateOfferContent()**](ContentApi.md#updateOfferContent) | **POST** /businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара |


## `getCategoryContentParameters()`

```php
getCategoryContentParameters($category_id, $business_id): \OpenAPI\Client\Model\GetCategoryContentParametersResponse
```

Списки характеристик товаров по категориям

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getCategoryContentParameters.md) %}  Возвращает список характеристик с допустимыми значениями для заданной листовой категории — той, у которой нет дочерних категорий.  |**:no-translate[⚙️] Лимит:** 100 категорий в минуту | |-|

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


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 56; // int | Идентификатор категории на Маркете.  Чтобы узнать идентификатор категории, к которой относится интересующий вас товар, воспользуйтесь запросом [:no-translate[POST categories/tree]](:no-translate[../../reference/categories/getCategoriesTree.md]).
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]).  Передайте параметр, чтобы получить характеристики, которые являются особенностями варианта товара в данном кабинете.

try {
    $result = $apiInstance->getCategoryContentParameters($category_id, $business_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->getCategoryContentParameters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **int**| Идентификатор категории на Маркете.  Чтобы узнать идентификатор категории, к которой относится интересующий вас товар, воспользуйтесь запросом [:no-translate[POST categories/tree]](:no-translate[../../reference/categories/getCategoriesTree.md]). | |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]).  Передайте параметр, чтобы получить характеристики, которые являются особенностями варианта товара в данном кабинете. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCategoryContentParametersResponse**](../Model/GetCategoryContentParametersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferCardsContentStatus()`

```php
getOfferCardsContentStatus($business_id, $page_token, $limit, $get_offer_cards_content_status_request): \OpenAPI\Client\Model\GetOfferCardsContentStatusResponse
```

Получение информации о заполненности карточек магазина

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getOfferCardsContentStatus.md) %}  Возвращает сведения о состоянии контента для заданных товаров:  * создана ли карточка товара и в каком она статусе; * рейтинг карточки — на сколько процентов она заполнена; * переданные характеристики товаров; * есть ли ошибки или предупреждения, связанные с контентом; * рекомендации по заполнению карточки.  |**:no-translate[⚙️] Лимит:** 600 запросов в минуту| |-|

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


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]).  ℹ️ [Что такое кабинет и магазин на Маркете](:no-translate[https://yandex.ru/support/marketplace/account/introduction.html])
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра :no-translate[`nextPageToken`], полученное при последнем запросе.  Если задан :no-translate[`page_token`] и в запросе есть параметры :no-translate[`page`] и :no-translate[`pageSize`], они игнорируются.
$limit = 20; // int | Количество значений на одной странице.
$get_offer_cards_content_status_request = new \OpenAPI\Client\Model\GetOfferCardsContentStatusRequest(); // \OpenAPI\Client\Model\GetOfferCardsContentStatusRequest

try {
    $result = $apiInstance->getOfferCardsContentStatus($business_id, $page_token, $limit, $get_offer_cards_content_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->getOfferCardsContentStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]).  ℹ️ [Что такое кабинет и магазин на Маркете](:no-translate[https://yandex.ru/support/marketplace/account/introduction.html]) | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра :no-translate[&#x60;nextPageToken&#x60;], полученное при последнем запросе.  Если задан :no-translate[&#x60;page_token&#x60;] и в запросе есть параметры :no-translate[&#x60;page&#x60;] и :no-translate[&#x60;pageSize&#x60;], они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |
| **get_offer_cards_content_status_request** | [**\OpenAPI\Client\Model\GetOfferCardsContentStatusRequest**](../Model/GetOfferCardsContentStatusRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetOfferCardsContentStatusResponse**](../Model/GetOfferCardsContentStatusResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOfferContent()`

```php
updateOfferContent($business_id, $update_offer_content_request): \OpenAPI\Client\Model\UpdateOfferContentResponse
```

Редактирование категорийных характеристик товара

{% include notitle [:no-translate[access]](../../_auto/method_scopes/updateOfferContent.md) %}  Редактирует характеристики товара, которые специфичны для категории, к которой он относится.  {% note warning \"Здесь только то, что относится к конкретной категории\" %}  Если вам нужно изменить основные параметры товара (название, описание, изображения, видео, производитель, штрихкод), воспользуйтесь запросом [POST businesses/{businessId}/offer-mappings/update](../../reference/business-assortment/updateOfferMappings.md).  {% endnote %}  Чтобы удалить характеристики, которые заданы в параметрах с типом `string`, передайте пустое значение.  {% note info \"Данные в каталоге обновляются не мгновенно\" %}  Это занимает до нескольких минут.  {% endnote %}  |**:no-translate[⚙️] Лимит:** 10 000 товаров в минуту| |-|

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


$apiInstance = new OpenAPI\Client\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]).  ℹ️ [Что такое кабинет и магазин на Маркете](:no-translate[https://yandex.ru/support/marketplace/account/introduction.html])
$update_offer_content_request = new \OpenAPI\Client\Model\UpdateOfferContentRequest(); // \OpenAPI\Client\Model\UpdateOfferContentRequest

try {
    $result = $apiInstance->updateOfferContent($business_id, $update_offer_content_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->updateOfferContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]).  ℹ️ [Что такое кабинет и магазин на Маркете](:no-translate[https://yandex.ru/support/marketplace/account/introduction.html]) | |
| **update_offer_content_request** | [**\OpenAPI\Client\Model\UpdateOfferContentRequest**](../Model/UpdateOfferContentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateOfferContentResponse**](../Model/UpdateOfferContentResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
