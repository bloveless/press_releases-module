<?php namespace Control4\PressReleasesModule\PressRelease\Contract;

/**
 * Interface PressReleaseInterface
 *
 * @link          http://www.control4.com
 * @author        Control4 <bloveless@control4.com>
 * @author        Brennon Loveless <bloveless@control4.com>
 * @package       Control4\PressReleasesModule\PressRelease\Contract
 */
interface PressReleaseInterface
{
    /**
     * Get the already formatted year
     *
     * @return mixed
     */
    public function getYear();

    /**
     * Get the pre-formatted month
     *
     * @return mixed
     */
    public function getMonth();

    /**
     * Get the pre-formatted day
     *
     * @return mixed
     */
    public function getDay();
}