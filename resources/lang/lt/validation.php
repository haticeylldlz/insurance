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

    'accepted' => 'Laukas :attribute turi buti priimtas.',
    'accepted_if' => 'Laukas :attribute turi buti priimtas, kai :other yra :value.',
    'active_url' => 'Laukas :attribute turi buti teisingas URL.',
    'after' => 'Laukas :attribute turi buti data po :date.',
    'after_or_equal' => 'Laukas :attribute turi buti data po arba lygi :date.',
    'alpha' => 'Laukas :attribute gali tureti tik raides.',
    'alpha_dash' => 'Laukas :attribute gali tureti tik raides, skaitmenis, bruksnius ir pabraukimus.',
    'alpha_num' => 'Laukas :attribute gali tureti tik raides ir skaitmenis.',
    'any_of' => 'Laukas :attribute neteisingas.',
    'array' => 'Laukas :attribute turi buti masyvas.',
    'ascii' => 'Laukas :attribute gali tureti tik vieno baito raides, skaitmenis ir simbolius.',
    'before' => 'Laukas :attribute turi buti data pries :date.',
    'before_or_equal' => 'Laukas :attribute turi buti data pries arba lygi :date.',
    'between' => [
        'array' => 'Laukas :attribute turi tureti nuo :min iki :max elementu.',
        'file' => 'Laukas :attribute turi buti nuo :min iki :max kilobaitu.',
        'numeric' => 'Laukas :attribute turi buti nuo :min iki :max.',
        'string' => 'Laukas :attribute turi buti nuo :min iki :max simboliu.',
    ],
    'boolean' => 'Laukas :attribute turi buti teisingas arba klaidingas.',
    'can' => 'Laukas :attribute turi neleistina reiksme.',
    'confirmed' => 'Laukas :attribute patvirtinimas nesutampa.',
    'contains' => 'Laukas :attribute truksta privalomos reiksmes.',
    'current_password' => 'Slaptazodis neteisingas.',
    'date' => 'Laukas :attribute turi buti teisinga data.',
    'date_equals' => 'Laukas :attribute turi buti data lygi :date.',
    'date_format' => 'Laukas :attribute turi atitikti formata :format.',
    'decimal' => 'Laukas :attribute turi tureti :decimal skaitmenis po kablelio.',
    'declined' => 'Laukas :attribute turi buti atmestas.',
    'declined_if' => 'Laukas :attribute turi buti atmestas, kai :other yra :value.',
    'different' => 'Laukai :attribute ir :other turi skirtis.',
    'digits' => 'Laukas :attribute turi buti :digits skaitmenys.',
    'digits_between' => 'Laukas :attribute turi buti nuo :min iki :max skaitmenu.',
    'dimensions' => 'Laukas :attribute turi neteisingus paveikslo matmenis.',
    'distinct' => 'Laukas :attribute turi pasikartojancia reiksme.',
    'doesnt_contain' => 'Laukas :attribute negali tureti siu reiksmiu: :values.',
    'doesnt_end_with' => 'Laukas :attribute negali baigtis viena is: :values.',
    'doesnt_start_with' => 'Laukas :attribute negali prasideti viena is: :values.',
    'email' => 'Laukas :attribute turi buti teisingas el. pasto adresas.',
    'encoding' => 'Laukas :attribute turi buti koduotas :encoding.',
    'ends_with' => 'Laukas :attribute turi baigtis viena is: :values.',
    'enum' => 'Pasirinktas :attribute neteisingas.',
    'exists' => 'Pasirinktas :attribute neteisingas.',
    'extensions' => 'Laukas :attribute turi tureti viena is siu pliniu: :values.',
    'file' => 'Laukas :attribute turi buti failas.',
    'filled' => 'Laukas :attribute turi buti uzpildytas.',
    'gt' => [
        'array' => 'Laukas :attribute turi tureti daugiau nei :value elementu.',
        'file' => 'Laukas :attribute turi buti didesnis nei :value kilobaitai.',
        'numeric' => 'Laukas :attribute turi buti didesnis nei :value.',
        'string' => 'Laukas :attribute turi buti ilgesnis nei :value simboliai.',
    ],
    'gte' => [
        'array' => 'Laukas :attribute turi tureti bent :value elementus.',
        'file' => 'Laukas :attribute turi buti bent :value kilobaitai.',
        'numeric' => 'Laukas :attribute turi buti bent :value.',
        'string' => 'Laukas :attribute turi buti bent :value simboliai.',
    ],
    'hex_color' => 'Laukas :attribute turi buti teisinga sesioliktaine spalva.',
    'image' => 'Laukas :attribute turi buti paveikslas.',
    'in' => 'Pasirinktas :attribute neteisingas.',
    'in_array' => 'Laukas :attribute turi egzistuoti :other.',
    'in_array_keys' => 'Laukas :attribute turi tureti bent viena is raktu: :values.',
    'integer' => 'Laukas :attribute turi buti sveikasis skaicius.',
    'ip' => 'Laukas :attribute turi buti teisingas IP adresas.',
    'ipv4' => 'Laukas :attribute turi buti teisingas IPv4 adresas.',
    'ipv6' => 'Laukas :attribute turi buti teisingas IPv6 adresas.',
    'json' => 'Laukas :attribute turi buti teisinga JSON eilute.',
    'list' => 'Laukas :attribute turi buti sarasas.',
    'lowercase' => 'Laukas :attribute turi buti mazosiomis raidemis.',
    'lt' => [
        'array' => 'Laukas :attribute turi tureti maziau nei :value elementu.',
        'file' => 'Laukas :attribute turi buti maziau nei :value kilobaitai.',
        'numeric' => 'Laukas :attribute turi buti maziau nei :value.',
        'string' => 'Laukas :attribute turi buti trumpesnis nei :value simboliai.',
    ],
    'lte' => [
        'array' => 'Laukas :attribute negali tureti daugiau nei :value elementu.',
        'file' => 'Laukas :attribute negali buti didesnis nei :value kilobaitai.',
        'numeric' => 'Laukas :attribute negali buti didesnis nei :value.',
        'string' => 'Laukas :attribute negali buti ilgesnis nei :value simboliai.',
    ],
    'mac_address' => 'Laukas :attribute turi buti teisingas MAC adresas.',
    'max' => [
        'array' => 'Laukas :attribute negali tureti daugiau nei :max elementu.',
        'file' => 'Laukas :attribute negali buti didesnis nei :max kilobaitai.',
        'numeric' => 'Laukas :attribute negali buti didesnis nei :max.',
        'string' => 'Laukas :attribute negali buti ilgesnis nei :max simboliai.',
    ],
    'max_digits' => 'Laukas :attribute negali tureti daugiau nei :max skaitmenu.',
    'mimes' => 'Laukas :attribute turi buti failo tipas: :values.',
    'mimetypes' => 'Laukas :attribute turi buti failo tipas: :values.',
    'min' => [
        'array' => 'Laukas :attribute turi tureti bent :min elementus.',
        'file' => 'Laukas :attribute turi buti bent :min kilobaitai.',
        'numeric' => 'Laukas :attribute turi buti bent :min.',
        'string' => 'Laukas :attribute turi buti bent :min simboliai.',
    ],
    'min_digits' => 'Laukas :attribute turi tureti bent :min skaitmenis.',
    'missing' => 'Laukas :attribute turi buti nerodomas.',
    'missing_if' => 'Laukas :attribute turi buti nerodomas, kai :other yra :value.',
    'missing_unless' => 'Laukas :attribute turi buti nerodomas, nebent :other yra :value.',
    'missing_with' => 'Laukas :attribute turi buti nerodomas, kai yra :values.',
    'missing_with_all' => 'Laukas :attribute turi buti nerodomas, kai yra :values.',
    'multiple_of' => 'Laukas :attribute turi buti :value kartotinis.',
    'not_in' => 'Pasirinktas :attribute neteisingas.',
    'not_regex' => 'Laukas :attribute formatas neteisingas.',
    'numeric' => 'Laukas :attribute turi buti skaicius.',
    'password' => [
        'letters' => 'Laukas :attribute turi tureti bent viena raide.',
        'mixed' => 'Laukas :attribute turi tureti bent viena didziaja ir viena mazaja raide.',
        'numbers' => 'Laukas :attribute turi tureti bent viena skaitmeni.',
        'symbols' => 'Laukas :attribute turi tureti bent viena simboli.',
        'uncompromised' => 'Nurodytas :attribute pasirode duomenu nutekime. Pasirinkite kita.',
    ],
    'present' => 'Laukas :attribute turi buti pateiktas.',
    'present_if' => 'Laukas :attribute turi buti pateiktas, kai :other yra :value.',
    'present_unless' => 'Laukas :attribute turi buti pateiktas, nebent :other yra :value.',
    'present_with' => 'Laukas :attribute turi buti pateiktas, kai yra :values.',
    'present_with_all' => 'Laukas :attribute turi buti pateiktas, kai yra :values.',
    'prohibited' => 'Laukas :attribute draudziamas.',
    'prohibited_if' => 'Laukas :attribute draudziamas, kai :other yra :value.',
    'prohibited_if_accepted' => 'Laukas :attribute draudziamas, kai :other priimtas.',
    'prohibited_if_declined' => 'Laukas :attribute draudziamas, kai :other atmestas.',
    'prohibited_unless' => 'Laukas :attribute draudziamas, nebent :other yra :values.',
    'prohibits' => 'Laukas :attribute draudzia lauka :other.',
    'regex' => 'Laukas :attribute formatas neteisingas.',
    'required' => 'Laukas :attribute privalomas.',
    'required_array_keys' => 'Laukas :attribute turi tureti irasus: :values.',
    'required_if' => 'Laukas :attribute privalomas, kai :other yra :value.',
    'required_if_accepted' => 'Laukas :attribute privalomas, kai :other priimtas.',
    'required_if_declined' => 'Laukas :attribute privalomas, kai :other atmestas.',
    'required_unless' => 'Laukas :attribute privalomas, nebent :other yra :values.',
    'required_with' => 'Laukas :attribute privalomas, kai yra :values.',
    'required_with_all' => 'Laukas :attribute privalomas, kai yra :values.',
    'required_without' => 'Laukas :attribute privalomas, kai nera :values.',
    'required_without_all' => 'Laukas :attribute privalomas, kai nera ne vieno is :values.',
    'same' => 'Laukas :attribute turi sutapti su :other.',
    'size' => [
        'array' => 'Laukas :attribute turi tureti :size elementus.',
        'file' => 'Laukas :attribute turi buti :size kilobaitai.',
        'numeric' => 'Laukas :attribute turi buti :size.',
        'string' => 'Laukas :attribute turi buti :size simboliai.',
    ],
    'starts_with' => 'Laukas :attribute turi prasideti viena is: :values.',
    'string' => 'Laukas :attribute turi buti tekstas.',
    'timezone' => 'Laukas :attribute turi buti teisinga laiko juosta.',
    'unique' => 'Toks :attribute jau naudojamas.',
    'uploaded' => 'Laukas :attribute nepavyko ikelti.',
    'uppercase' => 'Laukas :attribute turi buti didziosiomis raidemis.',
    'url' => 'Laukas :attribute turi buti teisingas URL.',
    'ulid' => 'Laukas :attribute turi buti teisingas ULID.',
    'uuid' => 'Laukas :attribute turi buti teisingas UUID.',

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
        'name' => 'vardas',
        'email' => 'el. pasto adresas',
        'password' => 'slaptazodis',
        'password_confirmation' => 'slaptazodzio patvirtinimas',
        'reg_number' => 'registracijos numeris',
        'brand' => 'marke',
        'model' => 'modelis',
        'owner_id' => 'savininkas',
        'surname' => 'pavarde',
    ],

];
