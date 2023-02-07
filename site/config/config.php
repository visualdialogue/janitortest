<?php

return [
    'example' => function ($model, $data = null) {
        return [
            'status' => 200,
            'message' => $model->title() . ' ' . $data,
        ];
    },
    // ... other options
];