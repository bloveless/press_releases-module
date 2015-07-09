<?php namespace Control4\PressReleasesModule\PressRelease;

use Anomaly\Streams\Platform\Model\PressReleases\PressReleasesPressReleaseEntryModel;
use Control4\PressReleasesModule\PressRelease\Contract\PressReleaseInterface;

/**
 * Class PressReleaseModel
 *
 * @link          http://www.control4.com
 * @author        Control4 <bloveless@control4.com>
 * @author        Brennon Loveless <bloveless@control4.com>
 * @package       Control4\PressReleasesModule\PressRelease
 */
class PressReleaseModel extends PressReleasesPressReleaseEntryModel implements PressReleaseInterface
{

    /**
     * Get the already formatted year
     *
     * @return mixed
     */
    public function getYear()
    {
        // years are already formatted
        return $this->release_date->year;
    }

    /**
     * Get the pre-formatted month
     *
     * @return mixed
     */
    public function getMonth()
    {
        return str_pad($this->release_date->month, 2, '0', STR_PAD_LEFT);
    }

    /**
     * Get the pre-formatted day
     *
     * @return mixed
     */
    public function getDay()
    {
        return str_pad($this->release_date->day, 2, '0', STR_PAD_LEFT);
    }
}