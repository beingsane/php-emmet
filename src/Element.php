<?php

namespace Lavoiesl\Emmet;

class Element extends \DOMElement implements \ArrayAccess
{
    use ElementCommon;

    public function getEmmet()
    {
        return $this->getDocument()->getEmmet();
    }

    public function getDocument()
    {
        return $this->ownerDocument;
    }

    public function getNode()
    {
        return $this;
    }
}
