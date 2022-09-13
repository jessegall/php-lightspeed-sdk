<?php

namespace JesseGall\LightspeedSDK\Resources;

use JesseGall\LightspeedSDK\Resources\Resource;
use JesseGall\Resources\ResourceCollection;

class Contact extends Resource
{

   protected string $url = '/contacts';

   

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
            * @return string
            */
            public function getName(): string
            {
                return $this->get('name');       
            }
            /**
             * @param string $name
             * @return $this
             */
            public function setName(string $name): static
            {
                return $this->set('name', $name);
            }

            /**
            * @return string
            */
            public function getCompany(): string
            {
                return $this->get('company');       
            }
            /**
             * @param string $company
             * @return $this
             */
            public function setCompany(string $company): static
            {
                return $this->set('company', $company);
            }

            /**
            * @return string
            */
            public function getEmail(): string
            {
                return $this->get('email');       
            }
            /**
             * @param string $email
             * @return $this
             */
            public function setEmail(string $email): static
            {
                return $this->set('email', $email);
            }

            /**
            * @return string
            */
            public function getPhone(): string
            {
                return $this->get('phone');       
            }
            /**
             * @param string $phone
             * @return $this
             */
            public function setPhone(string $phone): static
            {
                return $this->set('phone', $phone);
            }

            /**
            * @return string
            */
            public function getSubject(): string
            {
                return $this->get('subject');       
            }
            /**
             * @param string $subject
             * @return $this
             */
            public function setSubject(string $subject): static
            {
                return $this->set('subject', $subject);
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

            /**
            * @return array
            */
            public function getLanguage(): array
            {
                return $this->get('language');       
            }
            /**
             * @param array $language
             * @return $this
             */
            public function setLanguage(array $language): static
            {
                return $this->set('language', $language);
            }

}
