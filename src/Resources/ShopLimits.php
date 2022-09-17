<?php

namespace JesseGall\LightspeedSDK\Resources;

class ShopLimits extends Resource
{

    protected string $apiUrl = '/shops/{id}/limits';

    protected string $handle = 'shopLimits';

    /**
     * @return int
     */
    public function getMaxAttributes(): int
    {
        return $this->get('maxAttributes');
    }

    /**
     * @param int $maxAttributes
     * @return $this
     */
    public function setMaxAttributes(int $maxAttributes): static
    {
        return $this->set('maxAttributes', $maxAttributes);
    }

    /**
     * @return int
     */
    public function getMaxBrands(): int
    {
        return $this->get('maxBrands');
    }

    /**
     * @param int $maxBrands
     * @return $this
     */
    public function setMaxBrands(int $maxBrands): static
    {
        return $this->set('maxBrands', $maxBrands);
    }

    /**
     * @return int
     */
    public function getMaxCategories(): int
    {
        return $this->get('maxCategories');
    }

    /**
     * @param int $maxCategories
     * @return $this
     */
    public function setMaxCategories(int $maxCategories): static
    {
        return $this->set('maxCategories', $maxCategories);
    }

    /**
     * @return int
     */
    public function getMaxCurrencies(): int
    {
        return $this->get('maxCurrencies');
    }

    /**
     * @param int $maxCurrencies
     * @return $this
     */
    public function setMaxCurrencies(int $maxCurrencies): static
    {
        return $this->set('maxCurrencies', $maxCurrencies);
    }

    /**
     * @return int
     */
    public function getMaxDeliverydates(): int
    {
        return $this->get('maxDeliverydates');
    }

    /**
     * @param int $maxDeliverydates
     * @return $this
     */
    public function setMaxDeliverydates(int $maxDeliverydates): static
    {
        return $this->set('maxDeliverydates', $maxDeliverydates);
    }

    /**
     * @return int
     */
    public function getMaxDomainNames(): int
    {
        return $this->get('maxDomainNames');
    }

    /**
     * @param int $maxDomainNames
     * @return $this
     */
    public function setMaxDomainNames(int $maxDomainNames): static
    {
        return $this->set('maxDomainNames', $maxDomainNames);
    }

    /**
     * @return int
     */
    public function getMaxDomainForwards(): int
    {
        return $this->get('maxDomainForwards');
    }

    /**
     * @param int $maxDomainForwards
     * @return $this
     */
    public function setMaxDomainForwards(int $maxDomainForwards): static
    {
        return $this->set('maxDomainForwards', $maxDomainForwards);
    }

    /**
     * @return int
     */
    public function getMaxEmailAccounts(): int
    {
        return $this->get('maxEmailAccounts');
    }

    /**
     * @param int $maxEmailAccounts
     * @return $this
     */
    public function setMaxEmailAccounts(int $maxEmailAccounts): static
    {
        return $this->set('maxEmailAccounts', $maxEmailAccounts);
    }

    /**
     * @return int
     */
    public function getMaxEmailForwards(): int
    {
        return $this->get('maxEmailForwards');
    }

    /**
     * @param int $maxEmailForwards
     * @return $this
     */
    public function setMaxEmailForwards(int $maxEmailForwards): static
    {
        return $this->set('maxEmailForwards', $maxEmailForwards);
    }

    /**
     * @return int
     */
    public function getMaxFiles(): int
    {
        return $this->get('maxFiles');
    }

    /**
     * @param int $maxFiles
     * @return $this
     */
    public function setMaxFiles(int $maxFiles): static
    {
        return $this->set('maxFiles', $maxFiles);
    }

    /**
     * @return int
     */
    public function getMaxFilesSize(): int
    {
        return $this->get('maxFilesSize');
    }

    /**
     * @param int $maxFilesSize
     * @return $this
     */
    public function setMaxFilesSize(int $maxFilesSize): static
    {
        return $this->set('maxFilesSize', $maxFilesSize);
    }

    /**
     * @return int
     */
    public function getMaxFilters(): int
    {
        return $this->get('maxFilters');
    }

    /**
     * @param int $maxFilters
     * @return $this
     */
    public function setMaxFilters(int $maxFilters): static
    {
        return $this->set('maxFilters', $maxFilters);
    }

    /**
     * @return int
     */
    public function getMaxFiltersValues(): int
    {
        return $this->get('maxFiltersValues');
    }

