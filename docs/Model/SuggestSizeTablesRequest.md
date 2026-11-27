# # SuggestSizeTablesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_id** | **int** | Идентификатор категории на Маркете.  При изменении категории убедитесь, что характеристики товара и их значения в параметре &#x60;parameterValues&#x60; вы передаете для новой категории.  Список категорий Маркета можно получить с помощью запроса  [POST v2/categories/tree](../../reference/categories/getCategoriesTree.md). |
**vendor_id** | **int** | Идентификатор бренда: значение характеристики **Бренд** (&#x60;id: 7893318&#x60;).  Чтобы его узнать, воспользуйтесь запросом [POST v2/category/{categoryId}/parameters](../../reference/content/getCategoryContentParameters.md) — идентификатор придет в &#x60;parameters[].values[].id&#x60;. | [optional]
**gender_id** | **int** | Идентификатор пола: значение характеристики **Пол** (&#x60;id: 14805991&#x60;).  Чтобы его узнать, воспользуйтесь запросом [POST v2/category/{categoryId}/parameters](../../reference/content/getCategoryContentParameters.md) — идентификатор придет в &#x60;parameters[].values[].id&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
