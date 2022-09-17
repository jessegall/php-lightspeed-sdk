<?php

namespace JesseGall\LightspeedSDK\Resources;

/**
 * TicketMessage
 *
 * @link https://developers.lightspeedhq.com/ecom/endpoints/ticketmessage
 */
class TicketMessage extends Resource
{

    /**
     * The api endpoint of the resource.
     *
     * @var string
     */
    protected string $endpoint = '/tickets/{id}/messages';

    /**
     * The lightspeed resource this class represents
     *
     * @var string
     */
    protected string $lightspeedResource = 'ticketMessage';


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
     * @return mixed|null
     */
    public function getUpdatedAt(): mixed
    {
        return $this->get('updatedAt');
    }

    /**
     * @param mixed|null $updatedAt
     * @return $this
     */
    public function setUpdatedAt(mixed $updatedAt = null): static
    {
        return $this->set('updatedAt', $updatedAt);
    }

    /**
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->get('from');
    }

    /**
     * @param string|null $from
     * @return $this
     */
    public function setFrom(string $from = null): static
    {
        return $this->set('from', $from);
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->get('message');
    }

    /**
     * @param string|null $message
     * @return $this
     */
    public function setMessage(string $message = null): static
    {
        return $this->set('message', $message);
    }

}
