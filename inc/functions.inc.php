<?php

declare(strict_types=1);

class Functions
{
    public function sanitize(string $text): string
    {
        $text = strip_tags($text);
        $text = rtrim($text);
        return $text;
    }
}