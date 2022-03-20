<?php

return [
    'filepath' => storage_path('app/global_data.csv'),
    'delimiter' => ';',
    'headerOffset' => 0,

    'mapping' => [
        'name' => 'Nom Iris',
        'city' => 'Nom Com',
        'region' => 'Nom Reg',
        'department' => 'Nom Dep',
        'iris' => 'Code Iris',
        'latitude' => fn($record) => explode(',', $record['Geo Point'])[0],
        'longitude' => fn($record) => explode(',', $record['Geo Point'])[0],
        'score_global' => 'SCORE GLOBAL region * ',
        'information_access_score' => "ACCES A L'INFORMATION region * ",
        'score_global' => 'SCORE GLOBAL region * ',
        'information_access_score' => "ACCES A L'INFORMATION region * ",
        'access_to_digital_interfaces_score' => "ACCÈS AUX INTERFACES NUMERIQUES region *  ",
        'administrative_skills_score' => "COMPETENCES ADMINISTATIVES region * ",
        'digital_academic_skills_score' => "COMPÉTENCES NUMÉRIQUES / SCOLAIRES region * ",
        'global_access_score' => "GLOBAL ACCES region * ",
        'global_skills' => "GLOBAL COMPETENCES region *  "
    ],
];