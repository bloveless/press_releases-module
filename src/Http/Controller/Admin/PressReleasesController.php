<?php  namespace Control4\PressReleasesModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Control4\PressReleasesModule\PressRelease\Form\PressReleaseFormBuilder;
use Control4\PressReleasesModule\PressRelease\Table\PressReleaseTableBuilder;

/**
 * Class PressReleasesController
 *
 * @link          http://www.control4.com
 * @author        Control4 <bloveless@control4.com>
 * @author        Brennon Loveless <bloveless@control4.com>
 * @package       Control4\PressReleasesModule\Http\Controller\Admin
 */
class PressReleasesController extends AdminController
{

    /**
     * Render the list of press releases in a table
     *
     * @param PressReleaseTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(PressReleaseTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Render the form to create a press release
     *
     * @param PressReleaseFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(PressReleaseFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Render the form to edit a press release
     *
     * @param PressReleaseFormBuilder $form
     * @param                         $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(PressReleaseFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}