<?php

namespace JesseGall\LightspeedSDK\Resources;

class TicketMessage extends Resource
{


    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->get('createdAt');
    }

    /**
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt(string $createdAt): static
    {
        return $this->set('createdAt', $createdAt);
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt(): mixed
    {
        return $this->get('updatedAt');
    }

    /**
     * @param mixed $updatedAt
     * @return $this
     */
    public function setUpdatedAt(mixed $updatedAt): static
    {
        return $this->set('updatedAt', $updatedAt);
    }

    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->get('from');
    }

    /**
     * @param string $from
     * @return $this
     */
    public function setFrom(string $from): static
    {
        return $this->set('from', $from);
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->get('message');
    }

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage(string $message): static
    {
        return $this->set('message', $message);
    }

}
