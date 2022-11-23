<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        "Rfg com Code No.",
        "First Name",
        "Last Name",
        "Serial No",
        "District",
        "Sex",
        "Age",
        "Status",
        "Nationality",
        "Height(cm)",
        "Weight(cm)",
        "Passport NO",
        "Place of Issue",
        "Position Applied for",
        "Date",
        "Recruiting Agency",
        "Country",
    ];


}
