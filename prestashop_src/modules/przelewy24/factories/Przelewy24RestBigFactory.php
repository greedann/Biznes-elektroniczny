<?php
/**
 * @author Przelewy24
 * @copyright Przelewy24
 * @license https://www.gnu.org/licenses/gpl.html
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Class Przelewy24RestFactory
 *
 * One of factories for Przelewy24 plugin.
 *
 * The class is aware of the whole configuration.
 */
class Przelewy24RestBigFactory
{
    /**
     * Create instance of Przelewy24RestCardFactory.
     *
     * @param string $suffix money suffix
     *
     * @return Przelewy24RestBig
     */
    public static function buildForSuffix($suffix)
    {
        $posId = (int) Configuration::get('P24_SHOP_ID' . $suffix);
        $apiKey = (string) Configuration::get('P24_API_KEY' . $suffix);
        $salt = Configuration::get('P24_SALT' . $suffix);
        $testMode = (bool) Configuration::get('P24_TEST_MODE' . $suffix);

        return new Przelewy24RestBig($posId, $apiKey, $salt, $testMode);
    }

    public static function bulidForParams($posId, $apiKey, $salt, $testMode)
    {
        return new Przelewy24RestBig($posId, $apiKey, $salt, $testMode);
    }
}
