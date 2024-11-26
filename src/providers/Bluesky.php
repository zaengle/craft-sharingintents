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
 * @see https://docs.bsky.app/docs/advanced-guides/intent-links
 */
class Bluesky implements ProviderInterface
{
    public static function lowerDisplayName(): string
    {
        return 'bluesky';
    }

    public static function baseUrl(): string
    {
        return 'https://bsky.app/intent/compose';
    }

    public static function linkParam(): string
    {
        return 'text';
    }

    public static function descriptionParam(): ?string
    {
        return null;
    }
}
