<?php

return [
    'user'  => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'         => 'ID',
            'id_helper'  => '',
            'name'     => 'Name',
            'name_helper' => '',
            'email'    => 'Email',
            'email_helper' => '',
            'phone'    => 'Phone',
            'phone_helper' => '',
            'role'    => 'Role',
            'role_helper' => '',
            'points'    => 'Points',
            'points_helper' => '',
        ]
    ],

    'membership'  => [
        'title'          => 'Memberships',
        'title_singular' => 'Membership',
        'fields'         => [
            'id'         => 'ID',
            'id_helper'  => '',
            'user_id'    => 'User',
            'user_id_helper' => '',
            'tier'    => 'Tier',
            'tier_helper' => '',
            'points'    => 'Points',
            'points_helper' => '',
            'discount_percentage'    => 'Discount Percentage',
            'discount_percentage_helper' => '',
            'valid_until'    => 'Valid Until',
            'valid_until_helper' => '',
        ]
    ],

    'sport_type' => [
        'title'          => 'Sport Types',
        'title_singular' => 'Sport Type',
        'fields'         => [
            'id'          => 'ID',
            'id_helper'   => ' ',
            'name'        => 'Name',
            'name_helper' => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'created_at'  => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'  => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'  => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],

    'field' => [
        'title'          => 'Fields',
        'title_singular' => 'Field',
        'fields'         => [
            'id'          => 'ID',
            'id_helper'   => ' ',
            'sport_type'  => 'Sport Type',
            'sport_type_helper' => ' ',
            'price_per_hours'  => 'Price Per Hours',
            'price_per_hours_helper' => ' ',
            'status'  => 'Status',
            'status_helper' => ' ',
            'created_at'  => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'  => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'  => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
];