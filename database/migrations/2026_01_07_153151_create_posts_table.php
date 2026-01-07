<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('slug')->unique();
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

App\Models\Post::create([
    'title' => 'JSON: Sumber Daya API di Laravel 12.45',
    'author' => 'Paul Redmond',
    'slug' => 'laravel-12-45-0',
    'body' => 'Tim Laravel merilis versi 12.45, yang menampilkan JsonApiResource, kelas AsBinary yang dapat dikonversi, helper lampiran email penyimpanan cloud, dan banyak lagi.
# JSON: Sumber Daya API

Mior Muhammad Zaki memberikan kontribusi JsonApiResourceyang memungkinkan Anda untuk menghasilkan sumber daya API menggunakan JSON:APIspesifikasi, bukan cara yang biasa '
]);
