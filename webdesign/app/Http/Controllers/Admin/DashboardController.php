<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\ContactMessage;
use Carbon\Carbon;
class DashboardController extends Controller
{
public function dashboardView()
    {
        

        return view('admin.dashboard');
    }
    // AJAX endpoint to get chart data
    public function getChartData(Request $request)
    {
        $filter = $request->get('filter', '7days');
        $now = Carbon::now();

        switch ($filter) {
            case '24hours':
                $start = $now->copy()->subDay();
                $period = 'hour';
                $label = 'Last 24 Hours';
                break;

            case '30days':
                $start = $now->copy()->subDays(30);
                $period = 'day';
                $label = 'Last 30 Days';
                break;

            case '365days':
                $start = $now->copy()->subDays(365);
                $period = 'month';
                $label = 'Last 365 Days';
                break;

            case 'all':
                $start = ContactMessage::min('created_at') ?? $now->copy()->subDays(365);
                $period = 'month';
                $label = 'All Time';
                break;

            default:
                $start = $now->copy()->subDays(7);
                $period = 'day';
                $label = 'Last 7 Days';
        }

        $messages = ContactMessage::where('created_at', '>=', $start)->get();

        $grouped = $messages->groupBy(function ($item) use ($period) {
            return match($period) {
                'hour' => $item->created_at->format('H:00'),
                'day' => $item->created_at->format('d M'),
                'month' => $item->created_at->format('M Y'),
            };
        });

        $labels = $grouped->keys()->toArray();
        $counts = $grouped->map(fn($g) => $g->count())->toArray();
        $totalEnquiries = ContactMessage::count();

        return response()->json([
            'labels' => $labels,
            'counts' => $counts,
            'totalEnquiries' => $totalEnquiries,
            'label' => $label
        ]);
    }
    






    public function contactform()
    {
        $contacts = ContactMessage::latest()->paginate(20);

        return view('admin.contact', compact('contacts'));
    }

    public function destroyformdata($id)
    {
        $contact = ContactMessage::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Contact message deleted successfully.');
    }




    public function changePasswordForm()
    {
        return view('admin.change_password');
    }

    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'current_password' => ['required', 'string'],
            'new_password' => ['required', 'string', 'min:8', 'same:confirm_password'],
        ]);

        $user = Admin::where('id',1)->first();
        
        if(Hash::check($request->input('current_password'), $user->password)){  
            Admin::where('id',1)->update([
            'password'=>Hash::make($request->input('new_password')),
            ]);
            return redirect()->back()->with('message','Password Changed Successfully');
        }else{
            return redirect()->back()->with('error','Sorry Current Password Does Not Correct');
        }
    }
}
