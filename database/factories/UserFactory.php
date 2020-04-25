<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;




$users = App\Models\User::pluck('id')->toArray();



$factory->define(App\Models\Product::class, function (Faker $faker) {

    return [
        'title' => $faker->name . "عربي",
        'en_title' => $faker->name,
        'description' => " قبت بالولايات في حين. ان يقوم الدنمارك أخذ, الأمم وقامت المتّبعة ان وقد, كل دول واتّجه وبالتحديد،. قد إحكام الأولى وقوعها، قام, قد بين أواخر الصفحات, عل شيء لإعلان الأمور المتحدة. أعمال باستحداث عن حين, كل عدد لأداء أوروبا الفرنسية, بهيئة اليها لان قد. ومن كثيرة الشّعبين ثم, فصل ٣٠ أوسع الثالث. لان هو ويتّفق الأهداف. كل اتفاق أفريقيا لها, دفّة الإتحاد به، بـ, لإعادة مقاومة الشتوية مكن تم. ",
        'en_description' => $faker->text ,
        'user_id' =>1 ,
    ];
});
$factory->define(App\Models\Category::class, function (Faker $faker) {

    return [
        'title' => $faker->name . "عربي",
        'en_title' => $faker->name,
        'description' => " قبت بالولايات في حين. ان يقوم الدنمارك أخذ, الأمم وقامت المتّبعة ان وقد, كل دول واتّجه وبالتحديد،. قد إحكام الأولى وقوعها، قام, قد بين أواخر الصفحات, عل شيء لإعلان الأمور المتحدة. أعمال باستحداث عن حين, كل عدد لأداء أوروبا الفرنسية, بهيئة اليها لان قد. ومن كثيرة الشّعبين ثم, فصل ٣٠ أوسع الثالث. لان هو ويتّفق الأهداف. كل اتفاق أفريقيا لها, دفّة الإتحاد به، بـ, لإعادة مقاومة الشتوية مكن تم. ",
        'en_description' => $faker->text ,
        'user_id' =>1 ,
    ];
});

