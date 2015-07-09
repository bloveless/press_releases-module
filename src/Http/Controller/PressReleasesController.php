<?php namespace Control4\PressReleasesModule\Http\Controller;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Control4\PressReleasesModule\PressRelease\Contract\PressReleaseRepositoryInterface;
use Control4\PressReleasesModule\PressRelease\PressReleaseRepository;
use Illuminate\Routing\ResponseFactory;

/**
 * Class PressReleasesController
 *
 * @link          http://www.control4.com
 * @author        Control4 <bloveless@control4.com>
 * @author        Brennon Loveless <bloveless@control4.com>
 * @package       Control4\PressReleasesModule\PressRelease\Http\Controller
 */
class PressReleasesController extends PublicController
{

    /**
     * The response factory
     *
     * @var ResponseFactory
     */
    protected $response;

    /**
     * Create the class with a response factory
     *
     * @param ResponseFactory $response
     */
    public function __construct(ResponseFactory $response)
    {
        $this->response = $response;
    }

    public function index(PressReleaseRepositoryInterface $repo)
    {
        $press_releases = $repo->all();

        return $this->response->view('control_4.module.press_releases::list', compact('press_releases'));
    }

    /**
     * Show a single press release
     *
     * In order to be compatible with the old press releases module the year, month, and day are passed.
     * But here is the secret... They don't matter. Only the slug matters
     *
     * @param PressReleaseRepositoryInterface $repo
     * @param                                 $year
     * @param                                 $month
     * @param                                 $day
     * @param                                 $slug
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show(PressReleaseRepositoryInterface $repo, $year, $month, $day, $slug)
    {
        $press_release = $repo->getBySlug($slug);

        return $this->response->view('control_4.module.press_releases::show', compact('press_release'));
    }
}