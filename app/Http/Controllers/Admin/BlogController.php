<?php

namespace App\Http\Controllers\Admin;
use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        //
        $tittle = "Data Blog Us";
        $blogs = Blog::get(); // Select * from blog
        return view("admin.blog.index", compact('tittle', 'blogs'));
    }

    public function create()
    {
        //
        $tittle = 'Create New Blog';
        return view("admin.blog.create", compact('tittle'));
    }

    public function store(Request $request)
    {
        //
        $photo = null;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('blog', 'public');
        }
        Blog::create([
            'title' => $request->title,
            'sub_content' => Str::slug($request->title),
            'content' => $request->content,
            'photo' => $photo,
            'is_active' => $request->is_active,
            'author' => auth()->user()->name,
        ]);

        return redirect()->to('admin/blog')->with('success', 'Blog Add successfully');
    }

    public function show( $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
        $item = Blog::findOrFail($id);
        $tittle = "Edit Data Blog";
        return view('admin.blog.update', compact('item', 'tittle'));

    }

    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => 'required',
            'sub_content' => 'required',
            'content' => 'required',
            'is_active' => 'required',
        ]);
        $blog = Blog::findOrFail($id);
        $photo = $blog->photo; // Simpan nama file foto lama

        if ($request->hasFile('photo')) {
            if ($blog->photo) {

            // Hapus file foto lama jika ada
                \Storage::disk('public')->delete($blog->photo);
            } 
            $photo = $request->file('photo')->store('blog', 'public');
            $blog->photo = $photo;
        }
        
        $blog->update([
            'title'  => $request->title,
            'sub_content' => Str::slug($request->title),
            'content' => $request->content,
            'is_active' => $request->is_active,
            'author' => auth()->user()->name,
        ]);
        // $blog->update($request->only(['title', 'sub_content', 'content', 'is_active']));
        return redirect()->to('admin/blog')->with('success', 'Blog updated successfully');
    }

    public function destroy(Request $request, string $id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->photo) {
            \Storage::disk('public')->delete($blog->photo);
        }
        $blog->delete();
        return redirect()->to('admin/blog')->with('success','Blog deleted successfully');

        
    }
}
