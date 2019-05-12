<?php

namespace Obullo\Pages\Plugin;

use Obullo\Pages\Escaper\AbstractHelper;

/**
 * Plugin for escaping values
 */
class EscapeCss extends AbstractHelper
{
    /**
     * Escape a value for current escaping strategy
     *
     * @param  string $value
     * @return string
     */
    protected function escape($value)
    {
        return $this->getEscaper()->escapeCss($value);
    }
}