    /**
     * @param int $maxFiltersValues
     * @return $this
     */
    public function setMaxFiltersValues(int $maxFiltersValues): static
    {
        return $this->set('maxFiltersValues', $maxFiltersValues);
    }

    /**
     * @return int
     */
    public function getMaxGroups(): int
    {
        return $this->get('maxGroups');
    }

    /**
     * @param int $maxGroups
     * @return $this
     */
    public function setMaxGroups(int $maxGroups): static
    {
        return $this->set('maxGroups', $maxGroups);
    }

    /**
     * @return int
     */
    public function getMaxGroupsCustomers(): int
    {
        return $this->get('maxGroupsCustomers');
    }

    /**
     * @param int $maxGroupsCustomers
     * @return $this
     */
    public function setMaxGroupsCustomers(int $maxGroupsCustomers): static
    {
        return $this->set('maxGroupsCustomers', $maxGroupsCustomers);
    }

    /**
     * @return int
     */
    public function getMaxLanguages(): int
    {
        return $this->get('maxLanguages');
    }

    /**
     * @param int $maxLanguages
     * @return $this
     */
    public function setMaxLanguages(int $maxLanguages): static
    {
        return $this->set('maxLanguages', $maxLanguages);
    }

    /**
     * @return int
     */
    public function getMaxProducts(): int
    {
        return $this->get('maxProducts');
    }

    /**
     * @param int $maxProducts
     * @return $this
     */
    public function setMaxProducts(int $maxProducts): static
    {
        return $this->set('maxProducts', $maxProducts);
    }

    /**
     * @return int
     */
    public function getMaxProductsCategories(): int
    {
        return $this->get('maxProductsCategories');
    }

    /**
     * @param int $maxProductsCategories
     * @return $this
     */
    public function setMaxProductsCategories(int $maxProductsCategories): static
    {
        return $this->set('maxProductsCategories', $maxProductsCategories);
    }

    /**
     * @return int
     */
    public function getMaxProductsFiltersValues(): int
    {
        return $this->get('maxProductsFiltersValues');
    }

    /**
     * @param int $maxProductsFiltersValues
     * @return $this
     */
    public function setMaxProductsFiltersValues(int $maxProductsFiltersValues): static
    {
        return $this->set('maxProductsFiltersValues', $maxProductsFiltersValues);
    }

    /**
     * @return int
     */
    public function getMaxProductsImages(): int
    {
        return $this->get('maxProductsImages');
    }

    /**
     * @param int $maxProductsImages
     * @return $this
     */
    public function setMaxProductsImages(int $maxProductsImages): static
    {
        return $this->set('maxProductsImages', $maxProductsImages);
    }

    /**
     * @return int
     */
    public function getMaxProductsRelations(): int
    {
        return $this->get('maxProductsRelations');
    }

    /**
     * @param int $maxProductsRelations
     * @return $this
     */
    public function setMaxProductsRelations(int $maxProductsRelations): static
    {
        return $this->set('maxProductsRelations', $maxProductsRelations);
    }

    /**
     * @return int
     */
    public function getMaxProductsTags(): int
    {
        return $this->get('maxProductsTags');
    }

    /**
     * @param int $maxProductsTags
     * @return $this
     */
    public function setMaxProductsTags(int $maxProductsTags): static
    {
        return $this->set('maxProductsTags', $maxProductsTags);
    }

    /**
     * @return int
     */
    public function getMaxProductsVariants(): int
    {
        return $this->get('maxProductsVariants');
    }

    /**
     * @param int $maxProductsVariants
     * @return $this
     */
    public function setMaxProductsVariants(int $maxProductsVariants): static
    {
        return $this->set('maxProductsVariants', $maxProductsVariants);
    }

    /**
     * @return int
     */
    public function getMaxRedirects(): int
    {
        return $this->get('maxRedirects');
    }

    /**
     * @param int $maxRedirects
     * @return $this
     */
    public function setMaxRedirects(int $maxRedirects): static
    {
        return $this->set('maxRedirects', $maxRedirects);
    }

    /**
     * @return int
     */
    public function getMaxReviews(): int
    {
        return $this->get('maxReviews');
    }

    /**
     * @param int $maxReviews
     * @return $this
     */
    public function setMaxReviews(int $maxReviews): static
    {
        return $this->set('maxReviews', $maxReviews);
    }

    /**
     * @return int
     */
    public function getMaxSuppliers(): int
    {
        return $this->get('maxSuppliers');
    }

