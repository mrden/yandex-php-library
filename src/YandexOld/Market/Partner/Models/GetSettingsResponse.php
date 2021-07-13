<?php
/**
 * Author: @mrG1K (mr@g1k.ru)
 */

namespace YandexOld\Market\Partner\Models;

use YandexOld\Common\Model;
use YandexOld\Market\Partner\Models\Settings;

class GetSettingsResponse extends Model
{
    /**
     * @var Settings|null
     */
    protected $settings = null;

    protected $mappingClasses = [
        'settings' => 'YandexOld\Market\Partner\Models\Settings'
    ];

    /**
     * @return null|\YandexOld\Market\Partner\Models\Settings
     */
    public function getSettings()
    {
        return $this->settings;
    }
}
