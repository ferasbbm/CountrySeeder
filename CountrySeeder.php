<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

/**
 * class CountrySeeder
 *
 * @author  feras <feras.bbm@gmail.com>
 */
class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @author  feras
     */
    public function run():void
    {

        $countries = [
            [

                'id' => 1,

                'prefix' => 'AF',

                'name' => ['en' => 'Afghanistan', 'ar' => 'أفغانستان'],

                'phone_code' => 93

            ],

            [

                'id' => 2,

                'prefix' => 'AL',

                'name' => ['en' => 'Albania', 'ar' => 'ألبانيا'],

                'phone_code' => 355

            ],

            [

                'id' => 3,

                'prefix' => 'DZ',

                'name' => ['en' => 'Algeria', 'ar' => 'الجزائر'],

                'phone_code' => 213

            ],

            [

                'id' => 4,

                'prefix' => 'AS',

                'name' => ['en' => 'American Samoa', 'ar' => 'ساموا الأمريكية'],

                'phone_code' => 1684

            ],

            [

                'id' => 5,

                'prefix' => 'AD',

                'name' => ['en' => 'Andorra', 'ar' => 'أندورا'],

                'phone_code' => 376

            ],

            [

                'id' => 6,

                'prefix' => 'AO',

                'name' => ['en' => 'Angola', 'ar' => 'أنغولا'],

                'phone_code' => 244

            ],

            [

                'id' => 7,

                'prefix' => 'AI',

                'name' => ['en' => 'Anguilla', 'ar' => 'أنغيلا'],

                'phone_code' => 1264

            ],

            [

                'id' => 8,

                'prefix' => 'AQ',

                'name' => ['en' => 'Antarctica', 'ar' => 'القارة القطبية الجنوبية'],

                'phone_code' => 0

            ],

            [

                'id' => 9,

                'prefix' => 'AG',

                'name' => ['en' => 'Antigua And Barbuda', 'ar' => 'أنتيغوا وبربودا'],

                'phone_code' => 1268

            ],

            [

                'id' => 10,

                'prefix' => 'AR',

                'name' => ['en' => 'Argentina', 'ar' => 'الأرجنتين'],

                'phone_code' => 54

            ],

            [

                'id' => 11,

                'prefix' => 'AM',

                'name' => ['en' => 'Armenia', 'ar' => 'أرمينيا'],

                'phone_code' => 374

            ],

            [

                'id' => 12,

                'prefix' => 'AW',

                'name' => ['en' => 'Aruba', 'ar' => 'أروبا'],

                'phone_code' => 297

            ],

            [

                'id' => 13,

                'prefix' => 'AU',

                'name' => ['en' => 'Australia', 'ar' => 'أستراليا'],

                'phone_code' => 61

            ],

            [

                'id' => 14,

                'prefix' => 'AT',

                'name' => ['en' => 'Austria', 'ar' => 'النمسا'],

                'phone_code' => 43

            ],

            [

                'id' => 15,

                'prefix' => 'AZ',

                'name' => ['en' => 'Azerbaijan', 'ar' => 'أذربيجان'],

                'phone_code' => 994

            ],

            [

                'id' => 16,

                'prefix' => 'BS',

                'name' => ['en' => 'Bahamas The', 'ar' => 'جزر البهاما'],

                'phone_code' => 1242

            ],

            [

                'id' => 17,

                'prefix' => 'BH',

                'name' => ['en' => 'Bahrain', 'ar' => 'البحرين'],

                'phone_code' => 973

            ],

            [

                'id' => 18,

                'prefix' => 'BD',

                'name' => ['en' => 'Bangladesh', 'ar' => 'بنغلاديش'],

                'phone_code' => 880

            ],

            [

                'id' => 19,

                'prefix' => 'BB',

                'name' => ['en' => 'Barbados', 'ar' => 'بربادوس'],

                'phone_code' => 1246

            ],

            [

                'id' => 20,

                'prefix' => 'BY',

                'name' => ['en' => 'Belarus', 'ar' => 'بيلاروسيا'],

                'phone_code' => 375

            ],

            [

                'id' => 21,

                'prefix' => 'BE',

                'name' => ['en' => 'Belgium', 'ar' => 'بلجيكا'],

                'phone_code' => 32

            ],

            [

                'id' => 22,

                'prefix' => 'BZ',

                'name' => ['en' => 'Belize', 'ar' => 'بليز'],

                'phone_code' => 501

            ],

            [

                'id' => 23,

                'prefix' => 'BJ',

                'name' => ['en' => 'Benin', 'ar' => 'بنين'],

                'phone_code' => 229

            ],

            [

                'id' => 24,

                'prefix' => 'BM',

                'name' => ['en' => 'Bermuda', 'ar' => 'برمودا'],

                'phone_code' => 1441

            ],

            [

                'id' => 25,

                'prefix' => 'BT',

                'name' => ['en' => 'Bhutan', 'ar' => 'بوتان'],

                'phone_code' => 975

            ],

            [

                'id' => 26,

                'prefix' => 'BO',

                'name' => ['en' => 'Bolivia', 'ar' => 'بوليفيا'],

                'phone_code' => 591

            ],

            [

                'id' => 27,

                'prefix' => 'BA',

                'name' => ['en' => 'Bosnia and Herzegovina', 'ar' => 'البوسنة والهرسك'],

                'phone_code' => 387

            ],

            [

                'id' => 28,

                'prefix' => 'BW',

                'name' => ['en' => 'Botswana', 'ar' => 'بوتسوانا'],

                'phone_code' => 267

            ],

            [

                'id' => 29,

                'prefix' => 'BV',

                'name' => ['en' => 'Bouvet Island', 'ar' => 'جزيرة بوفيت'],

                'phone_code' => 0

            ],

            [

                'id' => 30,

                'prefix' => 'BR',

                'name' => ['en' => 'Brazil', 'ar' => 'البرازيل'],

                'phone_code' => 55

            ],

            [

                'id' => 31,

                'prefix' => 'IO',

                'name' => ['en' => 'British Indian Ocean Territory', 'ar' => 'إقليم المحيط البريطاني الهندي'],

                'phone_code' => 246

            ],

            [

                'id' => 32,

                'prefix' => 'BN',

                'name' => ['en' => 'Brunei', 'ar' => 'بروناي'],

                'phone_code' => 673

            ],

            [

                'id' => 33,

                'prefix' => 'BG',

                'name' => ['en' => 'Bulgaria', 'ar' => 'بلغاريا'],

                'phone_code' => 359

            ],

            [

                'id' => 34,

                'prefix' => 'BF',

                'name' => ['en' => 'Burkina Faso', 'ar' => 'بوركينا فاسو'],

                'phone_code' => 226

            ],

            [

                'id' => 35,

                'prefix' => 'BI',

                'name' => ['en' => 'Burundi', 'ar' => 'بوروندي'],

                'phone_code' => 257

            ],

            [

                'id' => 36,

                'prefix' => 'KH',

                'name' => ['en' => 'Cambodia', 'ar' => 'كمبوديا'],

                'phone_code' => 855

            ],

            [

                'id' => 37,

                'prefix' => 'CM',

                'name' => ['en' => 'Cameroon', 'ar' => 'الكاميرون'],

                'phone_code' => 237

            ],

            [

                'id' => 38,

                'prefix' => 'CA',

                'name' => ['en' => 'Canada', 'ar' => 'كندا'],

                'phone_code' => 1

            ],

            [

                'id' => 39,

                'prefix' => 'CV',

                'name' => ['en' => 'Cape Verde', 'ar' => 'الرأس الأخضر'],

                'phone_code' => 238

            ],

            [

                'id' => 40,

                'prefix' => 'KY',

                'name' => ['en' => 'Cayman Islands', 'ar' => 'جزر كايمان'],

                'phone_code' => 1345

            ],

            [

                'id' => 41,

                'prefix' => 'CF',

                'name' => ['en' => 'Central African Republic', 'ar' => 'جمهورية افريقيا الوسطى'],

                'phone_code' => 236

            ],

            [

                'id' => 42,

                'prefix' => 'TD',

                'name' => ['en' => 'Chad', 'ar' => 'تشاد'],

                'phone_code' => 235

            ],

            [

                'id' => 43,

                'prefix' => 'CL',

                'name' => ['en' => 'Chile', 'ar' => 'تشيلي'],

                'phone_code' => 56

            ],

            [

                'id' => 44,

                'prefix' => 'CN',

                'name' => ['en' => 'China', 'ar' => 'الصين'],

                'phone_code' => 86

            ],

            [

                'id' => 45,

                'prefix' => 'CX',

                'name' => ['en' => 'Christmas Island', 'ar' => 'جزيرة الكريسماس'],

                'phone_code' => 61

            ],

            [

                'id' => 46,

                'prefix' => 'CC',

                'name' => ['en' => 'Cocos (Keeling) Islands', 'ar' => 'جزر كوكوس (كيلينغ)'],

                'phone_code' => 672

            ],

            [

                'id' => 47,

                'prefix' => 'CO',

                'name' => ['en' => 'Colombia', 'ar' => 'كولومبيا'],

                'phone_code' => 57

            ],

            [

                'id' => 48,

                'prefix' => 'KM',

                'name' => ['en' => 'Comoros', 'ar' => 'جزر القمر'],

                'phone_code' => 269

            ],

            [

                'id' => 49,

                'prefix' => 'CG',

                'name' => ['en' => 'Republic Of The Congo', 'ar' => 'جمهورية الكونغو'],

                'phone_code' => 242

            ],

            [

                'id' => 50,

                'prefix' => 'CD',

                'name' => ['en' => 'Democratic Republic Of The Congo', 'ar' => 'جمهورية الكونغو الديموقراطية'],

                'phone_code' => 242

            ],

            [

                'id' => 51,

                'prefix' => 'CK',

                'name' => ['en' => 'Cook Islands', 'ar' => 'جزر كوك'],

                'phone_code' => 682

            ],

            [

                'id' => 52,

                'prefix' => 'CR',

                'name' => ['en' => 'Costa Rica', 'ar' => 'كوستا ريكا'],

                'phone_code' => 506

            ],

            [

                'id' => 53,

                'prefix' => 'CI',

                'name' => ['en' => 'Cote D Ivoire (Ivory Coast)', 'ar' => 'كوت ديفوار (ساحل العاج)'],

                'phone_code' => 225

            ],

            [

                'id' => 54,

                'prefix' => 'HR',

                'name' => ['en' => 'Croatia (Hrvatska)', 'ar' => 'كرواتيا (هرفاتسكا)'],

                'phone_code' => 385

            ],

            [

                'id' => 55,

                'prefix' => 'CU',

                'name' => ['en' => 'Cuba', 'ar' => 'كوبا'],

                'phone_code' => 53

            ],

            [

                'id' => 56,

                'prefix' => 'CY',

                'name' => ['en' => 'Cyprus', 'ar' => 'قبرص'],

                'phone_code' => 357

            ],

            [

                'id' => 57,

                'prefix' => 'CZ',

                'name' => ['en' => 'Czech Republic', 'ar' => 'جمهورية التشيك'],

                'phone_code' => 420

            ],

            [

                'id' => 58,

                'prefix' => 'DK',

                'name' => ['en' => 'Denmark', 'ar' => 'الدنمارك'],

                'phone_code' => 45

            ],

            [

                'id' => 59,

                'prefix' => 'DJ',

                'name' => ['en' => 'Djibouti', 'ar' => 'جيبوتي'],

                'phone_code' => 253

            ],

            [

                'id' => 60,

                'prefix' => 'DM',

                'name' => ['en' => 'Dominica', 'ar' => 'دومينيكا'],

                'phone_code' => 1767

            ],

            [

                'id' => 61,

                'prefix' => 'DO',

                'name' => ['en' => 'Dominican Republic', 'ar' => 'جمهورية الدومينيكان'],

                'phone_code' => 1809

            ],

            [

                'id' => 62,

                'prefix' => 'TP',

                'name' => ['en' => 'East Timor', 'ar' => 'تيمور الشرقية'],

                'phone_code' => 670

            ],

            [

                'id' => 63,

                'prefix' => 'EC',

                'name' => ['en' => 'Ecuador', 'ar' => 'الاكوادور'],

                'phone_code' => 593

            ],

            [

                'id' => 64,

                'prefix' => 'EG',

                'name' => ['en' => 'Egypt', 'ar' => 'مصر'],

                'phone_code' => 20

            ],

            [

                'id' => 65,

                'prefix' => 'SV',

                'name' => ['en' => 'El Salvador', 'ar' => 'السلفادور'],

                'phone_code' => 503

            ],

            [

                'id' => 66,

                'prefix' => 'GQ',

                'name' => ['en' => 'Equatorial Guinea', 'ar' => 'غينيا الإستوائية'],

                'phone_code' => 240

            ],

            [

                'id' => 67,

                'prefix' => 'ER',

                'name' => ['en' => 'Eritrea', 'ar' => 'إريتريا'],

                'phone_code' => 291

            ],

            [

                'id' => 68,

                'prefix' => 'EE',

                'name' => ['en' => 'Estonia', 'ar' => 'إستونيا'],

                'phone_code' => 372

            ],

            [

                'id' => 69,

                'prefix' => 'ET',

                'name' => ['en' => 'Ethiopia', 'ar' => 'أثيوبيا'],

                'phone_code' => 251

            ],

            [

                'id' => 70,

                'prefix' => 'XA',

                'name' => ['en' => 'External Territories of Australia', 'ar' => 'الأقاليم الخارجية لأستراليا'],

                'phone_code' => 61

            ],

            [

                'id' => 71,

                'prefix' => 'FK',

                'name' => ['en' => 'Falkland Islands', 'ar' => 'جزر فوكلاند'],

                'phone_code' => 500

            ],

            [

                'id' => 72,

                'prefix' => 'FO',

                'name' => ['en' => 'Faroe Islands', 'ar' => 'جزر فاروس'],

                'phone_code' => 298

            ],

            [

                'id' => 73,

                'prefix' => 'FJ',

                'name' => ['en' => 'Fiji Islands', 'ar' => 'جزر فيجي'],

                'phone_code' => 679

            ],

            [

                'id' => 74,

                'prefix' => 'FI',

                'name' => ['en' => 'Finland', 'ar' => 'فنلندا'],

                'phone_code' => 358

            ],

            [

                'id' => 75,

                'prefix' => 'FR',

                'name' => ['en' => 'France', 'ar' => 'فرنسا'],

                'phone_code' => 33

            ],

            [

                'id' => 76,

                'prefix' => 'GF',

                'name' => ['en' => 'French Guiana', 'ar' => 'غيانا الفرنسية'],

                'phone_code' => 594

            ],

            [

                'id' => 77,

                'prefix' => 'PF',

                'name' => ['en' => 'French Polynesia', 'ar' => 'بولينيزيا الفرنسية'],

                'phone_code' => 689

            ],

            [

                'id' => 78,

                'prefix' => 'TF',

                'name' => ['en' => 'French Southern Territories', 'ar' => 'المناطق الجنوبية لفرنسا'],

                'phone_code' => 0

            ],

            [

                'id' => 79,

                'prefix' => 'GA',

                'name' => ['en' => 'Gabon', 'ar' => 'الجابون'],

                'phone_code' => 241

            ],

            [

                'id' => 80,

                'prefix' => 'GM',

                'name' => ['en' => 'Gambia The', 'ar' => 'غامبيا'],

                'phone_code' => 220

            ],

            [

                'id' => 81,

                'prefix' => 'GE',

                'name' => ['en' => 'Georgia', 'ar' => 'جورجيا'],

                'phone_code' => 995

            ],

            [

                'id' => 82,

                'prefix' => 'DE',

                'name' => ['en' => 'Germany', 'ar' => 'ألمانيا'],

                'phone_code' => 49

            ],

            [

                'id' => 83,

                'prefix' => 'GH',

                'name' => ['en' => 'Ghana', 'ar' => 'غانا'],

                'phone_code' => 233

            ],

            [

                'id' => 84,

                'prefix' => 'GI',

                'name' => ['en' => 'Gibraltar', 'ar' => 'جبل طارق'],

                'phone_code' => 350

            ],

            [

                'id' => 85,

                'prefix' => 'GR',

                'name' => ['en' => 'Greece', 'ar' => 'اليونان'],

                'phone_code' => 30

            ],

            [

                'id' => 86,

                'prefix' => 'GL',

                'name' => ['en' => 'Greenland', 'ar' => 'الأرض الخضراء'],

                'phone_code' => 299

            ],

            [

                'id' => 87,

                'prefix' => 'GD',

                'name' => ['en' => 'Grenada', 'ar' => 'غرينادا'],

                'phone_code' => 1473

            ],

            [

                'id' => 88,

                'prefix' => 'GP',

                'name' => ['en' => 'Guadeloupe', 'ar' => 'جوادلوب'],

                'phone_code' => 590

            ],

            [

                'id' => 89,

                'prefix' => 'GU',

                'name' => ['en' => 'Guam', 'ar' => 'غوام'],

                'phone_code' => 1671

            ],

            [

                'id' => 90,

                'prefix' => 'GT',

                'name' => ['en' => 'Guatemala', 'ar' => 'غواتيمالا'],

                'phone_code' => 502

            ],

            [

                'id' => 91,

                'prefix' => 'XU',

                'name' => ['en' => 'Guernsey and Alderney', 'ar' => 'غيرنزي وألدرني'],

                'phone_code' => 44

            ],

            [

                'id' => 92,

                'prefix' => 'GN',

                'name' => ['en' => 'Guinea', 'ar' => 'غينيا'],

                'phone_code' => 224

            ],

            [

                'id' => 93,

                'prefix' => 'GW',

                'name' => ['en' => 'Guinea-Bissau', 'ar' => 'غينيا بيساو'],

                'phone_code' => 245

            ],

            [

                'id' => 94,

                'prefix' => 'GY',

                'name' => ['en' => 'Guyana', 'ar' => 'غيانا'],

                'phone_code' => 592

            ],

            [

                'id' => 95,

                'prefix' => 'HT',

                'name' => ['en' => 'Haiti', 'ar' => 'هايتي'],

                'phone_code' => 509

            ],

            [

                'id' => 96,

                'prefix' => 'HM',

                'name' => ['en' => 'Heard and McDonald Islands', 'ar' => 'جزر هيرد وماكدونالد'],

                'phone_code' => 0

            ],

            [

                'id' => 97,

                'prefix' => 'HN',

                'name' => ['en' => 'Honduras', 'ar' => 'هندوراس'],

                'phone_code' => 504

            ],

            [

                'id' => 98,

                'prefix' => 'HK',

                'name' => ['en' => 'Hong Kong S.A.R.', 'ar' => 'هونج كونج S.A.R.'],

                'phone_code' => 852

            ],

            [

                'id' => 99,

                'prefix' => 'HU',

                'name' => ['en' => 'Hungary', 'ar' => 'هنغاريا'],

                'phone_code' => 36

            ],

            [

                'id' => 100,

                'prefix' => 'IS',

                'name' => ['en' => 'Iceland', 'ar' => 'أيسلندا'],

                'phone_code' => 354

            ],

            [

                'id' => 101,

                'prefix' => 'IN',

                'name' => ['en' => 'India', 'ar' => 'الهند'],

                'phone_code' => 91

            ],

            [

                'id' => 102,

                'prefix' => 'id',

                'name' => ['en' => 'Indonesia', 'ar' => 'إندونيسيا'],

                'phone_code' => 62

            ],

            [

                'id' => 103,

                'prefix' => 'IR',

                'name' => ['en' => 'Iran', 'ar' => 'إيران'],

                'phone_code' => 98

            ],

            [

                'id' => 104,

                'prefix' => 'IQ',

                'name' => ['en' => 'Iraq', 'ar' => 'العراق'],

                'phone_code' => 964

            ],

            [

                'id' => 105,

                'prefix' => 'IE',

                'name' => ['en' => 'Ireland', 'ar' => 'أيرلندا'],

                'phone_code' => 353

            ],

            [

                'id' => 106,

                'prefix' => 'IL',

                'name' => ['en' => 'Israel', 'ar' => 'إسرائيل'],

                'phone_code' => 972

            ],

            [

                'id' => 107,

                'prefix' => 'IT',

                'name' => ['en' => 'Italy', 'ar' => 'إيطاليا'],

                'phone_code' => 39

            ],

            [

                'id' => 108,

                'prefix' => 'JM',

                'name' => ['en' => 'Jamaica', 'ar' => 'جامايكا'],

                'phone_code' => 1876

            ],

            [

                'id' => 109,

                'prefix' => 'JP',

                'name' => ['en' => 'Japan', 'ar' => 'اليابان'],

                'phone_code' => 81

            ],

            [

                'id' => 110,

                'prefix' => 'XJ',

                'name' => ['en' => 'Jersey', 'ar' => 'جيرسي'],

                'phone_code' => 44

            ],

            [

                'id' => 111,

                'prefix' => 'JO',

                'name' => ['en' => 'Jordan', 'ar' => 'الأردن'],

                'phone_code' => 962

            ],

            [

                'id' => 112,

                'prefix' => 'KZ',

                'name' => ['en' => 'Kazakhstan', 'ar' => 'كازاخستان'],

                'phone_code' => 7

            ],

            [

                'id' => 113,

                'prefix' => 'KE',

                'name' => ['en' => 'Kenya', 'ar' => 'كينيا'],

                'phone_code' => 254

            ],

            [

                'id' => 114,

                'prefix' => 'KI',

                'name' => ['en' => 'Kiribati', 'ar' => 'كيريباتي'],

                'phone_code' => 686

            ],

            [

                'id' => 115,

                'prefix' => 'KP',

                'name' => ['en' => 'Korea North', 'ar' => 'كوريا الشمالية'],

                'phone_code' => 850

            ],

            [

                'id' => 116,

                'prefix' => 'KR',

                'name' => ['en' => 'Korea South', 'ar' => 'كوريا، جنوب'],

                'phone_code' => 82

            ],

            [

                'id' => 117,

                'prefix' => 'KW',

                'name' => ['en' => 'Kuwait', 'ar' => 'الكويت'],

                'phone_code' => 965

            ],

            [

                'id' => 118,

                'prefix' => 'KG',

                'name' => ['en' => 'Kyrgyzstan', 'ar' => 'قيرغيزستان'],

                'phone_code' => 996

            ],

            [

                'id' => 119,

                'prefix' => 'LA',

                'name' => ['en' => 'Laos', 'ar' => 'لاوس'],

                'phone_code' => 856

            ],

            [

                'id' => 120,

                'prefix' => 'LV',

                'name' => ['en' => 'Latvia', 'ar' => 'لاتفيا'],

                'phone_code' => 371

            ],

            [

                'id' => 121,

                'prefix' => 'LB',

                'name' => ['en' => 'Lebanon', 'ar' => 'لبنان'],

                'phone_code' => 961

            ],

            [

                'id' => 122,

                'prefix' => 'LS',

                'name' => ['en' => 'Lesotho', 'ar' => 'ليسوتو'],

                'phone_code' => 266

            ],

            [

                'id' => 123,

                'prefix' => 'LR',

                'name' => ['en' => 'Liberia', 'ar' => 'ليبيريا'],

                'phone_code' => 231

            ],

            [

                'id' => 124,

                'prefix' => 'LY',

                'name' => ['en' => 'Libya', 'ar' => 'ليبيا'],

                'phone_code' => 218

            ],

            [

                'id' => 125,

                'prefix' => 'LI',

                'name' => ['en' => 'Liechtenstein', 'ar' => 'ليختنشتاين'],

                'phone_code' => 423

            ],

            [

                'id' => 126,

                'prefix' => 'LT',

                'name' => ['en' => 'Lithuania', 'ar' => 'ليتوانيا'],

                'phone_code' => 370

            ],

            [

                'id' => 127,

                'prefix' => 'LU',

                'name' => ['en' => 'Luxembourg', 'ar' => 'لوكسمبورغ'],

                'phone_code' => 352

            ],

            [

                'id' => 128,

                'prefix' => 'MO',

                'name' => ['en' => 'Macau S.A.R.', 'ar' => 'ماكاو ش.'],

                'phone_code' => 853

            ],

            [

                'id' => 129,

                'prefix' => 'MK',

                'name' => ['en' => 'Macedonia', 'ar' => 'مقدونيا'],

                'phone_code' => 389

            ],

            [

                'id' => 130,

                'prefix' => 'MG',

                'name' => ['en' => 'Madagascar', 'ar' => 'مدغشقر'],

                'phone_code' => 261

            ],

            [

                'id' => 131,

                'prefix' => 'MW',

                'name' => ['en' => 'Malawi', 'ar' => 'ملاوي'],

                'phone_code' => 265

            ],

            [

                'id' => 132,

                'prefix' => 'MY',

                'name' => ['en' => 'Malaysia', 'ar' => 'ماليزيا'],

                'phone_code' => 60

            ],

            [

                'id' => 133,

                'prefix' => 'MV',

                'name' => ['en' => 'Maldives', 'ar' => 'جزر المالديف'],

                'phone_code' => 960

            ],

            [

                'id' => 134,

                'prefix' => 'ML',

                'name' => ['en' => 'Mali', 'ar' => 'مالي'],

                'phone_code' => 223

            ],

            [

                'id' => 135,

                'prefix' => 'MT',

                'name' => ['en' => 'Malta', 'ar' => 'مالطا'],

                'phone_code' => 356

            ],

            [

                'id' => 136,

                'prefix' => 'XM',

                'name' => ['en' => 'Man (Isle of)', 'ar' => 'رجل (جزيرة)'],

                'phone_code' => 44

            ],

            [

                'id' => 137,

                'prefix' => 'MH',

                'name' => ['en' => 'Marshall Islands', 'ar' => 'جزر مارشال'],

                'phone_code' => 692

            ],

            [

                'id' => 138,

                'prefix' => 'MQ',

                'name' => ['en' => 'Martinique', 'ar' => 'مارتينيك'],

                'phone_code' => 596

            ],

            [

                'id' => 139,

                'prefix' => 'MR',

                'name' => ['en' => 'Mauritania', 'ar' => 'موريتانيا'],

                'phone_code' => 222

            ],

            [

                'id' => 140,

                'prefix' => 'MU',

                'name' => ['en' => 'Mauritius', 'ar' => 'موريشيوس'],

                'phone_code' => 230

            ],

            [

                'id' => 141,

                'prefix' => 'YT',

                'name' => ['en' => 'Mayotte', 'ar' => 'مايوت'],

                'phone_code' => 269

            ],

            [

                'id' => 142,

                'prefix' => 'MX',

                'name' => ['en' => 'Mexico', 'ar' => 'المكسيك'],

                'phone_code' => 52

            ],

            [

                'id' => 143,

                'prefix' => 'FM',

                'name' => ['en' => 'Micronesia', 'ar' => 'ميكرونيزيا'],

                'phone_code' => 691

            ],

            [

                'id' => 144,

                'prefix' => 'MD',

                'name' => ['en' => 'Moldova', 'ar' => 'مولدوفا'],

                'phone_code' => 373

            ],

            [

                'id' => 145,

                'prefix' => 'MC',

                'name' => ['en' => 'Monaco', 'ar' => 'موناكو'],

                'phone_code' => 377

            ],

            [

                'id' => 146,

                'prefix' => 'MN',

                'name' => ['en' => 'Mongolia', 'ar' => 'منغوليا'],

                'phone_code' => 976

            ],

            [

                'id' => 147,

                'prefix' => 'MS',

                'name' => ['en' => 'Montserrat', 'ar' => 'مونتسيرات'],

                'phone_code' => 1664

            ],

            [

                'id' => 148,

                'prefix' => 'MA',

                'name' => ['en' => 'Morocco', 'ar' => 'المغرب'],

                'phone_code' => 212

            ],

            [

                'id' => 149,

                'prefix' => 'MZ',

                'name' => ['en' => 'Mozambique', 'ar' => 'موزمبيق'],

                'phone_code' => 258

            ],

            [

                'id' => 150,

                'prefix' => 'MM',

                'name' => ['en' => 'Myanmar', 'ar' => 'ميانمار'],

                'phone_code' => 95

            ],

            [

                'id' => 151,

                'prefix' => 'NA',

                'name' => ['en' => 'Namibia', 'ar' => 'ناميبيا'],

                'phone_code' => 264

            ],

            [

                'id' => 152,

                'prefix' => 'NR',

                'name' => ['en' => 'Nauru', 'ar' => 'ناورو'],

                'phone_code' => 674

            ],

            [

                'id' => 153,

                'prefix' => 'NP',

                'name' => ['en' => 'Nepal', 'ar' => 'نيبال'],

                'phone_code' => 977

            ],

            [

                'id' => 154,

                'prefix' => 'AN',

                'name' => ['en' => 'Netherlands Antilles', 'ar' => 'جزر الأنتيل الهولندية'],

                'phone_code' => 599

            ],

            [

                'id' => 155,

                'prefix' => 'NL',

                'name' => ['en' => 'Netherlands The', 'ar' => 'هولندا'],

                'phone_code' => 31

            ],

            [

                'id' => 156,

                'prefix' => 'NC',

                'name' => ['en' => 'New Caledonia', 'ar' => 'كاليدونيا الجديدة'],

                'phone_code' => 687

            ],

            [

                'id' => 157,

                'prefix' => 'NZ',

                'name' => ['en' => 'New Zealand', 'ar' => 'نيوزيلاندا'],

                'phone_code' => 64

            ],

            [

                'id' => 158,

                'prefix' => 'NI',

                'name' => ['en' => 'Nicaragua', 'ar' => 'نيكاراغوا'],

                'phone_code' => 505

            ],

            [

                'id' => 159,

                'prefix' => 'NE',

                'name' => ['en' => 'Niger', 'ar' => 'النيجر'],

                'phone_code' => 227

            ],

            [

                'id' => 160,

                'prefix' => 'NG',

                'name' => ['en' => 'Nigeria', 'ar' => 'نيجيريا'],

                'phone_code' => 234

            ],

            [

                'id' => 161,

                'prefix' => 'NU',

                'name' => ['en' => 'Niue', 'ar' => 'نيوي'],

                'phone_code' => 683

            ],

            [

                'id' => 162,

                'prefix' => 'NF',

                'name' => ['en' => 'Norfolk Island', 'ar' => 'جزيرة نورفولك'],

                'phone_code' => 672

            ],

            [

                'id' => 163,

                'prefix' => 'MP',

                'name' => ['en' => 'Northern Mariana Islands', 'ar' => 'جزر مريانا الشمالية'],

                'phone_code' => 1670

            ],

            [

                'id' => 164,

                'prefix' => 'NO',

                'name' => ['en' => 'Norway', 'ar' => 'النرويج'],

                'phone_code' => 47

            ],

            [

                'id' => 165,

                'prefix' => 'OM',

                'name' => ['en' => 'Oman', 'ar' => 'سلطنة عمان'],

                'phone_code' => 968

            ],

            [

                'id' => 166,

                'prefix' => 'PK',

                'name' => ['en' => 'Pakistan', 'ar' => 'باكستان'],

                'phone_code' => 92

            ],

            [

                'id' => 167,

                'prefix' => 'PW',

                'name' => ['en' => 'Palau', 'ar' => 'بالاو'],

                'phone_code' => 680

            ],

            [

                'id' => 168,

                'prefix' => 'PS',

                'name' => ['en' => 'Palestinian Territory Occupied', 'ar' => 'الأراضي الفلسطينية المحتلة'],

                'phone_code' => 970

            ],

            [

                'id' => 169,

                'prefix' => 'PA',

                'name' => ['en' => 'Panama', 'ar' => 'بنما'],

                'phone_code' => 507

            ],

            [

                'id' => 170,

                'prefix' => 'PG',

                'name' => ['en' => 'Papua new Guinea', 'ar' => 'بابوا غينيا الجديدة'],

                'phone_code' => 675

            ],

            [

                'id' => 171,

                'prefix' => 'PY',

                'name' => ['en' => 'Paraguay', 'ar' => 'باراغواي'],

                'phone_code' => 595

            ],

            [

                'id' => 172,

                'prefix' => 'PE',

                'name' => ['en' => 'Peru', 'ar' => 'بيرو'],

                'phone_code' => 51

            ],

            [

                'id' => 173,

                'prefix' => 'PH',

                'name' => ['en' => 'Philippines', 'ar' => 'فيلبيني'],

                'phone_code' => 63

            ],

            [

                'id' => 174,

                'prefix' => 'PN',

                'name' => ['en' => 'Pitcairn Island', 'ar' => 'جزيرة بيتكيرن'],

                'phone_code' => 0

            ],

            [

                'id' => 175,

                'prefix' => 'PL',

                'name' => ['en' => 'Poland', 'ar' => 'بولندا'],

                'phone_code' => 48

            ],

            [

                'id' => 176,

                'prefix' => 'PT',

                'name' => ['en' => 'Portugal', 'ar' => 'البرتغال'],

                'phone_code' => 351

            ],

            [

                'id' => 177,

                'prefix' => 'PR',

                'name' => ['en' => 'Puerto Rico', 'ar' => 'بورتوريكو'],

                'phone_code' => 1787

            ],

            [

                'id' => 178,

                'prefix' => 'QA',

                'name' => ['en' => 'Qatar', 'ar' => 'دولة قطر'],

                'phone_code' => 974

            ],

            [

                'id' => 179,

                'prefix' => 'RE',

                'name' => ['en' => 'Reunion', 'ar' => 'جمع شمل'],

                'phone_code' => 262

            ],

            [

                'id' => 180,

                'prefix' => 'RO',

                'name' => ['en' => 'Romania', 'ar' => 'رومانيا'],

                'phone_code' => 40

            ],

            [

                'id' => 181,

                'prefix' => 'RU',

                'name' => ['en' => 'Russia', 'ar' => 'روسيا'],

                'phone_code' => 70

            ],

            [

                'id' => 182,

                'prefix' => 'RW',

                'name' => ['en' => 'Rwanda', 'ar' => 'رواندا'],

                'phone_code' => 250

            ],

            [

                'id' => 183,

                'prefix' => 'SH',

                'name' => ['en' => 'Saint Helena', 'ar' => 'سانت هيلانة'],

                'phone_code' => 290

            ],

            [

                'id' => 184,

                'prefix' => 'KN',

                'name' => ['en' => 'Saint Kitts And Nevis', 'ar' => 'سانت كيتس ونيفيس'],

                'phone_code' => 1869

            ],

            [

                'id' => 185,

                'prefix' => 'LC',

                'name' => ['en' => 'Saint Lucia', 'ar' => 'القديسة لوسيا'],

                'phone_code' => 1758

            ],

            [

                'id' => 186,

                'prefix' => 'PM',

                'name' => ['en' => 'Saint Pierre and Miquelon', 'ar' => 'سانت بيير وميكلون'],

                'phone_code' => 508

            ],

            [

                'id' => 187,

                'prefix' => 'VC',

                'name' => ['en' => 'Saint Vincent And The Grenadines', 'ar' => 'سانت فنسنت وجزر غرينادين'],

                'phone_code' => 1784

            ],

            [

                'id' => 188,

                'prefix' => 'WS',

                'name' => ['en' => 'Samoa', 'ar' => 'ساموا'],

                'phone_code' => 684

            ],

            [

                'id' => 189,

                'prefix' => 'SM',

                'name' => ['en' => 'San Marino', 'ar' => 'سان مارينو'],

                'phone_code' => 378

            ],

            [

                'id' => 190,

                'prefix' => 'ST',

                'name' => ['en' => 'Sao Tome and Principe', 'ar' => 'ساو تومي وبرينسيبي'],

                'phone_code' => 239

            ],

            [

                'id' => 191,

                'prefix' => 'SA',

                'name' => ['en' => 'Saudi Arabia', 'ar' => 'المملكة العربية السعودية'],

                'phone_code' => 966

            ],

            [

                'id' => 192,

                'prefix' => 'SN',

                'name' => ['en' => 'Senegal', 'ar' => 'السنغال'],

                'phone_code' => 221

            ],

            [

                'id' => 193,

                'prefix' => 'RS',

                'name' => ['en' => 'Serbia', 'ar' => 'صربيا'],

                'phone_code' => 381

            ],

            [

                'id' => 194,

                'prefix' => 'SC',

                'name' => ['en' => 'Seychelles', 'ar' => 'سيشيل'],

                'phone_code' => 248

            ],

            [

                'id' => 195,

                'prefix' => 'SL',

                'name' => ['en' => 'Sierra Leone', 'ar' => 'سيرا ليون'],

                'phone_code' => 232

            ],

            [

                'id' => 196,

                'prefix' => 'SG',

                'name' => ['en' => 'Singapore', 'ar' => 'سنغافورة'],

                'phone_code' => 65

            ],

            [

                'id' => 197,

                'prefix' => 'SK',

                'name' => ['en' => 'Slovakia', 'ar' => 'سلوفاكيا'],

                'phone_code' => 421

            ],

            [

                'id' => 198,

                'prefix' => 'SI',

                'name' => ['en' => 'Slovenia', 'ar' => 'سلوفينيا'],

                'phone_code' => 386

            ],

            [

                'id' => 199,

                'prefix' => 'XG',

                'name' => ['en' => 'Smaller Territories of the UK', 'ar' => 'أقاليم أصغر في المملكة المتحدة'],

                'phone_code' => 44

            ],

            [

                'id' => 200,

                'prefix' => 'SB',

                'name' => ['en' => 'Solomon Islands', 'ar' => 'جزر سليمان'],

                'phone_code' => 677

            ],

            [

                'id' => 201,

                'prefix' => 'SO',

                'name' => ['en' => 'Somalia', 'ar' => 'الصومال'],

                'phone_code' => 252

            ],

            [

                'id' => 202,

                'prefix' => 'ZA',

                'name' => ['en' => 'South Africa', 'ar' => 'جنوب أفريقيا'],

                'phone_code' => 27

            ],

            [

                'id' => 203,

                'prefix' => 'GS',

                'name' => ['en' => 'South Georgia', 'ar' => 'جورجيا الجنوبية'],

                'phone_code' => 0

            ],

            [

                'id' => 204,

                'prefix' => 'SS',

                'name' => ['en' => 'South Sudan', 'ar' => 'جنوب السودان'],

                'phone_code' => 211

            ],

            [

                'id' => 205,

                'prefix' => 'ES',

                'name' => ['en' => 'Spain', 'ar' => 'إسبانيا'],

                'phone_code' => 34

            ],

            [

                'id' => 206,

                'prefix' => 'LK',

                'name' => ['en' => 'Sri Lanka', 'ar' => 'سيريلانكا'],

                'phone_code' => 94

            ],

            [

                'id' => 207,

                'prefix' => 'SD',

                'name' => ['en' => 'Sudan', 'ar' => 'السودان'],

                'phone_code' => 249

            ],

            [

                'id' => 208,

                'prefix' => 'SR',

                'name' => ['en' => 'Suriname', 'ar' => 'Suriname'],

                'phone_code' => 597

            ],

            [

                'id' => 209,

                'prefix' => 'SJ',

                'name' => ['en' => 'Svalbard And Jan Mayen Islands', 'ar' => 'جزر سفالبارد وجان ماين'],

                'phone_code' => 47

            ],

            [

                'id' => 210,

                'prefix' => 'SZ',

                'name' => ['en' => 'Swaziland', 'ar' => 'سوازيلاند'],

                'phone_code' => 268

            ],

            [

                'id' => 211,

                'prefix' => 'SE',

                'name' => ['en' => 'Sweden', 'ar' => 'السويد'],

                'phone_code' => 46

            ],

            [

                'id' => 212,

                'prefix' => 'CH',

                'name' => ['en' => 'Switzerland', 'ar' => 'سويسرا'],

                'phone_code' => 41

            ],

            [

                'id' => 213,

                'prefix' => 'SY',

                'name' => ['en' => 'Syria', 'ar' => 'سوريا'],

                'phone_code' => 963

            ],

            [

                'id' => 214,

                'prefix' => 'TW',

                'name' => ['en' => 'Taiwan', 'ar' => 'تايوان'],

                'phone_code' => 886

            ],

            [

                'id' => 215,

                'prefix' => 'TJ',

                'name' => ['en' => 'Tajikistan', 'ar' => 'طاجيكستان'],

                'phone_code' => 992

            ],

            [

                'id' => 216,

                'prefix' => 'TZ',

                'name' => ['en' => 'Tanzania', 'ar' => 'تنزانيا'],

                'phone_code' => 255

            ],

            [

                'id' => 217,

                'prefix' => 'TH',

                'name' => ['en' => 'Thailand', 'ar' => 'تايلاند'],

                'phone_code' => 66

            ],

            [

                'id' => 218,

                'prefix' => 'TG',

                'name' => ['en' => 'Togo', 'ar' => 'توجو'],

                'phone_code' => 228

            ],

            [

                'id' => 219,

                'prefix' => 'TK',

                'name' => ['en' => 'Tokelau', 'ar' => 'توكيلاو'],

                'phone_code' => 690

            ],

            [

                'id' => 220,

                'prefix' => 'TO',

                'name' => ['en' => 'Tonga', 'ar' => 'تونغا'],

                'phone_code' => 676

            ],

            [

                'id' => 221,

                'prefix' => 'TT',

                'name' => ['en' => 'Trinidad And Tobago', 'ar' => 'ترينكونتري_يداد وتوباغو'],

                'phone_code' => 1868

            ],

            [

                'id' => 222,

                'prefix' => 'TN',

                'name' => ['en' => 'Tunisia', 'ar' => 'تونس'],

                'phone_code' => 216

            ],

            [

                'id' => 223,

                'prefix' => 'TR',

                'name' => ['en' => 'Turkey', 'ar' => 'تركيا'],

                'phone_code' => 90

            ],

            [

                'id' => 224,

                'prefix' => 'TM',

                'name' => ['en' => 'Turkmenistan', 'ar' => 'تركمانستان'],

                'phone_code' => 7370

            ],

            [

                'id' => 225,

                'prefix' => 'TC',

                'name' => ['en' => 'Turks And Caicos Islands', 'ar' => 'جزر تركس وكايكوس'],

                'phone_code' => 1649

            ],

            [

                'id' => 226,

                'prefix' => 'TV',

                'name' => ['en' => 'Tuvalu', 'ar' => 'توفالو'],

                'phone_code' => 688

            ],

            [

                'id' => 227,

                'prefix' => 'UG',

                'name' => ['en' => 'Uganda', 'ar' => 'أوغندا'],

                'phone_code' => 256

            ],

            [

                'id' => 228,

                'prefix' => 'UA',

                'name' => ['en' => 'Ukraine', 'ar' => 'أوكرانيا'],

                'phone_code' => 380

            ],

            [

                'id' => 229,

                'prefix' => 'AE',

                'name' => ['en' => 'United Arab Emirates', 'ar' => 'الإمارات العربية المتحدة'],

                'phone_code' => 971

            ],

            [

                'id' => 230,

                'prefix' => 'GB',

                'name' => ['en' => 'United Kingdom', 'ar' => 'المملكة المتحدة'],

                'phone_code' => 44

            ],

            [

                'id' => 231,

                'prefix' => 'US',

                'name' => ['en' => 'United States', 'ar' => 'الولايات المتحدة الأمريكية'],

                'phone_code' => 1

            ],

            [

                'id' => 232,

                'prefix' => 'UM',

                'name' => ['en' => 'United States Minor Outlying Islands', 'ar' => 'جزر الولايات المتحدة البعيدة الصغرى'],

                'phone_code' => 1

            ],

            [

                'id' => 233,

                'prefix' => 'UY',

                'name' => ['en' => 'Uruguay', 'ar' => 'أوروغواي'],

                'phone_code' => 598

            ],

            [

                'id' => 234,

                'prefix' => 'UZ',

                'name' => ['en' => 'Uzbekistan', 'ar' => 'أوزبكستان'],

                'phone_code' => 998

            ],

            [

                'id' => 235,

                'prefix' => 'VU',

                'name' => ['en' => 'Vanuatu', 'ar' => 'فانواتو'],

                'phone_code' => 678

            ],

            [

                'id' => 236,

                'prefix' => 'VA',

                'name' => ['en' => 'Vatican City State (Holy See)', 'ar' => 'دولة الفاتيكان (الكرسي الرسولي)'],

                'phone_code' => 39

            ],

            [

                'id' => 237,

                'prefix' => 'VE',

                'name' => ['en' => 'Venezuela', 'ar' => 'فنزويلا'],

                'phone_code' => 58

            ],

            [

                'id' => 238,

                'prefix' => 'VN',

                'name' => ['en' => 'Vietnam', 'ar' => 'فيتنام'],

                'phone_code' => 84

            ],

            [

                'id' => 239,

                'prefix' => 'VG',

                'name' => ['en' => 'Virgin Islands (British)', 'ar' => 'جزر العذراء البريطانية)'],

                'phone_code' => 1284

            ],

            [

                'id' => 240,

                'prefix' => 'VI',

                'name' => ['en' => 'Virgin Islands (US)', 'ar' => 'جزر فيرجن (الولايات المتحدة)'],

                'phone_code' => 1340

            ],

            [

                'id' => 241,

                'prefix' => 'WF',

                'name' => ['en' => 'Wallis And Futuna Islands', 'ar' => 'جزر واليس وفوتونا'],

                'phone_code' => 681

            ],

            [

                'id' => 242,

                'prefix' => 'EH',

                'name' => ['en' => 'Western Sahara', 'ar' => 'الصحراء الغربية'],

                'phone_code' => 212

            ],

            [

                'id' => 243,

                'prefix' => 'YE',

                'name' => ['en' => 'Yemen', 'ar' => 'اليمن'],

                'phone_code' => 967

            ],

            [

                'id' => 244,

                'prefix' => 'YU',

                'name' => ['en' => 'Yugoslavia', 'ar' => 'يوغوسلافيا'],

                'phone_code' => 38

            ],

            [

                'id' => 245,

                'prefix' => 'ZM',

                'name' => ['en' => 'Zambia', 'ar' => 'زامبيا'],

                'phone_code' => 260

            ],

            [

                'id' => 246,

                'prefix' => 'ZW',

                'name' => ['en' => 'Zimbabwe', 'ar' => 'زيمبابوي'],

                'phone_code' => 26

            ],

        ];

        foreach ($countries as $country){
            Country::create($country);
        }

    }
}
