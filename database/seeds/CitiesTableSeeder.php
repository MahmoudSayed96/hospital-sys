<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
               'id'=>1,
               'governorate_id'=>1,
               'city_name'=>'القاهره',
               'name'=>'Cairo'
               ] ,
                           
                [
               'id'=>2,
               'governorate_id'=>2,
               'city_name'=>'الجيزة',
               'name'=>'Giza'
               ] ,
                           
                [
               'id'=>3,
               'governorate_id'=>2,
               'city_name'=>'السادس من أكتوبر',
               'name'=>'Sixth of October'
               ] ,
                           
                [
               'id'=>4,
               'governorate_id'=>2,
               'city_name'=>'الشيخ زايد',
               'name'=>'Cheikh Zayed'
               ] ,
                           
                [
               'id'=>5,
               'governorate_id'=>2,
               'city_name'=>'الحوامدية',
               'name'=>'Hawamdiyah'
               ] ,
                           
                [
               'id'=>6,
               'governorate_id'=>2,
               'city_name'=>'البدرشين',
               'name'=>'Al Badrasheen'
               ] ,
                           
                [
               'id'=>7,
               'governorate_id'=>2,
               'city_name'=>'الصف',
               'name'=>'Saf'
               ] ,
                           
                [
               'id'=>8,
               'governorate_id'=>2,
               'city_name'=>'أطفيح',
               'name'=>'Atfih'
               ] ,
                           
                [
               'id'=>9,
               'governorate_id'=>2,
               'city_name'=>'العياط',
               'name'=>'Al Ayat'
               ] ,
                           
                [
               'id'=>10,
               'governorate_id'=>2,
               'city_name'=>'الباويطي',
               'name'=>'Al-Bawaiti'
               ] ,
                           
                [
               'id'=>11,
               'governorate_id'=>2,
               'city_name'=>'منشأة القناطر',
               'name'=>'ManshiyetAl Qanater'
               ] ,
                           
                [
               'id'=>12,
               'governorate_id'=>2,
               'city_name'=>'أوسيم',
               'name'=>'Oaseem'
               ] ,
                           
                [
               'id'=>13,
               'governorate_id'=>2,
               'city_name'=>'كرداسة',
               'name'=>'Kerdasa'
               ] ,
                           
                [
               'id'=>14,
               'governorate_id'=>2,
               'city_name'=>'أبو النمرس',
               'name'=>'Abu Nomros'
               ] ,
                           
                [
               'id'=>15,
               'governorate_id'=>2,
               'city_name'=>'كفر غطاطي',
               'name'=>'Kafr Ghati'
               ] ,
                           
                [
               'id'=>16,
               'governorate_id'=>2,
               'city_name'=>'منشأة البكاري',
               'name'=>'Manshiyet Al Bakari'
               ] ,
                           
                [
               'id'=>17,
               'governorate_id'=>3,
               'city_name'=>'الأسكندرية',
               'name'=>'Alexandria'
               ] ,
                           
                [
               'id'=>18,
               'governorate_id'=>3,
               'city_name'=>'برج العرب',
               'name'=>'Burj Al Arab'
               ] ,
                           
                [
               'id'=>19,
               'governorate_id'=>3,
               'city_name'=>'برج العرب الجديدة',
               'name'=>'New Burj Al Arab'
               ] ,
                           
                [
               'id'=>20,
               'governorate_id'=>12,
               'city_name'=>'بنها',
               'name'=>'Banha'
               ] ,
                           
                [
               'id'=>21,
               'governorate_id'=>12,
               'city_name'=>'قليوب',
               'name'=>'Qalyub'
               ] ,
                           
                [
               'id'=>22,
               'governorate_id'=>12,
               'city_name'=>'شبرا الخيمة',
               'name'=>'Shubra Al Khaimah'
               ] ,
                           
                [
               'id'=>23,
               'governorate_id'=>12,
               'city_name'=>'القناطر الخيرية',
               'name'=>'Al Qanater Charity'
               ] ,
                           
                [
               'id'=>24,
               'governorate_id'=>12,
               'city_name'=>'الخانكة',
               'name'=>'Khanka'
               ] ,
                           
                [
               'id'=>25,
               'governorate_id'=>12,
               'city_name'=>'كفر شكر',
               'name'=>'Kafr Shukr'
               ] ,
                           
                [
               'id'=>26,
               'governorate_id'=>12,
               'city_name'=>'طوخ',
               'name'=>'Tukh'
               ] ,
                           
                [
               'id'=>27,
               'governorate_id'=>12,
               'city_name'=>'قها',
               'name'=>'Qaha'
               ] ,
                           
                [
               'id'=>28,
               'governorate_id'=>12,
               'city_name'=>'العبور',
               'name'=>'Obour'
               ] ,
                           
                [
               'id'=>29,
               'governorate_id'=>12,
               'city_name'=>'الخصوص',
               'name'=>'Khosous'
               ] ,
                           
                [
               'id'=>30,
               'governorate_id'=>12,
               'city_name'=>'شبين القناطر',
               'name'=>'Shibin Al Qanater'
               ] ,
                           
                [
               'id'=>31,
               'governorate_id'=>6,
               'city_name'=>'دمنهور',
               'name'=>'Damanhour'
               ] ,
                           
                [
               'id'=>32,
               'governorate_id'=>6,
               'city_name'=>'كفر الدوار',
               'name'=>'Kafr El Dawar'
               ] ,
                           
                [
               'id'=>33,
               'governorate_id'=>6,
               'city_name'=>'رشيد',
               'name'=>'Rashid'
               ] ,
                           
                [
               'id'=>34,
               'governorate_id'=>6,
               'city_name'=>'إدكو',
               'name'=>'Edco'
               ] ,
                           
                [
               'id'=>35,
               'governorate_id'=>6,
               'city_name'=>'أبو المطامير',
               'name'=>'Abu al-Matamir'
               ] ,
                           
                [
               'id'=>36,
               'governorate_id'=>6,
               'city_name'=>'أبو حمص',
               'name'=>'Abu Homs'
               ] ,
                           
                [
               'id'=>37,
               'governorate_id'=>6,
               'city_name'=>'الدلنجات',
               'name'=>'Delengat'
               ] ,
                           
                [
               'id'=>38,
               'governorate_id'=>6,
               'city_name'=>'المحمودية',
               'name'=>'Mahmoudiyah'
               ] ,
                           
                [
               'id'=>39,
               'governorate_id'=>6,
               'city_name'=>'الرحمانية',
               'name'=>'Rahmaniyah'
               ] ,
                           
                [
               'id'=>40,
               'governorate_id'=>6,
               'city_name'=>'إيتاي البارود',
               'name'=>'Itai Baroud'
               ] ,
                           
                [
               'id'=>41,
               'governorate_id'=>6,
               'city_name'=>'حوش عيسى',
               'name'=>'Housh Eissa'
               ] ,
                           
                [
               'id'=>42,
               'governorate_id'=>6,
               'city_name'=>'شبراخيت',
               'name'=>'Shubrakhit'
               ] ,
                           
                [
               'id'=>43,
               'governorate_id'=>6,
               'city_name'=>'كوم حمادة',
               'name'=>'Kom Hamada'
               ] ,
                           
                [
               'id'=>44,
               'governorate_id'=>6,
               'city_name'=>'بدر',
               'name'=>'Badr'
               ] ,
                           
                [
               'id'=>45,
               'governorate_id'=>6,
               'city_name'=>'وادي النطرون',
               'name'=>'Wadi Natrun'
               ] ,
                           
                [
               'id'=>46,
               'governorate_id'=>6,
               'city_name'=>'النوبارية الجديدة',
               'name'=>'New Nubaria'
               ] ,
                           
                [
               'id'=>47,
               'governorate_id'=>23,
               'city_name'=>'مرسى مطروح',
               'name'=>'Marsa Matrouh'
               ] ,
                           
                [
               'id'=>48,
               'governorate_id'=>23,
               'city_name'=>'الحمام',
               'name'=>'El Hamam'
               ] ,
                           
                [
               'id'=>49,
               'governorate_id'=>23,
               'city_name'=>'العلمين',
               'name'=>'Alamein'
               ] ,
                           
                [
               'id'=>50,
               'governorate_id'=>23,
               'city_name'=>'الضبعة',
               'name'=>'Dabaa'
               ] ,
                           
                [
               'id'=>51,
               'governorate_id'=>23,
               'city_name'=>'النجيلة',
               'name'=>'Al-Nagila'
               ] ,
                           
                [
               'id'=>52,
               'governorate_id'=>23,
               'city_name'=>'سيدي براني',
               'name'=>'Sidi Brani'
               ] ,
                           
                [
               'id'=>53,
               'governorate_id'=>23,
               'city_name'=>'السلوم',
               'name'=>'Salloum'
               ] ,
                           
                [
               'id'=>54,
               'governorate_id'=>23,
               'city_name'=>'سيوة',
               'name'=>'Siwa'
               ] ,
                           
                [
               'id'=>55,
               'governorate_id'=>19,
               'city_name'=>'دمياط',
               'name'=>'Damietta'
               ] ,
                           
                [
               'id'=>56,
               'governorate_id'=>19,
               'city_name'=>'دمياط الجديدة',
               'name'=>'New Damietta'
               ] ,
                           
                [
               'id'=>57,
               'governorate_id'=>19,
               'city_name'=>'رأس البر',
               'name'=>'Ras El Bar'
               ] ,
                           
                [
               'id'=>58,
               'governorate_id'=>19,
               'city_name'=>'فارسكور',
               'name'=>'Faraskour'
               ] ,
                           
                [
               'id'=>59,
               'governorate_id'=>19,
               'city_name'=>'الزرقا',
               'name'=>'Zarqa'
               ] ,
                           
                [
               'id'=>60,
               'governorate_id'=>19,
               'city_name'=>'السرو',
               'name'=>'alsaru'
               ] ,
                           
                [
               'id'=>61,
               'governorate_id'=>19,
               'city_name'=>'الروضة',
               'name'=>'alruwda'
               ] ,
                           
                [
               'id'=>62,
               'governorate_id'=>19,
               'city_name'=>'كفر البطيخ',
               'name'=>'Kafr El-Batikh'
               ] ,
                           
                [
               'id'=>63,
               'governorate_id'=>19,
               'city_name'=>'عزبة البرج',
               'name'=>'Azbet Al Burg'
               ] ,
                           
                [
               'id'=>64,
               'governorate_id'=>19,
               'city_name'=>'ميت أبو غالب',
               'name'=>'Meet Abou Ghalib'
               ] ,
                           
                [
               'id'=>65,
               'governorate_id'=>19,
               'city_name'=>'كفر سعد',
               'name'=>'Kafr Saad'
               ] ,
                           
                [
               'id'=>66,
               'governorate_id'=>4,
               'city_name'=>'المنصورة',
               'name'=>'Mansoura'
               ] ,
                           
                [
               'id'=>67,
               'governorate_id'=>4,
               'city_name'=>'طلخا',
               'name'=>'Talkha'
               ] ,
                           
                [
               'id'=>68,
               'governorate_id'=>4,
               'city_name'=>'ميت غمر',
               'name'=>'Mitt Ghamr'
               ] ,
                           
                [
               'id'=>69,
               'governorate_id'=>4,
               'city_name'=>'دكرنس',
               'name'=>'Dekernes'
               ] ,
                           
                [
               'id'=>70,
               'governorate_id'=>4,
               'city_name'=>'أجا',
               'name'=>'Aga'
               ] ,
                           
                [
               'id'=>71,
               'governorate_id'=>4,
               'city_name'=>'منية النصر',
               'name'=>'Menia El Nasr'
               ] ,
                           
                [
               'id'=>72,
               'governorate_id'=>4,
               'city_name'=>'السنبلاوين',
               'name'=>'Sinbillawin'
               ] ,
                           
                [
               'id'=>73,
               'governorate_id'=>4,
               'city_name'=>'الكردي',
               'name'=>'El Kurdi'
               ] ,
                           
                [
               'id'=>74,
               'governorate_id'=>4,
               'city_name'=>'بني عبيد',
               'name'=>'Bani Ubaid'
               ] ,
                           
                [
               'id'=>75,
               'governorate_id'=>4,
               'city_name'=>'المنزلة',
               'name'=>'Al Manzala'
               ] ,
                           
                [
               'id'=>76,
               'governorate_id'=>4,
               'city_name'=>'تمي الأمديد',
               'name'=>'tami al\'amdid'
               ] ,
                           
                [
               'id'=>77,
               'governorate_id'=>4,
               'city_name'=>'الجمالية',
               'name'=>'aljamalia'
               ] ,
                           
                [
               'id'=>78,
               'governorate_id'=>4,
               'city_name'=>'شربين',
               'name'=>'Sherbin'
               ] ,
                           
                [
               'id'=>79,
               'governorate_id'=>4,
               'city_name'=>'المطرية',
               'name'=>'Mataria'
               ] ,
                           
                [
               'id'=>80,
               'governorate_id'=>4,
               'city_name'=>'بلقاس',
               'name'=>'Belqas'
               ] ,
                           
                [
               'id'=>81,
               'governorate_id'=>4,
               'city_name'=>'ميت سلسيل',
               'name'=>'Meet Salsil'
               ] ,
                           
                [
               'id'=>82,
               'governorate_id'=>4,
               'city_name'=>'جمصة',
               'name'=>'Gamasa'
               ] ,
                           
                [
               'id'=>83,
               'governorate_id'=>4,
               'city_name'=>'محلة دمنة',
               'name'=>'Mahalat Damana'
               ] ,
                           
                [
               'id'=>84,
               'governorate_id'=>4,
               'city_name'=>'نبروه',
               'name'=>'Nabroh'
               ] ,
                           
                [
               'id'=>85,
               'governorate_id'=>22,
               'city_name'=>'كفر الشيخ',
               'name'=>'Kafr El Sheikh'
               ] ,
                           
                [
               'id'=>86,
               'governorate_id'=>22,
               'city_name'=>'دسوق',
               'name'=>'Desouq'
               ] ,
                           
                [
               'id'=>87,
               'governorate_id'=>22,
               'city_name'=>'فوه',
               'name'=>'Fooh'
               ] ,
                           
                [
               'id'=>88,
               'governorate_id'=>22,
               'city_name'=>'مطوبس',
               'name'=>'Metobas'
               ] ,
                           
                [
               'id'=>89,
               'governorate_id'=>22,
               'city_name'=>'برج البرلس',
               'name'=>'Burg Al Burullus'
               ] ,
                           
                [
               'id'=>90,
               'governorate_id'=>22,
               'city_name'=>'بلطيم',
               'name'=>'Baltim'
               ] ,
                           
                [
               'id'=>91,
               'governorate_id'=>22,
               'city_name'=>'مصيف بلطيم',
               'name'=>'Masief Baltim'
               ] ,
                           
                [
               'id'=>92,
               'governorate_id'=>22,
               'city_name'=>'الحامول',
               'name'=>'Hamol'
               ] ,
                           
                [
               'id'=>93,
               'governorate_id'=>22,
               'city_name'=>'بيلا',
               'name'=>'Bella'
               ] ,
                           
                [
               'id'=>94,
               'governorate_id'=>22,
               'city_name'=>'الرياض',
               'name'=>'Riyadh'
               ] ,
                           
                [
               'id'=>95,
               'governorate_id'=>22,
               'city_name'=>'سيدي سالم',
               'name'=>'Sidi Salm'
               ] ,
                           
                [
               'id'=>96,
               'governorate_id'=>22,
               'city_name'=>'قلين',
               'name'=>'Qellen'
               ] ,
                           
                [
               'id'=>97,
               'governorate_id'=>22,
               'city_name'=>'سيدي غازي',
               'name'=>'Sidi Ghazi'
               ] ,
                           
                [
               'id'=>98,
               'governorate_id'=>8,
               'city_name'=>'طنطا',
               'name'=>'Tanta'
               ] ,
                           
                [
               'id'=>99,
               'governorate_id'=>8,
               'city_name'=>'المحلة الكبرى',
               'name'=>'Al Mahalla Al Kobra'
               ] ,
                           
                [
               'id'=>100,
               'governorate_id'=>8,
               'city_name'=>'كفر الزيات',
               'name'=>'Kafr El Zayat'
               ] ,
                           
                [
               'id'=>101,
               'governorate_id'=>8,
               'city_name'=>'زفتى',
               'name'=>'Zefta'
               ] ,
                           
                [
               'id'=>102,
               'governorate_id'=>8,
               'city_name'=>'السنطة',
               'name'=>'El Santa'
               ] ,
                           
                [
               'id'=>103,
               'governorate_id'=>8,
               'city_name'=>'قطور',
               'name'=>'Qutour'
               ] ,
                           
                [
               'id'=>104,
               'governorate_id'=>8,
               'city_name'=>'بسيون',
               'name'=>'Basion'
               ] ,
                           
                [
               'id'=>105,
               'governorate_id'=>8,
               'city_name'=>'سمنود',
               'name'=>'Samannoud'
               ] ,
                           
                [
               'id'=>106,
               'governorate_id'=>10,
               'city_name'=>'شبين الكوم',
               'name'=>'Shbeen El Koom'
               ] ,
                           
                [
               'id'=>107,
               'governorate_id'=>10,
               'city_name'=>'مدينة السادات',
               'name'=>'Sadat City'
               ] ,
                           
                [
               'id'=>108,
               'governorate_id'=>10,
               'city_name'=>'منوف',
               'name'=>'Menouf'
               ] ,
                           
                [
               'id'=>109,
               'governorate_id'=>10,
               'city_name'=>'سرس الليان',
               'name'=>'Sars El-Layan'
               ] ,
                           
                [
               'id'=>110,
               'governorate_id'=>10,
               'city_name'=>'أشمون',
               'name'=>'Ashmon'
               ] ,
                           
                [
               'id'=>111,
               'governorate_id'=>10,
               'city_name'=>'الباجور',
               'name'=>'Al Bagor'
               ] ,
                           
                [
               'id'=>112,
               'governorate_id'=>10,
               'city_name'=>'قويسنا',
               'name'=>'Quesna'
               ] ,
                           
                [
               'id'=>113,
               'governorate_id'=>10,
               'city_name'=>'بركة السبع',
               'name'=>'Berkat El Saba'
               ] ,
                           
                [
               'id'=>114,
               'governorate_id'=>10,
               'city_name'=>'تلا',
               'name'=>'Tala'
               ] ,
                           
                [
               'id'=>115,
               'governorate_id'=>10,
               'city_name'=>'الشهداء',
               'name'=>'Al Shohada'
               ] ,
                           
                [
               'id'=>116,
               'governorate_id'=>20,
               'city_name'=>'الزقازيق',
               'name'=>'Zagazig'
               ] ,
                           
                [
               'id'=>117,
               'governorate_id'=>20,
               'city_name'=>'العاشر من رمضان',
               'name'=>'Al Ashr Men Ramadan'
               ] ,
                           
                [
               'id'=>118,
               'governorate_id'=>20,
               'city_name'=>'منيا القمح',
               'name'=>'Minya Al Qamh'
               ] ,
                           
                [
               'id'=>119,
               'governorate_id'=>20,
               'city_name'=>'بلبيس',
               'name'=>'Belbeis'
               ] ,
                           
                [
               'id'=>120,
               'governorate_id'=>20,
               'city_name'=>'مشتول السوق',
               'name'=>'Mashtoul El Souq'
               ] ,
                           
                [
               'id'=>121,
               'governorate_id'=>20,
               'city_name'=>'القنايات',
               'name'=>'Qenaiat'
               ] ,
                           
                [
               'id'=>122,
               'governorate_id'=>20,
               'city_name'=>'أبو حماد',
               'name'=>'Abu Hammad'
               ] ,
                           
                [
               'id'=>123,
               'governorate_id'=>20,
               'city_name'=>'القرين',
               'name'=>'El Qurain'
               ] ,
                           
                [
               'id'=>124,
               'governorate_id'=>20,
               'city_name'=>'ههيا',
               'name'=>'Hehia'
               ] ,
                           
                [
               'id'=>125,
               'governorate_id'=>20,
               'city_name'=>'أبو كبير',
               'name'=>'Abu Kabir'
               ] ,
                           
                [
               'id'=>126,
               'governorate_id'=>20,
               'city_name'=>'فاقوس',
               'name'=>'Faccus'
               ] ,
                           
                [
               'id'=>127,
               'governorate_id'=>20,
               'city_name'=>'الصالحية الجديدة',
               'name'=>'El Salihia El Gedida'
               ] ,
                           
                [
               'id'=>128,
               'governorate_id'=>20,
               'city_name'=>'الإبراهيمية',
               'name'=>'Al Ibrahimiyah'
               ] ,
                           
                [
               'id'=>129,
               'governorate_id'=>20,
               'city_name'=>'ديرب نجم',
               'name'=>'Deirb Negm'
               ] ,
                           
                [
               'id'=>130,
               'governorate_id'=>20,
               'city_name'=>'كفر صقر',
               'name'=>'Kafr Saqr'
               ] ,
                           
                [
               'id'=>131,
               'governorate_id'=>20,
               'city_name'=>'أولاد صقر',
               'name'=>'Awlad Saqr'
               ] ,
                           
                [
               'id'=>132,
               'governorate_id'=>20,
               'city_name'=>'الحسينية',
               'name'=>'Husseiniya'
               ] ,
                           
                [
               'id'=>133,
               'governorate_id'=>20,
               'city_name'=>'صان الحجر القبلية',
               'name'=>'san alhajar alqablia'
               ] ,
                           
                [
               'id'=>134,
               'governorate_id'=>20,
               'city_name'=>'منشأة أبو عمر',
               'name'=>'Manshayat Abu Omar'
               ] ,
                           
                [
               'id'=>135,
               'governorate_id'=>18,
               'city_name'=>'بورسعيد',
               'name'=>'PorSaid'
               ] ,
                           
                [
               'id'=>136,
               'governorate_id'=>18,
               'city_name'=>'بورفؤاد',
               'name'=>'PorFouad'
               ] ,
                           
                [
               'id'=>137,
               'governorate_id'=>9,
               'city_name'=>'الإسماعيلية',
               'name'=>'Ismailia'
               ] ,
                           
                [
               'id'=>138,
               'governorate_id'=>9,
               'city_name'=>'فايد',
               'name'=>'Fayed'
               ] ,
                           
                [
               'id'=>139,
               'governorate_id'=>9,
               'city_name'=>'القنطرة شرق',
               'name'=>'Qantara Sharq'
               ] ,
                           
                [
               'id'=>140,
               'governorate_id'=>9,
               'city_name'=>'القنطرة غرب',
               'name'=>'Qantara Gharb'
               ] ,
                           
                [
               'id'=>141,
               'governorate_id'=>9,
               'city_name'=>'التل الكبير',
               'name'=>'El Tal El Kabier'
               ] ,
                           
                [
               'id'=>142,
               'governorate_id'=>9,
               'city_name'=>'أبو صوير',
               'name'=>'Abu Sawir'
               ] ,
                           
                [
               'id'=>143,
               'governorate_id'=>9,
               'city_name'=>'القصاصين الجديدة',
               'name'=>'Kasasien El Gedida'
               ] ,
                           
                [
               'id'=>144,
               'governorate_id'=>14,
               'city_name'=>'السويس',
               'name'=>'Suez'
               ] ,
                           
                [
               'id'=>145,
               'governorate_id'=>26,
               'city_name'=>'العريش',
               'name'=>'Arish'
               ] ,
                           
                [
               'id'=>146,
               'governorate_id'=>26,
               'city_name'=>'الشيخ زويد',
               'name'=>'Sheikh Zowaid'
               ] ,
                           
                [
               'id'=>147,
               'governorate_id'=>26,
               'city_name'=>'نخل',
               'name'=>'Nakhl'
               ] ,
                           
                [
               'id'=>148,
               'governorate_id'=>26,
               'city_name'=>'رفح',
               'name'=>'Rafah'
               ] ,
                           
                [
               'id'=>149,
               'governorate_id'=>26,
               'city_name'=>'بئر العبد',
               'name'=>'Bir al-Abed'
               ] ,
                           
                [
               'id'=>150,
               'governorate_id'=>26,
               'city_name'=>'الحسنة',
               'name'=>'Al Hasana'
               ] ,
                           
                [
               'id'=>151,
               'governorate_id'=>21,
               'city_name'=>'الطور',
               'name'=>'Al Toor'
               ] ,
                           
                [
               'id'=>152,
               'governorate_id'=>21,
               'city_name'=>'شرم الشيخ',
               'name'=>'Sharm El-Shaikh'
               ] ,
                           
                [
               'id'=>153,
               'governorate_id'=>21,
               'city_name'=>'دهب',
               'name'=>'Dahab'
               ] ,
                           
                [
               'id'=>154,
               'governorate_id'=>21,
               'city_name'=>'نويبع',
               'name'=>'Nuweiba'
               ] ,
                           
                [
               'id'=>155,
               'governorate_id'=>21,
               'city_name'=>'طابا',
               'name'=>'Taba'
               ] ,
                           
                [
               'id'=>156,
               'governorate_id'=>21,
               'city_name'=>'سانت كاترين',
               'name'=>'Saint Catherine'
               ] ,
                           
                [
               'id'=>157,
               'governorate_id'=>21,
               'city_name'=>'أبو رديس',
               'name'=>'Abu Redis'
               ] ,
                           
                [
               'id'=>158,
               'governorate_id'=>21,
               'city_name'=>'أبو زنيمة',
               'name'=>'Abu Zenaima'
               ] ,
                           
                [
               'id'=>159,
               'governorate_id'=>21,
               'city_name'=>'رأس سدر',
               'name'=>'Ras Sidr'
               ] ,
                           
                [
               'id'=>160,
               'governorate_id'=>17,
               'city_name'=>'بني سويف',
               'name'=>'Bani Sweif'
               ] ,
                           
                [
               'id'=>161,
               'governorate_id'=>17,
               'city_name'=>'بني سويف الجديدة',
               'name'=>'Beni Suef El Gedida'
               ] ,
                           
                [
               'id'=>162,
               'governorate_id'=>17,
               'city_name'=>'الواسطى',
               'name'=>'Al Wasta'
               ] ,
                           
                [
               'id'=>163,
               'governorate_id'=>17,
               'city_name'=>'ناصر',
               'name'=>'Naser'
               ] ,
                           
                [
               'id'=>164,
               'governorate_id'=>17,
               'city_name'=>'إهناسيا',
               'name'=>'Ehnasia'
               ] ,
                           
                [
               'id'=>165,
               'governorate_id'=>17,
               'city_name'=>'ببا',
               'name'=>'beba'
               ] ,
                           
                [
               'id'=>166,
               'governorate_id'=>17,
               'city_name'=>'الفشن',
               'name'=>'Fashn'
               ] ,
                           
                [
               'id'=>167,
               'governorate_id'=>17,
               'city_name'=>'سمسطا',
               'name'=>'Somasta'
               ] ,
                           
                [
               'id'=>168,
               'governorate_id'=>7,
               'city_name'=>'الفيوم',
               'name'=>'Fayoum'
               ] ,
                           
                [
               'id'=>169,
               'governorate_id'=>7,
               'city_name'=>'الفيوم الجديدة',
               'name'=>'Fayoum El Gedida'
               ] ,
                           
                [
               'id'=>170,
               'governorate_id'=>7,
               'city_name'=>'طامية',
               'name'=>'Tamiya'
               ] ,
                           
                [
               'id'=>171,
               'governorate_id'=>7,
               'city_name'=>'سنورس',
               'name'=>'Snores'
               ] ,
                           
                [
               'id'=>172,
               'governorate_id'=>7,
               'city_name'=>'إطسا',
               'name'=>'Etsa'
               ] ,
                           
                [
               'id'=>173,
               'governorate_id'=>7,
               'city_name'=>'إبشواي',
               'name'=>'Epschway'
               ] ,
                           
                [
               'id'=>174,
               'governorate_id'=>7,
               'city_name'=>'يوسف الصديق',
               'name'=>'Yusuf El Sediaq'
               ] ,
                           
                [
               'id'=>175,
               'governorate_id'=>11,
               'city_name'=>'المنيا',
               'name'=>'Minya'
               ] ,
                           
                [
               'id'=>176,
               'governorate_id'=>11,
               'city_name'=>'المنيا الجديدة',
               'name'=>'Minya El Gedida'
               ] ,
                           
                [
               'id'=>177,
               'governorate_id'=>11,
               'city_name'=>'العدوة',
               'name'=>'El Adwa'
               ] ,
                           
                [
               'id'=>178,
               'governorate_id'=>11,
               'city_name'=>'مغاغة',
               'name'=>'Magagha'
               ] ,
                           
                [
               'id'=>179,
               'governorate_id'=>11,
               'city_name'=>'بني مزار',
               'name'=>'Bani Mazar'
               ] ,
                           
                [
               'id'=>180,
               'governorate_id'=>11,
               'city_name'=>'مطاي',
               'name'=>'Mattay'
               ] ,
                           
                [
               'id'=>181,
               'governorate_id'=>11,
               'city_name'=>'سمالوط',
               'name'=>'Samalut'
               ] ,
                           
                [
               'id'=>182,
               'governorate_id'=>11,
               'city_name'=>'المدينة الفكرية',
               'name'=>'Madinat El Fekria'
               ] ,
                           
                [
               'id'=>183,
               'governorate_id'=>11,
               'city_name'=>'ملوي',
               'name'=>'Meloy'
               ] ,
                           
                [
               'id'=>184,
               'governorate_id'=>11,
               'city_name'=>'دير مواس',
               'name'=>'Deir Mawas'
               ] ,
                           
                [
               'id'=>185,
               'governorate_id'=>16,
               'city_name'=>'أسيوط',
               'name'=>'Assiut'
               ] ,
                           
                [
               'id'=>186,
               'governorate_id'=>16,
               'city_name'=>'أسيوط الجديدة',
               'name'=>'Assiut El Gedida'
               ] ,
                           
                [
               'id'=>187,
               'governorate_id'=>16,
               'city_name'=>'ديروط',
               'name'=>'Dayrout'
               ] ,
                           
                [
               'id'=>188,
               'governorate_id'=>16,
               'city_name'=>'منفلوط',
               'name'=>'Manfalut'
               ] ,
                           
                [
               'id'=>189,
               'governorate_id'=>16,
               'city_name'=>'القوصية',
               'name'=>'Qusiya'
               ] ,
                           
                [
               'id'=>190,
               'governorate_id'=>16,
               'city_name'=>'أبنوب',
               'name'=>'Abnoub'
               ] ,
                           
                [
               'id'=>191,
               'governorate_id'=>16,
               'city_name'=>'أبو تيج',
               'name'=>'Abu Tig'
               ] ,
                           
                [
               'id'=>192,
               'governorate_id'=>16,
               'city_name'=>'الغنايم',
               'name'=>'El Ghanaim'
               ] ,
                           
                [
               'id'=>193,
               'governorate_id'=>16,
               'city_name'=>'ساحل سليم',
               'name'=>'Sahel Selim'
               ] ,
                           
                [
               'id'=>194,
               'governorate_id'=>16,
               'city_name'=>'البداري',
               'name'=>'El Badari'
               ] ,
                           
                [
               'id'=>195,
               'governorate_id'=>16,
               'city_name'=>'صدفا',
               'name'=>'Sidfa'
               ] ,
                           
                [
               'id'=>196,
               'governorate_id'=>13,
               'city_name'=>'الخارجة',
               'name'=>'El Kharga'
               ] ,
                           
                [
               'id'=>197,
               'governorate_id'=>13,
               'city_name'=>'باريس',
               'name'=>'Paris'
               ] ,
                           
                [
               'id'=>198,
               'governorate_id'=>13,
               'city_name'=>'موط',
               'name'=>'Mout'
               ] ,
                           
                [
               'id'=>199,
               'governorate_id'=>13,
               'city_name'=>'الفرافرة',
               'name'=>'Farafra'
               ] ,
                           
                [
               'id'=>200,
               'governorate_id'=>13,
               'city_name'=>'بلاط',
               'name'=>'Balat'
               ] ,
                           
                [
               'id'=>201,
               'governorate_id'=>5,
               'city_name'=>'الغردقة',
               'name'=>'Hurghada'
               ] ,
                           
                [
               'id'=>202,
               'governorate_id'=>5,
               'city_name'=>'رأس غارب',
               'name'=>'Ras Ghareb'
               ] ,
                           
                [
               'id'=>203,
               'governorate_id'=>5,
               'city_name'=>'سفاجا',
               'name'=>'Safaga'
               ] ,
                           
                [
               'id'=>204,
               'governorate_id'=>5,
               'city_name'=>'القصير',
               'name'=>'El Qusiar'
               ] ,
                           
                [
               'id'=>205,
               'governorate_id'=>5,
               'city_name'=>'مرسى علم',
               'name'=>'Marsa Alam'
               ] ,
                           
                [
               'id'=>206,
               'governorate_id'=>5,
               'city_name'=>'الشلاتين',
               'name'=>'Shalatin'
               ] ,
                           
                [
               'id'=>207,
               'governorate_id'=>5,
               'city_name'=>'حلايب',
               'name'=>'Halaib'
               ] ,
                           
                [
               'id'=>208,
               'governorate_id'=>27,
               'city_name'=>'سوهاج',
               'name'=>'Sohag'
               ] ,
                           
                [
               'id'=>209,
               'governorate_id'=>27,
               'city_name'=>'سوهاج الجديدة',
               'name'=>'Sohag El Gedida'
               ] ,
                           
                [
               'id'=>210,
               'governorate_id'=>27,
               'city_name'=>'أخميم',
               'name'=>'Akhmeem'
               ] ,
                           
                [
               'id'=>211,
               'governorate_id'=>27,
               'city_name'=>'أخميم الجديدة',
               'name'=>'Akhmim El Gedida'
               ] ,
                           
                [
               'id'=>212,
               'governorate_id'=>27,
               'city_name'=>'البلينا',
               'name'=>'Albalina'
               ] ,
                           
                [
               'id'=>213,
               'governorate_id'=>27,
               'city_name'=>'المراغة',
               'name'=>'El Maragha'
               ] ,
                           
                [
               'id'=>214,
               'governorate_id'=>27,
               'city_name'=>'المنشأة',
               'name'=>'almunsha\'a'
               ] ,
                           
                [
               'id'=>215,
               'governorate_id'=>27,
               'city_name'=>'دار السلام',
               'name'=>'Dar AISalaam'
               ] ,
                           
                [
               'id'=>216,
               'governorate_id'=>27,
               'city_name'=>'جرجا',
               'name'=>'Gerga'
               ] ,
                           
                [
               'id'=>217,
               'governorate_id'=>27,
               'city_name'=>'جهينة الغربية',
               'name'=>'Jahina Al Gharbia'
               ] ,
                           
                [
               'id'=>218,
               'governorate_id'=>27,
               'city_name'=>'ساقلته',
               'name'=>'Saqilatuh'
               ] ,
                           
                [
               'id'=>219,
               'governorate_id'=>27,
               'city_name'=>'طما',
               'name'=>'Tama'
               ] ,
                           
                [
               'id'=>220,
               'governorate_id'=>27,
               'city_name'=>'طهطا',
               'name'=>'Tahta'
               ] ,
                           
                [
               'id'=>221,
               'governorate_id'=>25,
               'city_name'=>'قنا',
               'name'=>'Qena'
               ] ,
                           
                [
               'id'=>222,
               'governorate_id'=>25,
               'city_name'=>'قنا الجديدة',
               'name'=>'New Qena'
               ] ,
                           
                [
               'id'=>223,
               'governorate_id'=>25,
               'city_name'=>'أبو تشت',
               'name'=>'Abu Tesht'
               ] ,
                           
                [
               'id'=>224,
               'governorate_id'=>25,
               'city_name'=>'نجع حمادي',
               'name'=>'Nag Hammadi'
               ] ,
                           
                [
               'id'=>225,
               'governorate_id'=>25,
               'city_name'=>'دشنا',
               'name'=>'Deshna'
               ] ,
                           
                [
               'id'=>226,
               'governorate_id'=>25,
               'city_name'=>'الوقف',
               'name'=>'Alwaqf'
               ] ,
                           
                [
               'id'=>227,
               'governorate_id'=>25,
               'city_name'=>'قفط',
               'name'=>'Qaft'
               ] ,
                           
                [
               'id'=>228,
               'governorate_id'=>25,
               'city_name'=>'نقادة',
               'name'=>'Naqada'
               ] ,
                           
                [
               'id'=>229,
               'governorate_id'=>25,
               'city_name'=>'فرشوط',
               'name'=>'Farshout'
               ] ,
                           
                [
               'id'=>230,
               'governorate_id'=>25,
               'city_name'=>'قوص',
               'name'=>'Quos'
               ] ,
                           
                [
               'id'=>231,
               'governorate_id'=>24,
               'city_name'=>'الأقصر',
               'name'=>'Luxor'
               ] ,
                           
                [
               'id'=>232,
               'governorate_id'=>24,
               'city_name'=>'الأقصر الجديدة',
               'name'=>'New Luxor'
               ] ,
                           
                [
               'id'=>233,
               'governorate_id'=>24,
               'city_name'=>'إسنا',
               'name'=>'Esna'
               ] ,
                           
                [
               'id'=>234,
               'governorate_id'=>24,
               'city_name'=>'طيبة الجديدة',
               'name'=>'New Tiba'
               ] ,
                           
                [
               'id'=>235,
               'governorate_id'=>24,
               'city_name'=>'الزينية',
               'name'=>'Al ziynia'
               ] ,
                           
                [
               'id'=>236,
               'governorate_id'=>24,
               'city_name'=>'البياضية',
               'name'=>'Al Bayadieh'
               ] ,
                           
                [
               'id'=>237,
               'governorate_id'=>24,
               'city_name'=>'القرنة',
               'name'=>'Al Qarna'
               ] ,
                           
                [
               'id'=>238,
               'governorate_id'=>24,
               'city_name'=>'أرمنت',
               'name'=>'Armant'
               ] ,
                           
                [
               'id'=>239,
               'governorate_id'=>24,
               'city_name'=>'الطود',
               'name'=>'Al Tud'
               ] ,
                           
                [
               'id'=>240,
               'governorate_id'=>15,
               'city_name'=>'أسوان',
               'name'=>'Aswan'
               ] ,
                           
                [
               'id'=>241,
               'governorate_id'=>15,
               'city_name'=>'أسوان الجديدة',
               'name'=>'Aswan El Gedida'
               ] ,
                           
                [
               'id'=>242,
               'governorate_id'=>15,
               'city_name'=>'دراو',
               'name'=>'Drau'
               ] ,
                           
                [
               'id'=>243,
               'governorate_id'=>15,
               'city_name'=>'كوم أمبو',
               'name'=>'Kom Ombo'
               ] ,
                           
                [
               'id'=>244,
               'governorate_id'=>15,
               'city_name'=>'نصر النوبة',
               'name'=>'Nasr Al Nuba'
               ] ,
                           
                [
               'id'=>245,
               'governorate_id'=>15,
               'city_name'=>'كلابشة',
               'name'=>'Kalabsha'
               ] ,
                           
                [
               'id'=>246,
               'governorate_id'=>15,
               'city_name'=>'إدفو',
               'name'=>'Edfu'
               ] ,
                           
                [
               'id'=>247,
               'governorate_id'=>15,
               'city_name'=>'الرديسية',
               'name'=>'Al-Radisiyah'
               ] ,
                           
                [
               'id'=>248,
               'governorate_id'=>15,
               'city_name'=>'البصيلية',
               'name'=>'Al Basilia'
               ] ,
                           
                [
               'id'=>249,
               'governorate_id'=>15,
               'city_name'=>'السباعية',
               'name'=>'Al Sibaeia'
               ] ,
                           
                [
               'id'=>250,
               'governorate_id'=>15,
               'city_name'=>'ابوسمبل السياحية',
               'name'=>'Abo Simbl Al Siyahia'
               ] ,   
       ];

       $citiesData = [];
       foreach($cities as $city) {
           $citiesData[] = [
               'name' => $city['name'],
               'governorate_id' => $city['governorate_id']
           ];
       }

       \App\Models\City::insert($citiesData);
    }
}
