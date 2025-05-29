<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Destinasi;
use App\Models\Kategori;
use App\Models\Review;
use App\Models\RoleRequest;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private function getUserRegistrationTrend()
    {
        // Get user registration data for last 6 months
        $months = [];
        $counts = [];

        for ($i = 5; $i >= 0; $i--) {
            $month = Carbon::now()->subMonths($i);
            $months[] = $month->format('M');
            $counts[] = User::whereYear('created_at', $month->year)->whereMonth('created_at', $month->month)->count();
        }

        return [
            'labels' => $months,
            'data' => $counts,
        ];
    }

    private function getCategoryDistribution()
    {
        $categories = Kategori::withCount('destinasi')->get();

        return [
            'labels' => $categories->pluck('nama_kategori')->toArray(),
            'data' => $categories->pluck('destinasi_count')->toArray(),
        ];
    }
    public function index()
    {
        $data = [
            // Statistics Cards
            'totalUsers' => User::count(),
            'totalDestinations' => Destinasi::count(),
            'totalCategories' => Kategori::count(),
            'totalReviews' => Review::count(),
            'pendingRoleRequests' => RoleRequest::where('status', 'pending')->count(),
            'unreadMessages' => Contact::where('is_read', false)->count(),

            // Chart Data
            'userRegistrationData' => $this->getUserRegistrationTrend(),
            'categoryDistributionData' => $this->getCategoryDistribution(),
        ];

        return view('admin.dashboard', $data);
    }
}
