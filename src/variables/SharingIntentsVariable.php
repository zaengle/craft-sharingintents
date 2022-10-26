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

namespace zaengle\sharingintents\variables;

use zaengle\sharingintents\SharingIntents as Plugin;

/**
 * @author    Zaengle Corp
 * @package   SharingIntents
 * @since     1.0.0
 */
class SharingIntentsVariable
{
    // Public Methods
    // =========================================================================
    public function __call(string $method, array $args): ?string
    {
        return Plugin::getInstance()->share->$method(...$args);
    }
}
