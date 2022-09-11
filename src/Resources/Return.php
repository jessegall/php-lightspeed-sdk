<?php

namespace JesseGall\LightspeedSDK\Resources;

class return extends Resource
{


    /**
     * @return int
     */
    public
    function getId(): int
    {
        return $this->get('id');
    }

    /**
     * @param int $id
     * @return $this
     */
    public
    function setId(int $id): static
    {
        return $this->set('id', $id);
    }

    /**
     * @return string
     */
    public
    function getCreatedAt(): string
    {
        return $this->get('createdAt');
    }

    /**
     * @param string $createdAt
     * @return $this
     */
    public
    function setCreatedAt(string $createdAt): static
    {
        return $this->set('createdAt', $createdAt);
    }

    /**
     * @return string
     */
    public
    function getUpdatedAt(): string
    {
        return $this->get('updatedAt');
    }

    /**
     * @param string $updatedAt
     * @return $this
     */
    public
    function setUpdatedAt(string $updatedAt): static
    {
        return $this->set('updatedAt', $updatedAt);
    }

    /**
     * @return int
     */
    public
    function getCustomerId(): int
    {
        return $this->get('customerId');
    }

    /**
     * @param int $customerId
     * @return $this
     */
    public
    function setCustomerId(int $customerId): static
    {
        return $this->set('customerId', $customerId);
    }

    /**
     * @return int
     */
    public
    function getOrderId(): int
    {
        return $this->get('orderId');
    }

    /**
     * @param int $orderId
     * @return $this
     */
    public
    function setOrderId(int $orderId): static
    {
        return $this->set('orderId', $orderId);
    }

    /**
     * @return string
     */
    public
    function getStatus(): string
    {
        return $this->get('status');
    }

    /**
     * @param string $status
     * @return $this
     */
    public
    function setStatus(string $status): static
    {
        return $this->set('status', $status);
    }

    /**
     * @return int
     */
    public
    function getNumProducts(): int
    {
        return $this->get('numProducts');
    }

    /**
     * @param int $numProducts
     * @return $this
     */
    public
    function setNumProducts(int $numProducts): static
    {
        return $this->set('numProducts', $numProducts);
    }

    /**
     * @return string
     */
    public
    function getPriceExcl(): string
    {
        return $this->get('priceExcl');
    }

    /**
     * @param string $priceExcl
     * @return $this
     */
    public
    function setPriceExcl(string $priceExcl): static
    {
        return $this->set('priceExcl', $priceExcl);
    }

    /**
     * @return string
     */
    public
    function getPriceIncl(): string
    {
        return $this->get('priceIncl');
    }

    /**
     * @param string $priceIncl
     * @return $this
     */
    public
    function setPriceIncl(string $priceIncl): static
    {
        return $this->set('priceIncl', $priceIncl);
    }

    /**
     * @return bool
     */
    public
    function getIsStockAdjusted(): bool
    {
        return $this->get('isStockAdjusted');
    }

    /**
     * @param bool $isStockAdjusted
     * @return $this
     */
    public
    function setIsStockAdjusted(bool $isStockAdjusted): static
    {
        return $this->set('isStockAdjusted', $isStockAdjusted);
    }

    /**
     * @return string
     */
    public
    function getReturnReason(): string
    {
        return $this->get('returnReason');
    }

    /**
     * @param string $returnReason
     * @return $this
     */
    public
    function setReturnReason(string $returnReason): static
    {
        return $this->set('returnReason', $returnReason);
    }

    /**
     * @return string
     */
    public
    function getReturnAction(): string
    {
        return $this->get('returnAction');
    }

    /**
     * @param string $returnAction
     * @return $this
     */
    public
    function setReturnAction(string $returnAction): static
    {
        return $this->set('returnAction', $returnAction);
    }

    /**
     * @return string
     */
    public
    function getCustomerComment(): string
    {
        return $this->get('customerComment');
    }

    /**
     * @param string $customerComment
     * @return $this
     */
    public
    function setCustomerComment(string $customerComment): static
    {
        return $this->set('customerComment', $customerComment);
    }

    /**
     * @return string
     */
    public
    function getStaffNote(): string
    {
        return $this->get('staffNote');
    }

    /**
     * @param string $staffNote
     * @return $this
     */
    public
    function setStaffNote(string $staffNote): static
    {
        return $this->set('staffNote', $staffNote);
    }

    /**
     * @return string
     */
    public
    function getMailMessage(): string
    {
        return $this->get('mailMessage');
    }

    /**
     * @param string $mailMessage
     * @return $this
     */
    public
    function setMailMessage(string $mailMessage): static
    {
        return $this->set('mailMessage', $mailMessage);
    }

    /**
     * @return bool
     */
    public
    function getNotifyStatus(): bool
    {
        return $this->get('notifyStatus');
    }

    /**
     * @param bool $notifyStatus
     * @return $this
     */
    public
    function setNotifyStatus(bool $notifyStatus): static
    {
        return $this->set('notifyStatus', $notifyStatus);
    }

    /**
     * @return array
     */
    public
    function getOrderProducts(): array
    {
        return $this->get('orderProducts');
    }

    /**
     * @param array $orderProducts
     * @return $this
     */
    public
    function setOrderProducts(array $orderProducts): static
    {
        return $this->set('orderProducts', $orderProducts);
    }

}
