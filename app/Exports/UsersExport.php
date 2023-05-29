<?php

namespace App\Exports;

use App\Models\Banks;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;
class UsersExport implements FromCollection
{

    public function heading():array{
        return [
            'ID',
            'Username',
            'Email',
            'Account Holder Full Name',
            'Holder Country',
            'Bank Number',
            'Bank Name	',
            'Amount',
            'Creation Data',
            'Status',
        ];
    }
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       return collect(User::getData());
    }
}
