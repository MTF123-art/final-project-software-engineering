<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\RoleRequest;
use App\Models\User;
use App\Notifications\user\RoleRequestStatusNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class RoleRequestController extends Controller
{
    public function index()
    {
        return view('admin.role-request.index', [
            'approved' => RoleRequest::where('status', 'approved')->count(),
            'pending' => RoleRequest::where('status', 'pending')->count(),
            'rejected' => RoleRequest::where('status', 'rejected')->count(),
            'all' => RoleRequest::paginate(5),
            'title' => 'Role Request Management',
        ]);
    }

    public function filter($status)
    {
        $users = RoleRequest::where('status', $status)->paginate(5);
        return view('admin.role-request.index', [
            'approved' => RoleRequest::where('status', 'approved')->count(),
            'pending' => RoleRequest::where('status', 'pending')->count(),
            'rejected' => RoleRequest::where('status', 'rejected')->count(),
            'all' => $users,
            'title' => 'Role Request Management',
        ]);
    }

    public function approve($id)
    {
        $roleRequest = RoleRequest::findOrFail($id);
        $roleRequest->status = 'approved';
        $roleRequest->save();

        $user = $roleRequest->user;
        $user->notify(new RoleRequestStatusNotification($roleRequest->status));

        return redirect()->route('admin.role-request.index')->with('success', 'Role request approved successfully.');
    }
    public function reject($id)
    {
        $roleRequest = RoleRequest::findOrFail($id);
        $roleRequest->status = 'rejected';
        $roleRequest->save();

        $user = $roleRequest->user;
        $user->notify(new RoleRequestStatusNotification($roleRequest->status));

        return redirect()->route('admin.role-request.index')->with('success', 'Role request rejected successfully.');
    }
    public function delete($id)
    {
        $roleRequest = RoleRequest::findOrFail($id);
        $roleRequest->delete();

        return redirect()->route('admin.role-request.index')->with('success', 'Role request deleted successfully.');
    }
}
