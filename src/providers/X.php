<?php

declare(strict_types=1);
/**
 * Sharing Intents plugin for Craft CMS 4.x
 *
 * Generate social sharing intent URLs
 *
 * @link      https://zaengle.com/
 * @copyright Copyright (c) 2022 Zaengle Corp
 */

namespace zaengle\sharingintents\providers;

/**
 * @author    Zaengle Corp
 * @package   SharingIntents
 * @since     1.0.0
 * @see https://developer.twitter.com/en/docs/twitter-for-websites/tweet-button/guides/web-intent
 */
class X extends Twitter
{
    public static function lowerDisplayName(): string
    {
        return 'x';
    }

    public static function baseUrl(): string
    {
        return 'https://twitter.com/intent/tweet';
    }

    public static function linkParam(): string
    {
        return 'url';
    }

    public static function descriptionParam(): string
    {
        return 'text';
    }
}
