<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table ='students';
    protected $fillable = [
        'register_date',
        'nomor_seleksi',
        'full_name',
        'nisn',
        'school_id',
        'phone_no',
        'father_phone_no',
        'mother_phone_no',
        'email',
        'reference_type',
        'reference_value'
    ];

    public function school(){
        return $this->belongsTo(School::class, 'school_id');
    }

}

