<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Display the home page with news and articles
    public function home()
    {
        // Fetch news and articles separately
        $newsArticles = Article::where('status', 'N')->get(); // Only News
        $articles = Article::where('status', 'A')->get(); // Only Articles

        // Pass the data to the view
        return view('layout.app', compact('newsArticles', 'articles'));
    }

    // Display a single article based on its ID
    public function show($id)
    {
        // Retrieve the article by ID from the database
        $article = Article::findOrFail($id);

        // Return the full_news view with the article data
        return view('layout.news_and_article.full_news', compact('article'));
    }

    // Store a new article with image and status
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'status' => 'required|in:N,A', // Validate status for News or Article
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imagePath = $image->store('images', 'public'); // Store in storage/app/public/images
        }

        // Create the article in the database with status
        Article::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image_url' => $imagePath, // Save the path to the image
            'status' => $request->input('status'), // Save the status (N for News, A for Article)
        ]);

        return redirect()->route('home');
    }

    public function create()
    {
        return view('layout.news_and_article.create_news');
    }
}
