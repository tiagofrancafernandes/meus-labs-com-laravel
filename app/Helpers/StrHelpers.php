<?php

namespace App\Helpers;

class StrHelpers
{
    /**
     * function stringOrNull
     *
     * @param $content
     * @return
     */
    public static function stringOrNull($content, int $min_length = null, int $length = null)
    {
        if (is_null($content))
        {
            return null;
        }

        if (!is_string($content))
        {
            return null;
        }

        if($min_length && (strlen($content) < $min_length))
        {
            return null;
        }

        $content = trim($content);

        if($length)
        {
            return substr($content, 0, $length);
        }

        return (string) $content;
    }
}
