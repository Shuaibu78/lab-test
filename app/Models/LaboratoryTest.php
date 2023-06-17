<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaboratoryTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'chest',
        'cervical_vertebrae',
        'lumbar_vertebrae',
        'thoracic_vertebrae',
        'lumbo_sacral_vertebrae',
        'thoracic_lumbar_vertebrae',
        'wrist_joint',
        'thoracic_inlet',
        'shoulder_joint',
        'elbow_joint',
        'knee_joint',
        'sacro_iliac_joint',
        'pelvic_joint',
        'hip_joint',
        'foot',
        'toes',
        'fingers',
        'humerus',
        'tibia_fibula',
        'femoral',
        'ankle',
        'radius_ulner',
        'obstetric',
        'abdominal',
        'breast',
        'pelvis',
        'prostate',
        'thyroid',
        'ct_scan',
        'mri',
    ];
}
