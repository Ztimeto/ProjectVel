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
}
