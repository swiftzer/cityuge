<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            array('id' => '1', 'initial' => 'AC', 'title_en' => 'Department of Accountancy', 'title_zh' => '會計學系', 'url' => 'http://www.cb.cityu.edu.hk/ac/'),
            array('id' => '2', 'initial' => 'SS', 'title_en' => 'Department of Applied Social Sciences', 'title_zh' => '應用社會科學系', 'url' => 'http://ssweb.cityu.edu.hk/'),
            array('id' => '3', 'initial' => 'AIS', 'title_en' => 'Department of Asian and International Studies', 'title_zh' => '亞洲及國際學系', 'url' => 'http://www6.cityu.edu.hk/ais/'),
            array('id' => '4', 'initial' => 'BCH', 'title_en' => 'Department of Biology and Chemistry', 'title_zh' => '生物及化學系', 'url' => 'http://www6.cityu.edu.hk/bhdbapp/deptweb/'),
            array('id' => '5', 'initial' => 'LT', 'title_en' => 'Department of Linguistics and Translation', 'title_zh' => '翻譯及語言學系', 'url' => 'http://lt.cityu.edu.hk/'),
            array('id' => '6', 'initial' => 'ACE', 'title_en' => 'Department of Architecture and Civil Engineering', 'title_zh' => '建築學及土木工程學系', 'url' => 'http://bccw.cityu.edu.hk/'),
            array('id' => '7', 'initial' => 'CS', 'title_en' => 'Department of Computer Science', 'title_zh' => '電腦科學系', 'url' => 'http://www.cityu.edu.hk/cs/'),
            array('id' => '8', 'initial' => 'EF', 'title_en' => 'Department of Economics and Finance', 'title_zh' => '經濟及金融系', 'url' => 'http://www.cb.cityu.edu.hk/ef/'),
            array('id' => '9', 'initial' => 'EE', 'title_en' => 'Department of Electronic Engineering', 'title_zh' => '電子工程學系', 'url' => 'http://www.ee.cityu.edu.hk/'),
            array('id' => '10', 'initial' => 'EN', 'title_en' => 'Department of English', 'title_zh' => '英文系', 'url' => 'http://www.english.cityu.edu.hk/en/'),
            array('id' => '11', 'initial' => 'IS', 'title_en' => 'Department of Information Systems', 'title_zh' => '資訊系統學系', 'url' => 'http://www.cb.cityu.edu.hk/is/'),
            array('id' => '12', 'initial' => 'MGT', 'title_en' => 'Department of Management', 'title_zh' => '管理學系', 'url' => 'http://www.cb.cityu.edu.hk/mgt/'),
            array('id' => '13', 'initial' => 'MS', 'title_en' => 'Department of Management Sciences', 'title_zh' => '管理科學系', 'url' => 'http://www.cb.cityu.edu.hk/ms/'),
            array('id' => '14', 'initial' => 'MKT', 'title_en' => 'Department of Marketing', 'title_zh' => '市場營銷學系', 'url' => 'http://www.cb.cityu.edu.hk/mkt/'),
            array('id' => '15', 'initial' => 'MA', 'title_en' => 'Department of Mathematics', 'title_zh' => '數學系', 'url' => 'http://www6.cityu.edu.hk/ma/'),
            array('id' => '16', 'initial' => 'MBE', 'title_en' => 'Department of Mechanical and Biomedical Engineering', 'title_zh' => '機械及生物醫學工程學系', 'url' => 'http://www.cityu.edu.hk/mbe/'),
            array('id' => '17', 'initial' => 'COM', 'title_en' => 'Department of Media and Communication', 'title_zh' => '媒體與傳播系', 'url' => 'http://www6.cityu.edu.hk/com/'),
            array('id' => '18', 'initial' => 'AP', 'title_en' => 'Department of Physics and Materials Science', 'title_zh' => '物理及材料科學系', 'url' => 'http://www.ap.cityu.edu.hk/'),
            array('id' => '19', 'initial' => 'POL', 'title_en' => 'Department of Public Policy', 'title_zh' => '公共政策學系', 'url' => 'http://www6.cityu.edu.hk/pol/'),
            array('id' => '20', 'initial' => 'SEEM', 'title_en' => 'Department of Systems Engineering and Engineering Management', 'title_zh' => '系統工程及工程管理學系', 'url' => 'http://www.cityu.edu.hk/seem/'),
            array('id' => '21', 'initial' => 'BST', 'title_en' => 'Division of Building Science and Technology', 'title_zh' => '建築科技學部', 'url' => 'http://www6.cityu.edu.hk/bst/'),
            array('id' => '22', 'initial' => 'SCM', 'title_en' => 'School of Creative Media', 'title_zh' => '創意媒體學院', 'url' => 'http://www.scm.cityu.edu.hk/'),
            array('id' => '23', 'initial' => 'SEE', 'title_en' => 'School of Energy and Environment', 'title_zh' => '能源及環境學院', 'url' => 'http://www6.cityu.edu.hk/see/'),
            array('id' => '24', 'initial' => 'SLW', 'title_en' => 'School of Law', 'title_zh' => '法律學院', 'url' => 'http://www6.cityu.edu.hk/slw/'),
            array('id' => '25', 'initial' => 'CB', 'title_en' => 'College of Business', 'title_zh' => '商學院', 'url' => 'http://www.cb.cityu.edu.hk/'),
            array('id' => '26', 'initial' => 'CLASS', 'title_en' => 'College of Liberal Arts and Social Sciences', 'title_zh' => '人文社會科學院', 'url' => 'http://www6.cityu.edu.hk/class/'),
            array('id' => '27', 'initial' => 'CSE', 'title_en' => 'College of Science and Engineering', 'title_zh' => '科學及工程學院', 'url' => 'http://www6.cityu.edu.hk/cse/cms/'),
            array('id' => '28', 'initial' => 'SCOPE', 'title_en' => 'School of Continuing and Professional Education', 'title_zh' => '專業進修學院', 'url' => 'http://www.scope.edu/'),
            array('id' => '29', 'initial' => 'CAH', 'title_en' => 'Department of Chinese and History', 'title_zh' => '中文及歷史學系', 'url' => 'http://cah.cityu.edu.hk/'),
            array('id' => '30', 'initial' => 'ELC', 'title_en' => 'English Language Centre', 'title_zh' => '英語中心', 'url' => 'http://www.cityu.edu.hk/elc/'),
            array('id' => '31', 'initial' => 'BMS', 'title_en' => 'Department of Biomedical Sciences', 'title_zh' => '生物醫學系', 'url' => 'http://www.cityu.edu.hk/bms/')
        ]);
    }
}
