# # TariffDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\OpenAPI\Client\Model\TariffType**](TariffType.md) |  |
**amount** | **float** | Значение тарифа. |
**currency** | [**\OpenAPI\Client\Model\CurrencyType**](CurrencyType.md) |  |
**parameters** | [**\OpenAPI\Client\Model\TariffParameterDTO[]**](TariffParameterDTO.md) | Параметры расчета тарифа. |
**percent** | **float** | {% note warning \&quot;Параметр устарел и будет отключен 12.10.2026.\&quot; %}  Вместо него используйте &#x60;amount&#x60;.  {% endnote %}  Значение тарифа в процентах. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
