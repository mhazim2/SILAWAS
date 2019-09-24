<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute harus diterima.',
    'active_url' => ':attribute bukan alamat yang valid.',
    'after' => ':attribute harus berupa tanggal setelah :date.',
    'after_or_equal' => ':attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => ':attribute hanya dapat berupa huruf.',
    'alpha_dash' => ':attribute hanya dapat berupa huruf, angka, strip dan garis bawah.',
    'alpha_num' => ':attribute hanya dapat berupa huruf dan angka.',
    'array' => ':attribute hanya dapat berupa array.',
    'before' => ':attribute harus berupa tanggal sebelum :date.',
    'before_or_equal' => ':attribute harus berupa tanggal sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => ':attribute harus berada diantara :min dan :max.',
        'file' => ':attribute harus berukuran :min sampai :max KB.',
        'string' => ':attribute harus berjumlah :min sampai :max karakter.',
        'array' => ':attribute harus memiliki :min sampai :max item.',
    ],
    'boolean' => ':attribute hanya dapat berupa jawaban benar atau salah.',
    'confirmed' => ':attribute konfirmasi tidak sesuai.',
    'date' => ':attribute harus berupa tanggal yang valid.',
    'date_equals' => ':attribute harus berupa tanggal yang sama dengan :date.',
    'date_format' => ':attribute tidak sesuai dengan format :format.',
    'different' => ':attribute dan :other harus berbeda.',
    'digits' => ':attribute harus berjumlah :digits digit.',
    'digits_between' => ':attribute harus berjumlah :min sampai :max digit.',
    'dimensions' => ':attribute memiliki dimensi gambar yang salah.',
    'distinct' => ':attribute sudah ada.',
    'email' => ':attribute harus berupa alamat email yang valid.',
    'ends_with' => ':attribute harus diakhiri dengan: :values',
    'exists' => ':attribute tidak valid.',
    'file' => ':attribute harus berupa file.',
    'filled' => ':attribute harus memiliki nilai.',
    'gt' => [
        'numeric' => ':attribute harus lebih besar dari :value.',
        'file' => ':attribute harus lebih besar dari :value KB.',
        'string' => ':attribute harus lebih banyak dari :value karakter.',
        'array' => ':attribute harus memiliki lebih dari :value item.',
    ],
    'gte' => [
        'numeric' => ':attribute harus lebih besar atau sama dengan :value.',
        'file' => ':attribute harus lebih besar atau sama dengan :value KB.',
        'string' => ':attribute harus lebih banyak atau sama dengan :value karakter.',
        'array' => ':attribute harus memiliki :value item atau lebih.',
    ],
    'image' => ':attribute harus berupa gambar.',
    'in' => ':attribute yang dipilih tidak valid.',
    'in_array' => ':attribute tidak ada di :other.',
    'integer' => ':attribute harus berupa bilangan bulat.',
    'ip' => ':attribute harus berupa alamat IP yang valid.',
    'ipv4' => ':attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => ':attribute harus berupa alamat IPv6 yang valid.',
    'json' => ':attribute harus berupa JSON.',
    'lt' => [
        'numeric' => ':attribute harus lebih kecil dari :value.',
        'file' => ':attribute harus lebih kecil dari :value KB.',
        'string' => ':attribute harus lebih sedikit dari :value karakter.',
        'array' => ':attribute harus memiliki kurang dari :value item.',
    ],
    'lte' => [
        'numeric' => ':attribute harus lebih kecil atau sama dengan :value.',
        'file' => ':attribute harus lebih kecil atau sama dengan :value KB.',
        'string' => ':attribute harus lebih sedikit atau sama dengan :value karakter.',
        'array' => ':attribute tidak boleh memiliki lebih dari :value item.',
    ],
    'max' => [
        'numeric' => ':attribute tidak boleh lebih besar dari :max.',
        'file' => ':attribute tidak boleh lebih besar dari :max KB.',
        'string' => ':attribute tidak boleh lebih banyak dari :max karakter.',
        'array' => ':attribute tidak boleh memiliki lebih dari :max item.',
    ],
    'mimes' => ':attribute harus berupa file: :values.',
    'mimetypes' => ':attribute harus berupa file: :values.',
    'min' => [
        'numeric' => ':attribute tidak boleh lebih kecil dari :min.',
        'file' => ':attribute tidak boleh lebih kecil dari :min KB.',
        'string' => ':attribute tidak boleh lebih sedikit dari :min karakter.',
        'array' => ':attribute tidak boleh memiliki kurang dari :min item.',
    ],
    'not_in' => ':attribute yang dipilih tidak valid.',
    'not_regex' => 'format :attribute tidak valid.',
    'numeric' => ':attribute harus berupa angka.',
    'present' => ':attribute harus ada.',
    'regex' => 'format :attribute tidak valid.',
    'required' => ':attribute wajib diisi.',
    'required_if' => ':attribute harus diisi ketika :other :value.',
    'required_unless' => ':attribute harus diisi kecuali :other :values.',
    'required_with' => ':attribute harus diisi ketika :values ada.',
    'required_with_all' => ':attribute harus diisi ketika semua :values ada.',
    'required_without' => ':attribute harus diisi ketika :values tidak ada.',
    'required_without_all' => ':attribute harus diisi ketika semua :values tidak ada.',
    'same' => ':attribute dan :other harus sama.',
    'size' => [
        'numeric' => ':attribute harus :size.',
        'file' => ':attribute harus :size KB.',
        'string' => ':attribute harus :size karakter.',
        'array' => ':attribute harus memiliki :size item.',
    ],
    'starts_with' => ':attribute harus dimulai dari: :values',
    'string' => ':attribute harus berupa string.',
    'timezone' => ':attribute harus berupa wilayah yang valid.',
    'unique' => ':attribute sudah ada.',
    'uploaded' => ':attribute upload gagal.',
    'url' => 'format :attribute tidak valid.',
    'uuid' => ':attribute harus berupa UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'idUnitUsaha' => 'nama unit usaha',
        'idPengawas' => 'dokter hewan pengawas'
    ],

];
