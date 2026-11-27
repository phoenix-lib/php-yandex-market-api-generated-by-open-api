# OpenAPI\Client\ContentApi



All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContentSizeTables()**](ContentApi.md#createContentSizeTables) | **POST** /v2/businesses/{businessId}/size-tables/create | Создание таблиц размеров |
| [**getCategoryContentParameters()**](ContentApi.md#getCategoryContentParameters) | **POST** /v2/category/{categoryId}/parameters | Списки характеристик товаров по категориям |
| [**getContentSizeCharts()**](ContentApi.md#getContentSizeCharts) | **POST** /v2/businesses/{businessId}/size-tables/charts | Размерные сетки и обмеры для таблиц размеров |
| [**getContentSizeTables()**](ContentApi.md#getContentSizeTables) | **POST** /v2/businesses/{businessId}/size-tables | Таблицы размеров по идентификаторам |
| [**getOfferCardsContentStatus()**](ContentApi.md#getOfferCardsContentStatus) | **POST** /v2/businesses/{businessId}/offer-cards | Получение информации о заполненности карточек магазина |
| [**suggestContentSizeTables()**](ContentApi.md#suggestContentSizeTables) | **POST** /v2/businesses/{businessId}/size-tables/suggest | Подбор таблиц размеров |
| [**updateContentSizeTables()**](ContentApi.md#updateContentSizeTables) | **POST** /v2/businesses/{businessId}/size-tables/update | Обновление таблиц размеров |
| [**updateOfferContent()**](ContentApi.md#updateOfferContent) | **POST** /v2/businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара |


## `createContentSizeTables()`

```php
createContentSizeTables($business_id, $create_size_tables_request): \OpenAPI\Client\Model\CreateSizeTablesResponse
```

Создание таблиц размеров

{% include notitle [access](../../_auto/method_scopes/createContentSizeTables.md) %}  Создает таблицы размеров бизнеса. За один запрос можно создать до 10 таблиц, в которых суммарно не больше 5000 ячеек. Если таблиц или ячеек больше, запрос отклоняется с ошибкой `BAD_REQUEST` и ни одна таблица не создается.  Таблица относится к размерной характеристике, а не к категории: она подбирается для всех категорий с той же размерной характеристикой.  Размерную характеристику категории возвращает метод подбора таблиц размеров `POST v2/businesses/{businessId}/size-tables/suggest` в поле `result.sizeParameterId`, характеристику существующей таблицы — метод `POST v2/businesses/{businessId}/size-tables` в поле `sizeParameterId`. Если в запросе есть неизвестный идентификатор размерной характеристики, запрос отклоняется с ошибкой `UNKNOWN_SIZE_PARAMETER` и ни одна таблица не создается.  Размерные сетки и обмеры, которые можно использовать в таблице, их значения и обязательные сетки возвращает метод `POST v2/businesses/{businessId}/size-tables/charts`.  {% cut \"Как заполнить таблицу\" %}  {% include notitle [size-tables-filling](../../_includes/common/size-tables-filling.md) %}  {% endcut %}  {% cut \"Чем сохраненная таблица отличается от переданной\" %}  {% include notitle [size-tables-saved-differences](../../_includes/common/size-tables-saved-differences.md) %}  Значения из ответа можно без изменений передать в метод обновления таблиц размеров `POST v2/businesses/{businessId}/size-tables/update`: поля `columnType` и `rowIndex` в нем не учитываются.  {% endcut %}  Чтобы привязать таблицу к товару, передайте ее идентификатор в `value` характеристики с `parameterId: 73979829` в запросе [POST v2/businesses/{businessId}/offer-cards/update](../../reference/content/updateOfferContent.md). Когда таблица изменяется, новое содержимое применяется к привязанным товарам автоматически.  {% note warning \"Повторный запрос создает таблицы еще раз\" %}  Метод не идемпотентен: каждый запрос создает новые таблицы, даже если такие же уже есть.  Если запрос завершился ошибкой с кодом 5xx, часть таблиц могла сохраниться. Получите таблицы бизнеса методом `POST v2/businesses/{businessId}/size-tables` и только после этого повторите запрос для таблиц, которых там нет.  {% endnote %}  Количество таблиц у бизнеса ограничено — суммарно по всем размерным характеристикам. Удалить таблицу нельзя. Если лимит исчерпан, таблица не создается и для нее возвращается ошибка `LIMIT_TABLES`. При одновременных запросах лимит проверяется нестрого, и таблиц может создаться больше.  **Пошаговые инструкции**  * [Создать свою таблицу](../../step-by-step/size-tables.md#create)  {% include notitle [limit](../../_auto/method_limits/createContentSizeTables.md) %}

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
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$create_size_tables_request = new \OpenAPI\Client\Model\CreateSizeTablesRequest(); // \OpenAPI\Client\Model\CreateSizeTablesRequest

try {
    $result = $apiInstance->createContentSizeTables($business_id, $create_size_tables_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->createContentSizeTables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **create_size_tables_request** | [**\OpenAPI\Client\Model\CreateSizeTablesRequest**](../Model/CreateSizeTablesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateSizeTablesResponse**](../Model/CreateSizeTablesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoryContentParameters()`

```php
getCategoryContentParameters($category_id, $business_id): \OpenAPI\Client\Model\GetCategoryContentParametersResponse
```

Списки характеристик товаров по категориям

{% include notitle [access](../../_auto/method_scopes/getCategoryContentParameters.md) %}  Возвращает список характеристик с допустимыми значениями для заданной [листовой категории](*list-category).  Поля в ответе определяют правила передачи характеристики в методах: - [POST v2/businesses/{businessId}/offer-mappings/update](../../reference/business-offer-mappings/updateOfferMappings.md) - [POST v2/businesses/{businessId}/offer-cards/update](../../reference/content/updateOfferContent.md)  **Пошаговые инструкции**  * [Проверить сопоставление характеристик категории](../../step-by-step/content-change.md#check-and-update-comparison) * [Передача значений характеристики](../../step-by-step/parameter-values.md)  {% include notitle [limit](../../_auto/method_limits/getCategoryContentParameters.md) %}

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
$category_id = 56; // int | Идентификатор категории на Маркете.  Чтобы узнать идентификатор категории, к которой относится интересующий вас товар, воспользуйтесь запросом [POST v2/categories/tree](../../reference/categories/getCategoriesTree.md).
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  Передайте параметр, чтобы получить характеристики, которые являются особенностями варианта товара в данном кабинете.

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
| **category_id** | **int**| Идентификатор категории на Маркете.  Чтобы узнать идентификатор категории, к которой относится интересующий вас товар, воспользуйтесь запросом [POST v2/categories/tree](../../reference/categories/getCategoriesTree.md). | |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  Передайте параметр, чтобы получить характеристики, которые являются особенностями варианта товара в данном кабинете. | [optional] |

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

## `getContentSizeCharts()`

```php
getContentSizeCharts($business_id, $get_size_charts_request): \OpenAPI\Client\Model\GetSizeChartsResponse
```

Размерные сетки и обмеры для таблиц размеров

{% include notitle [access](../../_auto/method_scopes/getContentSizeCharts.md) %}  Возвращает размерные сетки и обмеры, из которых можно составить таблицу размеров для указанной размерной характеристики. Их идентификаторы передаются в `sizeChartId` ячеек в методах создания и обновления таблиц размеров `POST v2/businesses/{businessId}/size-tables/create` и `POST v2/businesses/{businessId}/size-tables/update`.  В список входят:  * стандартные размерные сетки Маркета — значения в них выбираются из справочника `sizeValues`; * размерные сетки, значения в которых задаются текстом; * обмеры — значения в них тоже задаются текстом.  Брендовые размерные сетки в список не входят, и использовать их в своих таблицах нельзя: для них возвращается ошибка `UNKNOWN_SIZE_CHART`.  Обязательные размерные сетки отмечены `required: true`. В таблице должна быть хотя бы одна из них, а каждую обязательную сетку в таблице нужно заполнить во всех строках.  Для неизвестного идентификатора размерной характеристики возвращается ошибка `UNKNOWN_SIZE_PARAMETER`.  **Пошаговые инструкции**  * [Таблицы размеров](../../step-by-step/size-tables.md)  {% include notitle [limit](../../_auto/method_limits/getContentSizeCharts.md) %}

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
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$get_size_charts_request = new \OpenAPI\Client\Model\GetSizeChartsRequest(); // \OpenAPI\Client\Model\GetSizeChartsRequest

try {
    $result = $apiInstance->getContentSizeCharts($business_id, $get_size_charts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->getContentSizeCharts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **get_size_charts_request** | [**\OpenAPI\Client\Model\GetSizeChartsRequest**](../Model/GetSizeChartsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetSizeChartsResponse**](../Model/GetSizeChartsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContentSizeTables()`

```php
getContentSizeTables($business_id, $get_size_tables_request, $page_token, $limit): \OpenAPI\Client\Model\GetSizeTablesResponse
```

Таблицы размеров по идентификаторам

{% include notitle [access](../../_auto/method_scopes/getContentSizeTables.md) %}  Возвращает таблицы размеров по их идентификаторам. Идентификаторы возвращает метод подбора таблиц размеров. Если `sizeTableIds` не передан, возвращает все таблицы размеров, созданные бизнесом.  Сначала возвращаются созданные бизнесом, затем брендовые, затем стандартные таблицы; внутри каждой группы — по убыванию идентификатора.  Результаты возвращаются постранично. Для навигации используйте параметры `pageToken` и `limit`. В каждом следующем запросе передавайте тот же набор `sizeTableIds`, что и в первом: `pageToken` привязан к нему, и с другим набором запрос будет отклонен. Порядок идентификаторов значения не имеет.  Идентификаторы, по которым таблицу вернуть не удалось — такой таблицы нет или она принадлежит другому бизнесу, — возвращаются в `notFoundSizeTableIds` на первой странице.  **Пошаговые инструкции**  * [Таблицы размеров](../../step-by-step/size-tables.md)  {% include notitle [limit](../../_auto/method_limits/getContentSizeTables.md) %}

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
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$get_size_tables_request = new \OpenAPI\Client\Model\GetSizeTablesRequest(); // \OpenAPI\Client\Model\GetSizeTablesRequest
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 25; // int | {{ limit-param-description }}

try {
    $result = $apiInstance->getContentSizeTables($business_id, $get_size_tables_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->getContentSizeTables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **get_size_tables_request** | [**\OpenAPI\Client\Model\GetSizeTablesRequest**](../Model/GetSizeTablesRequest.md)|  | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 25] |

### Return type

[**\OpenAPI\Client\Model\GetSizeTablesResponse**](../Model/GetSizeTablesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferCardsContentStatus()`

```php
getOfferCardsContentStatus($business_id, $page_token, $limit, $get_offer_cards_content_status_request): \OpenAPI\Client\Model\GetOfferCardsContentStatusResponse
```

Получение информации о заполненности карточек магазина

{% include notitle [access](../../_auto/method_scopes/getOfferCardsContentStatus.md) %}  Возвращает сведения о состоянии контента для заданных товаров:  * создана ли карточка товара и в каком она статусе; * рейтинг карточки — на сколько процентов она заполнена; * переданные характеристики товаров; * есть ли ошибки или предупреждения, связанные с контентом; * рекомендации по заполнению карточки.  Чтобы получить другие характеристики товаров, воспользуйтесь методом [POST v2/businesses/{businessId}/offer-mappings](../../reference/business-offer-mappings/getOfferMappings.md).  **Пошаговые инструкции**  * [Получить текущие характеристики и статус карточки](../../step-by-step/content-change.md#edit-card) * [Получить рекомендации по заполнению карточки](../../step-by-step/recommendations.md)  {% include notitle [limit](../../_auto/method_limits/getOfferCardsContentStatus.md) %}

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
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 100; // int | {{ limit-param-description }}
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
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 100] |
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

## `suggestContentSizeTables()`

```php
suggestContentSizeTables($business_id, $suggest_size_tables_request, $page_token, $limit): \OpenAPI\Client\Model\SuggestSizeTablesResponse
```

Подбор таблиц размеров

{% include notitle [access](../../_auto/method_scopes/suggestContentSizeTables.md) %}  Возвращает таблицы размеров, подходящие для указанной категории, бренда и пола.  Тип `STANDARD` — таблицы, уже созданные Маркетом и автоматически подобранные под выбранные вами категорию, бренд и пол. Тип `CUSTOM` — таблицы, которые вы создали сами: они подходят, если у вас свой бренд, уникальная размерная линейка, товары маломерят или большемерят.  Сначала возвращаются созданные бизнесом, затем брендовые, затем стандартные таблицы; внутри каждой группы — по убыванию идентификатора.  Результаты возвращаются постранично. Для навигации используйте параметры `pageToken` и `limit`.  **Пошаговые инструкции**  * [Подобрать готовую таблицу](../../step-by-step/size-tables.md#suggest)  {% include notitle [limit](../../_auto/method_limits/suggestContentSizeTables.md) %}

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
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$suggest_size_tables_request = new \OpenAPI\Client\Model\SuggestSizeTablesRequest(); // \OpenAPI\Client\Model\SuggestSizeTablesRequest
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 25; // int | {{ limit-param-description }}

try {
    $result = $apiInstance->suggestContentSizeTables($business_id, $suggest_size_tables_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->suggestContentSizeTables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **suggest_size_tables_request** | [**\OpenAPI\Client\Model\SuggestSizeTablesRequest**](../Model/SuggestSizeTablesRequest.md)|  | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 25] |

### Return type

[**\OpenAPI\Client\Model\SuggestSizeTablesResponse**](../Model/SuggestSizeTablesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContentSizeTables()`

```php
updateContentSizeTables($business_id, $update_size_tables_request): \OpenAPI\Client\Model\UpdateSizeTablesResponse
```

Обновление таблиц размеров

{% include notitle [access](../../_auto/method_scopes/updateContentSizeTables.md) %}  Полностью заменяет названия и содержимое таблиц размеров, созданных бизнесом. За один запрос можно обновить до 10 таблиц, в которых суммарно не больше 5000 ячеек. Если таблиц или ячеек больше, запрос отклоняется с ошибкой `BAD_REQUEST` и ни одна таблица не обновляется.  {% note warning \"Передавайте полное содержимое таблицы\" %}  Все отсутствующие строки и колонки будут удалены.  {% endnote %}  Изменить можно только таблицы, созданные бизнесом, — у них в ответе метода `POST v2/businesses/{businessId}/size-tables` указано `editable: true`. Если таблицы нет, для нее возвращается ошибка `NOT_FOUND`, если это таблица Маркета (`sizeTableType: STANDARD`) — ошибка `FORBIDDEN`.  Размерную характеристику таблицы изменить нельзя: колонки и значения проверяются по характеристике, указанной при создании таблицы. Размерные сетки и обмеры, которые можно использовать в таблице, их значения и обязательные сетки возвращает метод `POST v2/businesses/{businessId}/size-tables/charts`.  Идентификаторы таблиц не должны повторяться в одном запросе. Если они повторяются, запрос отклоняется с ошибкой `BAD_REQUEST` и ни одна таблица не обновляется.  {% cut \"Как заполнить таблицу\" %}  {% include notitle [size-tables-filling](../../_includes/common/size-tables-filling.md) %}  {% endcut %}  {% cut \"Чем сохраненная таблица отличается от переданной\" %}  {% include notitle [size-tables-saved-differences](../../_includes/common/size-tables-saved-differences.md) %}  Значения из ответа можно без изменений передать в этот метод: поля `columnType` и `rowIndex` в нем не учитываются.  {% endcut %}  {% note warning \"Сохраняется содержимое из последнего запроса\" %}  Версии таблицы не сравниваются. Если таблицу изменили в кабинете после того, как вы ее получили, эти изменения будут перезаписаны без предупреждения. Ошибка `CONCURRENT_MODIFICATION` возвращается, только если таблицу изменили во время обработки вашего запроса. В этом случае повторите запрос.  {% endnote %}  Новое содержимое таблицы применяется к привязанным к ней товарам автоматически через некоторое время. Передавать товары повторно не нужно.  Если запрос завершился ошибкой с кодом 5xx, его можно повторить: таблицы заменятся тем же содержимым.  **Пошаговые инструкции**  * [Создать свою таблицу](../../step-by-step/size-tables.md#create)  {% include notitle [limit](../../_auto/method_limits/updateContentSizeTables.md) %}

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
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$update_size_tables_request = new \OpenAPI\Client\Model\UpdateSizeTablesRequest(); // \OpenAPI\Client\Model\UpdateSizeTablesRequest

try {
    $result = $apiInstance->updateContentSizeTables($business_id, $update_size_tables_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->updateContentSizeTables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **update_size_tables_request** | [**\OpenAPI\Client\Model\UpdateSizeTablesRequest**](../Model/UpdateSizeTablesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateSizeTablesResponse**](../Model/UpdateSizeTablesResponse.md)

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

{% include notitle [access](../../_auto/method_scopes/updateOfferContent.md) %}  Редактирует характеристики товара, которые специфичны для категории, к которой он относится.  {% note warning \"Здесь только то, что относится к конкретной категории\" %}  Если вам нужно изменить основные параметры товара (название, описание, изображения, видео, производитель, штрихкод), воспользуйтесь запросом [POST v2/businesses/{businessId}/offer-mappings/update](../../reference/business-offer-mappings/updateOfferMappings.md).  {% endnote %}  Чтобы удалить характеристики, которые заданы в параметрах с типом `string`, передайте пустое значение.  {% note info \"Данные в каталоге обновляются не мгновенно\" %}  Это занимает до нескольких минут.  {% endnote %}  **Пошаговые инструкции**  * [Объединить варианты товаров на карточке](../../step-by-step/assortment-add-goods.md#combine-variants) * [Товары относятся к новой для магазина категории](../../step-by-step/content-change.md#edit-card) * [Привязать таблицу размеров к карточке](../../step-by-step/size-tables.md#offer-card) * [Рекомендации Маркета по карточкам](../../step-by-step/recommendations.md) * [Передача значений характеристики](../../step-by-step/parameter-values.md)  {% include notitle [limit](../../_auto/method_limits/updateOfferContent.md) %}

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
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
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
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
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
