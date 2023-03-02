<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaboDetails extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'Suger', 'Albumin', 'Pregnancy', 'Helmenthes', 'Salmonella/Shigella', 'VCholera', 'Giardia', 'Hemoglobin', 'Malaria Film', 'Micro Filaria', 'FBS/RBS', 'VDRL', 'LFTS', 'Creatinine', 'Urea', 'TPHA', 'AntiHCV', 'HIVTeST(HIBI-II)', 'HbsAg','Remarks'];
}
