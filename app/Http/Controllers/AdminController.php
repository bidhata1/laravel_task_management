<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::withCount([
            'tasks as total_tasks_completed' => function ($query) {
                $query->where('status', 'completed');
            },
            'tasks as total_tasks_in_progress' => function ($query) {
                $query->where('status', 'in-progress');
            },
            'tasks as total_tasks_to_do' => function ($query) {
                $query->where('status', 'to-do');
            }
        ])->get();

        return view('admin.index', compact('users'));
    }
}
