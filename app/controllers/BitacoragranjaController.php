<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class BitacoragranjaController extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for bitacoragranja
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'Bitacoragranja', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id";

        $bitacoragranja = Bitacoragranja::find($parameters);
        if (count($bitacoragranja) == 0) {
            $this->flash->notice("The search did not find any bitacoragranja");

            $this->dispatcher->forward([
                "controller" => "bitacoragranja",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $bitacoragranja,
            'limit'=> 10,
            'page' => $numberPage
        ]);

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displays the creation form
     */
    public function newAction()
    {

    }

    /**
     * Edits a bitacoragranja
     *
     * @param string $id
     */
    public function editAction($id)
    {
        if (!$this->request->isPost()) {

            $bitacoragranja = Bitacoragranja::findFirstByid($id);
            if (!$bitacoragranja) {
                $this->flash->error("bitacoragranja was not found");

                $this->dispatcher->forward([
                    'controller' => "bitacoragranja",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->id = $bitacoragranja->id;

            $this->tag->setDefault("id", $bitacoragranja->getId());
            $this->tag->setDefault("area", $bitacoragranja->getArea());
            $this->tag->setDefault("fecha", $bitacoragranja->getFecha());
            $this->tag->setDefault("lugar", $bitacoragranja->getLugar());
            $this->tag->setDefault("guardia", $bitacoragranja->getGuardia());
            $this->tag->setDefault("monitorista", $bitacoragranja->getMonitorista());
            $this->tag->setDefault("hora", $bitacoragranja->getHora());
            $this->tag->setDefault("evento", $bitacoragranja->getEvento());
            $this->tag->setDefault("ubicacion", $bitacoragranja->getUbicacion());
            $this->tag->setDefault("personaInformada", $bitacoragranja->getPersonainformada());
            $this->tag->setDefault("tiempoDeRespuesta", $bitacoragranja->getTiempoderespuesta());
            $this->tag->setDefault("observaciones", $bitacoragranja->getObservaciones());
            
        }
    }

    /**
     * Creates a new bitacoragranja
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "bitacoragranja",
                'action' => 'index'
            ]);

            return;
        }

        $bitacoragranja = new Bitacoragranja();
        $bitacoragranja->setId($this->request->getPost("id"));
        $bitacoragranja->setArea($this->request->getPost("area"));
        $bitacoragranja->setFecha($this->request->getPost("fecha"));
        $bitacoragranja->setLugar($this->request->getPost("lugar"));
        $bitacoragranja->setGuardia($this->request->getPost("guardia"));
        $bitacoragranja->setMonitorista($this->request->getPost("monitorista"));
        $bitacoragranja->setHora($this->request->getPost("hora"));
        $bitacoragranja->setEvento($this->request->getPost("evento"));
        $bitacoragranja->setUbicacion($this->request->getPost("ubicacion"));
        $bitacoragranja->setPersonainformada($this->request->getPost("personaInformada"));
        $bitacoragranja->setTiempoderespuesta($this->request->getPost("tiempoDeRespuesta"));
        $bitacoragranja->setObservaciones($this->request->getPost("observaciones"));
        

        if (!$bitacoragranja->save()) {
            foreach ($bitacoragranja->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "bitacoragranja",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("bitacoragranja was created successfully");

        $this->dispatcher->forward([
            'controller' => "bitacoragranja",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a bitacoragranja edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "bitacoragranja",
                'action' => 'index'
            ]);

            return;
        }

        $id = $this->request->getPost("id");
        $bitacoragranja = Bitacoragranja::findFirstByid($id);

        if (!$bitacoragranja) {
            $this->flash->error("bitacoragranja does not exist " . $id);

            $this->dispatcher->forward([
                'controller' => "bitacoragranja",
                'action' => 'index'
            ]);

            return;
        }

        $bitacoragranja->setId($this->request->getPost("id"));
        $bitacoragranja->setArea($this->request->getPost("area"));
        $bitacoragranja->setFecha($this->request->getPost("fecha"));
        $bitacoragranja->setLugar($this->request->getPost("lugar"));
        $bitacoragranja->setGuardia($this->request->getPost("guardia"));
        $bitacoragranja->setMonitorista($this->request->getPost("monitorista"));
        $bitacoragranja->setHora($this->request->getPost("hora"));
        $bitacoragranja->setEvento($this->request->getPost("evento"));
        $bitacoragranja->setUbicacion($this->request->getPost("ubicacion"));
        $bitacoragranja->setPersonainformada($this->request->getPost("personaInformada"));
        $bitacoragranja->setTiempoderespuesta($this->request->getPost("tiempoDeRespuesta"));
        $bitacoragranja->setObservaciones($this->request->getPost("observaciones"));
        

        if (!$bitacoragranja->save()) {

            foreach ($bitacoragranja->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "bitacoragranja",
                'action' => 'edit',
                'params' => [$bitacoragranja->id]
            ]);

            return;
        }

        $this->flash->success("bitacoragranja was updated successfully");

        $this->dispatcher->forward([
            'controller' => "bitacoragranja",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a bitacoragranja
     *
     * @param string $id
     */
    public function deleteAction($id)
    {
        $bitacoragranja = Bitacoragranja::findFirstByid($id);
        if (!$bitacoragranja) {
            $this->flash->error("bitacoragranja was not found");

            $this->dispatcher->forward([
                'controller' => "bitacoragranja",
                'action' => 'index'
            ]);

            return;
        }

        if (!$bitacoragranja->delete()) {

            foreach ($bitacoragranja->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "bitacoragranja",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("bitacoragranja was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "bitacoragranja",
            'action' => "index"
        ]);
    }

}
