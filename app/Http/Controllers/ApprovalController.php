<?php
namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Exception;

class ApprovalController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $totalServices = $services->count();

        return view('approvals', compact('services', 'totalServices'));
    }

    public function create()
    {
        return view('create-service');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'cost' => 'required|numeric',
            'rate_hour' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        try {
            $service = Service::create([
                'title' => $request['title'],
                'thumbnail' => $request['thumbnail'],
                'category' => $request['category'],
                'cost' => $request['cost'],
                'rate_hour' => $request['rate_hour'],
                'description' => $request['description'],
            ]);

            return redirect()->route('admin.approvals')->with('success', 'Service created successfully!');
        } catch (Exception $e) {
            return redirect()->route('admin.post_services')->with('error', 'Failed to create service: ' . $e->getMessage());
        }
    }
    public function destroy($id)
    {
        try {
            $service = Service::findOrFail($id);
            $service->delete();

            return redirect()->route('admin.approvals')->with('success', 'Service deleted successfully!');
        } catch (Exception $e) {
            return redirect()->route('admin.approvals')->with('error', 'Failed to delete service: ' . $e->getMessage());
        }
    }
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('edit-service', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'cost' => 'required|numeric',
            'rate_hour' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        try {
            $service = Service::findOrFail($id);
            $service->update([
                'title' => $request['title'],
                'thumbnail' => $request['thumbnail'],
                'category' => $request['category'],
                'cost' => $request['cost'],
                'rate_hour' => $request['rate_hour'],
                'description' => $request['description'],
            ]);

            return redirect()->route('admin.approvals')->with('success', 'Service updated successfully!');
        } catch (Exception $e) {
            return redirect()->route('admin.approvals')->with('error', 'Failed to update service: ' . $e->getMessage());
        }
    }


}
