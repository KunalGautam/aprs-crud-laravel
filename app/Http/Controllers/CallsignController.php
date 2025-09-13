// Import necessary classes
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Callsign;

// Inside the CallsignController class
public function store(Request $request) {
    // Validate request data
    $request->validate([
        'callsign' => 'required|string|max:255',
        // Add other validation rules as necessary
    ]);

    // Check if the user is authenticated
    if (Auth::check()) {
        // Create a new Callsign instance
        $callsign = new Callsign();
        $callsign->callsign = $request->callsign;
        // Save the user_id and log the username/email
        $callsign->user_id = Auth::id();
        // Optionally log the username/email
        
        // Save the Callsign to the database
        $callsign->save();

        return response()->json(['message' => 'Callsign created successfully.'], 201);
    } else {
        return response()->json(['message' => 'Unauthorized.'], 401);
    }
}