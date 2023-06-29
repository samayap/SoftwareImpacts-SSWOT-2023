<?php

// Data Extraction (Assuming student data is already extracted and preprocessed)

// Example student data
$studentData = [
    'student_id' => '123456',
    'grades' => ['math' => 85, 'science' => 92, 'history' => 78],
    'participation_rate' => 0.75,
    'quiz_scores' => ['math' => 90, 'science' => 85, 'history' => 70]
];

// Data Analysis

// Calculate average grade
$averageGrade = array_sum($studentData['grades']) / count($studentData['grades']);

// Identify strengths and weaknesses based on grades
$strengths = [];
$weaknesses = [];
foreach ($studentData['grades'] as $subject => $grade) {
    if ($grade >= 80) {
        $strengths[] = $subject;
    } else {
        $weaknesses[] = $subject;
    }
}

// Evaluate participation rate
$participationRate = $studentData['participation_rate'];

// Identify opportunities and threats based on participation rate
$opportunities = [];
$threats = [];
if ($participationRate >= 0.8) {
    $opportunities[] = 'Increased engagement opportunities';
} else {
    $threats[] = 'Lack of active participation';
}

// SWOT Analysis Report Generation

// Generate SWOT analysis report
$swotReport = [
    'student_id' => $studentData['student_id'],
    'strengths' => $strengths,
    'weaknesses' => $weaknesses,
    'opportunities' => $opportunities,
    'threats' => $threats
];

// Print SWOT analysis report
echo "SWOT Analysis Report for Student: " . $swotReport['student_id'] . "\n";
echo "Strengths: " . implode(", ", $swotReport['strengths']) . "\n";
echo "Weaknesses: " . implode(", ", $swotReport['weaknesses']) . "\n";
echo "Opportunities: " . implode(", ", $swotReport['opportunities']) . "\n";
echo "Threats: " . implode(", ", $swotReport['threats']) . "\n";

?>












