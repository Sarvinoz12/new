<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',  [HomeController::class, 'index'])->name('index');



Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('comment', [HomeController::class, 'comments'])->name('comment');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('product', [HomeController::class, 'products'])->name('product');
Route::put('/comments/{comment}', [CommentController::class, 'store'])->name('comments.update');
Route::post
('contact/create', [ContactController::class, 'create'])->name('contact.create');


Route::get('/dashboard', function () {
    return redirect()->route('products.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::resource('products', ProductController::class);
//    Route::resource('categories', CategoryController::class);
    Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
    Route::put('/comments/answer/{id}', [CommentController::class, 'answer'])->name('comments.answer');

    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::delete('contacts/delete/{id}', [ContactController::class, 'delete'])->name('contacts.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
