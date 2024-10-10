<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Campaign;
use App\Models\Donation;
use Illuminate\Http\Request;

class UnifiedController extends Controller
{
    // Display the home page with both news, articles, and campaigns
    public function home()
    {
        // Fetch news, articles, and campaigns
        $newsArticles = Article::where('status', 'N')->get(); // Only News
        $articles = Article::where('status', 'A')->get(); // Only Articles
        $campaigns = Campaign::all(); // All campaigns

        // Pass data to the view
        return view('layout.app', compact('newsArticles', 'articles', 'campaigns'));
    }

    // Display a single article
    public function showArticle($id)
    {
        $article = Article::findOrFail($id);
        return view('layout.news_and_article.full_news', compact('article'));
    }

    // Display a single campaign
    public function showCampaign($id)
    {
        $campaign = Campaign::with('updates')->find($id);
        $campaign = Campaign::findOrFail($id);
        return view('layout.program.program_1', compact('campaign'));
    }

    // Store a new article
    public function storeArticle(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'status' => 'required|in:N,A',
        ]);

        $imagePath = null;
        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imagePath = $image->store('images', 'public');
        }

        Article::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image_url' => $imagePath,
            'status' => $request->input('status'),
        ]);

        return redirect()->route('home');
    }
    
    public function createArticle()
    {
        return view('layout.news_and_article.create_news');
    }

    // Store a new campaign
    public function storeCampaign(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'target_amount' => 'required|integer',
            'division' => 'required|in:budaya,seyum,cinta', // Validate division
        ]);

        $imagePath = null;
        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imagePath = $image->store('images', 'public');
        }

        Campaign::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image_url' => $imagePath,
            'target_amount' => $request->input('target_amount'),
            'raised_amount' => 0,
            'is_active' => true,
            'division' => $request->input('division'),
        ]);

        return redirect()->route('home');
    }

    // Create campaign form
    public function createCampaign()
    {
        return view('layout.program.create_campaign');
    }
}
