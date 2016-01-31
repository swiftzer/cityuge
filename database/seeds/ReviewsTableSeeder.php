<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    private $data = [
        array('id' => '623', 'course_id' => '1', 'semester' => '1213B', 'instructor' => '忘了', 'grade' => 'B-', 'gp' => '2.7', 'workload' => '5', 'body' => '<p>讀到想死，D英文難到....又多assignment....做到半夜...</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-08-20 02:22:22', 'updated_at' => '2013-08-20 02:22:22', 'deleted_at' => NULL),
        array('id' => '722', 'course_id' => '1', 'semester' => '1213B', 'instructor' => '李果', 'grade' => 'B-', 'gp' => '2.7', 'workload' => '4', 'body' => '<p>好多野做, 每堂leature有worksheet計attendance, tutor又計attendance<br />
Easter會番大陸做考察, 考察完要做本booklet(每個景點兩三條問題,仲要係個人見解), booklet之外仲要寫番幾百字report<br />
Final project話就話分gp做, 實際上係自己做自己果part, 個人咁計分, 有present, 要係blackboard comment其他gp份project, 最後每人寫2000字report</p><p>不過上堂係有趣既</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-08-30 02:41:34', 'updated_at' => '2013-08-30 02:41:34', 'deleted_at' => NULL),
        array('id' => '790', 'course_id' => '1', 'semester' => '1213B', 'instructor' => '李果', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '4', 'body' => '<p>The content of lecture is quite interesting and enjoyable.<br />
we took a field trip to mainland for five days and it is unforgettable,<br />
we visited many culture heritage that we cannot easily go with some ordinary tour.<br />
Teachers are helpful and kind also!</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-12-22 16:17:28', 'updated_at' => '2013-12-22 16:17:28', 'deleted_at' => NULL),
        array('id' => '980', 'course_id' => '1', 'semester' => '1314A', 'instructor' => '李果', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '4', 'body' => '<p>workload較大，<br />
睇完份reading要做presentation。</p><p>期間要返大陸考察，<br />
好開心<br />
個邊d串燒好好食，旅程好愉快，<br />
返黎要交portfolio，<br />
final就交埋paper。</p><p>但上tutorial好輕鬆，<br />
李果全程食香口膠，<br />
我地只要安靜聽人present，<br />
就可以任俾自己d野，<br />
好正！</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-03 17:57:01', 'updated_at' => '2014-01-03 17:57:01', 'deleted_at' => NULL),
        array('id' => '1121', 'course_id' => '1', 'semester' => '1314A', 'instructor' => '李果', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '4', 'body' => '<p>Lecture 同 Tutorial 要上足<br />
有一次present , 講返篇reading 既內容 (~3人1 group)<br />
篇reading 算深<br />
有大陸考察, 一份trip report<br />
final 仲有paper</p><p>學到嘢, grade 都算唔錯  <br />
中文好必讀</p><p>在我所見, 有兩對情侶reg <br />
可以順便join 埋個 trip 當拍拖<br />
我依d 毒J 就得個睇字</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-07 10:24:27', 'updated_at' => '2014-01-07 10:24:27', 'deleted_at' => NULL),
        array('id' => '1277', 'course_id' => '1', 'semester' => '1314A', 'instructor' => '李果', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '4', 'body' => '<p>用心做功課同present 就ok <br />
篇reading 比較深，project 自己組定題目<br />
李果好好人 <br />
撞正有內地同學同group仲好，一定唔會有free rider</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-10 15:39:06', 'updated_at' => '2014-01-10 15:39:06', 'deleted_at' => NULL),
        array('id' => '2806', 'course_id' => '1', 'semester' => '1516A', 'instructor' => '李果', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '3', 'body' => '<p>工作量：<br />
1）每堂評論 (超容易)<br />
每堂lecture都要寫少少野（不過求其寫就得，或者google跟著抄，反正係評論唔係資料性，上lecture個陣其實唔洗聽），我就走左兩堂</p><p>2）Present (頗容易)<br />
輕鬆啦，就甘睇份資料summarize就得，一晚KO</p><p>3）考察＋考察報告 （一般）<br />
都唔係甘難，事後search番都得，兩日做得曬</p><p>4）網上評論（超容易）<br />
唔難，可以參考下人地點評論，再google<br />
p.s. 但重點係可以睇人地大綱，睇下自己篇論文差咩</p><p>5）大綱＋期末論文（稍微困難）<br />
要花四五日左右，但勝在計個人分，有無freerider都無所謂，最緊要係一開始個大綱做好d, 多d問tutor。前言最多咪自己做曬，都輕鬆既。</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2016-01-10 10:03:18', 'updated_at' => '2016-01-10 10:03:18', 'deleted_at' => NULL),
        array('id' => '98', 'course_id' => '2', 'semester' => '1112B', 'instructor' => 'Go???', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '2', 'body' => '<p>watching films+2 film presentations+2 film journals</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-14 16:21:10', 'updated_at' => '2013-05-14 16:21:10', 'deleted_at' => NULL),
        array('id' => '147', 'course_id' => '2', 'semester' => '1213A', 'instructor' => 'French', 'grade' => 'A', 'gp' => '4.0', 'workload' => '1', 'body' => '<p>1 hea present<br />
2 Journal(Finished each within one night)</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-19 11:29:56', 'updated_at' => '2013-05-19 11:29:56', 'deleted_at' => NULL),
        array('id' => '156', 'course_id' => '2', 'semester' => '1213A', 'instructor' => 'paulos??', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '1', 'body' => '<p>very hea</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-19 12:13:01', 'updated_at' => '2013-05-19 12:13:01', 'deleted_at' => NULL),
        array('id' => '336', 'course_id' => '2', 'semester' => '1213B', 'instructor' => 'Casey Man-sum LEE and Gyorgy', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '2', 'body' => '<p>2份assignment + 1 個present + 1個quiz<br />
基本上好hea, 但係tutorial 唔好走+唔好遲到<br />
可能係我份assignment 寫得唔好... 所以先B+...</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-31 12:30:39', 'updated_at' => '2013-05-31 12:30:39', 'deleted_at' => NULL),
        array('id' => '348', 'course_id' => '2', 'semester' => '1213B', 'instructor' => '忘了', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '2', 'body' => '<p>professor口音太重听不懂<br />
但上课放的电影非常有趣<br />
激发对电影的兴趣<br />
内容非常轻松<br />
不上会后悔</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-31 17:08:05', 'updated_at' => '2013-05-31 17:08:05', 'deleted_at' => NULL),
        array('id' => '528', 'course_id' => '2', 'semester' => '1213B', 'instructor' => 'French', 'grade' => 'A+', 'gp' => '4.3', 'workload' => '1', 'body' => '<p>Excellent</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-06-24 12:51:35', 'updated_at' => '2013-06-24 12:51:35', 'deleted_at' => NULL),
        array('id' => '529', 'course_id' => '2', 'semester' => '1213B', 'instructor' => '??', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '1', 'body' => '<p>Good choice</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-06-24 12:53:47', 'updated_at' => '2013-06-24 12:53:47', 'deleted_at' => NULL),
        array('id' => '991', 'course_id' => '2', 'semester' => '1213B', 'instructor' => 'KLEIN Wilhelm E.', 'grade' => 'C+', 'gp' => '2.3', 'workload' => '2', 'body' => '<p>聽人講法國人PALOS就好grade, 但係德國人KLEIN Wilhelm E.就比較難grade, 個陣waiting list輪街症,排到仲以為執到寶&gt;.&lt; 小心唔好reg錯人!!!</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-04 01:42:16', 'updated_at' => '2014-01-04 01:42:16', 'deleted_at' => NULL),
        array('id' => '1114', 'course_id' => '2', 'semester' => '1314A', 'instructor' => 'KLEIN', 'grade' => 'B-', 'gp' => '2.7', 'workload' => '2', 'body' => '<p>點解唔同tutor可以爭咁遠，我都想要A range</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-07 07:33:43', 'updated_at' => '2014-01-07 07:33:43', 'deleted_at' => NULL),
        array('id' => '1141', 'course_id' => '2', 'semester' => '1314A', 'instructor' => 'PALOS', 'grade' => 'B', 'gp' => '3.0', 'workload' => '2', 'body' => '<p>輕鬆之選<br />
我英文唔太好, present太緊張講到1999<br />
而且最尾個quiz 知到既戲唔太多所以有1,2個戲名用左中文寫</p><p>總結, 英文好既人會係好grade之選<br />
工作量好少得2個film review,1個present,最尾1個quiz</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-08 04:12:33', 'updated_at' => '2014-01-08 04:12:33', 'deleted_at' => NULL),
        array('id' => '1195', 'course_id' => '2', 'semester' => '1314A', 'instructor' => 'GYXXXX PALOS', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '2', 'body' => '<p>堂其實都係上黎訓, 叉電, 走<br />
有D戲係幾好睇 猶其&quot;麥兜&quot;<br />
有attendance要簽, lecture, tutorial, attendance各少簽左一次<br />
佢有時會唔簽, 但你唔會捉得到<br />
2份film review, 1份present (1-2ppl/gp), final quiz 但其實好多都只係common sense.<br />
係輕鬆既</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-08 13:56:31', 'updated_at' => '2014-01-08 13:56:31', 'deleted_at' => NULL),
        array('id' => '1202', 'course_id' => '2', 'semester' => '1314A', 'instructor' => 'KLEIN', 'grade' => 'C+', 'gp' => '2.3', 'workload' => '2', 'body' => '<p>話晒英文唔差, present 都算fluent, film review又ok~<br />
最後, KLEIN Wilhelm E.(德國人)俾個C+我, 好睇唔好食。</p><p>不過公道d講, 另一個 tutor PALOS(法國人)聽聞係好grade~</p><p>利申: AS Usage of English(UE) - C</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-08 14:45:22', 'updated_at' => '2014-01-08 14:45:22', 'deleted_at' => NULL),
        array('id' => '1265', 'course_id' => '2', 'semester' => '1314A', 'instructor' => 'PAXXX', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '2', 'body' => '<p>good choice in area 1</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-10 08:33:54', 'updated_at' => '2014-01-10 08:33:54', 'deleted_at' => NULL),
        array('id' => '1269', 'course_id' => '2', 'semester' => '1314A', 'instructor' => 'KLEIN', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '1', 'body' => '<p>堂堂都睇戲, 雖然有D point get唔到, 不過都不致明白個course想教D咩<br />
交兩份輕鬆到爆的assignment, tutorial就只係每一組做一個present, 然後free talk<br />
Sem尾會有一個難到嘔的test, 佢比的note又只有一大堆圖片, 想溫都溫唔到幾多, 不過佔分好少, 所以無咩所謂</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-10 11:36:39', 'updated_at' => '2014-01-10 11:36:39', 'deleted_at' => NULL),
        array('id' => '1418', 'course_id' => '2', 'semester' => '1314A', 'instructor' => '德國人', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '2', 'body' => '<p>工作量低<br />
上堂可以訓覺...<br />
Present 認真D就得<br />
最後個QUIZ冇咩溫到就入左去</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-19 17:39:45', 'updated_at' => '2014-01-19 17:39:45', 'deleted_at' => NULL),
        array('id' => '1495', 'course_id' => '2', 'semester' => '1314B', 'instructor' => 'German', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '2', 'body' => '<p>good for those who love cinema!</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-05-30 03:41:33', 'updated_at' => '2014-05-30 03:41:33', 'deleted_at' => NULL),
        array('id' => '1551', 'course_id' => '2', 'semester' => '1314B', 'instructor' => '德國佬', 'grade' => 'B-', 'gp' => '2.7', 'workload' => '2', 'body' => '<p>兩篇電影閱後感<br />
一個 present<br />
Examination 再係問係對D電影有咩意見/感想....<br />
Open book/pc<br />
不過無用，答吹水野係ok<br />
堂可以走曬<br />
英文好就好輕鬆<br />
最重要的係唔好走tutor 多發言，同用心做present</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-05-31 07:15:22', 'updated_at' => '2014-05-31 07:15:22', 'deleted_at' => NULL),
        array('id' => '1558', 'course_id' => '2', 'semester' => '1314B', 'instructor' => 'Palos', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '2', 'body' => '<p>2篇journal at least 600 words, 冇乜講過guidelines但應該唔洗好深入分析套戲<br />
lecture有好多唔同課題非常有趣<br />
有一個presentation都係唔洗好深入既分析<br />
最尾一個open book quiz 只係寫下感想,唔算太難<br />
呢科絕對學到野又輕鬆</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-05-31 08:56:36', 'updated_at' => '2014-05-31 08:56:36', 'deleted_at' => NULL),
        array('id' => '1563', 'course_id' => '2', 'semester' => '1314B', 'instructor' => 'Palos', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '1', 'body' => '<p>Palos is super nice and the course is really fabulous and relaxing! the journals and presentation are not difficult, one just need to put some own feelings and critical thinking into it</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-05-31 15:22:58', 'updated_at' => '2014-05-31 15:22:58', 'deleted_at' => NULL),
        array('id' => '1994', 'course_id' => '2', 'semester' => '1415A', 'instructor' => 'Palos', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '1', 'body' => '<p>2份film reviews<br />
一個film presentation (1-2人)<br />
最尾lecture一個final quiz</p><p>Palos very nice 上堂hea 但多數take attendance<br />
lecture可以完全唔聽<br />
輕鬆好grade必選</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2015-01-06 07:15:46', 'updated_at' => '2015-01-06 07:15:46', 'deleted_at' => NULL),
        array('id' => '2034', 'course_id' => '2', 'semester' => '1415A', 'instructor' => 'Palos', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '1', 'body' => '<p>輕鬆好grade之選</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2015-01-07 04:29:23', 'updated_at' => '2015-01-07 04:29:23', 'deleted_at' => NULL),
        array('id' => '2309', 'course_id' => '2', 'semester' => '1415A', 'instructor' => 'Palos', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '2', 'body' => '<p>必選GE!!!!!:D<br />
上堂好開心,好中意上佢d lecture, 睇電影片段so interesting~~<br />
得1個present,2篇journals, 1個quiz<br />
冇得再上佢堂真係太sad啦:(<br />
 要拉grade一定簡le個 GE!!</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2015-02-13 07:53:32', 'updated_at' => '2015-02-13 07:53:32', 'deleted_at' => NULL),
        array('id' => '2330', 'course_id' => '2', 'semester' => '1314A', 'instructor' => 'Gyorgy Palos', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '1', 'body' => '<p>喜欢电影的同学必选GE，是功课很轻但是能学到东西的课。<br />
Palos很喜欢东方电影，present选一部电影问一个听起来有深度的问题，比方说cultural difference / identity 之类的在用我们中国人的思维解释一下就有高分，剩下两个journals字数不多，拿了A-是因为lecture notes之复习了一个小时= =。</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2015-05-03 10:51:36', 'updated_at' => '2015-05-03 10:51:36', 'deleted_at' => NULL),
        array('id' => '47', 'course_id' => '3', 'semester' => '1213A', 'instructor' => 'Lawance', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '2', 'body' => '<p>OK輕鬆既... 係要寫下PAPER 上堂多D出聲講野</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-13 01:08:46', 'updated_at' => '2013-05-13 01:08:46', 'deleted_at' => NULL),
        array('id' => '82', 'course_id' => '3', 'semester' => '1112S', 'instructor' => '张为群', 'grade' => 'A', 'gp' => '4.0', 'workload' => '1', 'body' => '<p>按时上课，小组作业做好点，改写的写好就OK了</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-14 12:37:27', 'updated_at' => '2013-05-14 12:37:27', 'deleted_at' => NULL),
        array('id' => '151', 'course_id' => '3', 'semester' => '1112B', 'instructor' => '盧嘉琪', 'grade' => 'A', 'gp' => '4.0', 'workload' => '1', 'body' => '<p>無咩野做, 只係一個小組報告, 一篇文。</p>', 'admin_note' => '<p>錯 sem</p>', 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-19 11:41:43', 'updated_at' => '2013-08-06 14:02:45', 'deleted_at' => '2013-08-06 14:02:45'),
        array('id' => '209', 'course_id' => '3', 'semester' => '1213A', 'instructor' => '董', 'grade' => 'D', 'gp' => '1.0', 'workload' => '4', 'body' => '<p>有堂課 論文 PRESENT 當你完全對中國古典冇興趣就千其咪揀</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-20 16:38:16', 'updated_at' => '2013-05-20 16:38:16', 'deleted_at' => NULL),
        array('id' => '386', 'course_id' => '3', 'semester' => '1213B', 'instructor' => '董就雄', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '3', 'body' => '<p>董老師好重視論文格式，跟足規格應該問題不大<br />
大課最好上足，因為2分就1個sub grade<br />
上堂多發表意見，爭取表現</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-06-04 03:11:29', 'updated_at' => '2013-06-04 03:11:29', 'deleted_at' => NULL),
        array('id' => '475', 'course_id' => '3', 'semester' => '1213A', 'instructor' => '董就雄', 'grade' => 'B', 'gp' => '3.0', 'workload' => '3', 'body' => '<p>要做present+2篇600字評論+1篇2500字論文,仲有課堂表現分<br />
最煩係論文,其他不過不失,唔太辛苦</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-06-11 17:11:57', 'updated_at' => '2013-06-11 17:11:57', 'deleted_at' => NULL),
        array('id' => '628', 'course_id' => '3', 'semester' => '1213S', 'instructor' => '張為群', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '3', 'body' => '<p>一定唔可以走堂，但上堂可以唔聽書就做到堂課，網上評論同論文題目都唔難，但搵gpmates小心啲，唔係你份project會做得辛苦少少</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-08-20 03:53:13', 'updated_at' => '2013-08-20 03:53:13', 'deleted_at' => NULL),
        array('id' => '808', 'course_id' => '3', 'semester' => '1314A', 'instructor' => '董就紅老師', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '4', 'body' => '<p>小弟有幸可以在董就紅老師手上拿到A-.確實不易</p><p>首先唔可以走課同遲到，因為遲左15MIN就唔俾你做堂測,，而課課都有堂涮，雖考你有冇聽下書,但一份堂測佔1%</p><p>其次你要搵好多資料去做口頭報告，去LIB一定唔少得</p><p>最後係做2300-2500字REPORT，又係要搵書，而且跟足格式</p><p>雖然辛苦，但學的野有D好玩，董老師都好有趣，而且很願意解答同學的問題</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-12-30 22:40:48', 'updated_at' => '2013-12-30 22:40:48', 'deleted_at' => NULL),
        array('id' => '809', 'course_id' => '3', 'semester' => '1314A', 'instructor' => '盧嘉琪', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '3', 'body' => '<p>口頭報告俾評分組別批評得一塌糊塗<br />
組員又玩嘢，以為死硬<br />
好采咁都B+到<br />
盧老師好肯答人<br />
email電話定consult都覆<br />
係報告題目有啲難<br />
要問多啲先知佢大概想要咩<br />
如果唔係好易離題</p><p>大課係郭錦雄老師錢華老師嗰邊<br />
課題同老師都好有趣<br />
遲到都有堂課做</p>', 'admin_note' => '<p>Wrong post, should be GE1501</p>', 'ipv4' => '220.123.222.333', 'created_at' => '2013-12-31 00:02:43', 'updated_at' => '2013-12-31 00:02:43', 'deleted_at' => '2014-01-06 14:06:15'),
        array('id' => '815', 'course_id' => '3', 'semester' => '1314A', 'instructor' => '張為群', 'grade' => 'B', 'gp' => '3.0', 'workload' => '4', 'body' => '<p>一見到個成績開心到叫出嚟<br />
事關:<br />
走左4堂LECTURE (每堂LECTURE都要交堂課);<br />
期末論文HEA做;<br />
網上評論夠字就SUBMIT;<br />
得份佔15%既口頭報告認真左少少去做...<br />
(唔知格式,唔知要做咩,CON都冇CON過)<br />
本著坐C+望B-既心態等放GRADE...<br />
點知B左...</p><p>如果報1104一定要搵張為群做TUTOR</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-12-31 09:08:21', 'updated_at' => '2013-12-31 09:08:21', 'deleted_at' => NULL),
        array('id' => '840', 'course_id' => '3', 'semester' => '1213B', 'instructor' => '董就雄', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '3', 'body' => '<p>董就雄老師很有心教學，上堂輕鬆有趣。<br />
Workload:  一般般，一份presentation, 一份paper, 二份online discussions.<br />
讀文學經典學到好多野，而且grade 唔差</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-02 07:35:32', 'updated_at' => '2014-01-02 07:35:32', 'deleted_at' => NULL),
        array('id' => '889', 'course_id' => '3', 'semester' => '1314A', 'instructor' => '董就雄', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '3', 'body' => '<p>Lecture每堂都有短問題(內容深淺視乎tutor,i.e., 張為群係問ppt slide,考你有無瞓覺；董就雄就會要你用腦諗下野)，有無notes派都係視乎tutor，但遲到15mins就唔會畀你。<br />
Tutorial要舉手答問題加分，第一堂唔好遲到，唔係董老師會開你張相畀全班睇lol，分組前仲會叫你起身自我介紹。gp project要做多d research，有問題/大綱可以send email問，董老師會認真畀feedback；2個online assignment, 600字無難度，但見過有人寫近2000字⋯⋯final paper基本上係幾project嘅野寫多次，跟足董老師教的format整content,footnote,reference就得。<br />
lecture教嘅同gp project無咩關係，tutorial就主要聽人present，大概上7堂，董老師講野幾好笑，對中國文化有興趣就讀得幾開心。</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-03 02:00:01', 'updated_at' => '2014-01-03 02:00:01', 'deleted_at' => NULL),
        array('id' => '905', 'course_id' => '3', 'semester' => '1314A', 'instructor' => '董就雄', 'grade' => 'B', 'gp' => '3.0', 'workload' => '2', 'body' => '<p>工作量其實OK既,係要做下PROJECT姐,篇PAPER其實都係將PROJECT D 野照COP,再加d elaboration,基本上真係冇乜野做<br />
不過上堂要多d答下問題,<br />
同埋格式真係好重要,<br />
我就係因為篇paper冇跟到格式比人扣左分</p><p>上lecture好hea,基本上個兩個鐘係玩手機玩左佢<br />
如果唔係因為要做堂課,我諗好多人都唔會上個lecture,因為對你做project,paper一d用都冇<br />
d堂課又係廢廢地,基本上唔聽書,即時用手機都可以google到個答案出黎=]</p><p>good luck</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-03 06:25:14', 'updated_at' => '2014-01-03 06:25:14', 'deleted_at' => NULL),
        array('id' => '908', 'course_id' => '3', 'semester' => '1314A', 'instructor' => '董就雄', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '3', 'body' => '<p>1present+1individual論文(題目可以同present一樣,其實基本上就咁將present既內容轉化成論文就得了,所以論文不太難做)+2網上討論(1.評論一則新聞2.評論同學的網上討論,唔知系咪次次都評論新聞)<br />
上lecture堂堂都要做堂課,但其實d答案好簡單,有d系吹下水,有d就ppt要ans(我隔離個groupmate聽書,所以我可以唔洗聽),走佐幾堂,但系叫groupmate幫手系堂課紙寫幾隻字,所以attendance無少到<br />
上堂多d發表意見同問問題可以加分,董就雄真系好正!</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-03 08:31:08', 'updated_at' => '2014-01-03 08:31:08', 'deleted_at' => NULL),
        array('id' => '1045', 'course_id' => '3', 'semester' => '1314A', 'instructor' => '董就雄', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '3', 'body' => '<p>我之所以reg呢科係因為呢科d評分比較可以掌握係自己手上，小組表現只佔5個百分比，得論文同間中小小時評論，唔太影響平日主科的功課。成個課程我只係舉手一次，堂上參與競爭激烈，好似時事評論，參與主導權比本身讀文科的人主導。導師的consult時間唔夠，正係係口頭報告既時候consult，考試前幾日先完成論文，但成績竟然超出如料的。口頭報告，同學都問比較難的問題。<br />
呢科確實要睇好多好多資料，同論文格式要跟足，因為中心要求要同出面專業的相似。<br />
老師講明平時普通只要交足功課，上足堂會有B range。B+都比較難，要有A range就要有自己一套獨特見解。</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-05 04:22:27', 'updated_at' => '2014-01-05 04:22:27', 'deleted_at' => NULL),
        array('id' => '1688', 'course_id' => '3', 'semester' => '1314B', 'instructor' => 'Lisa', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '3', 'body' => '<p>A good course with nice lecturers ;)</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-06-13 03:18:24', 'updated_at' => '2014-06-13 03:18:24', 'deleted_at' => NULL),
        array('id' => '1771', 'course_id' => '3', 'semester' => '1314B', 'instructor' => '董老師', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '3', 'body' => '<p>同CCIV 既模式一樣<br />
上堂聽PRESENT問問題拎分<br />
大課有堂課唔可以成日走<br />
PRESENT HEA做左 論文拉番分<br />
都有B+已經好開心 董老師上堂氣氛幾好</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-08-06 11:04:55', 'updated_at' => '2014-08-06 11:04:55', 'deleted_at' => NULL),
        array('id' => '2054', 'course_id' => '3', 'semester' => '1415A', 'instructor' => '錢華', 'grade' => 'B', 'gp' => '3.0', 'workload' => '3', 'body' => '<p>大課TOPIC幾有趣,當故事聽都唔錯,但就堂堂都有堂課。<br />
堂課唔難既,有聽書就識做</p><p>呢個TUTOR都NICE既 但就好悶<br />
唔中意聽普通話就唔好簡啦</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2015-01-07 10:23:45', 'updated_at' => '2015-01-07 10:23:45', 'deleted_at' => NULL),
        array('id' => '2057', 'course_id' => '3', 'semester' => '1415A', 'instructor' => '張為群', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '4', 'body' => '<p>大課由十三個黎自Department of Chinese and History嘅人教<br />
全中文，睇唔到一粒英文字<br />
有啲堂正，有啲悶到想死<br />
但又唔走得<br />
因為最尾有堂課<br />
其實hea 做都有分<br />
我試過中間有一個鐘走出去食野<br />
番黎再做堂課都吹到兩咀<br />
假設十粒星係最難，堂課得一粒星<br />
因為絶大部分可以google<br />
輕鬆完成冇難度<br />
大課大致係咁<br />
結論係想拎a range 要堂堂上哂就有十分底分</p><p>Assessment:<br />
Class participation 20%<br />
堂課 10%<br />
Presentation15%<br />
Online Discussion and Reflection 15%<br />
論文40%</p><p>到tutor<br />
得5個人tutor比你揀<br />
上堂要積極, 要留心呀<br />
得6-7 堂,  2 hrs each<br />
有4堂人地present , 1堂自己組pre, 五個人一組, 唔會有free rider 出現<br />
因為PPT　個SLIDE 要加負責同學個名, 夾埋Pre 一個鐘<br />
唔可以hea<br />
Present 同個PPT有 五粒星<br />
但係我present 就衰左</p><p>一組pre 完亦係其他人拎平時分嘅時候<br />
舉手發問，建議最好答人地ppt 問嘅問題<br />
若發問要有建設性，唔好問啲傻仔問題, 之前有個光頭仔煩到想死,堂堂tutorial 都搞事<br />
一定要回應呀!!</p><p>tutor張老師好好, 好認真咁睇你present，絕對唔hea<br />
冇錯漏就已經好高分,可以拎稿讀,不需理會present 技巧，全程望住張紙讀都得<br />
佢亦都好耐心咁回覆每一個人, 上佢堂真心學到野,勝讀百年書<br />
絶對唔會hea住咁完一堂tutor</p><p>至於Online Discussion, 做兩次, 450 words each 三粒星 一日做完</p><p>認真做, 亦可以吹水, 但要一半講下文化經典(來自大課, 可以&quot;參&quot;考), 另一半講其現代應<br />
第一次: 第一步揀好其中一堂大課主題,再揀一則網上新聞, 然後吹下水講其現代應用<br />
第二次: base on 其他人嘅online discussion 再作評論</p><p>到論文,　2300-2500字 六粒星 , 中文好一日做完, 差嘅要兩日<br />
自訂題目, 冇乜guideline<br />
要打大綱<br />
原則係當中一半又係要講下中國文化經典(要參考大課)同另一半講其現代應用<br />
跟張老師好處係言之成理說服到佢就得, 唔洗太花巧<br />
論文用實例如新聞支持最佳，謝絕設例<br />
做論文重點要跟論文格式, 參考文獻要有註腳, 最好參考2-3個<br />
參考左要係頁尾加註腳<br />
依種格式一定要跟, 唔跟你就B l 硬<br />
有咩唔明可以con下佢, 建議你做完先, 做完問佢: 我咁做/用依種方法  得唔得?<br />
最好就tutor問佢, 佢完堂個陣同上堂都好樂意答大家問題</p><p>眼見work load 大到嘔，<br />
但係做落都唔算難，<br />
我中文底差到pk都有咁嘅成績，算係咁啦</p><p>努力同成績成正比<br />
個人認為付出一百, 收穫都有九十, 係大課同回應方面付出</p><p>眼見work load 大到嘔，<br />
但係做落都唔算難，<br />
我中文底差到pk都有咁嘅成績，算係咁啦</p><p>如果你想拎a RANGE<br />
每星期嘅 LECTURE 走唔甩，　我自己個grade 都係積積埋埋咁拎番黎個咋<br />
如果reg唔到張老師, 徐Lisa 都ok</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2015-01-07 11:04:35', 'updated_at' => '2015-01-07 11:04:35', 'deleted_at' => NULL),
        array('id' => '2097', 'course_id' => '3', 'semester' => '1415A', 'instructor' => '錢華', 'grade' => 'B', 'gp' => '3.0', 'workload' => '4', 'body' => '<p>Lecture每堂都有堂課即堂交, 內容深淺視乎Lecturer<br />
個Tutor平時上堂都幾悶, 不過都叫教得幾認真<br />
你email問佢野,通常好快答到你問既野<br />
佢講普通話, 但你可以用廣東話同佢溝通<br />
篇40%論文自己覺得寫得麻麻地都有B,算係咁啦</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2015-01-08 14:09:50', 'updated_at' => '2015-01-08 14:09:50', 'deleted_at' => NULL),
        array('id' => '2195', 'course_id' => '3', 'semester' => '1314B', 'instructor' => 'liza', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '3', 'body' => '<p>上lecture其實幾輕鬆 <br />
就算對中國經典冇興趣都可以聽下</p><p>wordload就有一個group work presentation, 兩篇評論各400字, 最後一篇千四字論文</p><p>presentation冇乜大問題 好似唔跟足guideline 講到D野都已經ok<br />
兩篇評論好快做完<br />
最後篇論文跟下範文既格式結構, 個分都唔會太衰</p><p>自問初中程度文筆 攞到B+已經好滿足</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2015-01-12 13:21:20', 'updated_at' => '2015-01-12 13:21:20', 'deleted_at' => NULL),
        array('id' => '2313', 'course_id' => '3', 'semester' => '1415A', 'instructor' => '钱华老师', 'grade' => 'A', 'gp' => '4.0', 'workload' => '3', 'body' => '<p>钱老师一如既往的认真负责，和GE1501相似，但难度和要求稍大，想用一样的努力得到高分不容易。无论大课练习还是小课讨论都要 认认真真做才行。收获很大，很喜欢这门课。非常希望中文与历史学系能继续开设更多GE课。</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2015-03-04 10:47:17', 'updated_at' => '2015-03-04 10:47:17', 'deleted_at' => NULL),
        array('id' => '2564', 'course_id' => '3', 'semester' => '1415S', 'instructor' => '鄭愛敏', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '4', 'body' => '<p>上堂好HEA 但每堂都有堂課最好唔好走<br />
但可以唔洗聽,因為同PROJECT無關係<br />
話就話係GROUP PROJECT, 但睇個人多<br />
內容都幾易做,所以唔係幾難</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2015-08-21 02:17:40', 'updated_at' => '2015-08-21 02:17:40', 'deleted_at' => NULL),
        array('id' => '2744', 'course_id' => '3', 'semester' => '1516A', 'instructor' => 'Lisa', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '2', 'body' => '<p>雖然得B+，但呢科整體上黎講係成個學期中上得最開心既一科<br />
上堂氣氛唔錯，功課量亦唔多</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2016-01-07 04:28:58', 'updated_at' => '2016-01-07 04:28:58', 'deleted_at' => NULL),
        array('id' => '84', 'course_id' => '4', 'semester' => '1213A', 'instructor' => '王景松 董就雄', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '2', 'body' => '<p>堂上很有趣 workload不多 有隨堂quiz所以要不能走堂<br />
final paper要求有點多，不過給分還算寬鬆 對中國音樂有點興趣推薦</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-14 13:52:52', 'updated_at' => '2013-05-14 13:52:52', 'deleted_at' => NULL),
        array('id' => '97', 'course_id' => '4', 'semester' => '1213A', 'instructor' => '记不到了···一个local女老师', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '1', 'body' => '<p>上的是english session的，所以专业词汇有点多，写final paper的时候翻译得想死&middot;&middot;&middot;&middot;<br />
平时还是很轻松的~又没有什么作业。但是不能随便走堂因为有随堂小测~</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-14 15:38:34', 'updated_at' => '2013-05-14 15:38:34', 'deleted_at' => NULL),
        array('id' => '130', 'course_id' => '4', 'semester' => '1112A', 'instructor' => 'Forgot - 最後揀教古琴果個', 'grade' => 'A', 'gp' => '4.0', 'workload' => '1', 'body' => '<p>二千字FINAL ~ 好易寫</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-19 11:08:08', 'updated_at' => '2013-05-19 11:08:08', 'deleted_at' => NULL),
        array('id' => '180', 'course_id' => '4', 'semester' => '1213A', 'instructor' => '唔記得', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '3', 'body' => '<p>Area 1 黎講算唔差, 上課睇下youtube ,聽下周杰倫,睇下粵劇,學下樂器有咩分別<br />
Workload :  4份堂課(隨機) +1present + 1 essay(2000字) + 2次小測+ 600字感想<br />
我自己份essay HEA做 應該都麻麻地.....<br />
再加上MISS左一堂撞岩有堂課(佔total 5% marks)<br />
但都有B+ O.O&quot;</p><p>好處:讀完真係有得著!! 唔似其他GE 讀完都唔知讀過咩黎!<br />
缺點: 為左唔好miss 堂課D 分,,,要上足堂,,同埋要留心聽書(唔鐘意中樂既人會覺得係地獄)</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-19 14:46:22', 'updated_at' => '2013-05-19 14:46:22', 'deleted_at' => NULL),
        array('id' => '203', 'course_id' => '4', 'semester' => '1213A', 'instructor' => '董就雄', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '3', 'body' => '<p>董就雄，非常有趣的老師，常常搞笑，上堂氣氛幾輕鬆</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-20 10:40:50', 'updated_at' => '2013-05-20 10:40:50', 'deleted_at' => NULL),
        array('id' => '237', 'course_id' => '4', 'semester' => '1213A', 'instructor' => 'Wong King Chung', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '2', 'body' => '<p>Good</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-23 12:21:18', 'updated_at' => '2013-05-23 12:21:18', 'deleted_at' => NULL),
        array('id' => '277', 'course_id' => '4', 'semester' => '1213A', 'instructor' => '女老師', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '2', 'body' => '<p>不算難讀!! 而且上課lecturer有熱誠教學! 不錯!<br />
工作量會有2個QUIZ(晤算難, 溫PPT就可以了!) 聽真d歌曲!<br />
最後有個大project,但都唔算難!</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-24 13:20:14', 'updated_at' => '2013-05-24 13:20:14', 'deleted_at' => NULL),
        array('id' => '801', 'course_id' => '4', 'semester' => '1112A', 'instructor' => '沒印象', 'grade' => 'B', 'gp' => '3.0', 'workload' => '2', 'body' => '<p>tutorial很輕鬆，只要聽音樂和寫工作紙就好。</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-12-27 13:37:55', 'updated_at' => '2013-12-27 13:37:55', 'deleted_at' => NULL),
        array('id' => '903', 'course_id' => '4', 'semester' => '1314A', 'instructor' => 'forgot', 'grade' => 'A+', 'gp' => '4.3', 'workload' => '1', 'body' => '<p>so easy, even an international student can handle it.<br />
luckily i didnt encounter any free riders</p>', 'admin_note' => '<p>成績與 AIMS 統計資料不符</p>', 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-03 05:09:17', 'updated_at' => '2014-08-02 07:50:32', 'deleted_at' => '2014-08-02 07:50:32'),
        array('id' => '943', 'course_id' => '4', 'semester' => '1314A', 'instructor' => 'cheung WK', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '3', 'body' => '<p>LECTURE大部分要番, 有計分堂課, 內容可聽可唔聽, 自己睇番NOTES就OK</p><p>TUTOR上民歌, 無野做跟住唱, 要寫REPORT, 其餘PRESENT</p><p>最後PORJECT唔算難</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-03 13:15:06', 'updated_at' => '2014-01-03 13:15:06', 'deleted_at' => NULL),
        array('id' => '1211', 'course_id' => '4', 'semester' => '1314A', 'instructor' => '張為群', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '3', 'body' => '<p>今個sem開始轉左計分方法...lecture返足堂會比較好。<br />
雖然唔點名...但期中同期末都有小測...有溫至少有一半分...<br />
而且有10堂有堂課...即上即問...所以基本上都要返。</p><p>tutor上民歌工作坊 ...跟住唱...有參與分...<br />
另外....仲要寫一篇短感想...1000字以內。<br />
張老師每堂都會點名...遲到缺席都會記低...<br />
project佔最多分...好free...方式...題目...都係自選...<br />
之後要present...不過大多唔夠時間講。</p><p>有興趣既話...會覺得學到唔少野...而且上得開心。<br />
無興趣的話....就會覺得又難又悶...唔知點做先好。<br />
廣東話上堂....廣東話present。</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-08 19:21:10', 'updated_at' => '2014-01-08 19:21:10', 'deleted_at' => NULL),
        array('id' => '1398', 'course_id' => '4', 'semester' => '1314A', 'instructor' => '張為群', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '4', 'body' => '<p>堂要上足 每堂都有堂課 test又唔難<br />
上Lecture幾有趣 覺得有意義唔曬我時間<br />
至於係project方面，我簡左個topic幾有趣所以成組都比心機 過程都好開心<br />
最尾一組4個人a- 1個B+<br />
不過你諗住Hea讀會好grade 果d友就咪簡</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-17 10:39:35', 'updated_at' => '2014-01-17 10:39:35', 'deleted_at' => NULL),
        array('id' => '2069', 'course_id' => '4', 'semester' => '1415A', 'instructor' => '張為群', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '2', 'body' => '<p>雖然要take attendance 但係上堂好輕鬆<br />
有中樂底或者鍾意中樂既，上堂會好開心<br />
不過上lecture 有時會講到一啲歷史野，都會幾悶吓<br />
lecture 係王景松教，冇break <br />
每堂都可能有一題題目比你做，有上過堂一定識<br />
兩次quiz 都唔算難，有聆聽題<br />
不過佢通常會係quiz 之前幾日先upload 之前啲ppt 上網<br />
有一份工作坊既功課，好似作文咁，寫好短就得<br />
tutor 係張為群<br />
佢好好人，你問佢嘢一定會答<br />
group project 要present 同交文字檔<br />
早少少開始做就唔會趕<br />
不過呢個course 好似之後會轉英文教<br />
可能會難咗</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2015-01-07 16:13:28', 'updated_at' => '2015-01-07 16:13:28', 'deleted_at' => NULL),
        array('id' => '19', 'course_id' => '5', 'semester' => '1213A', 'instructor' => '徐麗莎', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '2', 'body' => '<p>可以畫國畫，兩個網上評論，一個論文，每堂都有工作紙(計attendance)，同1501個計法一樣XD</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-11 16:24:07', 'updated_at' => '2013-05-11 16:24:07', 'deleted_at' => NULL),
        array('id' => '210', 'course_id' => '5', 'semester' => '1213A', 'instructor' => '徐麗莎', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '2', 'body' => '<p>評論唔難,論文問清楚方向做好就得啦:)</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-21 02:09:39', 'updated_at' => '2013-05-21 02:09:39', 'deleted_at' => NULL),
        array('id' => '493', 'course_id' => '5', 'semester' => '1213B', 'instructor' => 'Lisa', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '3', 'body' => '<p>其實工作量一般<br />
每堂都有工作紙計 attendance<br />
有兩堂畫國畫幾好玩，即堂教即堂畫，唔洗驚唔識<br />
一次Present+一篇論文<br />
同1501差唔多，只要present資料搵得足，論文都冇咩難度<br />
最緊要present前同交論文前提早少少去con下<br />
就冇咩問題</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-06-13 11:27:15', 'updated_at' => '2013-06-13 11:27:15', 'deleted_at' => NULL),
        array('id' => '990', 'course_id' => '5', 'semester' => '1314A', 'instructor' => 'LISA', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '2', 'body' => '<p>有2堂唔洗上, 2堂畫畫佔分好少,好似興趣班)<br />
, 1PRESENT 1論文 工作紙TAKE ATTENDENCE 2REFLECTIONS<br />
全部唔難, 上堂唔洗專心都OK</p><p>最緊要你PRESENT個陣比LISA睇到你睇左好多書去做(加哂係REFERENCE到)</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-04 01:34:35', 'updated_at' => '2014-01-04 01:34:35', 'deleted_at' => NULL),
        array('id' => '1188', 'course_id' => '5', 'semester' => '1314A', 'instructor' => '黃佩賢', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '3', 'body' => '<p>The teacher is very nice and passionate towards teaching, who has excellent academic background.<br />
The workload is normal, 2 online discussions, 2 paintings, each worksheet for each lesson and a final report of 1500 words per person.<br />
The lessons were fun, as the presentation of the teacher was attractive, and if you are interested in the history of Chinese arts.<br />
Highly recommend for students who have interests for Chinese arts.</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-08 11:44:18', 'updated_at' => '2014-01-08 11:44:18', 'deleted_at' => NULL),
        array('id' => '68', 'course_id' => '6', 'semester' => '1213A', 'instructor' => 'Mr. Wong Hoi To', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '2', 'body' => '<p>我sem A讀用英文讀1107<br />
呢一科比較hea<br />
不過好睇你抽中做邊個城市<br />
我好彩抽中做香港,所以覺得比較hea<br />
而且個導師幾好人,幾nice</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-13 15:53:38', 'updated_at' => '2013-05-13 15:53:38', 'deleted_at' => NULL),
        array('id' => '661', 'course_id' => '6', 'semester' => '1213S', 'instructor' => 'LAM Hok Chung', 'grade' => 'A', 'gp' => '4.0', 'workload' => '3', 'body' => '<p>Dr.LAM is quite an excellent teacher. He has adequate patience and distinctive opinions about many controversial points. He teaches more than knowledge---you would master the way of   independent learning through those talks with him for preparation of your pre3&amp;report.</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-08-22 01:58:16', 'updated_at' => '2013-08-22 01:58:16', 'deleted_at' => NULL),
        array('id' => '822', 'course_id' => '6', 'semester' => '1314A', 'instructor' => 'Calvin Wong Hoi-to', 'grade' => 'A', 'gp' => '4.0', 'workload' => '2', 'body' => '<p>用英文上堂，最適合文科底讀過史地嘅同學，理/商科嘅都唔使驚，內容唔算太深，但文科底的話係輕鬆好多。會有一個excursion trip，今個學期中文班去汕頭，英文班去上環、灣仔、跑馬地，要寫一份report。presentation就係揀一個中國城市 (包括港澳台)黎做，4個人一組，做完presentation (1hr，好多時間預備同consult)，然後交report。讀過最開心嘅GE course，你識揀啦！</p><p>I chose the English MOI class, and this course is most suitable for those who had studied history or geography before. No need to worry if you&#039;re from the science/business stream, it&#039;s not too hard anyway. There will be an excursion trip. In this semester, the Chinese class went to Swatow, where the English class went to Sheung Wan, Wan Chai and Happy Valley. Then write a report. For the presentation part, choose one Chinese city (including HK, Macau and Taiwan) to work on, with 4 members in a group. After the presentation, work on a report. It was the happiest GE course I have ever taken, I bet you can choose on your own!</p><p>溫馨提示︰中途或會有一個姓李嘅老師上幾堂，除非你真係對古代南京同上海好有興趣，唔係個話走堂啦，嘔白泡㗎。<br />
Warm reminder: You might encounter a teacher surnamed Li (for a few lessons). Unless you are very interested in ancient Nanking and Shanghai, or else please quit your class for that few lessons. Vielen langweilig!</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-02 04:18:00', 'updated_at' => '2014-01-02 04:18:00', 'deleted_at' => NULL),
        array('id' => '1194', 'course_id' => '6', 'semester' => '1314A', 'instructor' => 'Wong Hoi To', 'grade' => 'X', 'gp' => NULL, 'workload' => '5', 'body' => '<p>hea課，咪揀，伏到爆。<br />
人生總會遇上幾個人渣。<br />
你係咪重未遇過？必選。</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-08 13:52:31', 'updated_at' => '2014-01-08 13:52:31', 'deleted_at' => NULL),
        array('id' => '1297', 'course_id' => '6', 'semester' => '1314A', 'instructor' => 'Wong Hoi To Calvin', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '3', 'body' => '<p>Killer<br />
High Expectations, don&#039;t take unless you only want B range!!<br />
One compulsory field trip (whole day), one grp presentation (50 mins), one grp report (6000-7500 words), one field trip reflectin, one online discussion...<br />
Groupwork heavy unless you take it tgt with 4 frds to confirm no freeloader</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-11 14:27:21', 'updated_at' => '2014-01-11 14:27:21', 'deleted_at' => NULL),
        array('id' => '1364', 'course_id' => '6', 'semester' => '1213A', 'instructor' => 'Wong Hoi To', 'grade' => 'B-', 'gp' => '2.7', 'workload' => '3', 'body' => '<p>冇中史同history底,用英文上堂,對呢科冇興趣,做足哂所有功課上哂堂都係咁低分,當初冇得揀先揀呢科,有輿趣先好讀</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-15 04:22:05', 'updated_at' => '2014-01-15 04:22:05', 'deleted_at' => NULL),
        array('id' => '1646', 'course_id' => '6', 'semester' => '1314B', 'instructor' => '錢華', 'grade' => 'B', 'gp' => '3.0', 'workload' => '3', 'body' => '<p>1107講中國城市，係由三個老師負責教授，分別係錢華、林學忠同馮志弘。<br />
而今次導修係由錢華負責指導。</p><p>課堂內容方面：<br />
基本上聽同唔聽係無分別，因為同GROUP PROJECT係完全無關係，但因為每一堂都有堂課，計分的，所以我堂堂都上足。</p><p>演繹技巧上，錢華係超悶 X 10 ，上佢堂係好難頂，佢個人好囉嗦，好多口水，同埋好鬼煩。林學忠我都覺得好悶，佢語速好快，有時講講下野就停左好耐，好似DEAD AIR咁。馮志弘教書生動有趣，佢善於表達，我好有心機聽，可惜呢個SEM佢只係客串兩三堂。</p><p>整體：<br />
馮志弘＞林學忠＞錢華</p><p>入正題，導修方面，係報告中國城市既幾方面，包括政治，經濟，文化保育等等，做左口頭報告先，錢華都無咩講點樣做，多數同學都係做城市保育問題，之後寫返個個人報告，加埋註腳，出版資料。</p><p>個人唔推薦大家揀，雖然工作量唔多，但呢科太多資料要搵，感覺浪費時間。<br />
今年二月去左潮州考察，每日影一張相，每張相從城市角度寫幾百字！</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-06-06 03:30:15', 'updated_at' => '2014-06-06 03:30:15', 'deleted_at' => NULL),
        array('id' => '2790', 'course_id' => '6', 'semester' => '1516A', 'instructor' => 'Calvin Wong', 'grade' => 'C+', 'gp' => '2.3', 'workload' => '5', 'body' => '<p>I worked very hard on my group presentation and final paper. But ... disappointing grade.</p><p>I skipped some lectures, a couple of tutorials though. Workload too heavy, needed to relax a bit. Not sure whether I finished the online discussion (1 or 2?)</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2016-01-08 15:44:01', 'updated_at' => '2016-01-08 15:44:01', 'deleted_at' => NULL),
        array('id' => '70', 'course_id' => '7', 'semester' => '1213A', 'instructor' => '不記得', 'grade' => 'C+', 'gp' => '2.3', 'workload' => '4', 'body' => '<p>麻煩，低grade</p>', 'admin_note' => '<p>錯 sem + 太少資料</p>', 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-14 03:00:40', 'updated_at' => '2013-08-05 15:24:48', 'deleted_at' => '2013-08-05 15:24:48'),
        array('id' => '90', 'course_id' => '7', 'semester' => '1213A', 'instructor' => '郭錦雄', 'grade' => 'B-', 'gp' => '2.7', 'workload' => '4', 'body' => '<p>要求好高</p>', 'admin_note' => '<p>錯 sem</p>', 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-14 14:47:09', 'updated_at' => '2013-08-05 15:31:09', 'deleted_at' => NULL),
        array('id' => '217', 'course_id' => '7', 'semester' => '1112B', 'instructor' => '郭錦雄', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '2', 'body' => '<p>大部分導師有心教leature<br />
課堂練習易 (有時參考朋友/有時自己意見)<br />
presentation 要求唔高 (呀sir會比指引/意見/自己參考上年)<br />
三日兩夜番大陸考察,很好的體驗,又平 (做番張野當係final report)<br />
ps:聽足呀sir咁做就冇問題了</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-21 07:19:42', 'updated_at' => '2013-05-21 07:19:42', 'deleted_at' => NULL),
        array('id' => '283', 'course_id' => '7', 'semester' => '1213A', 'instructor' => '郭錦鴻', 'grade' => 'A', 'gp' => '4.0', 'workload' => '2', 'body' => '<p>都係一次present(group),一個輕鬆嘅三日考察,同一齊做個 group web,算好輕鬆。<br />
阿sir正,上堂氣氛好,學到嘢。</p>', 'admin_note' => '<p>錯 sem</p>', 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-24 16:09:37', 'updated_at' => '2013-08-05 15:31:09', 'deleted_at' => NULL),
        array('id' => '857', 'course_id' => '7', 'semester' => '1314A', 'instructor' => 'KWOK KAM HUNG', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '4', 'body' => '<p>一個ＰＲＥＳＥＮＴ，兩個網上討論，<br />
一個８００字ＣＩＴＩ　ＷＩＫＩ<br />
一個ＦＩＥＬＤ　ＴＲＩＰ　＋　一頁ＲＥＰＯＲＴ<br />
每次上完堂都有堂課，，，<br />
麻麻地＝　＝　　</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-02 11:21:19', 'updated_at' => '2014-01-02 11:21:19', 'deleted_at' => NULL),
        array('id' => '2569', 'course_id' => '7', 'semester' => '1415S', 'instructor' => '郭老師', 'grade' => 'A', 'gp' => '4.0', 'workload' => '3', 'body' => '<p>我基於各種原因只是為了可以去西安旅遊先reg呢科<br />
workload方面同CAH其他的GE無咩大差別<br />
只要好似小學生勤力程度便ok<br />
不過拎到A有點驚訝，以為只會得B+或A-</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2015-08-21 04:12:18', 'updated_at' => '2015-08-21 04:12:18', 'deleted_at' => NULL),
        array('id' => '2572', 'course_id' => '7', 'semester' => '1415S', 'instructor' => 'Kwok, Kamhung 郭錦鴻', 'grade' => 'A', 'gp' => '4.0', 'workload' => '4', 'body' => '<p>Q: 呢科係咪會拎靚grade？<br />
A: 算係。只要上堂準時，即係唔好遲過15鐘，做齊堂課（算易做，有聽書，就識做，唔洗用太多腦），已經可以拎齊課堂分。郭SIR畀分原則：做得好，盡畀高分；做得錯，會盡體諒。所以，個grade差極有限。</p><p>Q: 拎高grade有冇乜準則？<br />
A: 有。多啲請老師，睇下自己嘅匯報方向有冇問題，或者點先可以做得更好。另外，不論係GIS (Term Paper)，定係Project都最緊要有根有據，即係有出處（參考文獻）。幾多出處先叫好？梗係越多越好！我800字嘅GIS就有30幾個出處。</p><p>Q: 多唔多功課做？<br />
A: 見仁見智。<br />
─小組報告 20%（個人 10%；合作10%。兩次匯報，一次簡單；一次深入）<br />
─網上評論 10%（本嚟係做兩次，郭SIR見我哋首次匯報唔錯，減少咗一次）<br />
─GIS Project 30% （個人 20%；合作10%。將匯報變成論文咁，類似term paper）<br />
─西安考察 25% (考察表現5%；考察練習15%)<br />
─上堂 20% (大課15%；導修5%)</p><p>Q: 考察正唔正？<br />
A: 勁正。導遊 ─ 超哥，後生又有幽默感，聽佢講解，包冇悶場，坐車嗰陣會玩下問題遊戲，等大家投入啲。臨去機場嗰陣，佢仲唱咗首張學友嘅《祝福》，憑歌寄意。超哥畀我嘅感覺係用心會帶大家參觀，而唔係得過且過。</p><p>另外，我哋一班同學都相處得唔錯，大家夜晚嗰陣成班人去搵郭SIR玩房game。就算完咗呢個行程，我哋一班同學都有搵郭SIR RE-U。</p><p>Q: 上堂學唔學到嘢？<br />
A: 見仁見智。郭SIR、屈大成係講得比較有趣，錢華就一般。</p><p>總體評價：呢個課程最好嘅地方，梗係唔係硬繃繃嘅內容，而係活生生嘅人。呢個course，師生融合，冇隔膜。你幾何去參察，會去到阿SIR間房玩房game？你完咗course，仲會唔會一班人報團再玩過？所以，識得揀，一定揀GE1108，而且仲要揀郭錦鴻！</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2015-08-21 20:31:49', 'updated_at' => '2015-08-21 20:31:49', 'deleted_at' => NULL),
        array('id' => '13', 'course_id' => '8', 'semester' => '1112S', 'instructor' => 'Dr. CHAN Chong Fai', 'grade' => 'A', 'gp' => '4.0', 'workload' => '3', 'body' => '<p>Exam 80%靠吹水</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-11 15:30:12', 'updated_at' => '2013-05-11 15:30:12', 'deleted_at' => NULL),
        array('id' => '172', 'course_id' => '8', 'semester' => '1213A', 'instructor' => 'CHAN', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '1', 'body' => '<p>NORMAL WORKLOAD</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-19 13:28:30', 'updated_at' => '2013-05-19 13:28:30', 'deleted_at' => NULL),
        array('id' => '349', 'course_id' => '8', 'semester' => '1213B', 'instructor' => 'CHAN', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '1', 'body' => '<p>话题有趣 引发思考<br />
workload非常轻松 给分好<br />
强烈推荐</p>', 'admin_note' => '<p>錯 sem</p>', 'ipv4' => '220.123.222.333', 'created_at' => '2013-05-31 17:15:00', 'updated_at' => '2013-08-06 14:10:35', 'deleted_at' => NULL),
        array('id' => '461', 'course_id' => '8', 'semester' => '1213B', 'instructor' => 'YUNG, Lawrence Yeuk-yu', 'grade' => 'C+', 'gp' => '2.3', 'workload' => '3', 'body' => '<p>呢個導師自己本身HEA 到爆, 上堂超HEA, 教D野又HEA, 最尾比爛GRADE 人!!</p>', 'admin_note' => '<p>錯 sem</p>', 'ipv4' => '220.123.222.333', 'created_at' => '2013-06-09 16:55:57', 'updated_at' => '2013-08-06 14:10:35', 'deleted_at' => NULL),
        array('id' => '662', 'course_id' => '8', 'semester' => '1213S', 'instructor' => 'Dr. CHAN Chong Fai', 'grade' => 'A+', 'gp' => '4.3', 'workload' => '1', 'body' => '<p>Grade assessment主要視乎project, paper同埋exam<br />
Project不太難, 只是要求你讀一篇與topic有關的article (Dr CHAN會給你哪篇reading) 然後要求你一組人(大約5-6人)present哪篇文章的idea 當中沒有missing/misunderstanding就可以了</p><p>paper就是在十數條題目中選擇一條來寫 寫大約700字 每一個topic都會cover到</p><p>exam就分開兩part 一part true or false question (錯的答案會扣分) 另一part就short question 數條題目選兩題 大約每題寫兩版紙</p><p>Dr. CHAN是個不錯的人 有問題請教他的話他都會好用心解答 這個course也能引發到我們思考多更多關於道德與價值觀的問題 值得一讀</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-08-22 02:05:08', 'updated_at' => '2013-08-22 02:05:08', 'deleted_at' => NULL),
        array('id' => '665', 'course_id' => '8', 'semester' => '1213S', 'instructor' => 'Chan Chong Fai', 'grade' => 'B+', 'gp' => '3.3', 'workload' => '2', 'body' => '<p>同上面講既野差唔多<br />
但presentation就睇你好無彩抽中簡單d既topic<br />
Present grouping最好就前d<br />
Paper會易睇，特別係homosexuality 個份<br />
（paper同notes差唔多，只不過再清楚d)<br />
我個組就抽中social justice 英文好深好難，份paper有成廿頁<br />
佢每堂會教唔同topic<br />
1. Utilitarianism<br />
2. Kant&#039;s ethics<br />
3. Homosexuality<br />
4. Animal&#039;s rights<br />
5. Racial and sexual discrimination<br />
6. Civil disobedience, political obligation<br />
7. Social justice - Rawls同埋另外兩個</p><p>Paper就寫至少700字，會畀埋題目你去揀<br />
科野幾好讀，會接觸唔同題材，令人有反思</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-08-22 04:01:50', 'updated_at' => '2013-08-22 04:01:50', 'deleted_at' => NULL),
        array('id' => '678', 'course_id' => '8', 'semester' => '1213S', 'instructor' => 'Dr Chan Chong Fai', 'grade' => 'A', 'gp' => '4.0', 'workload' => '2', 'body' => '<p>philo入門野, 問既野唔會太深, 大概明concept就得<br />
present 只係睇reading 然後抽重點出黎present就ok<br />
paper 十幾條揀一條答, 用多d 例子落theory 會易高分d, </p><p>睇佢d notes基本上唔使上堂, <br />
佢上堂都係照讀, 將d野不斷repeat repeat再repeat, 然後加少少解釋 <br />
但佢take attendance, 不過捉得唔太緊, 同fd輪流番, 輪流簽名都ok</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-08-22 16:42:31', 'updated_at' => '2013-08-22 16:42:31', 'deleted_at' => NULL),
        array('id' => '712', 'course_id' => '8', 'semester' => '1213S', 'instructor' => 'Dr.Chan Chong Fai', 'grade' => 'A', 'gp' => '4.0', 'workload' => '2', 'body' => '<p>推薦~<br />
1) course內容有趣...會令人反思...好值得讀</p><p>2) workload輕鬆...present只係pre一篇文...唔好對篇文有錯誤理解就ok...又可以consultation...tutor佢會解釋你唔明既地方...present後有Q AND A...tutor一定要另外一組問野同埋佢亦可能會問野...所以最緊要擺多D effort落去理解篇文...就唔怕比人問到口啞啞</p><p>3) 份paper都係700字..題目佢會比十幾條你揀...同埋可以寫返自己present果篇文...算係幾輕鬆</p><p>4) exam 有true or false題...有溫書都上堂應該識哂...係之後essay part要個人發揮...會問你個人意見...溫左note未必識...但tutor比分手鬆</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2013-08-27 04:25:44', 'updated_at' => '2013-08-27 04:25:44', 'deleted_at' => NULL),
        array('id' => '1168', 'course_id' => '8', 'semester' => '1314A', 'instructor' => 'Dr Chan Chong Fai', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '2', 'body' => '<p>非常好的一门课，内容值得思考，也不繁重</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-08 07:18:59', 'updated_at' => '2014-01-08 07:18:59', 'deleted_at' => NULL),
        array('id' => '1199', 'course_id' => '8', 'semester' => '1314A', 'instructor' => 'Chan Chong Fai', 'grade' => 'A', 'gp' => '4.0', 'workload' => '2', 'body' => '<p>PROJECT只係讀一篇READINGS<br />
唔需要個人意見<br />
唔好漏POINT唔好理解錯唔好拎住SCRIPT照讀已經OK</p><p>ESSAY只要跟返NOTES<br />
加少少自己分析已經夠</p><p>TEST CLOSE BOOK<br />
20條TRUE FALSE<br />
6-8揀2 LQ<br />
所以唔駛課課溫 (ESSAY長度)</p><p>上課做咩都得<br />
只要你唔好嘈佢就唔會發嬲/踢你出班房<br />
要TAKE ATTENDANCE (冇返佢會MARK低)<br />
所以一定要即日TAKE</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-01-08 14:27:25', 'updated_at' => '2014-01-08 14:27:25', 'deleted_at' => NULL),
        array('id' => '1632', 'course_id' => '8', 'semester' => '1314B', 'instructor' => 'Bloody Chan Chong Fai', 'grade' => 'A', 'gp' => '4.0', 'workload' => '3', 'body' => '<p>其實上佢堂可能會有d悶或者有d深，始終讀哲學大家亦不斷問一些刁鑽問題。老師教書系好適合香港學生聽，超級容易英文，講解theory 時候用example令我地明白， 不過上得耐3個鐘，有時都會好悶，有人break時候中途走左，始終夜晚7點上到10點，上堂唔比講野唔系會嘭你扯，比食野飲野既（但要盡快).</p><p>上堂同老師就講完啦，講course structure, 有3樣野，Presentation, Written essay and exam. (30,30,40)(百分比好似喺咁)</p><p>Presentation 係會比篇文你睇，然後根據文章去present, 想高分就要睇多幾次文啦，老師既表情同埋pre后評語同埋問問題，你就會知道自己系咩range. 以我個組為例，老師話系Good but not very good. 最好既組別評語系I like this presentation.  Present完之後，Q&amp;A session 先攞命，老師同judging panel group會問問題，有d好多問題有d好少，有d組企左半個鐘頭問唔停，記得中間有組其中一位同學佢回應同學問題系已經用廣東話加埋燥底回答，自由度好高。</p><p>Written essay, 系老師比張有10幾題叫你揀一條黎寫700字，要求唔多，只要文法正確，做好citation， 甚至你可以自己觀點寫曬都得。（老師既邏輯好強，觀點都要正確連貫有理，要小心). 我都想左好耐寫essay. 同埋有d題目勁易爆，有d你覺得容易但寫唔夠，選題真係要小心。</p><p>Final Exam, 當時喺15條true false 同埋5/6選2 essay questions. 15條true false好似好好，不過答錯系會倒扣，系幾捅你一刀。Essay questions 唔難，只要你有溫書同埋想定至少3,4個points, 當然溫中個chapters 啦，就唔會好難架，2小時你寫完可以早走。</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-06-05 02:33:56', 'updated_at' => '2014-06-05 02:33:56', 'deleted_at' => NULL),
        array('id' => '1811', 'course_id' => '8', 'semester' => '1314S', 'instructor' => 'Bloody Chan', 'grade' => 'A-', 'gp' => '3.7', 'workload' => '3', 'body' => '<p>個course既details同下面既comment都好一致<br />
只要仲係Bloody Chan都會係咁教<br />
係Summer Sem比較chur，佢會遲少少放人，d topics未教晒就要完sem<br />
1. Group project我做得唔係好好，有答錯問題同俾佢話過Present照讀，但overall okay既<br />
2. Essay有問佢意見，佢會俾hints我地做，700字都唔難<br />
3. Exam就T／F同Essay，唔係太難，我都係專揀熟d同明d既topics讀耐d，其他略溫。</p><p>A-我都okay滿意：）</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-08-23 15:40:07', 'updated_at' => '2014-08-23 15:40:07', 'deleted_at' => NULL),
        array('id' => '1815', 'course_id' => '8', 'semester' => '1314S', 'instructor' => 'Chan Chong Fai', 'grade' => 'B', 'gp' => '3.0', 'workload' => '3', 'body' => '<p>其實讀D野幾好,以吸收知識黎講<br />
但係唔知點解得個B仔<br />
明明present都ok,佢問d問題基本都答到晒<br />
可能exam唔太識......<br />
仲有份paper可能揀左條淺既...........</p>', 'admin_note' => NULL, 'ipv4' => '220.123.222.333', 'created_at' => '2014-08-23 19:15:10', 'updated_at' => '2014-08-25 02:30:05', 'deleted_at' => NULL)
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < count($this->data); $i++) {
            $this->data[$i]['body'] = strip_tags($this->data[$i]['body']);
            if ($this->data[$i]['admin_note']) {
                $this->data[$i]['admin_note'] = strip_tags($this->data[$i]['admin_note']);
            }
        }
        DB::table('reviews')->insert($this->data);
    }
}
