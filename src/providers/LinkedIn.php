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
 * @see https://www.linkedin.com/sharing/share-offsite/
 */
class LinkedIn implements ProviderInterface
{
    public static function lowerDisplayName(): string
    {
        return 'linkedin';
    }

    public static function baseUrl(): string
    {
        return 'https://www.linkedin.com/sharing/share-offsite/';
    }

    public static function linkParam(): string
    {
        return 'url';
    }

    public static function descriptionParam(): ?string
    {
        return null;
    }
}
