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

namespace zaengle\sharingintents\services;

use craft\base\Component;
use craft\helpers\UrlHelper;

/**
 * @author    Zaengle Corp
 * @package   SharingIntents
 * @since     1.0.0
 */
class Share extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * Get a sharing URL
     *
     * Create new providers by adding classes in zaengle\sharingintents\providers that implement ProviderInterface
     *
     * @param  array $args [string, $url,  ?string $description = null, array $extraParams = []]
     * @return string Intent URL
     */
    public function __call($provider, $args): ?string
    {
        return $this->providerSharingUrl('zaengle\\sharingintents\\providers\\' . ucfirst($provider), ...$args);
    }

    public function providerSharingUrl(string $provider, string $url, ?string $description = null, array $extraParams = []): string
    {
        $baseParams = [
            $provider::linkParam() => $url,
        ];

        if ($description && $provider::descriptionParam()) {
            $baseParams[$provider::descriptionParam()] = $description;
        }

        return UrlHelper::urlWithParams(
            $provider::baseUrl(),
            array_merge(
                $baseParams,
                $extraParams
            )
        );
    }
}
