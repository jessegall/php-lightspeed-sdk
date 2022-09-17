<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * ShopLimits
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/shoplimits
 */
class ShopLimits extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/shops/{id}/limits';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'shopLimits';


    /**
     * @return int|null
     */
    public function getMaxAttributes(): ?int
    {
        return $this->get('maxAttributes');
    }

    /**
     * @param int|null $maxAttributes
     * @return $this
     */
    public function setMaxAttributes(int $maxAttributes = null): static
    {
        return $this->set('maxAttributes', $maxAttributes);
    }

    /**
     * @return int|null
     */
    public function getMaxBrands(): ?int
    {
        return $this->get('maxBrands');
    }

    /**
     * @param int|null $maxBrands
     * @return $this
     */
    public function setMaxBrands(int $maxBrands = null): static
    {
        return $this->set('maxBrands', $maxBrands);
    }

    /**
     * @return int|null
     */
    public function getMaxCategories(): ?int
    {
        return $this->get('maxCategories');
    }

    /**
     * @param int|null $maxCategories
     * @return $this
     */
    public function setMaxCategories(int $maxCategories = null): static
    {
        return $this->set('maxCategories', $maxCategories);
    }

    /**
     * @return int|null
     */
    public function getMaxCurrencies(): ?int
    {
        return $this->get('maxCurrencies');
    }

    /**
     * @param int|null $maxCurrencies
     * @return $this
     */
    public function setMaxCurrencies(int $maxCurrencies = null): static
    {
        return $this->set('maxCurrencies', $maxCurrencies);
    }

    /**
     * @return int|null
     */
    public function getMaxDeliverydates(): ?int
    {
        return $this->get('maxDeliverydates');
    }

    /**
     * @param int|null $maxDeliverydates
     * @return $this
     */
    public function setMaxDeliverydates(int $maxDeliverydates = null): static
    {
        return $this->set('maxDeliverydates', $maxDeliverydates);
    }

    /**
     * @return int|null
     */
    public function getMaxDomainNames(): ?int
    {
        return $this->get('maxDomainNames');
    }

    /**
     * @param int|null $maxDomainNames
     * @return $this
     */
    public function setMaxDomainNames(int $maxDomainNames = null): static
    {
        return $this->set('maxDomainNames', $maxDomainNames);
    }

    /**
     * @return int|null
     */
    public function getMaxDomainForwards(): ?int
    {
        return $this->get('maxDomainForwards');
    }

    /**
     * @param int|null $maxDomainForwards
     * @return $this
     */
    public function setMaxDomainForwards(int $maxDomainForwards = null): static
    {
        return $this->set('maxDomainForwards', $maxDomainForwards);
    }

    /**
     * @return int|null
     */
    public function getMaxEmailAccounts(): ?int
    {
        return $this->get('maxEmailAccounts');
    }

    /**
     * @param int|null $maxEmailAccounts
     * @return $this
     */
    public function setMaxEmailAccounts(int $maxEmailAccounts = null): static
    {
        return $this->set('maxEmailAccounts', $maxEmailAccounts);
    }

    /**
     * @return int|null
     */
    public function getMaxEmailForwards(): ?int
    {
        return $this->get('maxEmailForwards');
    }

    /**
     * @param int|null $maxEmailForwards
     * @return $this
     */
    public function setMaxEmailForwards(int $maxEmailForwards = null): static
    {
        return $this->set('maxEmailForwards', $maxEmailForwards);
    }

    /**
     * @return int|null
     */
    public function getMaxFiles(): ?int
    {
        return $this->get('maxFiles');
    }

    /**
     * @param int|null $maxFiles
     * @return $this
     */
    public function setMaxFiles(int $maxFiles = null): static
    {
        return $this->set('maxFiles', $maxFiles);
    }

    /**
     * @return int|null
     */
    public function getMaxFilesSize(): ?int
    {
        return $this->get('maxFilesSize');
    }

    /**
     * @param int|null $maxFilesSize
     * @return $this
     */
    public function setMaxFilesSize(int $maxFilesSize = null): static
    {
        return $this->set('maxFilesSize', $maxFilesSize);
    }

    /**
     * @return int|null
     */
    public function getMaxFilters(): ?int
    {
        return $this->get('maxFilters');
    }

    /**
     * @param int|null $maxFilters
     * @return $this
     */
    public function setMaxFilters(int $maxFilters = null): static
    {
        return $this->set('maxFilters', $maxFilters);
    }

    /**
     * @return int|null
     */
    public function getMaxFiltersValues(): ?int
    {
        return $this->get('maxFiltersValues');
    }

    /**
     * @param int|null $maxFiltersValues
     * @return $this
     */
    public function setMaxFiltersValues(int $maxFiltersValues = null): static
    {
        return $this->set('maxFiltersValues', $maxFiltersValues);
    }

    /**
     * @return int|null
     */
    public function getMaxGroups(): ?int
    {
        return $this->get('maxGroups');
    }

    /**
     * @param int|null $maxGroups
     * @return $this
     */
    public function setMaxGroups(int $maxGroups = null): static
    {
        return $this->set('maxGroups', $maxGroups);
    }

    /**
     * @return int|null
     */
    public function getMaxGroupsCustomers(): ?int
    {
        return $this->get('maxGroupsCustomers');
    }

    /**
     * @param int|null $maxGroupsCustomers
     * @return $this
     */
    public function setMaxGroupsCustomers(int $maxGroupsCustomers = null): static
    {
        return $this->set('maxGroupsCustomers', $maxGroupsCustomers);
    }

    /**
     * @return int|null
     */
    public function getMaxLanguages(): ?int
    {
        return $this->get('maxLanguages');
    }

    /**
     * @param int|null $maxLanguages
     * @return $this
     */
    public function setMaxLanguages(int $maxLanguages = null): static
    {
        return $this->set('maxLanguages', $maxLanguages);
    }

    /**
     * @return int|null
     */
    public function getMaxProducts(): ?int
    {
        return $this->get('maxProducts');
    }

    /**
     * @param int|null $maxProducts
     * @return $this
     */
    public function setMaxProducts(int $maxProducts = null): static
    {
        return $this->set('maxProducts', $maxProducts);
    }

    /**
     * @return int|null
     */
    public function getMaxProductsCategories(): ?int
    {
        return $this->get('maxProductsCategories');
    }

    /**
     * @param int|null $maxProductsCategories
     * @return $this
     */
    public function setMaxProductsCategories(int $maxProductsCategories = null): static
    {
        return $this->set('maxProductsCategories', $maxProductsCategories);
    }

    /**
     * @return int|null
     */
    public function getMaxProductsFiltersValues(): ?int
    {
        return $this->get('maxProductsFiltersValues');
    }

    /**
     * @param int|null $maxProductsFiltersValues
     * @return $this
     */
    public function setMaxProductsFiltersValues(int $maxProductsFiltersValues = null): static
    {
        return $this->set('maxProductsFiltersValues', $maxProductsFiltersValues);
    }

    /**
     * @return int|null
     */
    public function getMaxProductsImages(): ?int
    {
        return $this->get('maxProductsImages');
    }

    /**
     * @param int|null $maxProductsImages
     * @return $this
     */
    public function setMaxProductsImages(int $maxProductsImages = null): static
    {
        return $this->set('maxProductsImages', $maxProductsImages);
    }

    /**
     * @return int|null
     */
    public function getMaxProductsRelations(): ?int
    {
        return $this->get('maxProductsRelations');
    }

    /**
     * @param int|null $maxProductsRelations
     * @return $this
     */
    public function setMaxProductsRelations(int $maxProductsRelations = null): static
    {
        return $this->set('maxProductsRelations', $maxProductsRelations);
    }

    /**
     * @return int|null
     */
    public function getMaxProductsTags(): ?int
    {
        return $this->get('maxProductsTags');
    }

    /**
     * @param int|null $maxProductsTags
     * @return $this
     */
    public function setMaxProductsTags(int $maxProductsTags = null): static
    {
        return $this->set('maxProductsTags', $maxProductsTags);
    }

    /**
     * @return int|null
     */
    public function getMaxProductsVariants(): ?int
    {
        return $this->get('maxProductsVariants');
    }

    /**
     * @param int|null $maxProductsVariants
     * @return $this
     */
    public function setMaxProductsVariants(int $maxProductsVariants = null): static
    {
        return $this->set('maxProductsVariants', $maxProductsVariants);
    }

    /**
     * @return int|null
     */
    public function getMaxRedirects(): ?int
    {
        return $this->get('maxRedirects');
    }

    /**
     * @param int|null $maxRedirects
     * @return $this
     */
    public function setMaxRedirects(int $maxRedirects = null): static
    {
        return $this->set('maxRedirects', $maxRedirects);
    }

    /**
     * @return int|null
     */
    public function getMaxReviews(): ?int
    {
        return $this->get('maxReviews');
    }

    /**
     * @param int|null $maxReviews
     * @return $this
     */
    public function setMaxReviews(int $maxReviews = null): static
    {
        return $this->set('maxReviews', $maxReviews);
    }

    /**
     * @return int|null
     */
    public function getMaxSuppliers(): ?int
    {
        return $this->get('maxSuppliers');
    }

    /**
     * @param int|null $maxSuppliers
     * @return $this
     */
    public function setMaxSuppliers(int $maxSuppliers = null): static
    {
        return $this->set('maxSuppliers', $maxSuppliers);
    }

    /**
     * @return int|null
     */
    public function getMaxUserAccounts(): ?int
    {
        return $this->get('maxUserAccounts');
    }

    /**
     * @param int|null $maxUserAccounts
     * @return $this
     */
    public function setMaxUserAccounts(int $maxUserAccounts = null): static
    {
        return $this->set('maxUserAccounts', $maxUserAccounts);
    }

    /**
     * @return int|null
     */
    public function getMaxTags(): ?int
    {
        return $this->get('maxTags');
    }

    /**
     * @param int|null $maxTags
     * @return $this
     */
    public function setMaxTags(int $maxTags = null): static
    {
        return $this->set('maxTags', $maxTags);
    }

    /**
     * @return int|null
     */
    public function getMaxTaxes(): ?int
    {
        return $this->get('maxTaxes');
    }

    /**
     * @param int|null $maxTaxes
     * @return $this
     */
    public function setMaxTaxes(int $maxTaxes = null): static
    {
        return $this->set('maxTaxes', $maxTaxes);
    }

    /**
     * @return int|null
     */
    public function getMaxTextpages(): ?int
    {
        return $this->get('maxTextpages');
    }

    /**
     * @param int|null $maxTextpages
     * @return $this
     */
    public function setMaxTextpages(int $maxTextpages = null): static
    {
        return $this->set('maxTextpages', $maxTextpages);
    }

    /**
     * @return int|null
     */
    public function getMaxTypes(): ?int
    {
        return $this->get('maxTypes');
    }

    /**
     * @param int|null $maxTypes
     * @return $this
     */
    public function setMaxTypes(int $maxTypes = null): static
    {
        return $this->set('maxTypes', $maxTypes);
    }

    /**
     * @return int|null
     */
    public function getMaxTypesAttributes(): ?int
    {
        return $this->get('maxTypesAttributes');
    }

    /**
     * @param int|null $maxTypesAttributes
     * @return $this
     */
    public function setMaxTypesAttributes(int $maxTypesAttributes = null): static
    {
        return $this->set('maxTypesAttributes', $maxTypesAttributes);
    }

    /**
     * @return int|null
     */
    public function getMaxWebhooks(): ?int
    {
        return $this->get('maxWebhooks');
    }

    /**
     * @param int|null $maxWebhooks
     * @return $this
     */
    public function setMaxWebhooks(int $maxWebhooks = null): static
    {
        return $this->set('maxWebhooks', $maxWebhooks);
    }

    /**
     * @return bool|null
     */
    public function getHasB2b(): ?bool
    {
        return $this->get('hasB2b');
    }

    /**
     * @param bool|null $hasB2b
     * @return $this
     */
    public function setHasB2b(bool $hasB2b = null): static
    {
        return $this->set('hasB2b', $hasB2b);
    }

    /**
     * @return bool|null
     */
    public function getHasCopyright(): ?bool
    {
        return $this->get('hasCopyright');
    }

    /**
     * @param bool|null $hasCopyright
     * @return $this
     */
    public function setHasCopyright(bool $hasCopyright = null): static
    {
        return $this->set('hasCopyright', $hasCopyright);
    }

    /**
     * @return bool|null
     */
    public function getHasFilters(): ?bool
    {
        return $this->get('hasFilters');
    }

    /**
     * @param bool|null $hasFilters
     * @return $this
     */
    public function setHasFilters(bool $hasFilters = null): static
    {
        return $this->set('hasFilters', $hasFilters);
    }

    /**
     * @return bool|null
     */
    public function getHasMultishop(): ?bool
    {
        return $this->get('hasMultishop');
    }

    /**
     * @param bool|null $hasMultishop
     * @return $this
     */
    public function setHasMultishop(bool $hasMultishop = null): static
    {
        return $this->set('hasMultishop', $hasMultishop);
    }

    /**
     * @return bool|null
     */
    public function getHasTemplateEditor(): ?bool
    {
        return $this->get('hasTemplateEditor');
    }

    /**
     * @param bool|null $hasTemplateEditor
     * @return $this
     */
    public function setHasTemplateEditor(bool $hasTemplateEditor = null): static
    {
        return $this->set('hasTemplateEditor', $hasTemplateEditor);
    }

    /**
     * @return bool|null
     */
    public function getHasTranslations(): ?bool
    {
        return $this->get('hasTranslations');
    }

    /**
     * @param bool|null $hasTranslations
     * @return $this
     */
    public function setHasTranslations(bool $hasTranslations = null): static
    {
        return $this->set('hasTranslations', $hasTranslations);
    }

}
