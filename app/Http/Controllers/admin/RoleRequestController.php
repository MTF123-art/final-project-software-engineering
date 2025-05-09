<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoleRequest;

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

        return redirect()->route('admin.role-request.index')->with('success', 'Role request approved successfully.');
    }
    public function reject($id)
    {
        $roleRequest = RoleRequest::findOrFail($id);
        $roleRequest->status = 'rejected';
        $roleRequest->save();

        return redirect()->route('admin.role-request.index')->with('success', 'Role request rejected successfully.');
    }
    public function delete($id)
    {
        $roleRequest = RoleRequest::findOrFail($id);
        $roleRequest->delete();

        return redirect()->route('admin.role-request.index')->with('success', 'Role request deleted successfully.');
    }
}
