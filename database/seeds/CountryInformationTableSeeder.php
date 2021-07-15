<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountryInformationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('country_information')->delete();
        
        \DB::table('country_information')->insert(array (
            0 => 
            array (
                'id' => 34413,
                'created_by' => 'admin',
                'created_date' => '2020-10-08 08:07:18.382072',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-08 08:07:18.382072',
                'country_name' => 'YEMEN',
                'law_governing_ins' => 'The Republican Decree of Law No.37 of 1992 On Supervision and Control of Insurance Companies and agents –',
                'no_of_operating_entities' => NULL,
                'reg_authority' => 'MINISTRY OF INDUSTRY AND TRADE',
                'reg_authority_web_link' => 'http://www.moit.gov.ye/moit/',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            1 => 
            array (
                'id' => 34522,
                'created_by' => 'admin',
                'created_date' => '2020-10-08 08:15:00.572236',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-08 08:15:00.572236',
                'country_name' => 'TURKEY',
            'law_governing_ins' => 'Insurance Law No. 5684 (the Insurance Law)',
                'no_of_operating_entities' => NULL,
                'reg_authority' => '"Ministry of Treasury and finance - Insurance and Private Pension Regulation and Supervision Agency"',
                'reg_authority_web_link' => 'https://en.hmb.gov.tr/',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            2 => 
            array (
                'id' => 35071,
                'created_by' => 'admin',
                'created_date' => '2020-10-08 08:41:51.515088',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-08 08:41:51.515088',
            'country_name' => 'SAUDI ARABIA(KSA)',
                'law_governing_ins' => 'The Cooperative Insurance Companies Control Law and the Implementing Regulations 2003',
                'no_of_operating_entities' => NULL,
            'reg_authority' => 'SAUDI ARABIAN MONETARY AUTHORITY ( SAMA)',
                'reg_authority_web_link' => 'http://www.sama.gov.sa/en-US/Laws/Pages/InsuranceLaws.aspx',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            3 => 
            array (
                'id' => 35424,
                'created_by' => 'admin',
                'created_date' => '2020-10-08 08:56:20.108232',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-08 08:56:20.108232',
                'country_name' => 'SYRIA',
                'law_governing_ins' => '1.Legislative Decree No. 43 of 2005 regulating the insurance sector,2.Executive Instructions for Legislative Decree No. 43 of 2005',
                'no_of_operating_entities' => NULL,
                'reg_authority' => 'Syrian Insurance Supervisory Commission',
                'reg_authority_web_link' => 'http://www.sisc.sy/',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            4 => 
            array (
                'id' => 35514,
                'created_by' => 'admin',
                'created_date' => '2020-10-08 09:04:48.218729',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-08 09:04:48.218729',
            'country_name' => 'QATAR FINANCIAL CENTRE(QFC)',
                'law_governing_ins' => 'QFC REGULATION NO. 1 of 2005',
                'no_of_operating_entities' => NULL,
                'reg_authority' => 'QATAR FINANCIAL CENTRE REGULATORY AUTHORITY',
                'reg_authority_web_link' => 'http://www.qfcra.com/en-us/SitePages/Home.aspx',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            5 => 
            array (
                'id' => 35557,
                'created_by' => 'admin',
                'created_date' => '2020-10-08 09:12:11.795877',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-08 09:12:11.795877',
                'country_name' => 'QATAR',
            'law_governing_ins' => 'Law of Central Bank of Qatar (CBQ) Decree No. 7 of 2019 and Law No.13 of 2012',
                'no_of_operating_entities' => NULL,
                'reg_authority' => 'QATAR CENTRAL BANK',
                'reg_authority_web_link' => 'http://www.qcb.gov.qa/English/Pages/default.aspx',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            6 => 
            array (
                'id' => 35615,
                'created_by' => 'admin',
                'created_date' => '2020-10-08 09:21:29.830762',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-08 09:21:29.830762',
                'country_name' => 'OMAN',
            'law_governing_ins' => 'Insurance Companies Law [RD 12/79 as amended] and Executive Regulations [MD 5/80] (together, “Law”)',
                'no_of_operating_entities' => 'National Insurance companies- 11                                                                                      Foreign Insurance companies- 9',
                'reg_authority' => 'CAPITAL MARKET AUTHORITY',
                'reg_authority_web_link' => 'https://www.cma.gov.om/Home/InsuranceReports',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            7 => 
            array (
                'id' => 35711,
                'created_by' => 'admin',
                'created_date' => '2020-10-08 09:29:12.028853',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-08 09:29:12.028853',
                'country_name' => 'KUWAIT',
            'law_governing_ins' => 'Law No. 125 of 2019 on the Regulation of Insurance (Insurance Law)',
                'no_of_operating_entities' => '35',
                'reg_authority' => 'Ministry of Trade & Industry,,Central Bank of Kuwait',
                'reg_authority_web_link' => 'www.moci.gov.kw',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            8 => 
            array (
                'id' => 35977,
                'created_by' => 'admin',
                'created_date' => '2020-10-08 09:39:24.315037',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-08 09:39:24.315037',
                'country_name' => 'ISRAEL',
                'law_governing_ins' => 'National Insurance Law, 5728-1968',
                'no_of_operating_entities' => NULL,
                'reg_authority' => 'The Capital Market, Insurance and Savings Authority',
                'reg_authority_web_link' => 'https://www.justice.gov.il',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            9 => 
            array (
                'id' => 36229,
                'created_by' => 'admin',
                'created_date' => '2020-10-08 12:27:47.377537',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-08 12:27:47.377537',
                'country_name' => 'IRAQ',
            'law_governing_ins' => 'Insurance Business Regulation Act 2005 (IBR)',
                'no_of_operating_entities' => NULL,
                'reg_authority' => 'IRAQI INSURANCE DIWAAN',
                'reg_authority_web_link' => 'http://www.insurancediwan.gov.iq/',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            10 => 
            array (
                'id' => 36437,
                'created_by' => 'admin',
                'created_date' => '2020-10-08 12:35:49.110369',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-08 12:35:49.110369',
                'country_name' => 'IRAN',
                'law_governing_ins' => 'Insurance Law, 1937, The Act on Establishment of Central Insurance of Iran and Insurance Operation, 1971 ,The Act on Establishment of Non-Governmental Insurance Institutions, 2001',
                'no_of_operating_entities' => 'Incorporated Insurance Firms : 29',
            'reg_authority' => 'Bimeh Markazi Iran (Central Insurance of IR Iran)',
                'reg_authority_web_link' => 'https://en.centinsur.ir/',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            11 => 
            array (
                'id' => 36688,
                'created_by' => 'admin',
                'created_date' => '2020-10-08 12:42:02.183033',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-08 12:42:02.183033',
                'country_name' => 'EGYPT',
                'law_governing_ins' => 'Law No 10 for 1981for Insurance Supervision and Control in Egypt.',
                'no_of_operating_entities' => NULL,
                'reg_authority' => 'Financial Regulatory Authority',
                'reg_authority_web_link' => 'http://www.fra.gov.eg/jtags/efsa_en/index_en.jsp',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            12 => 
            array (
                'id' => 37023,
                'created_by' => 'admin',
                'created_date' => '2020-10-08 12:49:28.467125',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-08 12:49:28.467125',
            'country_name' => 'DUBAI INTERNATIONAL FINANCIAL CENTRE(DIFC)',
            'law_governing_ins' => 'Federal Law no. 6 of 2007 concerning the Establishment of the Insurance Authority and Regulation of Insurance Operations (the Insurance Law)',
                'no_of_operating_entities' => '16',
                'reg_authority' => 'DUBAI FINANCIAL SERVICE AUTHORITY',
                'reg_authority_web_link' => 'http://dfsa.ae/laws-and-rules',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            13 => 
            array (
                'id' => 37181,
                'created_by' => 'admin',
                'created_date' => '2020-10-09 05:48:14.495500',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-09 05:48:14.495500',
                'country_name' => 'BAHRAIN',
            'law_governing_ins' => 'Bahrain Insurance Law 1987 (Legislative Decree No. 17 Of 1987 With Respect To Insurance Companies And Organisations)',
                'no_of_operating_entities' => NULL,
                'reg_authority' => 'CENTRAL BANK OF BAHRAIN',
                'reg_authority_web_link' => 'https://www.cbb.gov.bh/page-p-profile.htm',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            14 => 
            array (
                'id' => 37465,
                'created_by' => 'admin',
                'created_date' => '2020-10-09 06:19:11.279142',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-09 06:19:11.279142',
            'country_name' => 'UNITED ARAB EMIRATES(UAE)',
            'law_governing_ins' => 'UAE Insurance Law (Federal Law No. 6 of 2007).',
            'no_of_operating_entities' => 'Insurance companies    (NATIONAL -35  FOREIGN-27)',
                'reg_authority' => 'UAE INSURANCE AUTHORITY',
                'reg_authority_web_link' => 'https://ia.gov.ae/en',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            15 => 
            array (
                'id' => 38167,
                'created_by' => 'admin',
                'created_date' => '2020-10-09 06:24:15.038506',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-09 06:24:15.038506',
                'country_name' => 'JORDAN',
            'law_governing_ins' => '(i)The Civil Act No. (43) for the year 1976, (ii) Insurance Supervision Act No. (33) for the year 1999, (iii)Companies Act No. (22) for the year 1997',
                'no_of_operating_entities' => NULL,
                'reg_authority' => 'JORDAN INSURANCE FEDERATION',
                'reg_authority_web_link' => 'http://www.joif.org/Default.aspx',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            16 => 
            array (
                'id' => 38543,
                'created_by' => 'admin',
                'created_date' => '2020-10-09 11:54:01.102653',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-09 11:54:01.102653',
                'country_name' => 'CYPRUS',
            'law_governing_ins' => 'Insurance Services and other Related Issues Law of 2002 (the 2002 Law)',
                'no_of_operating_entities' => NULL,
                'reg_authority' => 'OFFICE OTHE SUPERINTENDENT OF INSURANCE',
                'reg_authority_web_link' => 'http://mof.gov.cy/en/directorates-units/insurance-companies-control-service',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            17 => 
            array (
                'id' => 38892,
                'created_by' => 'admin',
                'created_date' => '2020-10-09 12:18:48.770662',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-09 12:18:48.770662',
                'country_name' => 'PALESTINE',
            'law_governing_ins' => 'Insurance Law No. (20) of 2005',
                'no_of_operating_entities' => NULL,
                'reg_authority' => 'PALESTINE CAPITAL MARKET AUTHORITY',
                'reg_authority_web_link' => 'http://www.pcma.ps/portal/english/Pages/Home.aspx',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            18 => 
            array (
                'id' => 39910,
                'created_by' => 'admin',
                'created_date' => '2020-10-13 11:24:54.981669',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-13 11:24:54.981669',
                'country_name' => 'LEBANON',
            'law_governing_ins' => 'Decree No. 9812 of 1968 (Insurance Law)',
                'no_of_operating_entities' => 'Incorporated companies : 50',
                'reg_authority' => 'INSURANCE CONTROL COMMISSION',
                'reg_authority_web_link' => 'http://www.insurancecommission.gov.lb/',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            19 => 
            array (
                'id' => 40233,
                'created_by' => 'admin',
                'created_date' => '2020-10-13 11:27:15.582605',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-13 11:27:15.582605',
                'country_name' => 'ALGERIA',
                'law_governing_ins' => 'Insurance Act of 2006',
                'no_of_operating_entities' => '24',
                'reg_authority' => 'Ministere Des Finances',
                'reg_authority_web_link' => 'http://www.mf.gov.dz/',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            20 => 
            array (
                'id' => 40306,
                'created_by' => 'admin',
                'created_date' => '2020-10-13 11:28:13.606824',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-13 11:28:13.606824',
                'country_name' => 'Libya',
                'law_governing_ins' => '',
                'no_of_operating_entities' => '12',
                'reg_authority' => 'Ministry of Economy and Trade-Insurance Regulatory Authority',
                'reg_authority_web_link' => 'http://www.isacly.org/',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            21 => 
            array (
                'id' => 40380,
                'created_by' => 'admin',
                'created_date' => '2020-10-13 11:30:25.187955',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-13 11:30:25.187955',
                'country_name' => 'MAURITANIA',
                'law_governing_ins' => '',
                'no_of_operating_entities' => '8',
                'reg_authority' => 'Ministere de Commerce',
                'reg_authority_web_link' => 'http://www.commerce.gov.mr/',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            22 => 
            array (
                'id' => 40412,
                'created_by' => 'admin',
                'created_date' => '2020-10-13 11:32:38.693425',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-13 11:32:38.693425',
                'country_name' => 'MOROCCO',
            'law_governing_ins' => 'Dahir n ° 1-02-238 of 25 Rejeb 1423 (October 3, 2002) promulgating Law n ° 17-99 relating to the insurance code as amended and supplemented',
                'no_of_operating_entities' => '24',
            'reg_authority' => 'The Insurance and Social Welfare Supervisory Authority (ACAPS)',
                'reg_authority_web_link' => 'https://www.acaps.ma/en',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            23 => 
            array (
                'id' => 40589,
                'created_by' => 'admin',
                'created_date' => '2020-10-13 11:36:27.710173',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-13 11:36:27.710173',
                'country_name' => 'SOUTH SUDAN',
                'law_governing_ins' => 'Insurance Act, 2010',
                'no_of_operating_entities' => '8',
                'reg_authority' => 'Central bank of South Sudan',
                'reg_authority_web_link' => 'https://www.bankofsouthsudan.org/',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            24 => 
            array (
                'id' => 40621,
                'created_by' => 'admin',
                'created_date' => '2020-10-13 11:37:25.950612',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-13 11:37:25.950612',
                'country_name' => 'SUDAN',
                'law_governing_ins' => 'Insurance Control Act of 2016',
                'no_of_operating_entities' => '16',
                'reg_authority' => 'MINISTRY OF FINANCE AND ECONOMIC PLANNING',
                'reg_authority_web_link' => 'http://mof.gov.sd/en/about/welcom',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
            25 => 
            array (
                'id' => 40778,
                'created_by' => 'admin',
                'created_date' => '2020-10-13 11:38:49.355425',
                'last_modified_by' => 'admin',
                'last_modified_date' => '2020-10-13 11:38:49.355425',
                'country_name' => 'TUNISIA',
                'law_governing_ins' => 'INSURANCE CODE 1992',
                'no_of_operating_entities' => '25',
                'reg_authority' => 'General Insurance Committee',
                'reg_authority_web_link' => 'http://www.cga.gov.tn/index.php?id=104',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
        ));
        
        
    }
}