    /**
     * @param int $maxSuppliers
     * @return $this
     */
    public function setMaxSuppliers(int $maxSuppliers): static
    {
        return $this->set('maxSuppliers', $maxSuppliers);
    }

    /**
     * @return int
     */
    public function getMaxUserAccounts(): int
    {
        return $this->get('maxUserAccounts');
    }

    /**
     * @param int $maxUserAccounts
     * @return $this
     */
    public function setMaxUserAccounts(int $maxUserAccounts): static
    {
        return $this->set('maxUserAccounts', $maxUserAccounts);
    }

    /**
     * @return int
     */
    public function getMaxTags(): int
    {
        return $this->get('maxTags');
    }

    /**
     * @param int $maxTags
     * @return $this
     */
    public function setMaxTags(int $maxTags): static
    {
        return $this->set('maxTags', $maxTags);
    }

    /**
     * @return int
     */
    public function getMaxTaxes(): int
    {
        return $this->get('maxTaxes');
    }

    /**
     * @param int $maxTaxes
     * @return $this
     */
    public function setMaxTaxes(int $maxTaxes): static
    {
        return $this->set('maxTaxes', $maxTaxes);
    }

    /**
     * @return int
     */
    public function getMaxTextpages(): int
    {
        return $this->get('maxTextpages');
    }

    /**
     * @param int $maxTextpages
     * @return $this
     */
    public function setMaxTextpages(int $maxTextpages): static
    {
        return $this->set('maxTextpages', $maxTextpages);
    }

    /**
     * @return int
     */
    public function getMaxTypes(): int
    {
        return $this->get('maxTypes');
    }

    /**
     * @param int $maxTypes
     * @return $this
     */
    public function setMaxTypes(int $maxTypes): static
    {
        return $this->set('maxTypes', $maxTypes);
    }

    /**
     * @return int
     */
    public function getMaxTypesAttributes(): int
    {
        return $this->get('maxTypesAttributes');
    }

    /**
     * @param int $maxTypesAttributes
     * @return $this
     */
    public function setMaxTypesAttributes(int $maxTypesAttributes): static
    {
        return $this->set('maxTypesAttributes', $maxTypesAttributes);
    }

    /**
     * @return int
     */
    public function getMaxWebhooks(): int
    {
        return $this->get('maxWebhooks');
    }

    /**
     * @param int $maxWebhooks
     * @return $this
     */
    public function setMaxWebhooks(int $maxWebhooks): static
    {
        return $this->set('maxWebhooks', $maxWebhooks);
    }

    /**
     * @return bool
     */
    public function getHasB2b(): bool
    {
        return $this->get('hasB2b');
    }

    /**
     * @param bool $hasB2b
     * @return $this
     */
    public function setHasB2b(bool $hasB2b): static
    {
        return $this->set('hasB2b', $hasB2b);
    }

    /**
     * @return bool
     */
    public function getHasCopyright(): bool
    {
        return $this->get('hasCopyright');
    }

    /**
     * @param bool $hasCopyright
     * @return $this
     */
    public function setHasCopyright(bool $hasCopyright): static
    {
        return $this->set('hasCopyright', $hasCopyright);
    }

    /**
     * @return bool
     */
    public function getHasFilters(): bool
    {
        return $this->get('hasFilters');
    }

    /**
     * @param bool $hasFilters
     * @return $this
     */
    public function setHasFilters(bool $hasFilters): static
    {
        return $this->set('hasFilters', $hasFilters);
    }

    /**
     * @return bool
     */
    public function getHasMultishop(): bool
    {
        return $this->get('hasMultishop');
    }

    /**
     * @param bool $hasMultishop
     * @return $this
     */
    public function setHasMultishop(bool $hasMultishop): static
    {
        return $this->set('hasMultishop', $hasMultishop);
    }

    /**
     * @return bool
     */
    public function getHasTemplateEditor(): bool
    {
        return $this->get('hasTemplateEditor');
    }

    /**
     * @param bool $hasTemplateEditor
     * @return $this
     */
    public function setHasTemplateEditor(bool $hasTemplateEditor): static
    {
        return $this->set('hasTemplateEditor', $hasTemplateEditor);
    }

    /**
     * @return bool
     */
    public function getHasTranslations(): bool
    {
        return $this->get('hasTranslations');
    }

    /**
     * @param bool $hasTranslations
     * @return $this
     */
    public function setHasTranslations(bool $hasTranslations): static
    {
        return $this->set('hasTranslations', $hasTranslations);
    }

}
