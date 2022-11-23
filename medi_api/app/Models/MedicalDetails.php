<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalDetails extends Model
{
    use HasFactory;
    protected $fillable =['Left_Eye', 'Right_Eye', 'Left_Ear', 'Right_Ear', 'Systemetic_Examination', 'Blood_pressure', 'Heart', 'Lungs', 'Abdomen', 'Hernia', 'Vericose_veins', 'Extremites', 'Skin', 'Venerial_Diseases', 'Others','id'];
}
