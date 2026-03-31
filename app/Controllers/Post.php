<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PostModel;

class Post extends BaseController
{

    public function __construct()
    {
        if (!session()->get('user_id')) {
            header('Location: /login');
            exit;
        }
    }

    public function index()
    {
        $model = new PostModel();
        $data['posts'] = $model->findAll();
        return view('posts/index', $data);
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store()
    {
        $model = new PostModel();

        $model->save([
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/dashboard')->with('success', 'Post created successfully');
    }

    public function edit($id)
    {
        $model = new PostModel();
        $data['post'] = $model->find($id);
        return view('posts/edit', $data);
    }

    public function update($id)
    {
        $model = new PostModel();

        $model->update($id, [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/dashboard');
    }

    public function delete($id)
    {
        $model = new PostModel();
        $model->delete($id);
        return redirect()->to('/dashboard');
    }
}
