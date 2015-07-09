<?php namespace Control4\PressReleasesModule\PressRelease\Contract;

/**
 * Class PressReleaseRepositoryInterface
 *
 * @link          http://www.control4.com
 * @author        Control4 <bloveless@control4.com>
 * @author        Brennon Loveless <bloveless@control4.com>
 * @package       Control4\PressReleasesModule\PressRelease\Contract
 */
interface PressReleaseRepositoryInterface
{
    /**
     * Get all the Press Releases
     *
     * @return mixed
     */
    public function all();

    /**
     * Get press release by slug
     *
     * @param $slug
     * @return mixed
     */
    public function getBySlug($slug);
}
