<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * Return
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/return
 */
class Return_ extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/returns';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'return';


    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->get('createdAt');
    }

    /**
     * @param string|null $createdAt
     * @return $this
     */
    public function setCreatedAt(string $createdAt = null): static
    {
        return $this->set('createdAt', $createdAt);
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->get('updatedAt');
    }

    /**
     * @param string|null $updatedAt
     * @return $this
     */
    public function setUpdatedAt(string $updatedAt = null): static
    {
        return $this->set('updatedAt', $updatedAt);
    }

    /**
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->get('customerId');
    }

    /**
     * @param int|null $customerId
     * @return $this
     */
    public function setCustomerId(int $customerId = null): static
    {
        return $this->set('customerId', $customerId);
    }

    /**
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->get('orderId');
    }

    /**
     * @param int|null $orderId
     * @return $this
     */
    public function setOrderId(int $orderId = null): static
    {
        return $this->set('orderId', $orderId);
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->get('status');
    }

    /**
     * @param string|null $status
     * @return $this
     */
    public function setStatus(string $status = null): static
    {
        return $this->set('status', $status);
    }

    /**
     * @return int|null
     */
    public function getNumProducts(): ?int
    {
        return $this->get('numProducts');
    }

    /**
     * @param int|null $numProducts
     * @return $this
     */
    public function setNumProducts(int $numProducts = null): static
    {
        return $this->set('numProducts', $numProducts);
    }

    /**
     * @return string|null
     */
    public function getPriceExcl(): ?string
    {
        return $this->get('priceExcl');
    }

    /**
     * @param string|null $priceExcl
     * @return $this
     */
    public function setPriceExcl(string $priceExcl = null): static
    {
        return $this->set('priceExcl', $priceExcl);
    }

    /**
     * @return string|null
     */
    public function getPriceIncl(): ?string
    {
        return $this->get('priceIncl');
    }

    /**
     * @param string|null $priceIncl
     * @return $this
     */
    public function setPriceIncl(string $priceIncl = null): static
    {
        return $this->set('priceIncl', $priceIncl);
    }

    /**
     * @return bool|null
     */
    public function getIsStockAdjusted(): ?bool
    {
        return $this->get('isStockAdjusted');
    }

    /**
     * @param bool|null $isStockAdjusted
     * @return $this
     */
    public function setIsStockAdjusted(bool $isStockAdjusted = null): static
    {
        return $this->set('isStockAdjusted', $isStockAdjusted);
    }

    /**
     * @return string|null
     */
    public function getReturnReason(): ?string
    {
        return $this->get('returnReason');
    }

    /**
     * @param string|null $returnReason
     * @return $this
     */
    public function setReturnReason(string $returnReason = null): static
    {
        return $this->set('returnReason', $returnReason);
    }

    /**
     * @return string|null
     */
    public function getReturnAction(): ?string
    {
        return $this->get('returnAction');
    }

    /**
     * @param string|null $returnAction
     * @return $this
     */
    public function setReturnAction(string $returnAction = null): static
    {
        return $this->set('returnAction', $returnAction);
    }

    /**
     * @return string|null
     */
    public function getCustomerComment(): ?string
    {
        return $this->get('customerComment');
    }

    /**
     * @param string|null $customerComment
     * @return $this
     */
    public function setCustomerComment(string $customerComment = null): static
    {
        return $this->set('customerComment', $customerComment);
    }

    /**
     * @return string|null
     */
    public function getStaffNote(): ?string
    {
        return $this->get('staffNote');
    }

    /**
     * @param string|null $staffNote
     * @return $this
     */
    public function setStaffNote(string $staffNote = null): static
    {
        return $this->set('staffNote', $staffNote);
    }

    /**
     * @return string|null
     */
    public function getMailMessage(): ?string
    {
        return $this->get('mailMessage');
    }

    /**
     * @param string|null $mailMessage
     * @return $this
     */
    public function setMailMessage(string $mailMessage = null): static
    {
        return $this->set('mailMessage', $mailMessage);
    }

    /**
     * @return bool|null
     */
    public function getNotifyStatus(): ?bool
    {
        return $this->get('notifyStatus');
    }

    /**
     * @param bool|null $notifyStatus
     * @return $this
     */
    public function setNotifyStatus(bool $notifyStatus = null): static
    {
        return $this->set('notifyStatus', $notifyStatus);
    }

    /**
     * @return array|null
     */
    public function getOrderProducts(): ?array
    {
        return $this->get('orderProducts');
    }

    /**
     * @param array|null $orderProducts
     * @return $this
     */
    public function setOrderProducts(array $orderProducts = null): static
    {
        return $this->set('orderProducts', $orderProducts);
    }

}
