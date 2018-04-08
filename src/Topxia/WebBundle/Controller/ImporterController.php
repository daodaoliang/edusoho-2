<?php

namespace Topxia\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Topxia\Service\Importer\ImporterFactory;
use Topxia\WebBundle\Controller\BaseController;
use Topxia\Service\Importer\ImporterProcessorFactory;

class ImporterController extends BaseController
{
    public function checkAction(Request $request, $type)
    {
        $importer = ImporterFactory::create($type);
        $importer->tryImport($request);
        $checkResult = $importer->check($request);
        return $this->createJsonResponse($checkResult);
    }

    public function importAction(Request $request, $type)
    {
        $importer = ImporterFactory::create($type);
        $importer->tryImport($request);
        $importerResult = $importer->import($request);
        return $this->createJsonResponse($importerResult);
    }

    public function templateAction(Request $request, $type)
    {
//        echo 'template';
        $importer = ImporterFactory::create($type);//获取到了Topxia\Service\Importer\CourseMemberImporter ,2，实例化new $class()得到
        //Topxia\Service\Importer\CourseMemberImporter
        $importer->tryImport($request);//var_dump($importer->tryImport($request)); //null
        echo 222;
        $template = $importer->getTemplate($request);
        return $template;
    }

    public function importModalAction(Request $request)
    {
        return $this->render('TopxiaWebBundle:Importer:userimport.modal.html.twig');
    }

}
