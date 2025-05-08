<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Galeri;
use App\Models\RoleRequest;
use Illuminate\Http\Request;

class RoleRequestController extends Controller
{
    public function upgradeForm()
    {

        if (RoleRequest::where('user_id', auth()->id())->exists()) {
            return redirect()->route('user.upgrade.status')->with('info-upgrade', 'Your request is already under review.');
        }
        
        return view('user.role-request.role-request-form', [
            'title' => 'Role Request',
        ]);
    }

    public function upgradeSubmit(Request $request)
    {
        $request->validate([
            'reason' => 'required|string|min:10',
        ]);

        RoleRequest::create([
            'user_id' => auth()->id(),
            'reason' => $request->reason,
            'status' => 'pending',
        ]);

        return redirect()->route('user.upgrade.status')->with('success-upgrade', 'Upgrade request submitted successfully.');
    }

    public function roleRequestStatus(){
        $roleRequest = RoleRequest::where('user_id', auth()->id())->first();
        return view('user.role-request.role-request-status', compact('roleRequest'));
    }

    public function roleRequestDestroy($id){
        $roleRequest = RoleRequest::findOrFail($id);
        $roleRequest->delete();
        return redirect()->route('user.upgrade.status')->with('success-upgrade', 'Upgrade request deleted successfully.');
    }
}
