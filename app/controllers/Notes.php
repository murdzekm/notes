<?php

class Notes extends Controller
{
    public function index()
    {
        $data['page_title'] = "Notatki";

        $this->check_loogin();

        $note = $this->loadModel("note");
        $data['notes'] = $note->lists();

        $this->view("pages/notes", $data);
    }



    public function show($id)
    {
        $data['page_title'] = "Notatka";
        $this->check_loogin();
        $note = $this->loadModel("note");
        $data['note'] = $note->show($id);
        $this->view("notes/show", $data);
    }

    public function add()
    {
        $data['page_title'] = "Nowa notatka";
        $this->check_loogin();
        $note = $this->loadModel("note");
        $data['note'] = $note->add($_POST);
        $this->view("notes/add", $data);
    }

    public function edit($id)
    {
        $data['page_title'] = "Edycja notatki";
        $this->check_loogin();
        $note = $this->loadModel("note");
        $data['note'] = $note->edit($_POST, $id);

        $this->view("notes/edit", $data);
    }

    public function show_delete($id)
    {
        $data['page_title'] = "Usuń notatkę";
        $this->check_loogin();
        $note = $this->loadModel("note");
        $data['note'] = $note->show($id);


        $this->view("notes/show_delete", $data);
    }

    public function delete($id)
    {

        $data['page_title'] = "Usuń notatkę";
        $this->check_loogin();
        $note = $this->loadModel("note");
        $data['note'] = $note->delete($id);

        //  $this->view("notes/delete", $data);
    }
}