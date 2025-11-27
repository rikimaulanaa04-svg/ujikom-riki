<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\Like;
use App\Models\Comment;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    /**
     * Tampilkan halaman galeri untuk pengguna dengan kategori dari DB.
     */
    public function index()
    {
        // Daftar kategori yang akan ditampilkan
        $orderedCategories = [
            'kepala-sekolah' => 'Kepala Sekolah',
            'guru' => 'Guru',
            'jurusan' => 'Jurusan',
            'kegiatan' => 'Kegiatan',
            'eskul' => 'Ekstrakurikuler' // Menggunakan 'Ekstrakurikuler' sebagai label
        ];

        // Ambil kategori dari database
        $dbCategories = Category::orderBy('name')->get();
        
        // Gunakan hanya kategori yang sudah ditentukan
        $categories = $orderedCategories;

        // Ambil data galeri
        $items = Gallery::with('category')
            ->orderByDesc('id')
            ->get()
            ->map(function($g) use ($orderedCategories) {
                $categoryName = $g->category ? $g->category->name : 'Lainnya';
                $slug = Str::slug($categoryName);
                
                // Normalisasi slug untuk ekstrakurikuler
                if (in_array(strtolower($categoryName), ['eskul', 'ekstrakurikuler'])) {
                    $slug = 'eskul';
                }
                
                $likes = Like::where('gallery_id', $g->id)->count();
                $comments = Comment::where('gallery_id', $g->id)->count();
                
                return [
                    'id' => $g->id,
                    'kategori' => $slug,
                    'img' => 'storage/'.$g->image,
                    'judul' => $g->title,
                    'desk' => $g->description ?? '',
                    'likes_count' => $likes,
                    'comments_count' => $comments,
                ];
            })
            ->toArray();

        return view('user.galeri', compact('categories', 'items'));
    }

    /**
     * Halaman detail untuk satu gambar.
     */
    public function show(int $id)
    {
        $g = Gallery::with('category')->find($id);
        if(!$g){ abort(404); }
        $item = [
            'id' => $g->id,
            'kategori' => $g->category ? Str::slug($g->category->name) : 'lainnya',
            'img' => 'storage/'.$g->image,
            'judul' => $g->title,
            'desk' => $g->description ?? '',
        ];
        return view('user.galeri-show', compact('item'));
    }
}

