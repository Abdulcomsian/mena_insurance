<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_name' => 'Afghanistan',
                'PhoneCode' => 93,
            ),
            1 => 
            array (
                'id' => 2,
                'country_name' => 'Albania',
                'PhoneCode' => 355,
            ),
            2 => 
            array (
                'id' => 3,
                'country_name' => 'Algeria',
                'PhoneCode' => 213,
            ),
            3 => 
            array (
                'id' => 4,
                'country_name' => 'American Samoa',
                'PhoneCode' => 1684,
            ),
            4 => 
            array (
                'id' => 5,
                'country_name' => 'Andorra',
                'PhoneCode' => 376,
            ),
            5 => 
            array (
                'id' => 6,
                'country_name' => 'Angola',
                'PhoneCode' => 244,
            ),
            6 => 
            array (
                'id' => 7,
                'country_name' => 'Anguilla',
                'PhoneCode' => 1264,
            ),
            7 => 
            array (
                'id' => 8,
                'country_name' => 'Antarctica',
                'PhoneCode' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'country_name' => 'Antigua and Barbuda',
                'PhoneCode' => 1268,
            ),
            9 => 
            array (
                'id' => 10,
                'country_name' => 'Argentina',
                'PhoneCode' => 54,
            ),
            10 => 
            array (
                'id' => 11,
                'country_name' => 'Armenia',
                'PhoneCode' => 374,
            ),
            11 => 
            array (
                'id' => 12,
                'country_name' => 'Aruba',
                'PhoneCode' => 297,
            ),
            12 => 
            array (
                'id' => 13,
                'country_name' => 'Australia',
                'PhoneCode' => 61,
            ),
            13 => 
            array (
                'id' => 14,
                'country_name' => 'Austria',
                'PhoneCode' => 43,
            ),
            14 => 
            array (
                'id' => 15,
                'country_name' => 'Azerbaijan',
                'PhoneCode' => 994,
            ),
            15 => 
            array (
                'id' => 16,
                'country_name' => 'Bahamas',
                'PhoneCode' => 1242,
            ),
            16 => 
            array (
                'id' => 17,
                'country_name' => 'Bahrain',
                'PhoneCode' => 973,
            ),
            17 => 
            array (
                'id' => 18,
                'country_name' => 'Bangladesh',
                'PhoneCode' => 880,
            ),
            18 => 
            array (
                'id' => 19,
                'country_name' => 'Barbados',
                'PhoneCode' => 1246,
            ),
            19 => 
            array (
                'id' => 20,
                'country_name' => 'Belarus',
                'PhoneCode' => 375,
            ),
            20 => 
            array (
                'id' => 21,
                'country_name' => 'Belgium',
                'PhoneCode' => 32,
            ),
            21 => 
            array (
                'id' => 22,
                'country_name' => 'Belize',
                'PhoneCode' => 501,
            ),
            22 => 
            array (
                'id' => 23,
                'country_name' => 'Benin',
                'PhoneCode' => 229,
            ),
            23 => 
            array (
                'id' => 24,
                'country_name' => 'Bermuda',
                'PhoneCode' => 1441,
            ),
            24 => 
            array (
                'id' => 25,
                'country_name' => 'Bhutan',
                'PhoneCode' => 975,
            ),
            25 => 
            array (
                'id' => 26,
                'country_name' => 'Bolivia',
                'PhoneCode' => 591,
            ),
            26 => 
            array (
                'id' => 27,
                'country_name' => 'Bosnia and Herzegovina',
                'PhoneCode' => 387,
            ),
            27 => 
            array (
                'id' => 28,
                'country_name' => 'Botswana',
                'PhoneCode' => 267,
            ),
            28 => 
            array (
                'id' => 29,
                'country_name' => 'Bouvet Island',
                'PhoneCode' => 0,
            ),
            29 => 
            array (
                'id' => 30,
                'country_name' => 'Brazil',
                'PhoneCode' => 55,
            ),
            30 => 
            array (
                'id' => 31,
                'country_name' => 'British Indian Ocean Territory',
                'PhoneCode' => 246,
            ),
            31 => 
            array (
                'id' => 32,
                'country_name' => 'Brunei Darussalam',
                'PhoneCode' => 673,
            ),
            32 => 
            array (
                'id' => 33,
                'country_name' => 'Bulgaria',
                'PhoneCode' => 359,
            ),
            33 => 
            array (
                'id' => 34,
                'country_name' => 'Burkina Faso',
                'PhoneCode' => 226,
            ),
            34 => 
            array (
                'id' => 35,
                'country_name' => 'Burundi',
                'PhoneCode' => 257,
            ),
            35 => 
            array (
                'id' => 36,
                'country_name' => 'Cambodia',
                'PhoneCode' => 855,
            ),
            36 => 
            array (
                'id' => 37,
                'country_name' => 'Cameroon',
                'PhoneCode' => 237,
            ),
            37 => 
            array (
                'id' => 38,
                'country_name' => 'Canada',
                'PhoneCode' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'country_name' => 'Cape Verde',
                'PhoneCode' => 238,
            ),
            39 => 
            array (
                'id' => 40,
                'country_name' => 'Cayman Islands',
                'PhoneCode' => 1345,
            ),
            40 => 
            array (
                'id' => 41,
                'country_name' => 'Central African Republic',
                'PhoneCode' => 236,
            ),
            41 => 
            array (
                'id' => 42,
                'country_name' => 'Chad',
                'PhoneCode' => 235,
            ),
            42 => 
            array (
                'id' => 43,
                'country_name' => 'Chile',
                'PhoneCode' => 56,
            ),
            43 => 
            array (
                'id' => 44,
                'country_name' => 'China',
                'PhoneCode' => 86,
            ),
            44 => 
            array (
                'id' => 45,
                'country_name' => 'Christmas Island',
                'PhoneCode' => 61,
            ),
            45 => 
            array (
                'id' => 46,
            'country_name' => 'Cocos (Keeling) Islands',
                'PhoneCode' => 672,
            ),
            46 => 
            array (
                'id' => 47,
                'country_name' => 'Colombia',
                'PhoneCode' => 57,
            ),
            47 => 
            array (
                'id' => 48,
                'country_name' => 'Comoros',
                'PhoneCode' => 269,
            ),
            48 => 
            array (
                'id' => 49,
                'country_name' => 'Congo',
                'PhoneCode' => 242,
            ),
            49 => 
            array (
                'id' => 50,
                'country_name' => 'Congo, the Democratic Republic of the',
                'PhoneCode' => 242,
            ),
            50 => 
            array (
                'id' => 51,
                'country_name' => 'Cook Islands',
                'PhoneCode' => 682,
            ),
            51 => 
            array (
                'id' => 52,
                'country_name' => 'Costa Rica',
                'PhoneCode' => 506,
            ),
            52 => 
            array (
                'id' => 53,
                'country_name' => 'Cote D\'Ivoire',
                'PhoneCode' => 225,
            ),
            53 => 
            array (
                'id' => 54,
                'country_name' => 'Croatia',
                'PhoneCode' => 385,
            ),
            54 => 
            array (
                'id' => 55,
                'country_name' => 'Cuba',
                'PhoneCode' => 53,
            ),
            55 => 
            array (
                'id' => 56,
                'country_name' => 'Cyprus',
                'PhoneCode' => 357,
            ),
            56 => 
            array (
                'id' => 57,
                'country_name' => 'Czech Republic',
                'PhoneCode' => 420,
            ),
            57 => 
            array (
                'id' => 58,
                'country_name' => 'Denmark',
                'PhoneCode' => 45,
            ),
            58 => 
            array (
                'id' => 59,
                'country_name' => 'Djibouti',
                'PhoneCode' => 253,
            ),
            59 => 
            array (
                'id' => 60,
                'country_name' => 'Dominica',
                'PhoneCode' => 1767,
            ),
            60 => 
            array (
                'id' => 61,
                'country_name' => 'Dominican Republic',
                'PhoneCode' => 1809,
            ),
            61 => 
            array (
                'id' => 62,
                'country_name' => 'Ecuador',
                'PhoneCode' => 593,
            ),
            62 => 
            array (
                'id' => 63,
                'country_name' => 'Egypt',
                'PhoneCode' => 20,
            ),
            63 => 
            array (
                'id' => 64,
                'country_name' => 'El Salvador',
                'PhoneCode' => 503,
            ),
            64 => 
            array (
                'id' => 65,
                'country_name' => 'Equatorial Guinea',
                'PhoneCode' => 240,
            ),
            65 => 
            array (
                'id' => 66,
                'country_name' => 'Eritrea',
                'PhoneCode' => 291,
            ),
            66 => 
            array (
                'id' => 67,
                'country_name' => 'Estonia',
                'PhoneCode' => 372,
            ),
            67 => 
            array (
                'id' => 68,
                'country_name' => 'Ethiopia',
                'PhoneCode' => 251,
            ),
            68 => 
            array (
                'id' => 69,
            'country_name' => 'Falkland Islands (Malvinas)',
                'PhoneCode' => 500,
            ),
            69 => 
            array (
                'id' => 70,
                'country_name' => 'Faroe Islands',
                'PhoneCode' => 298,
            ),
            70 => 
            array (
                'id' => 71,
                'country_name' => 'Fiji',
                'PhoneCode' => 679,
            ),
            71 => 
            array (
                'id' => 72,
                'country_name' => 'Finland',
                'PhoneCode' => 358,
            ),
            72 => 
            array (
                'id' => 73,
                'country_name' => 'France',
                'PhoneCode' => 33,
            ),
            73 => 
            array (
                'id' => 74,
                'country_name' => 'French Guiana',
                'PhoneCode' => 594,
            ),
            74 => 
            array (
                'id' => 75,
                'country_name' => 'French Polynesia',
                'PhoneCode' => 689,
            ),
            75 => 
            array (
                'id' => 76,
                'country_name' => 'French Southern Territories',
                'PhoneCode' => 0,
            ),
            76 => 
            array (
                'id' => 77,
                'country_name' => 'Gabon',
                'PhoneCode' => 241,
            ),
            77 => 
            array (
                'id' => 78,
                'country_name' => 'Gambia',
                'PhoneCode' => 220,
            ),
            78 => 
            array (
                'id' => 79,
                'country_name' => 'Georgia',
                'PhoneCode' => 995,
            ),
            79 => 
            array (
                'id' => 80,
                'country_name' => 'Germany',
                'PhoneCode' => 49,
            ),
            80 => 
            array (
                'id' => 81,
                'country_name' => 'Ghana',
                'PhoneCode' => 233,
            ),
            81 => 
            array (
                'id' => 82,
                'country_name' => 'Gibraltar',
                'PhoneCode' => 350,
            ),
            82 => 
            array (
                'id' => 83,
                'country_name' => 'Greece',
                'PhoneCode' => 30,
            ),
            83 => 
            array (
                'id' => 84,
                'country_name' => 'Greenland',
                'PhoneCode' => 299,
            ),
            84 => 
            array (
                'id' => 85,
                'country_name' => 'Grenada',
                'PhoneCode' => 1473,
            ),
            85 => 
            array (
                'id' => 86,
                'country_name' => 'Guadeloupe',
                'PhoneCode' => 590,
            ),
            86 => 
            array (
                'id' => 87,
                'country_name' => 'Guam',
                'PhoneCode' => 1671,
            ),
            87 => 
            array (
                'id' => 88,
                'country_name' => 'Guatemala',
                'PhoneCode' => 502,
            ),
            88 => 
            array (
                'id' => 89,
                'country_name' => 'Guinea',
                'PhoneCode' => 224,
            ),
            89 => 
            array (
                'id' => 90,
                'country_name' => 'Guinea-Bissau',
                'PhoneCode' => 245,
            ),
            90 => 
            array (
                'id' => 91,
                'country_name' => 'Guyana',
                'PhoneCode' => 592,
            ),
            91 => 
            array (
                'id' => 92,
                'country_name' => 'Haiti',
                'PhoneCode' => 509,
            ),
            92 => 
            array (
                'id' => 93,
                'country_name' => 'Heard Island and Mcdonald Islands',
                'PhoneCode' => 0,
            ),
            93 => 
            array (
                'id' => 94,
            'country_name' => 'Holy See (Vatican City State)',
                'PhoneCode' => 39,
            ),
            94 => 
            array (
                'id' => 95,
                'country_name' => 'Honduras',
                'PhoneCode' => 504,
            ),
            95 => 
            array (
                'id' => 96,
                'country_name' => 'Hong Kong',
                'PhoneCode' => 852,
            ),
            96 => 
            array (
                'id' => 97,
                'country_name' => 'Hungary',
                'PhoneCode' => 36,
            ),
            97 => 
            array (
                'id' => 98,
                'country_name' => 'Iceland',
                'PhoneCode' => 354,
            ),
            98 => 
            array (
                'id' => 99,
                'country_name' => 'India',
                'PhoneCode' => 91,
            ),
            99 => 
            array (
                'id' => 100,
                'country_name' => 'Indonesia',
                'PhoneCode' => 62,
            ),
            100 => 
            array (
                'id' => 101,
                'country_name' => 'Iran, Islamic Republic of',
                'PhoneCode' => 98,
            ),
            101 => 
            array (
                'id' => 102,
                'country_name' => 'Iraq',
                'PhoneCode' => 964,
            ),
            102 => 
            array (
                'id' => 103,
                'country_name' => 'Ireland',
                'PhoneCode' => 353,
            ),
            103 => 
            array (
                'id' => 104,
                'country_name' => 'Israel',
                'PhoneCode' => 972,
            ),
            104 => 
            array (
                'id' => 105,
                'country_name' => 'Italy',
                'PhoneCode' => 39,
            ),
            105 => 
            array (
                'id' => 106,
                'country_name' => 'Jamaica',
                'PhoneCode' => 1876,
            ),
            106 => 
            array (
                'id' => 107,
                'country_name' => 'Japan',
                'PhoneCode' => 81,
            ),
            107 => 
            array (
                'id' => 108,
                'country_name' => 'Jordan',
                'PhoneCode' => 962,
            ),
            108 => 
            array (
                'id' => 109,
                'country_name' => 'Kazakhstan',
                'PhoneCode' => 7,
            ),
            109 => 
            array (
                'id' => 110,
                'country_name' => 'Kenya',
                'PhoneCode' => 254,
            ),
            110 => 
            array (
                'id' => 111,
                'country_name' => 'Kiribati',
                'PhoneCode' => 686,
            ),
            111 => 
            array (
                'id' => 112,
                'country_name' => 'Korea, Democratic People\'s Republic of',
                'PhoneCode' => 850,
            ),
            112 => 
            array (
                'id' => 113,
                'country_name' => 'Korea, Republic of',
                'PhoneCode' => 82,
            ),
            113 => 
            array (
                'id' => 114,
                'country_name' => 'Kuwait',
                'PhoneCode' => 965,
            ),
            114 => 
            array (
                'id' => 115,
                'country_name' => 'Kyrgyzstan',
                'PhoneCode' => 996,
            ),
            115 => 
            array (
                'id' => 116,
                'country_name' => 'Lao People\'s Democratic Republic',
                'PhoneCode' => 856,
            ),
            116 => 
            array (
                'id' => 117,
                'country_name' => 'Latvia',
                'PhoneCode' => 371,
            ),
            117 => 
            array (
                'id' => 118,
                'country_name' => 'Lebanon',
                'PhoneCode' => 961,
            ),
            118 => 
            array (
                'id' => 119,
                'country_name' => 'Lesotho',
                'PhoneCode' => 266,
            ),
            119 => 
            array (
                'id' => 120,
                'country_name' => 'Liberia',
                'PhoneCode' => 231,
            ),
            120 => 
            array (
                'id' => 121,
                'country_name' => 'Libyan Arab Jamahiriya',
                'PhoneCode' => 218,
            ),
            121 => 
            array (
                'id' => 122,
                'country_name' => 'Liechtenstein',
                'PhoneCode' => 423,
            ),
            122 => 
            array (
                'id' => 123,
                'country_name' => 'Lithuania',
                'PhoneCode' => 370,
            ),
            123 => 
            array (
                'id' => 124,
                'country_name' => 'Luxembourg',
                'PhoneCode' => 352,
            ),
            124 => 
            array (
                'id' => 125,
                'country_name' => 'Macao',
                'PhoneCode' => 853,
            ),
            125 => 
            array (
                'id' => 126,
                'country_name' => 'Macedonia, the Former Yugoslav Republic of',
                'PhoneCode' => 389,
            ),
            126 => 
            array (
                'id' => 127,
                'country_name' => 'Madagascar',
                'PhoneCode' => 261,
            ),
            127 => 
            array (
                'id' => 128,
                'country_name' => 'Malawi',
                'PhoneCode' => 265,
            ),
            128 => 
            array (
                'id' => 129,
                'country_name' => 'Malaysia',
                'PhoneCode' => 60,
            ),
            129 => 
            array (
                'id' => 130,
                'country_name' => 'Maldives',
                'PhoneCode' => 960,
            ),
            130 => 
            array (
                'id' => 131,
                'country_name' => 'Mali',
                'PhoneCode' => 223,
            ),
            131 => 
            array (
                'id' => 132,
                'country_name' => 'Malta',
                'PhoneCode' => 356,
            ),
            132 => 
            array (
                'id' => 133,
                'country_name' => 'Marshall Islands',
                'PhoneCode' => 692,
            ),
            133 => 
            array (
                'id' => 134,
                'country_name' => 'Martinique',
                'PhoneCode' => 596,
            ),
            134 => 
            array (
                'id' => 135,
                'country_name' => 'Mauritania',
                'PhoneCode' => 222,
            ),
            135 => 
            array (
                'id' => 136,
                'country_name' => 'Mauritius',
                'PhoneCode' => 230,
            ),
            136 => 
            array (
                'id' => 137,
                'country_name' => 'Mayotte',
                'PhoneCode' => 269,
            ),
            137 => 
            array (
                'id' => 138,
                'country_name' => 'Mexico',
                'PhoneCode' => 52,
            ),
            138 => 
            array (
                'id' => 139,
                'country_name' => 'Micronesia, Federated States of',
                'PhoneCode' => 691,
            ),
            139 => 
            array (
                'id' => 140,
                'country_name' => 'Moldova, Republic of',
                'PhoneCode' => 373,
            ),
            140 => 
            array (
                'id' => 141,
                'country_name' => 'Monaco',
                'PhoneCode' => 377,
            ),
            141 => 
            array (
                'id' => 142,
                'country_name' => 'Mongolia',
                'PhoneCode' => 976,
            ),
            142 => 
            array (
                'id' => 143,
                'country_name' => 'Montserrat',
                'PhoneCode' => 1664,
            ),
            143 => 
            array (
                'id' => 144,
                'country_name' => 'Morocco',
                'PhoneCode' => 212,
            ),
            144 => 
            array (
                'id' => 145,
                'country_name' => 'Mozambique',
                'PhoneCode' => 258,
            ),
            145 => 
            array (
                'id' => 146,
                'country_name' => 'Myanmar',
                'PhoneCode' => 95,
            ),
            146 => 
            array (
                'id' => 147,
                'country_name' => 'Namibia',
                'PhoneCode' => 264,
            ),
            147 => 
            array (
                'id' => 148,
                'country_name' => 'Nauru',
                'PhoneCode' => 674,
            ),
            148 => 
            array (
                'id' => 149,
                'country_name' => 'Nepal',
                'PhoneCode' => 977,
            ),
            149 => 
            array (
                'id' => 150,
                'country_name' => 'Netherlands',
                'PhoneCode' => 31,
            ),
            150 => 
            array (
                'id' => 151,
                'country_name' => 'Netherlands Antilles',
                'PhoneCode' => 599,
            ),
            151 => 
            array (
                'id' => 152,
                'country_name' => 'New Caledonia',
                'PhoneCode' => 687,
            ),
            152 => 
            array (
                'id' => 153,
                'country_name' => 'New Zealand',
                'PhoneCode' => 64,
            ),
            153 => 
            array (
                'id' => 154,
                'country_name' => 'Nicaragua',
                'PhoneCode' => 505,
            ),
            154 => 
            array (
                'id' => 155,
                'country_name' => 'Niger',
                'PhoneCode' => 227,
            ),
            155 => 
            array (
                'id' => 156,
                'country_name' => 'Nigeria',
                'PhoneCode' => 234,
            ),
            156 => 
            array (
                'id' => 157,
                'country_name' => 'Niue',
                'PhoneCode' => 683,
            ),
            157 => 
            array (
                'id' => 158,
                'country_name' => 'Norfolk Island',
                'PhoneCode' => 672,
            ),
            158 => 
            array (
                'id' => 159,
                'country_name' => 'Northern Mariana Islands',
                'PhoneCode' => 1670,
            ),
            159 => 
            array (
                'id' => 160,
                'country_name' => 'Norway',
                'PhoneCode' => 47,
            ),
            160 => 
            array (
                'id' => 161,
                'country_name' => 'Oman',
                'PhoneCode' => 968,
            ),
            161 => 
            array (
                'id' => 162,
                'country_name' => 'Pakistan',
                'PhoneCode' => 92,
            ),
            162 => 
            array (
                'id' => 163,
                'country_name' => 'Palau',
                'PhoneCode' => 680,
            ),
            163 => 
            array (
                'id' => 164,
                'country_name' => 'Palestinian Territory, Occupied',
                'PhoneCode' => 970,
            ),
            164 => 
            array (
                'id' => 165,
                'country_name' => 'Panama',
                'PhoneCode' => 507,
            ),
            165 => 
            array (
                'id' => 166,
                'country_name' => 'Papua New Guinea',
                'PhoneCode' => 675,
            ),
            166 => 
            array (
                'id' => 167,
                'country_name' => 'Paraguay',
                'PhoneCode' => 595,
            ),
            167 => 
            array (
                'id' => 168,
                'country_name' => 'Peru',
                'PhoneCode' => 51,
            ),
            168 => 
            array (
                'id' => 169,
                'country_name' => 'Philippines',
                'PhoneCode' => 63,
            ),
            169 => 
            array (
                'id' => 170,
                'country_name' => 'Pitcairn',
                'PhoneCode' => 0,
            ),
            170 => 
            array (
                'id' => 171,
                'country_name' => 'Poland',
                'PhoneCode' => 48,
            ),
            171 => 
            array (
                'id' => 172,
                'country_name' => 'Portugal',
                'PhoneCode' => 351,
            ),
            172 => 
            array (
                'id' => 173,
                'country_name' => 'Puerto Rico',
                'PhoneCode' => 1787,
            ),
            173 => 
            array (
                'id' => 174,
                'country_name' => 'Qatar',
                'PhoneCode' => 974,
            ),
            174 => 
            array (
                'id' => 175,
                'country_name' => 'Reunion',
                'PhoneCode' => 262,
            ),
            175 => 
            array (
                'id' => 176,
                'country_name' => 'Romania',
                'PhoneCode' => 40,
            ),
            176 => 
            array (
                'id' => 177,
                'country_name' => 'Russian Federation',
                'PhoneCode' => 70,
            ),
            177 => 
            array (
                'id' => 178,
                'country_name' => 'Rwanda',
                'PhoneCode' => 250,
            ),
            178 => 
            array (
                'id' => 179,
                'country_name' => 'Saint Helena',
                'PhoneCode' => 290,
            ),
            179 => 
            array (
                'id' => 180,
                'country_name' => 'Saint Kitts and Nevis',
                'PhoneCode' => 1869,
            ),
            180 => 
            array (
                'id' => 181,
                'country_name' => 'Saint Lucia',
                'PhoneCode' => 1758,
            ),
            181 => 
            array (
                'id' => 182,
                'country_name' => 'Saint Pierre and Miquelon',
                'PhoneCode' => 508,
            ),
            182 => 
            array (
                'id' => 183,
                'country_name' => 'Saint Vincent and the Grenadines',
                'PhoneCode' => 1784,
            ),
            183 => 
            array (
                'id' => 184,
                'country_name' => 'Samoa',
                'PhoneCode' => 684,
            ),
            184 => 
            array (
                'id' => 185,
                'country_name' => 'San Marino',
                'PhoneCode' => 378,
            ),
            185 => 
            array (
                'id' => 186,
                'country_name' => 'Sao Tome and Principe',
                'PhoneCode' => 239,
            ),
            186 => 
            array (
                'id' => 187,
                'country_name' => 'Saudi Arabia',
                'PhoneCode' => 966,
            ),
            187 => 
            array (
                'id' => 188,
                'country_name' => 'Senegal',
                'PhoneCode' => 221,
            ),
            188 => 
            array (
                'id' => 189,
                'country_name' => 'Serbia and Montenegro',
                'PhoneCode' => 381,
            ),
            189 => 
            array (
                'id' => 190,
                'country_name' => 'Seychelles',
                'PhoneCode' => 248,
            ),
            190 => 
            array (
                'id' => 191,
                'country_name' => 'Sierra Leone',
                'PhoneCode' => 232,
            ),
            191 => 
            array (
                'id' => 192,
                'country_name' => 'Singapore',
                'PhoneCode' => 65,
            ),
            192 => 
            array (
                'id' => 193,
                'country_name' => 'Slovakia',
                'PhoneCode' => 421,
            ),
            193 => 
            array (
                'id' => 194,
                'country_name' => 'Slovenia',
                'PhoneCode' => 386,
            ),
            194 => 
            array (
                'id' => 195,
                'country_name' => 'Solomon Islands',
                'PhoneCode' => 677,
            ),
            195 => 
            array (
                'id' => 196,
                'country_name' => 'Somalia',
                'PhoneCode' => 252,
            ),
            196 => 
            array (
                'id' => 197,
                'country_name' => 'South Africa',
                'PhoneCode' => 27,
            ),
            197 => 
            array (
                'id' => 198,
                'country_name' => 'South Georgia and the South Sandwich Islands',
                'PhoneCode' => 0,
            ),
            198 => 
            array (
                'id' => 199,
                'country_name' => 'Spain',
                'PhoneCode' => 34,
            ),
            199 => 
            array (
                'id' => 200,
                'country_name' => 'Sri Lanka',
                'PhoneCode' => 94,
            ),
            200 => 
            array (
                'id' => 201,
                'country_name' => 'Sudan',
                'PhoneCode' => 249,
            ),
            201 => 
            array (
                'id' => 202,
                'country_name' => 'Suriname',
                'PhoneCode' => 597,
            ),
            202 => 
            array (
                'id' => 203,
                'country_name' => 'Svalbard and Jan Mayen',
                'PhoneCode' => 47,
            ),
            203 => 
            array (
                'id' => 204,
                'country_name' => 'Swaziland',
                'PhoneCode' => 268,
            ),
            204 => 
            array (
                'id' => 205,
                'country_name' => 'Sweden',
                'PhoneCode' => 46,
            ),
            205 => 
            array (
                'id' => 206,
                'country_name' => 'Switzerland',
                'PhoneCode' => 41,
            ),
            206 => 
            array (
                'id' => 207,
                'country_name' => 'Syrian Arab Republic',
                'PhoneCode' => 963,
            ),
            207 => 
            array (
                'id' => 208,
                'country_name' => 'Taiwan, Province of China',
                'PhoneCode' => 886,
            ),
            208 => 
            array (
                'id' => 209,
                'country_name' => 'Tajikistan',
                'PhoneCode' => 992,
            ),
            209 => 
            array (
                'id' => 210,
                'country_name' => 'Tanzania, United Republic of',
                'PhoneCode' => 255,
            ),
            210 => 
            array (
                'id' => 211,
                'country_name' => 'Thailand',
                'PhoneCode' => 66,
            ),
            211 => 
            array (
                'id' => 212,
                'country_name' => 'Timor-Leste',
                'PhoneCode' => 670,
            ),
            212 => 
            array (
                'id' => 213,
                'country_name' => 'Togo',
                'PhoneCode' => 228,
            ),
            213 => 
            array (
                'id' => 214,
                'country_name' => 'Tokelau',
                'PhoneCode' => 690,
            ),
            214 => 
            array (
                'id' => 215,
                'country_name' => 'Tonga',
                'PhoneCode' => 676,
            ),
            215 => 
            array (
                'id' => 216,
                'country_name' => 'Trinidad and Tobago',
                'PhoneCode' => 1868,
            ),
            216 => 
            array (
                'id' => 217,
                'country_name' => 'Tunisia',
                'PhoneCode' => 216,
            ),
            217 => 
            array (
                'id' => 218,
                'country_name' => 'Turkey',
                'PhoneCode' => 90,
            ),
            218 => 
            array (
                'id' => 219,
                'country_name' => 'Turkmenistan',
                'PhoneCode' => 7370,
            ),
            219 => 
            array (
                'id' => 220,
                'country_name' => 'Turks and Caicos Islands',
                'PhoneCode' => 1649,
            ),
            220 => 
            array (
                'id' => 221,
                'country_name' => 'Tuvalu',
                'PhoneCode' => 688,
            ),
            221 => 
            array (
                'id' => 222,
                'country_name' => 'Uganda',
                'PhoneCode' => 256,
            ),
            222 => 
            array (
                'id' => 223,
                'country_name' => 'Ukraine',
                'PhoneCode' => 380,
            ),
            223 => 
            array (
                'id' => 224,
                'country_name' => 'United Arab Emirates',
                'PhoneCode' => 971,
            ),
            224 => 
            array (
                'id' => 225,
                'country_name' => 'United Kingdom',
                'PhoneCode' => 44,
            ),
            225 => 
            array (
                'id' => 226,
                'country_name' => 'United States',
                'PhoneCode' => 1,
            ),
            226 => 
            array (
                'id' => 227,
                'country_name' => 'United States Minor Outlying Islands',
                'PhoneCode' => 1,
            ),
            227 => 
            array (
                'id' => 228,
                'country_name' => 'Uruguay',
                'PhoneCode' => 598,
            ),
            228 => 
            array (
                'id' => 229,
                'country_name' => 'Uzbekistan',
                'PhoneCode' => 998,
            ),
            229 => 
            array (
                'id' => 230,
                'country_name' => 'Vanuatu',
                'PhoneCode' => 678,
            ),
            230 => 
            array (
                'id' => 231,
                'country_name' => 'Venezuela',
                'PhoneCode' => 58,
            ),
            231 => 
            array (
                'id' => 232,
                'country_name' => 'Viet Nam',
                'PhoneCode' => 84,
            ),
            232 => 
            array (
                'id' => 233,
                'country_name' => 'Virgin Islands, British',
                'PhoneCode' => 1284,
            ),
            233 => 
            array (
                'id' => 234,
                'country_name' => 'Virgin Islands, U.s.',
                'PhoneCode' => 1340,
            ),
            234 => 
            array (
                'id' => 235,
                'country_name' => 'Wallis and Futuna',
                'PhoneCode' => 681,
            ),
            235 => 
            array (
                'id' => 236,
                'country_name' => 'Western Sahara',
                'PhoneCode' => 212,
            ),
            236 => 
            array (
                'id' => 237,
                'country_name' => 'Yemen',
                'PhoneCode' => 967,
            ),
            237 => 
            array (
                'id' => 238,
                'country_name' => 'Zambia',
                'PhoneCode' => 260,
            ),
            238 => 
            array (
                'id' => 239,
                'country_name' => 'Zimbabwe',
                'PhoneCode' => 263,
            ),
        ));
        
        
    }
}