# # UpdateOfferMappingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_mappings** | [**\OpenAPI\Client\Model\UpdateOfferMappingDTO[]**](UpdateOfferMappingDTO.md) | Список товаров, которые нужно добавить или обновить.  {% note warning \&quot;Скоро мы уменьшим максимальное количество товаров в запросе\&quot; %}  Уже сейчас не передавайте больше 100.  {% endnote %}    |
**only_partner_media_content** | **bool** | Будут ли использоваться только переданные вами данные о товарах.  Значение по умолчанию: &#x60;false&#x60;. Чтобы удалить данные, которые добавил Маркет, передайте значение &#x60;true&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
