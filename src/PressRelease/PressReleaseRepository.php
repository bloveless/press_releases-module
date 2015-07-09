<?php namespace Control4\PressReleasesModule\PressRelease;

use Control4\PressReleasesModule\PressRelease\Contract\PressReleaseRepositoryInterface;

/**
 * Class PressReleaseRepository
 *
 * @link          http://www.control4.com
 * @author        Control4 <bloveless@control4.com>
 * @author        Brennon Loveless <bloveless@control4.com>
 * @package       Control4\PressReleasesModule\PressRelease
 */
class PressReleaseRepository implements PressReleaseRepositoryInterface
{
    /**
     * @var PressReleaseInterface
     */
    protected $model;

    /**
     * Create a new Repo from a PressReleaseModel
     *
     * @param PressReleaseModel $model
     */
    public function __construct(PressReleaseModel $model)
    {
        $this->model = $model;
    }

    /**
     * Get all the Press Releases
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Get a Press Release by it's slug
     *
     * @param $slug
     * @return mixed
     */
    public function getBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
}