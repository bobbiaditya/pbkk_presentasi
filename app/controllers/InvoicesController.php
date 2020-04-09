<?php

use Phalcon\Mvc\Controller;
use Phalcon\Dispatcher;

class InvoicesController extends Controller
{
    // public function initialize()
    // {
    //     echo"function initialize dipanggil<br>";
    // }

    // public function onConstruct()
    // {
    //     echo"function onConstruct dipanggil<br>";
    // }

    public function indexAction()
    {
        echo "masuk indexAction di InvoicesController";
    }

    public function listAction($page, $perPage)
    {
        echo "Page: $page<br>PerPage: $perPage";
    }

    // public function listAction($page = 1, $perPage = 25)
    // {
    //     echo "Page: $page<br>PerPage: $perPage";
    // }

    // public function listAction()
    // {
    //     $page      = $this->dispatcher->getParam('page');
    //     $perPage = $this->dispatcher->getParam('perPage');
    //     echo "Page: $page<br>PerPage: $perPage";
    // }

    // public function showAction($year = 1, $postTitle = "Some Title")
    // {
    //     $this->flash->error(
    //         "You do not have permission to access this area"
    //     );

    //     // Forward flow to another action
    //     $this->dispatcher->forward(
    //         [
    //             'controller' => 'users',
    //             'action'     => 'login',
    //         ]
    //     );
    // }

    // public function viewAction()
    // {
    //     $invoiceId = $this
    //         ->dispatcher
    //         ->getParam('invoiceId', 'int')
    //     ;
    //     $filter = $this
    //         ->dispatcher
    //         ->getParam('filter', 'string')
    //     ;
    //     echo "invoiceId: $invoiceId<br>filter: $filter";
    //     // ...
    // }

    // public function beforeExecuteRoute($dispatcher)
    // {
    //     // This is executed before every found action
    //     if ($dispatcher->getActionName() === 'view') {
    //         $this->flash->error(
    //             "You do not have permission to save invoices"
    //         );

    //         $this->dispatcher->forward(
    //             [
    //                 'controller' => 'index',
    //                 'action'     => 'index',
    //             ]
    //         );

    //     }
    // }

    // public function afterExecuteRoute($dispatcher)
    // {
    //     // Executed after every found action
    //     echo "<br>Eksekusi action sudah selesai<br>";
    // }
}