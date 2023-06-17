<?php

namespace App\Http\Controllers;

use App\Models\LaboratoryTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LaboratoryTestController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $tests = LaboratoryTest::all();

        return response()->json($tests);
    }

    public function store(Request $request)
    {
        // Process the submitted data
        $data = $request->all();

            $laboratoryTest = new LaboratoryTest();
            $laboratoryTest->user_id = auth()->user()->id;
            $laboratoryTest->chest = $data['chest'];
            $laboratoryTest->cervical_vertebrae = $data['cervical_vertebrae'];
            $laboratoryTest->lumbar_vertebrae = $data['lumbar_vertebrae'];
            $laboratoryTest->thoracic_vertebrae = $data['thoracic_vertebrae'];
            $laboratoryTest->lumbo_sacral_vertebrae = $data['lumbo_sacral_vertebrae'];
            $laboratoryTest->thoracic_lumbar_vertebrae = $data['thoracic_lumbar_vertebrae'];
            $laboratoryTest->wrist_joint = $data['wrist_joint'];
            $laboratoryTest->thoracic_inlet = $data['thoracic_inlet'];
            $laboratoryTest->shoulder_joint = $data['shoulder_joint'];
            $laboratoryTest->elbow_joint = $data['elbow_joint'];
            $laboratoryTest->knee_joint = $data['knee_joint'];
            $laboratoryTest->sacro_iliac_joint = $data['sacro_iliac_joint'];
            $laboratoryTest->pelvic_joint = $data['pelvic_joint'];
            $laboratoryTest->hip_joint = $data['hip_joint'];
            $laboratoryTest->foot = $data['foot'];
            $laboratoryTest->toes = $data['toes'];
            $laboratoryTest->fingers = $data['fingers'];
            $laboratoryTest->humerus = $data['humerus'];
            $laboratoryTest->tibia_fibula = $data['tibia_fibula'];
            $laboratoryTest->femoral = $data['femoral'];
            $laboratoryTest->ankle = $data['ankle'];
            $laboratoryTest->radius_ulner = $data['radius_ulner'];
            $laboratoryTest->obstetric = $data['obstetric'];
            $laboratoryTest->abdominal = $data['abdominal'];
            $laboratoryTest->breast = $data['breast'];
            $laboratoryTest->pelvis = $data['pelvis'];
            $laboratoryTest->prostate = $data['prostate'];
            $laboratoryTest->thyroid = $data['thyroid'];
            $laboratoryTest->ct_scan = $data['ct_scan'];
            $laboratoryTest->mri = $data['mri'];
        

        // Save the laboratory test record
        $laboratoryTest->save();

            // Prepare the email content
    $emailContent = "Form submission received.\n\n";
    $emailContent .= "Laboratory Test Details:\n";
    $emailContent .= "Chest: " . ($data['chest'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Cervical Vertebrae: " . ($data['cervical_vertebrae'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Lumbar Vertebrae: " . ($data['lumbar_vertebrae'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Thoracic Vertebrae: " . ($data['thoracic_vertebrae'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Lumbo-sacral Vertebrae: " . ($data['lumbo_sacral_vertebrae'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Thoracic Lumbar Vertebrae: " . ($data['thoracic_lumbar_vertebrae'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Wrist Joint: " . ($data['wrist_joint'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Thoracic Inlet: " . ($data['thoracic_inlet'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Shoulder Joint: " . ($data['shoulder_joint'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Elbow Joint: " . ($data['elbow_joint'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Knee Joint: " . ($data['knee_joint'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Sacro-iliac Joint: " . ($data['sacro_iliac_joint'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Pelvic Joint: " . ($data['pelvic_joint'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Hip Joint: " . ($data['hip_joint'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Foot: " . ($data['foot'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Toes: " . ($data['toes'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Fingers: " . ($data['fingers'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Humerus: " . ($data['humerus'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Tibia Fibula: " . ($data['tibia_fibula'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Femoral: " . ($data['femoral'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Ankle: " . ($data['ankle'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Radius Ulner: " . ($data['radius_ulner'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Obstetric: " . ($data['obstetric'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Abdominal: " . ($data['abdominal'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Breast: " . ($data['breast'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Pelvis: " . ($data['pelvis'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Prostate: " . ($data['prostate'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "Thyroid: " . ($data['thyroid'] ? 'Yes' : 'No') . "\n";
    $emailContent .= "CT Scan: " . ($data['ct_scan']) . "\n";
    $emailContent .= "MRI: " . ($data['mri']) . "\n";
    $emailContent .= "Submitted by: " . auth()->user()->name . " (" . auth()->user()->email . ")\n\n";
    
    // Send the structured email
    Mail::raw($emailContent, function ($message) {
        $message->to('devshuaib@gmail.com')
            ->subject(auth()->user()->email . ' medical data')
            ->from('devshuaib@gmail.com');
    });

        // Return a JSON response indicating the success or failure
        return response()->json(['message' => 'Form submission successful']);
    }
}
