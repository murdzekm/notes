<?php

class Notes extends Controller
{
    public function index()
    {
        $data['page_title'] = "Notatki";
        $this->checkLogin();

        $note = $this->loadModel("note");
        $data['notes'] = $note->lists();

        $this->view("pages/notes", $data);
    }



    public function show($id)
    {
        $data['page_title'] = "Notatka";
        $this->checkLogin();
        $note = $this->loadModel("note");
        $data['note'] = $note->show($id);
        $this->view("notes/show", $data);
    }

    public function add()
    {
        $data['page_title'] = "Nowa notatka";
        $this->checkLogin();
        $note = $this->loadModel("note");
        $data['note'] = $note->add($_POST);
        $this->view("notes/add", $data);
    }

    public function edit($id)
    {
        $data['page_title'] = "Edycja notatki";
        $this->checkLogin();
        $note = $this->loadModel("note");
        $data['note'] = $note->edit($_POST, $id);

        $this->view("notes/edit", $data);
    }

    public function showDelete($id)
    {
        $data['page_title'] = "Usuń notatkę";
        $this->checkLogin();
        $note = $this->loadModel("note");
        $data['note'] = $note->show($id);

        $this->view("notes/showDelete", $data);
    }

    public function delete($id)
    {
        $data['page_title'] = "Usuń notatkę";
        $this->checkLogin();
        $note = $this->loadModel("note");
        $data['note'] = $note->delete($id);
    }
}