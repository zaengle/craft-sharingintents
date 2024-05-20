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

namespace zaengle\sharingintents;

use Craft;
use craft\base\Plugin;

use craft\web\twig\variables\CraftVariable;
use yii\base\Event;
use zaengle\sharingintents\services\Share as ShareService;

use zaengle\sharingintents\variables\SharingIntentsVariable;

/**
 * Class SharingIntents
 *
 * @author    Zaengle Corp
 * @package   SharingIntents
 * @since     1.0.0
 *
 * @property  ShareService $share
 */
class SharingIntents extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var SharingIntents
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public string $schemaVersion = '1.0.0';

    /**
     * @var bool
     */
    public bool $hasCpSettings = false;

    /**
     * @var bool
     */
    public bool $hasCpSection = false;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init(): void
    {
        parent::init();
        self::$plugin = $this;

        $this->setComponents([
            'share' => ShareService::class,
        ]);

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function(Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('sharingIntents', SharingIntentsVariable::class);
            }
        );

        Craft::info(
            Craft::t(
                'sharing-intents',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }
}
