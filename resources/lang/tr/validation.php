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

    'accepted' => ':attribute kabul edilmelidir.',
    'accepted_if' => ':other alanı :value iken :attribute kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL olmalıdır.',
    'after' => ':attribute, :date tarihinden sonra olmalıdır.',
    'after_or_equal' => ':attribute, :date tarihinden sonra veya aynı tarihte olmalıdır.',
    'alpha' => ':attribute yalnızca harf içerebilir.',
    'alpha_dash' => ':attribute yalnızca harf, rakam, tire ve alt çizgi içerebilir.',
    'alpha_num' => ':attribute yalnızca harf ve rakam içerebilir.',
    'any_of' => ':attribute geçersiz.',
    'array' => ':attribute bir dizi olmalıdır.',
    'ascii' => ':attribute yalnızca tek baytlı harf, rakam ve semboller içerebilir.',
    'before' => ':attribute, :date tarihinden önce olmalıdır.',
    'before_or_equal' => ':attribute, :date tarihinden önce veya aynı tarihte olmalıdır.',
    'between' => [
        'array' => ':attribute :min - :max arasında öğe içermelidir.',
        'file' => ':attribute :min - :max kilobayt arasında olmalıdır.',
        'numeric' => ':attribute :min - :max arasında olmalıdır.',
        'string' => ':attribute :min - :max karakter arasında olmalıdır.',
    ],
    'boolean' => ':attribute doğru veya yanlış olmalıdır.',
    'can' => ':attribute yetkisiz bir değer içeriyor.',
    'confirmed' => ':attribute tekrarı eşleşmiyor.',
    'contains' => ':attribute gerekli bir değerden yoksun.',
    'current_password' => 'Şifre yanlış.',
    'date' => ':attribute geçerli bir tarih olmalıdır.',
    'date_equals' => ':attribute :date ile aynı tarih olmalıdır.',
    'date_format' => ':attribute :format biçimiyle eşleşmelidir.',
    'decimal' => ':attribute :decimal ondalık basamak içermelidir.',
    'declined' => ':attribute reddedilmelidir.',
    'declined_if' => ':other alanı :value iken :attribute reddedilmelidir.',
    'different' => ':attribute ve :other farklı olmalıdır.',
    'digits' => ':attribute :digits basamaklı olmalıdır.',
    'digits_between' => ':attribute :min - :max basamak arasında olmalıdır.',
    'dimensions' => ':attribute geçersiz görüntü boyutlarına sahip.',
    'distinct' => ':attribute alanında yinelenen bir değer var.',
    'doesnt_contain' => ':attribute şunlardan hiçbirini içeremez: :values.',
    'doesnt_end_with' => ':attribute şunlardan biriyle bitemez: :values.',
    'doesnt_start_with' => ':attribute şunlardan biriyle başlayamaz: :values.',
    'email' => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'encoding' => ':attribute :encoding kodlamasında olmalıdır.',
    'ends_with' => ':attribute şunlardan biriyle bitmelidir: :values.',
    'enum' => 'Seçilen :attribute geçersiz.',
    'exists' => 'Seçilen :attribute geçersiz.',
    'extensions' => ':attribute şu uzantılardan birine sahip olmalıdır: :values.',
    'file' => ':attribute bir dosya olmalıdır.',
    'filled' => ':attribute doldurulmalıdır.',
    'gt' => [
        'array' => ':attribute :value öğeden fazla içermelidir.',
        'file' => ':attribute :value kilobayttan büyük olmalıdır.',
        'numeric' => ':attribute :value değerinden büyük olmalıdır.',
        'string' => ':attribute :value karakterden uzun olmalıdır.',
    ],
    'gte' => [
        'array' => ':attribute en az :value öğe içermelidir.',
        'file' => ':attribute en az :value kilobayt olmalıdır.',
        'numeric' => ':attribute en az :value olmalıdır.',
        'string' => ':attribute en az :value karakter olmalıdır.',
    ],
    'hex_color' => ':attribute geçerli bir onaltılık renk olmalıdır.',
    'image' => ':attribute bir resim olmalıdır.',
    'in' => 'Seçilen :attribute geçersiz.',
    'in_array' => ':attribute, :other içinde mevcut olmalıdır.',
    'in_array_keys' => ':attribute şu anahtarlardan en az birini içermelidir: :values.',
    'integer' => ':attribute bir tam sayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON metni olmalıdır.',
    'list' => ':attribute bir liste olmalıdır.',
    'lowercase' => ':attribute küçük harf olmalıdır.',
    'lt' => [
        'array' => ':attribute :value öğeden az içermelidir.',
        'file' => ':attribute :value kilobayttan küçük olmalıdır.',
        'numeric' => ':attribute :value değerinden küçük olmalıdır.',
        'string' => ':attribute :value karakterden kısa olmalıdır.',
    ],
    'lte' => [
        'array' => ':attribute en fazla :value öğe içermelidir.',
        'file' => ':attribute en fazla :value kilobayt olmalıdır.',
        'numeric' => ':attribute en fazla :value olmalıdır.',
        'string' => ':attribute en fazla :value karakter olmalıdır.',
    ],
    'mac_address' => ':attribute geçerli bir MAC adresi olmalıdır.',
    'max' => [
        'array' => ':attribute en fazla :max öğe içerebilir.',
        'file' => ':attribute en fazla :max kilobayt olabilir.',
        'numeric' => ':attribute en fazla :max olabilir.',
        'string' => ':attribute en fazla :max karakter olabilir.',
    ],
    'max_digits' => ':attribute en fazla :max basamak içerebilir.',
    'mimes' => ':attribute şu türde bir dosya olmalıdır: :values.',
    'mimetypes' => ':attribute şu türde bir dosya olmalıdır: :values.',
    'min' => [
        'array' => ':attribute en az :min öğe içermelidir.',
        'file' => ':attribute en az :min kilobayt olmalıdır.',
        'numeric' => ':attribute en az :min olmalıdır.',
        'string' => ':attribute en az :min karakter olmalıdır.',
    ],
    'min_digits' => ':attribute en az :min basamak içermelidir.',
    'missing' => ':attribute bulunmamalıdır.',
    'missing_if' => ':other alanı :value iken :attribute bulunmamalıdır.',
    'missing_unless' => ':other alanı :value değilse :attribute bulunmamalıdır.',
    'missing_with' => ':values varken :attribute bulunmamalıdır.',
    'missing_with_all' => ':values varken :attribute bulunmamalıdır.',
    'multiple_of' => ':attribute :value katı olmalıdır.',
    'not_in' => 'Seçilen :attribute geçersiz.',
    'not_regex' => ':attribute biçimi geçersiz.',
    'numeric' => ':attribute bir sayı olmalıdır.',
    'password' => [
        'letters' => ':attribute en az bir harf içermelidir.',
        'mixed' => ':attribute en az bir büyük ve bir küçük harf içermelidir.',
        'numbers' => ':attribute en az bir rakam içermelidir.',
        'symbols' => ':attribute en az bir sembol içermelidir.',
        'uncompromised' => 'Verilen :attribute bir sızıntıda görünmüş. Lütfen farklı bir :attribute seçin.',
    ],
    'present' => ':attribute mevcut olmalıdır.',
    'present_if' => ':other alanı :value iken :attribute mevcut olmalıdır.',
    'present_unless' => ':other alanı :value değilse :attribute mevcut olmalıdır.',
    'present_with' => ':values varken :attribute mevcut olmalıdır.',
    'present_with_all' => ':values varken :attribute mevcut olmalıdır.',
    'prohibited' => ':attribute alanına izin verilmez.',
    'prohibited_if' => ':other alanı :value iken :attribute yasaktır.',
    'prohibited_if_accepted' => ':other kabul edildiğinde :attribute yasaktır.',
    'prohibited_if_declined' => ':other reddedildiğinde :attribute yasaktır.',
    'prohibited_unless' => ':other alanı :values içinde değilse :attribute yasaktır.',
    'prohibits' => ':attribute alanı :other alanının bulunmasını engeller.',
    'regex' => ':attribute biçimi geçersiz.',
    'required' => ':attribute zorunludur.',
    'required_array_keys' => ':attribute şu girdileri içermelidir: :values.',
    'required_if' => ':other alanı :value iken :attribute zorunludur.',
    'required_if_accepted' => ':other kabul edildiğinde :attribute zorunludur.',
    'required_if_declined' => ':other reddedildiğinde :attribute zorunludur.',
    'required_unless' => ':other alanı :values içinde değilse :attribute zorunludur.',
    'required_with' => ':values varken :attribute zorunludur.',
    'required_with_all' => ':values varken :attribute zorunludur.',
    'required_without' => ':values yokken :attribute zorunludur.',
    'required_without_all' => ':values alanlarının hiçbiri yokken :attribute zorunludur.',
    'same' => ':attribute ile :other eşleşmelidir.',
    'size' => [
        'array' => ':attribute :size öğe içermelidir.',
        'file' => ':attribute :size kilobayt olmalıdır.',
        'numeric' => ':attribute :size olmalıdır.',
        'string' => ':attribute :size karakter olmalıdır.',
    ],
    'starts_with' => ':attribute şunlardan biriyle başlamalıdır: :values.',
    'string' => ':attribute bir metin olmalıdır.',
    'timezone' => ':attribute geçerli bir saat dilimi olmalıdır.',
    'unique' => ':attribute zaten kullanılıyor.',
    'uploaded' => ':attribute yüklenemedi.',
    'uppercase' => ':attribute büyük harf olmalıdır.',
    'url' => ':attribute geçerli bir URL olmalıdır.',
    'ulid' => ':attribute geçerli bir ULID olmalıdır.',
    'uuid' => ':attribute geçerli bir UUID olmalıdır.',

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
        'name' => 'ad',
        'email' => 'e-posta adresi',
        'password' => 'şifre',
        'password_confirmation' => 'şifre tekrarı',
        'reg_number' => 'plaka',
        'brand' => 'marka',
        'model' => 'model',
        'owner_id' => 'sahip',
        'surname' => 'soyad',
    ],

];
