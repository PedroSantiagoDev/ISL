<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Library extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address'];

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }

    public function addBook(Book $book): void
    {
        $this->books()->save($book);
    }

    public function listBooks(): Collection
    {
        return $this->books()->get();
    }
}
