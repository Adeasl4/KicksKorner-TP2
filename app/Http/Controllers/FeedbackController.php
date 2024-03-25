<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Http\Controllers\Controller;


class FeedbackController extends Controller
{
    public function create()
    {
        $feedbacks =   Feedback::all(); // Fetch all feedback reviews from the database

    return view('create', ['feedbacks' => $feedbacks]); // Pass the reviews data to the view
    }

    public function store(Request $request)
    {
        $request->validate([
            'nickname' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string',
            'recommend' => 'nullable|boolean',
        ]);

        $feedback = new Feedback();
        $feedback->nickname = $request->nickname;
        $feedback->rating = $request->rating;
        $feedback->review = $request->review;
        $feedback->recommend = $request->recommend ?? false;
        $feedback->save();

        return redirect()->route('feedback.create')->with('success', 'Thank you for your feedback!');

    }
}
