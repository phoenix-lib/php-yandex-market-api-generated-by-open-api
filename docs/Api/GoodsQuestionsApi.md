# OpenAPI\Client\GoodsQuestionsApi



All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGoodsQuestionAnswers()**](GoodsQuestionsApi.md#getGoodsQuestionAnswers) | **POST** /v1/businesses/{businessId}/goods-questions/answers | Получение ответов на вопрос |
| [**getGoodsQuestions()**](GoodsQuestionsApi.md#getGoodsQuestions) | **POST** /v1/businesses/{businessId}/goods-questions | Получение вопросов о товарах продавца |
| [**updateGoodsQuestionTextEntity()**](GoodsQuestionsApi.md#updateGoodsQuestionTextEntity) | **POST** /v1/businesses/{businessId}/goods-questions/update | Создание, изменение и удаление ответа или комментария |


## `getGoodsQuestionAnswers()`

```php
getGoodsQuestionAnswers($business_id, $get_answers_request, $page_token, $limit): \OpenAPI\Client\Model\GetAnswersResponse
```

Получение ответов на вопрос

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getGoodsQuestionAnswers.md) %}  Возвращает ответы на вопрос о товаре по указанным фильтрам.  Результаты возвращаются постранично, одна страница содержит не более 50 ответов.  |**⚙️ Лимит:** 10 000 запросов в час| |-|

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


$apiInstance = new OpenAPI\Client\Api\GoodsQuestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$get_answers_request = new \OpenAPI\Client\Model\GetAnswersRequest(); // \OpenAPI\Client\Model\GetAnswersRequest
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token` и в запросе есть параметры `page` и `pageSize`, они игнорируются.
$limit = 20; // int | Количество значений на одной странице.

try {
    $result = $apiInstance->getGoodsQuestionAnswers($business_id, $get_answers_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsQuestionsApi->getGoodsQuestionAnswers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **get_answers_request** | [**\OpenAPI\Client\Model\GetAnswersRequest**](../Model/GetAnswersRequest.md)|  | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60; и в запросе есть параметры &#x60;page&#x60; и &#x60;pageSize&#x60;, они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetAnswersResponse**](../Model/GetAnswersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGoodsQuestions()`

```php
getGoodsQuestions($business_id, $page_token, $limit, $get_questions_request): \OpenAPI\Client\Model\GetQuestionsResponse
```

Получение вопросов о товарах продавца

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getGoodsQuestions.md) %}  Возвращает вопросы о товарах продавца по указанным фильтрам.  Результаты возвращаются постранично, одна страница содержит не более 50 вопросов.  |**⚙️ Лимит:** 10 000 запросов в час| |-|

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


$apiInstance = new OpenAPI\Client\Api\GoodsQuestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token` и в запросе есть параметры `page` и `pageSize`, они игнорируются.
$limit = 20; // int | Количество значений на одной странице.
$get_questions_request = new \OpenAPI\Client\Model\GetQuestionsRequest(); // \OpenAPI\Client\Model\GetQuestionsRequest

try {
    $result = $apiInstance->getGoodsQuestions($business_id, $page_token, $limit, $get_questions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsQuestionsApi->getGoodsQuestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60; и в запросе есть параметры &#x60;page&#x60; и &#x60;pageSize&#x60;, они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |
| **get_questions_request** | [**\OpenAPI\Client\Model\GetQuestionsRequest**](../Model/GetQuestionsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetQuestionsResponse**](../Model/GetQuestionsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGoodsQuestionTextEntity()`

```php
updateGoodsQuestionTextEntity($business_id, $update_goods_question_text_entity_request): \OpenAPI\Client\Model\UpdateGoodsQuestionTextEntityResponse
```

Создание, изменение и удаление ответа или комментария

{% include notitle [:no-translate[access]](../../_auto/method_scopes/updateGoodsQuestionTextEntity.md) %}  Создание, изменение и удаление ответа или комментария.  |**⚙️ Лимит:** 1000 запросов в час| |-|

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


$apiInstance = new OpenAPI\Client\Api\GoodsQuestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$update_goods_question_text_entity_request = new \OpenAPI\Client\Model\UpdateGoodsQuestionTextEntityRequest(); // \OpenAPI\Client\Model\UpdateGoodsQuestionTextEntityRequest

try {
    $result = $apiInstance->updateGoodsQuestionTextEntity($business_id, $update_goods_question_text_entity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsQuestionsApi->updateGoodsQuestionTextEntity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **update_goods_question_text_entity_request** | [**\OpenAPI\Client\Model\UpdateGoodsQuestionTextEntityRequest**](../Model/UpdateGoodsQuestionTextEntityRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateGoodsQuestionTextEntityResponse**](../Model/UpdateGoodsQuestionTextEntityResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
