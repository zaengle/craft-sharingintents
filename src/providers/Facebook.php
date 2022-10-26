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
 * @see https://developers.facebook.com/docs/sharing/web
 */
class Facebook implements ProviderInterface
{
    public static function lowerDisplayName(): string
    {
        return 'facebook';
    }

    public static function baseUrl(): string
    {
        return 'https://www.facebook.com/sharer/sharer.php';
    }

    public static function linkParam(): string
    {
        return 'u';
    }

    public static function descriptionParam(): ?string
    {
        return null;
    }
}
