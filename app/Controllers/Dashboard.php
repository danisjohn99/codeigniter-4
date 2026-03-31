<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PostModel;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('user_id')) {
            return redirect()->to('/login');
        }

        $postModel = new PostModel();
        $userModel = new UserModel();

        $data = [
            'totalPosts' => $postModel->countAll(),
            'totalUsers' => $userModel->countAll()
        ];

        return view('dashboard', $data);
    }
}
