<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Article extends Model {
    use HasFactory;
    protected $fillable = ['author','title','article','publish_at'];
    protected function casts(): array { return ['publish_at' => 'date']; }
}
