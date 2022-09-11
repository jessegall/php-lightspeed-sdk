<?php

namespace JesseGall\LightspeedSDK\Resources;

class CategoriesProducts extends Resource
{


    /**
     * @return array
     */
    public function get0(): array
    {
        return $this->get('0');
    }

    /**
     * @param array $0
     * @return $this
     */
    public function set0(array $0): static
            {
                return $this->set('0', $0);
            }

/**
 * @return array
 */
public
function get1(): array
{
    return $this->get('1');
}

/**
 * @param array $1
 * @return $this
 */
public
function set1(array $1): static
            {
                return $this->set('1', $1);
            }

}
