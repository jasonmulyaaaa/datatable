<?php

namespace App\Http\Controllers;

use App\DataTables\ClientDataTable;
use App\Models\Client;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ClientController extends Controller
{
    public function index(ClientDataTable $dataTable)
    {
        return $dataTable/*->addScope(new SearchBuilderScope)*/
            ->customRender('Client/Index', [
                /*'page_title' => $page_title,
                'page_description' => $page_description,
                'Filter' => $Filter,
                'Gate' => $Gate,*/
            ]);
    }
    public function create()
    {
        return Inertia::render('Client/Create');
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'clientName' => 'required|string|max:255',
            'companyTitle' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'mobile' => 'nullable|string|max:20',
            'fax' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'secondaryEmail' => 'nullable|email|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postalCode' => 'nullable|string|max:20',
            'country' => 'nullable|string|max:255',
            'contactPerson' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
            'industry' => 'nullable|string|max:255',
            'registrationNumber' => 'nullable|string|max:255',
            'taxNumber' => 'nullable|string|max:255',
            'legalStatus' => 'nullable|string|max:255',
            'clientType' => 'nullable|string|max:255',
            'preferredContactMethod' => 'nullable|string|max:255',
            'status' => 'required|string|max:20',
            'notes' => 'nullable|string',
            'billingAddress' => 'nullable|string|max:255',
            'billingEmail' => 'nullable|email|max:255',
            'createdBy' => 'nullable|integer',
            'updatedBy' => 'nullable|integer',
        ]);

        // Create a new client record
        Client::create([
            'client_name' => $validated['clientName'],
            'company_title' => $validated['companyTitle'],
            'phone' => $validated['phone'],
            'mobile' => $validated['mobile'],
            'fax' => $validated['fax'],
            'email' => $validated['email'],
            'secondary_email' => $validated['secondaryEmail'],
            'address' => $validated['address'],
            'city' => $validated['city'],
            'postal_code' => $validated['postalCode'],
            'country' => $validated['country'],
            'contact_person' => $validated['contactPerson'],
            'website' => $validated['website'],
            'industry' => $validated['industry'],
            'registration_number' => $validated['registrationNumber'],
            'tax_number' => $validated['taxNumber'],
            'legal_status' => $validated['legalStatus'],
            'client_type' => $validated['clientType'],
            'preferred_contact_method' => $validated['preferredContactMethod'],
            'status' => $validated['status'],
            'notes' => $validated['notes'],
            'billing_address' => $validated['billingAddress'],
            'billing_email' => $validated['billingEmail'],
            'created_by' => $validated['createdBy'],
            'updated_by' => $validated['updatedBy'],
        ]);

        // Redirect back to the client index page with a success message
        return redirect()->route('client.index')->with('success', 'Client created successfully.');
    }

    public function show($id)
    {
        $client = Client::findOrFail($id);
        return Inertia::render('Client/Show', [
            'client' => $client
        ]);
    }
}
