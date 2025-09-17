<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: Students
 * 
 * Automatically generated via CLI.
 */
class Students extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
        $this->call->model('StudentModel');
    }

    public function index()
    {
        $students = $this->StudentModel->get_all();
        $this->call->view('students/index', ['students' => $students]);
    }

    public function create()
    {
        $this->call->view('students/create');
    }

    public function store()
    {
        $data = [
            'last_name'  => $this->io->post('last_name'),
            'first_name' => $this->io->post('first_name'),
            'email'      => $this->io->post('email')
        ];

        $this->StudentModel->insert_data($data);

        // Redirect to students list
        redirect('');
    }

    public function edit($id)
    {
        $student = $this->StudentModel->get($id);

        if (!$student) {
            echo "Student not found!";
            return;
        }

        $this->call->view('students/edit', ['student' => $student]);
    }

    public function update($id)
    {
        $data = [
            'last_name'  => $this->io->post('last_name'),
            'first_name' => $this->io->post('first_name'),
            'email'      => $this->io->post('email')
        ];

        $this->StudentModel->update_data($id, $data);

        redirect('');
    }


    public function delete($id)
    {
        // Delete the record
        $this->StudentModel->delete_data($id);

        redirect('');
    }

    public function delete_all()
    {
        $this->StudentModel->truncate();
        redirect('');
    }

}