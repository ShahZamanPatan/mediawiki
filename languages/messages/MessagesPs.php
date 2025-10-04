<?php
/** Pashto (پښتو)
 *
 * @file
 * @ingroup Languages
 *
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 * @author Kaganer
 * @author عثمان منصور انصاري
 * @author Isak Khan(AF420)
 * @author Ishaq Azizi
 * @author Subhan kdr
 * @author شاه زمان پټان
 */

$fallback8bitEncoding = 'windows-1256';

$rtl = true;

$namespaceNames = [
	NS_MEDIA            => 'رسنۍ',
	NS_SPECIAL          => 'ځانگړی',
	NS_TALK             => 'خبرې_اترې',
	NS_USER             => 'کارن',
	NS_USER_TALK        => 'د_کارن_خبرې_اترې',
	NS_PROJECT_TALK     => 'د_$1_خبرې_اترې',
	NS_FILE             => 'دوتنه',
	NS_FILE_TALK        => 'د_دوتنې_خبرې_اترې',
	NS_MEDIAWIKI        => 'مېډياويکي',
	NS_MEDIAWIKI_TALK   => 'د_مېډياويکي_خبرې_اترې',
	NS_TEMPLATE         => 'کينډۍ',
	NS_TEMPLATE_TALK    => 'د_کينډۍ_خبرې_اترې',
	NS_HELP             => 'لارښود',
	NS_HELP_TALK        => 'د_لارښود_خبرې_اترې',
	NS_CATEGORY         => 'وېشنيزه',
	NS_CATEGORY_TALK    => 'د_وېشنيزې_خبرې_اترې',
];

$namespaceAliases = [
	'رسنۍ' => NS_MEDIA,
	'انځور' => NS_FILE,
	'د_انځور_خبرې_اترې' => NS_FILE_TALK,
];

$namespaceGenderAliases = [
	NS_USER => [
		'male' => 'کارن',
		'female' => 'کارنه'
	],
	NS_USER_TALK => [
		'male' => 'د_کارن_خبرې_اترې',
		'female' => 'د_کارنې_خبرې_اترې'
	],
];

/** @phpcs-require-sorted-array */
$specialPageAliases = [
	'Activeusers'               => [ 'فعاله_کارنان','کارنده_کارنان' ],
	'Allmessages'               => [ 'ټول-پيغامونه' ],
	'AllMyUploads'              => [ 'زما_ټولې_راپورته_کېدنې', 'زما_ټولې_راپورته_کونې' ],
	'Allpages'                  => [ 'ټول_مخونه' ],
	'Ancientpages'              => [ 'لرغوني_مخونه' ],
	'ApiHelp'                   => [ 'ای_پي_آی_لارښود' ],
	'ApiSandbox'                => [ 'ای_پي_آی_شگبکس','ای_پي_آی_ازمونمخ' ],
	'AutoblockList'             => [ 'خپلکاري_بنديز_لړليک', 'خپکاره_بنديز_لړليک' ],
	'Badtitle'                  => [ 'بد_سرليک','بدسرليک' ],
	'Blankpage'                 => [ 'تش_مخ' ],
	'Block'                     => [ 'کارن_بنديز','وېب_پتې_بنديز','بنديز' ],
	'BlockList'                 => [ 'بنديزلړليک' ],
	'Booksources'               => [ 'کتابي_سرچينې','کتاب_سرچينې' ],
    'BotPasswords'              => [ 'روباټ_پټنومونه' ],
	'BrokenRedirects'           => [ 'مات_مخگرځي' ],
	'Categories'                => [ 'وېشنيزې' ],
	'ChangeContentModel'        => [ 'منځپانگيزه_نمونه_بدلول' ],
	'ChangePassword'            => [ 'پټنوم_بدلول','پټنوم‌بدلول' ],
	'ChangeCredentials'         => [ 'باورليکونه_بدلول' ],
	'ChangeEmail'               => [ 'برېښليک_بدلول' ],
	'ChangePassword'            => [ 'پټنوم_بدلول' ],
	'ComparePages'              => [ 'مخونو_پرتلنه' ,'مخونه_پرتلل' ],
	'Confirmemail'              => [ 'برېښليک_تاييدول' ],
	'Contribute'                => [ 'ونډه' ],
	'Contributions'             => [ 'ونډې' ],
	'CreateAccount'             => [ 'کارن_گڼون_جوړول' ],
	'Deadendpages'              => [ 'مړه_مخونه' ],
	'DeletedContributions'      => [ 'ړنگې_شوې_ونډې' ],
	'DeletePage'                => [ 'مخ_ړنگول', 'ړنگول' ],
	'Diff'                      => [ 'توپير' ],
	'DoubleRedirects'           => [ 'غبرگ_مخگرځ' ],
	'EditPage'                  => [ 'مخ_سمول', 'سمول' ],
	'EditRecovery'              => [ 'سمون_بياترلاسنه' ],
	'EditTags'                  => [ 'نښلنونه_سمول' ],
	'EditWatchlist'             => [ 'کتنلړ_سمول' ],
	'Emailuser'                 => [ 'کارن_برېښليک', 'کارن_ته_برېښليک' ],
	'ExpandTemplates'           => [ 'کينډۍ_غځول' ],
	'Export'                    => [ 'بهرلېږل','صادرول' ],
	'Fewestrevisions'           => [ 'لږې_بياليدنې' ],
	'FileDuplicateSearch'       => [ 'غبرگونې_دوتنې_لېږل' ,'دوه_گونې_دوتنې_پلټل' ],
	'Filepath'                  => [ 'دوتنې_لوری' ],
    'GoToInterwiki'             => [ 'ويکي_خپلمنځي__ته_ورتلل', 'ويکي‌خپلمنځي‌ورتگ' ],
	'Import'                    => [ 'ننويستل','رالېږدول' ],
	'Interwiki'                 => [ 'ويکي_خپلمنځي' ],
	'Invalidateemail'           => [ 'برېښليک_تاييد_نه_منل', 'برېښليک_تاييد_ردول' ],
	'JavaScriptTest'            => [ 'جاواسکريپټ_ازمويل' ],
	'LinkAccounts'              => [ 'اړوند_گڼونه' ],
	'LinkSearch'                => [ 'تړوني_پلټل' ],
	'Listadmins'                => [ 'پازوالانو_لړليک' ],
	'Listbots'                  => [ 'روباټ_لړلیک' ],
	'ListDuplicatedFiles'       => [ 'غبرگونو_دوتنو_لړليک' ],	
	'Listfiles'                 => [ 'دوتنو_لړليک' ,'د_انځورونو_لړليک' ],
	'Listgrants'                => [ 'لاسرسي_ورکړې_لړليک' ],
	'Listgrouprights'           => [ 'ډله_ييزو_رښتو_لړليک' ],
	'Listredirects'             => [ 'مخگرځو_لړليک' ],
	'Lockdb'                    => [ 'اومتوک_اډانې_تاله_کول' ],
	'Listusers'                 => [ 'د_کارنانو_لړليک' ],
	'Log'                       => [ 'يادښتونه،_يادښت' ],
	'Lonelypages'               => [ 'يتيم_مخونه' ],
	'Longpages'                 => [ 'اوږده_مخونه' ],
	'MediaStatistics'           => [ 'رسنيو_شمارنې' ],
	'MergeHistory'              => [ 'پېښليک_اخږل' ],
	'MIMEsearch'                => [ 'ميمې_پلټل' ],
	'Mostcategories'            => [ 'ډېرې_وېشنيزې' ],
	'Mostinterwikis'            => [ 'ډېرې_ويکي_خپلمنځيانې' ],
	'Mostlinked'                => [ 'ډېر_تړوني' ],
	'Mostlinkedcategories'      => [ 'ډېرې_تړل_شوې_وېشنيزې' ],
	'Mostlinkedtemplates'       => [ 'ډېرې_تړل_شوې_کينډۍ' ],
	'Mostrevisions'             => [ 'ډېرې_بياليدنې' ],
	'Movepage'                  => [ 'مخ_لېږدول' ],
	'Mute'                      => [ 'چوپ' ],
	'Mycontributions'           => [ 'زماونډې' ],
	'Mypage'                    => [ 'زما_پاڼه' ],
	'Mytalk'                    => [ 'زما_خبرې_اترې' ],
	'Newimages'                 => [ 'نوي_انځورونه' ],
	'Newpages'                  => [ 'نوي_مخونه' ],
	'NewSection'                => [ 'نوې_برخه' ],
	'PageData'                  => [ 'مخ_اومتوکي' ],
	'PageHistory'               => [ 'مخ_پېښليک', 'پېښليک' ],
	'PageInfo'                  => [ 'مخ_مالومات', 'مالومات' ],
	'PageLanguage'              => [ 'مخ_ژبه' ],
	'PagesWithProp'             => [ 'ځانتيالرونکی_مخ' ],
	'PasswordPolicies'          => [ 'پټنوم_تگلارې' ],
	'PasswordReset'             => [ 'پټنوم_بيااوڼنه' ],
	'PermanentLink'             => [ 'تلپاتې_تړونی' ],
	'Preferences'               => [ 'غوره_توبونه' ],
	'Prefixindex'               => [ 'د_مختاړو_ليکلړ' ],
	'Protectedpages'            => [ 'ژغورلي_مخونه' ],
	'Protectedtitles'           => [ 'ژغورلي_سرليکونه' ],
	'ProtectPage'               => [ 'ژغورلی_مخ', 'ژغورلی' ],
	'Purge'                     => [ 'سپينول' ],
	'RandomInCategory'          => [ 'وېشنيزه_کې_ناټاکلی' ],
	'Randompage'                => [ 'ناټاکلی_مخ','ناټاکلی' ],
	'Randomredirect'            => [ 'ناټاکلی_مخگرځ' ],
	'Randomrootpage'            => [ 'ناټاکلی_ريښه_مخ' ],
	'Recentchanges'             => [ 'اوسني_بدلونونه' ],
	'Recentchangeslinked'       => [ 'اوسني_اړوند_بدلونونه' ],
	'Redirect'                  => [ 'مخگرځ' ],
	'RemoveCredentials'         => [ 'باورليکونه_لرې_کول' ],
	'Renameuser'                => [ 'کارن_نوم_بدلول' ],
	'ResetTokens'               => [ 'نښکې_بيااوڼل' ],
	'RestSandbox'               => [ 'ازمون_مخ_بيااوڼل' ],
	'Revisiondelete'            => [ 'بياليدنه_ړنگول' ],
	'RunJobs'                   => [ 'دندې_پرمخ_وړل' ],
	'Search'                    => [ 'پلټل' ,'پلټنه' ],
	'Shortpages'                => [ 'لنډ_مخونه' ],
	'Specialpages'              => [ 'ځانگړي_مخونه' ,'ځانګړي_مخونه' ],
	'Statistics'                => [ 'شمار' ],
	'Unblock'                   => [ 'بنديز_لرې_کول' ],
	'Uncategorizedcategories'   => [ 'ناوېشلې_وېشنيزې' ],
	'Uncategorizedimages'       => [ 'ناوېشلي_انځورونه،_ناوېشلې_دوتنې' ],
	'Uncategorizedpages'        => [ 'ناوېشلي_مخونه' ],
	'Uncategorizedtemplates'    => [ 'ناوېشلې_کينډۍ' ],
	'Undelete'                  => [ 'ناړنگول' ,'ناړنګول' ],
	'UnlinkAccounts'            => [ 'گڼونونه_بېلول' ],
	'Unlockdb'                  => [ 'اومتوک_اډانې_تاله_پرانېستل' ],
	'Unusedcategories'          => [ 'ناکارېدلې_وېشنيزې' ],
	'Unusedimages'              => [ 'ناکارېدلې_دوتنې' ],
	'Unusedtemplates'           => [ 'ناکارېدلې_کينډۍ' ],
	'Unwatchedpages'            => [ 'ناکتلي_مخونه' ],
	'Upload'                    => [ 'راپورته_کول' ,'پورته_کول' ],
	'UploadStash'               => [ 'ډله_ييزه_راپورته_کونه' ],
	'Userlogin'                 => [ 'ننوتل' ],
	'Userlogout'                => [ 'وتل' ],
	'Userrights'                => [ 'کارن_رښتې' ]
	'Version'                   => [ 'بل‌بڼه' , 'بلبڼه' ],
	'Wantedcategories'          => [ 'غوښتلې_وېشنيزې' ],
	'Wantedfiles'               => [ 'غوښتلې_دوتنې' ],
	'Wantedpages'               => [ 'غوښتلي_مخونه' ],
	'Wantedtemplates'           => [ 'غوښتلې_کينډۍ' ],
	'Watchlist'                 => [ 'کتنلړ' ],
	'Whatlinkshere'             => [ 'دې_مخ_ته_تړونی' ],
	'Withoutinterwiki'          => [ 'بې_ويکي_تړنو' ],
];

/** @phpcs-require-sorted-array */
$magicWords = [
#   ID                               CASE  SYNONYMS
	'!'                       => [ 1, '!' ,'!' ],
	'='                       => [ 1, '=' ,'=' ],
	'anchorencode'            => [ 0, 'لنګرکوډ','لنگرکوډ' ],'ANCHORENCODE' ],
	'articlepath'             => [ 0, 'ليکنې_لوری' ,'ليکنې‌لوری' ],'ARTICLEPATH' ],
	'basepagename'            => [ 1,  'بنسټيز_مخ_نوم' ,'بنسټيزمخ‌نوم' ], 'BASEPAGENAME' ], 
	'basepagenamee'           => [ 1, 'بنسټيزمخ‌نوم‌نښه' ,'بنسټيز_مخ_نوم_نښه' ],'BASEPAGENAMEE' ],
	'bcp47'                   => [ 1, '#بي‌سي‌پي۴۷','#bcp47' ],
	'bidi'                    => [ 0, 'بيډي',,'BIDI:' ],
	'canonicalurl'            => [ 0, 'کره_وېبتړ:' ,'کره‌وېبتړ:' ,'CANONICALURL:' ],
	'canonicalurle'           => [ 0, 'کره_وېتړ_نښه:' ,'کره‌وېبتړنښه:' ,'CANONICALURLE:' ],
	'cascadingsources'        => [ 1, 'ځړوبيزه_سرچينه' ,'CASCADINGSOURCES' ],
	'contentlanguage'         => [ 1, 'منځپانګې_ژبه','منځپانګې‌ژبه','منځپانگې_ژبه','منځپانگې‌ژبه', 'CONTENTLANGUAGE', 'CONTENTLANG' ],
	'currentday'              => [ 1, 'نن' ,'CURRENTDAY' ],
	'currentday2'             => [ 1, 'نن۲' ,'CURRENTDAY2' ],
	'currentdayname'          => [ 1, 'نننۍ_ورځې_نوم' , 'نن_ورځې_نوم' ,'نننۍ‌ورځې‌نوم' ,'CURRENTDAYNAME' ],
	'currentdow'              => [ 1, 'د-اوونۍ-نننۍ-ورځ' , 'د-اوونۍ-نن-ورځ' ,'د‌اوونۍنننۍ‌ورځ' ,'د‌اوونۍ‌نن‌ورځ' ,'CURRENTDOW' ],
	'currenthour'             => [ 1, 'وسمهال','دم-گړۍ','دم‌گړۍ','دم_ګړۍ','دم‌ګړی','CURRENTHOUR' ],
	'currentmonth'            => [ 1, '۲اوسنۍ‌مياشت','۲اوسنۍ-مياشت','روانه‌مياشت۲','روانه_مياشت۲','مياشت','اوسنۍ-مياشت','اوسنۍ‌مياشت','روانه‌مياشت','روانه_مياشت','CURRENTMONTH', 'CURRENTMONTH2' ],
	'currentmonth1'           => [ 1, '۱اوسنۍ‌مياشت','۱اوسنۍ-مياشت','روانه‌مياشت۱','روانه-مياشت۱','CURRENTMONTH1' ],
	'currentmonthabbrev'      => [ 1, 'روانې_مياشتې_لنډيز''روانې_مياشتې_لنډون','روانې‌مياشتې‌لنډيز','روانې‌مياشتې‌لنډون','دروانې_مياشت_لنډون','CURRENTMONTHABBREV' ],
	'currentmonthname'        => [ 1, 'روانې_مياشتې_نوم','روانې‌مياشتې‌نوم','د‌روانې‌مياشتې‌نوم','دروانې_مياشت_نوم','CURRENTMONTHNAME' ],
	'currentmonthnamegen'     => [ 1, 'روانې_مياشتې_نوم_زېږون','د_روانې_مياشتې_نوم_زېږون','روانې‌مياشتې‌نوم‌زېږون','د‌روانې‌مياشتې‌نوم‌زېږون','CURRENTMONTHNAMEGEN' ],
	'currenttime'             => [ 1, 'دا_وخت','داوخت','اوسمهال','وسمهال','CURRENTTIME' ],
	'currenttimestamp'        => [ 1, 'اوسمهاله_وخت_ټاپه','وسمهاله_وخت_ټاپه','اوسمهاله‌وخت‌ټاپه','وسمهاله‌وخت‌ټاپه','CURRENTTIMESTAMP' ],
	'currentversion'          => [ 1, 'وسمهاله_بلبڼه','وسمهاله‌بلبڼه','اوسنۍ_بل_بڼه','اوسنۍ_بلبڼه','اوسنۍ‌بل‌بڼه','اوسنۍ‌بلبڼه','CURRENTVERSION' ],
	'currentweek'             => [ 1, 'روانه_اوونۍ','روانه‌اوونۍ','CURRENTWEEK' ],
	'currentyear'             => [ 1, 'سږ_کال','سږکال','CURRENTYEAR' ],
	'defaultsort'             => [ 1, 'اوډل','تلواله_اوډون_کونجي','تلواله_اوډون','تلواله‌اوډون‌کونجي','تلواله‌اوډون','DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ],
	'defaultsort_noerror'     => [ 0, 'بې_تېروتنې','بې‌تېروتنې','noerror' ],
	'defaultsort_noreplace'   => [ 0, 'بې_ځايناستي','ځايناستی_کوه_يې_مه','بې‌ځايناستي','ځايناستی‌کوه‌يې‌مه','noreplace' ],
	'dir'                     => [ 1, '#تګلوری' ,'#تگلوری' ,'#dir' ],
	'directionmark'           => [ 1, 'تګلوري_نښه','تگلوري_نښه','تګلوري‌نښه','تگلوري‌نښه','DIRECTIONMARK', 'DIRMARK' ],
	'displaytitle'            => [ 1, 'سرليک_ښکارېدنه','سرليک‌ښکارېدنه','DISPLAYTITLE' ],
	'displaytitle_noerror'    => [ 0, 'بې_تېروتنې','بې‌تېروتنې','noerror' ],
	'displaytitle_noreplace'  => [ 0, 'بې_ځايناستي','ځايناستی_کوه_يې_مه','بې‌ځايناستي','ځايناستی‌کوه‌يې‌مه','noreplace' ],
	'expectunusedcategory'    => [ 1, '__هېلې_وړ_ناکارېدلې_وېشنيزه__','__EXPECTUNUSEDCATEGORY__', ],
	'expectunusedtemplate'    => [ 1, '__هيلې_وړ_ناکارېدلې_کينډۍ__','__EXPECTUNUSEDTEMPLATE__', ],
	'filepath'                => [ 0, 'دوتنې_لوری:','دوتنې‌لوری:','FILEPATH:' ],
	'forcetoc'                => [ 0, '__نيوليک_لرونکې__','__نيوليک‌داره__','نيوليک‌لرونکې__','__نيوليکداره__','__FORCETOC__' ],
	'formal'                  => [ 1, '#رسمي:' ,'#FORMAL:' ],
	'formatdate'              => [ 0, 'نېټه_بڼل' ,'نېټې_بڼه' ,'نېټه‌بڼل' ,'نېټې‌بڼه' ,'formatdate', 'dateformat' ],
	'formatnum'               => [ 0, 'بڼل_شمېره' ,'شمېربڼه' ,'بڼلو‌شمېره' ,'بڼل‌شمېره' , 'FORMATNUM' ],
	'fullpagename'            => [ 1, 'بشپړ_مخ_نوم' ,'بشپړ_مخنوم' ,'بشپړمخ‌نوم' ,'بشپړمخنوم' ,'FULLPAGENAME' ],
	'fullpagenamee'           => [ 1, 'بشپړ_مخ_نوم_نښه' ,'بشپړ_مخنوم_نښه' ,'بشپړمخ‌نوم‌نښه' ,'بشپړمخنوم‌نښه' ,'FULLPAGENAMEE' ],
	'fullurl'                 => [ 0, 'بشپړ_وېبتړ:','ټول_وېبتړ:','بشپړوېبتړ:','ټول‌وېبتړ:','FULLURL:' ],
	'fullurle'                => [ 0, 'ټول_وېبتړ_نښه:','بشپړ_وېبتړ_نښه:','ټول‌وېبتړنښه:','بشپړوېبتړنښه:','FULLURLE:' ],
	'gender'                  => [ 0, 'جنسيت','جنس','GENDER:' ],
	'grammar'                 => [ 0, 'ژب‌دود','ژبدود','ګرامر:','گرامر:','GRAMMAR:' ],
	'hiddencat'               => [ 1, '__پټه_وېشنيزه____' ,'__‌پټه‌وېشنيزه____' ,'__HIDDENCAT__' ],
	'img_alt'                 => [ 1, 'ځايناستی','بديل','alt=$1' ],
	'img_baseline'            => [ 1, 'بنسټ_کرښه','اساسي_کرښه','بنسټيزه_کرښه','بنسټ‌کرښه','اساسي‌کرښه','بنسټيزه‌کرښه','baseline' ],
	'img_border'              => [ 1, 'بريد','پوله','border' ],
	'img_bottom'              => [ 1, 'پای','لاندې','bottom' ],
	'img_center'              => [ 1, 'مرکز','منځ','center', 'centre' ],
	'img_class'               => [ 1, 'ټولګی=$1','ټولگی=$1','class=$1' ],
	'img_framed'              => [ 1, 'چوکاټ_شوی','چوکاټ‌شوی','چوکاټ','frame', 'framed', 'enframed' ],
	'img_frameless'           => [ 1, 'بې_چوکاټ','بې‌چوکاټ','frameless' ],
	'img_lang'                => [ 1, 'ژبه=$1','lang=$1' ],
	'img_left'                => [ 1, 'چپ','کيڼ','left' ],
	'img_link'                => [ 1, 'تړونی=$1','link=$1' ],
	'img_manualthumb'         => [ 1, 'بټنوک','thumbnail=$1', 'thumb=$1' ],
	'img_middle'              => [ 1, 'منځ','منځوي','middle' ],
	'img_none'                => [ 1, 'هيڅ','هېڅ','none' ],
	'img_page'                => [ 1, 'مخ_$1','مخ=$1','page=$1', 'page $1' ],
	'img_right'               => [ 1, 'ښي','right' ],
	'img_sub'                 => [ 1, 'څنگزن','څېرمه','sub' ],
	'img_super'               => [ 1, 'ځواکمن','super', 'sup' ],
	'img_text_bottom'         => [ 1, 'ليک_لاندې','text-bottom' ],
	'img_text_top'            => [ 1, 'ليک_پورته','text-top' ],
	'img_thumbnail'           => [ 1, 'بټنوک','thumb', 'thumbnail' ],
	'img_top'                 => [ 1, 'پورته','top' ],
	'img_upright'             => [ 1, 'ولاړ', 'ولاړ=$1', 'ولاړ $1' ,'upright', 'upright=$1', 'upright $1' ],
	'img_width'               => [ 1, '$1پېکسل','$1px' ],
	'index'                   => [ 1, '__ليکلړ__' ,'__INDEX__' ],
	'int'                     => [ 0, 'منځپانگه:','ژباړه:','INT:' ],
	'interlanguagelink'       => [ 1, '#ژبو_خپلمنځي_تړونی' ,'#ژبوخپلمنځي‌تړونی' ,'#interlanguagelink' ],
	'interwikilink'           => [ 1, '#ويکي_خپلمنځي_تړونی' ,'#ويکي‌خپلمنځي‌تړونی' ,'#interwikilink' ],
	'language'                => [ 0, '#ژبه' , '#LANGUAGE' ],
	'language_option_bcp47'   => [ 1, 'بي‌سي‌پي۴۷' ,'bcp47' ],
	'lc'                      => [ 0, 'وړوکی:' ,'کوشنی:' ,'کوچنی:' ,'LC:' ],
	'lcfirst'                 => [ 0, 'کوچنی_پيل:' ,'کوچنی‌پيل:' ,'LCFIRST:' ],
	'localday'                => [ 1, 'سيمه_ييزه_ورځ','ځايي_ورځ','سيمه‌ييزه‌ورځ','ځايي‌ورځ', 'LOCALDAY' ],
	'localday2'               => [ 1, 'سيمه_ييزه_ورځ۲','ځايي_ورځ۲','سيمه‌ييزه‌ورځ۲','ځايي‌ورځ۲','LOCALDAY2' ],
	'localdayname'            => [ 1, 'سيمه_ييزې_ورځ_نوم','ځايي_ورځ_نوم','سيمه‌ييزې‌ورځ‌نوم','ځايي‌ورځ‌نوم','LOCALDAYNAME' ],
	'localdow'                => [ 1, 'سيمه_ييزې_اوونۍ_ورځ','ځايي_اوونۍ_ورځ','ځايي‌اوونۍ‌ورځ','سيمه‌ييزې‌اوونۍ‌ورځ','LOCALDOW' ],
	'localhour'               => [ 1, 'سيمه_ييزه_گړۍ','ځايي_گړۍ','سيمه‌ييزه‌گړۍ','ځايي‌گړۍ','LOCALHOUR' ],
	'localmonth'              => [ 1, '۲سيمه_ييزه_مياشت','سيمه_ييزه_مياشت','۲ځايي_مياشت','ځايي_مياشت','۲سيمه‌ييزه‌مياشت','سيمه‌ييزه‌مياشت','۲ځايي‌مياشت','ځايي‌مياشت','LOCALMONTH', 'LOCALMONTH2' ],
	'localmonth1'             => [ 1, '۲ځايي_مياشت','۱سيمه_ييزه_مياشت','۱سيمه‌ييزه‌مياشت','۱ځايي‌مياشت','LOCALMONTH1' ],
	'localmonthabbrev'        => [ 1, 'سيمه_ييزې_مياشتې_لنډيز','ځايي_مياشت_لنډيز','سيمه‌ييزې‌مياشتې‌لنډيز','ځايي‌مياشت‌لنډيز','LOCALMONTHABBREV' ],
	'localmonthname'          => [ 1, 'سيمه_ييزې_مياشتې_نوم','ځايي_مياشت_نوم','سيمه‌ييزې‌مياشتې‌نوم','ځايي‌مياشت‌نوم','LOCALMONTHNAME' ],
	'localmonthnamegen'       => [ 1, 'ځايي_مياشت_نوم_زيادښت' ,'LOCALMONTHNAMEGEN' ],
	'localtime'               => [ 1, 'سيمه_ييز_وخت','ځايي_وخت','سيمه‌ييزوخت','ځايي‌وخت','LOCALTIME' ],
	'localtimestamp'          => [ 1, 'ځايي‌وخت‌ټاپه','LOCALTIMESTAMP' ],
	'localurl'                => [ 0, 'سيمه_ييز_وېبتړ','ځايي_وېبتړ','سيمه‌ييزوېبتړ','ځايي‌وېبتړ','LOCALURL:' ],
	'localurle'               => [ 0, 'سيمه_ييزه_وېبتړ_نښه','ځايي_وېبتړ_نښه','سيمه‌ييزه‌وېبتړ‌نښه','ځايي‌وېبتړ‌نښه','LOCALURLE:' ],
	'localweek'               => [ 1, 'ځايي_اوونۍ','سيمه_ييزه_اوونۍ','سيمه‌ييزه‌اوونۍ','ځايي‌اوونۍ','LOCALWEEK' ],
	'localyear'               => [ 1, 'سيمه_ييز_کال','ځايي_کال','سيمه‌ييزکال','ځايي‌کال','LOCALYEAR' ],
	'lossless'                => [ 0, 'بې_لږېدو','LOSSLESS' ],
	'msg'                     => [ 0, 'پ','پيغام','MSG:' ],
	'msgnw'                   => [ 0, 'خام_پيغام','اومه_پيغام','خام‌پيغام','اومه‌پيغام','MSGNW:' ],
	'namespace'               => [ 1, 'نوم_تشيال','نوم‌‌تشيال','NAMESPACE' ],
	'namespacee'              => [ 1, 'نوم_تشيال_نښه','نوم‌تشيال‌نښه','NAMESPACEE' ],
	'namespacenumber'         => [ 1, 'نوم_تشيال_شمېره','نوم‌تشيال‌شمېره','NAMESPACENUMBER' ],
	'newsectionlink'          => [ 1, 'نوبرخې_تړونی','نوبرخې‌تړونی','__NEWSECTIONLINK__' ],
	'nocommafysuffix'         => [ 0, 'نه_جلاکوونکی','نه‌جلاکوونکی','NOSEP' ],
	'nocontentconvert'        => [ 0, 'بې_بدلونه_منځپانگه','بې‌بدلونه‌منځپانگه','__NOCONTENTCONVERT__', '__NOCC__' ],
	'noeditsection'           => [ 0, 'بې_برخې','بې_سمون_برخې','بې‌برخې','بې‌سمون‌برخې','__NOEDITSECTION__' ],
	'nogallery'               => [ 0, 'بې_انځورتون','بې‌انځورتون','__NOGALLERY__' ],
	'noindex'                 => [ 1, 'بې_ليکلړ','بې‌ليکلړ','__NOINDEX__' ],
	'nonewsectionlink'        => [ 1, 'بې_نوبرخې_تړونی','بې‌نوبرخې‌تړونی','__NONEWSECTIONLINK__' ],
	'notitleconvert'          => [ 0, 'نااوښتی_سرليک','نااوښتی‌سرليک','__NOTITLECONVERT__', '__NOTC__' ],
	'notoc'                   => [ 0, '__بې_نيوليک__' ],'__بې‌نيوليک____' ],'__NOTOC__' ],
	'ns'                      => [ 0, 'نت:','NS:' ],
	'nse'                     => [ 0, 'نتن','NSE:' ],
	'numberingroup'           => [ 1, 'په_ډله_کې_شمېره','په‌ډله‌کې‌شمېره','NUMBERINGROUP', 'NUMINGROUP' ],
	'numberofactiveusers'     => [ 1, 'فعاله_کارنانو_شمېر','فعاله‌کارنانوشمېر','کارنده_کارنانو_شمېر','کارنده‌کارنانوشمېر','NUMBEROFACTIVEUSERS' ],
	'numberofadmins'          => [ 1, 'پازولانو_شمېر','پازوالانوشمېر','NUMBEROFADMINS' ],
	'numberofarticles'        => [ 1, 'ليکنو_شمېر','ليکنوشمېر','NUMBEROFARTICLES' ],
	'numberofedits'           => [ 1, 'سمونونو_شمېر','سمونونوشمېر','NUMBEROFEDITS' ],
	'numberoffiles'           => [ 1, 'دوتنو_شمېر','دوتنوشمېر','NUMBEROFFILES' ],
	'numberofpages'           => [ 1, 'مخونو_شمېر','مخونوشمېر','NUMBEROFPAGES' ],
	'numberofusers'           => [ 1, 'کارنانو_شمېر','کارنانوشمېر','NUMBEROFUSERS' ],
	'padleft'                 => [ 0, 'کيڼ_خوا','کيڼ‌خوا‌','PADLEFT' ],
	'padright'                => [ 0, 'ښي_خوا','ښي‌خوا','PADRIGHT' ],
	'pageid'                  => [ 0, 'مخ_پېژند','مخ‌پېژند','مخپېژند','PAGEID' ],
	'pagelanguage'            => [ 1, 'مخ_ژبه','مخ‌ژبه','مخژبه','PAGELANGUAGE' ],
	'pagename'                => [ 1, 'مخ_نوم','مخنوم','PAGENAME' ],
	'pagenamee'               => [ 1, 'مخنوم_نښه','مخ_نوم_نښه','مخنوم‌نښه','مخ‌نوم‌نښه','PAGENAMEE' ],
	'pagesincategory'         => [ 1,  'وېشنيزې_دننه_مخ','وېشنيزې‌دننه‌مخ','PAGESINCATEGORY', 'PAGESINCAT' ],
	'pagesincategory_all'     => [ 0, 'ټول','all' ],
	'pagesincategory_files'   => [ 0, 'دوتنې','files' ],
	'pagesincategory_pages'   => [ 0, 'پاڼې','مخونه','pages' ],
	'pagesincategory_subcats' => [ 0, 'څېرمه_وېشنيزې','څېرمه‌وېشنيزې','subcats' ],
	'pagesinnamespace'        => [ 1, 'د_نوم_تشيال_دننه_مخ','دنوم‌تشيال‌دننه‌مخ','PAGESINNAMESPACE:', 'PAGESINNS:' ],
	'pagesize'                => [ 1, 'مخ_کچه','مخ‌کچه','مخکچه','PAGESIZE' ],
	'plural'                  => [ 0, 'جمعه','جمع','PLURAL:' ],
	'protectionexpiry'        => [ 1, 'ژغورکچې_پای_نېټه','ژغورکچې‌پای‌نېټه','PROTECTIONEXPIRY' ],
	'protectionlevel'         => [ 1, 'ژغورکچه','PROTECTIONLEVEL' ],
	'raw'                     => [ 0, 'ناتيار','اوم','خام','RAW:' ],
	'rawsuffix'               => [ 1, 'ن','ار','R' ],
	'redirect'                => [ 0, '#مخګرځ','#مخگرځ','#REDIRECT' ],
	'revisionday'             => [ 1, 'کره_کتنې_ورځ','کره‌کتنې‌ورځ','بياليدنې_ورځ','بياليدنې‌ورځ','REVISIONDAY' ],
	'revisionday2'            => [ 1, 'کره_کتنې_ورځ۲','کره‌کتنې‌ورځ۲','بياليدنې_ورځ۲','بياليدنې‌ورځ۲','REVISIONDAY2' ],
	'revisionid'              => [ 1, 'کره_کتنې_پېژند','کره‌کتنې‌پېژند','بياليدنې_پېژند','بياليدنې‌پېژند','REVISIONID' ],
	'revisionmonth'           => [ 1, 'کره_کتنې_مياشت','کره‌کتنې‌مياشت','بياليدنې_مياشت','بياليدنې‌مياشت','REVISIONMONTH' ],
	'revisionmonth1'          => [ 1, 'کره_کتنې_مياشت۱','کره‌کتنې‌مياشت۱','بياليدنې_مياشت۱','بياليدنې‌مياشت۱','REVISIONMONTH1' ],
	'revisionsize'            => [ 1, 'کره_کتنې_کچه','کره‌کتنې‌کچه','بياليدنې_کچه','بياليدنې‌کچه','REVISIONSIZE' ],
	'revisiontimestamp'       => [ 1, 'کره_کتنې_وخت_ټاپه','کره‌کتنې‌وخت‌ټاپه','بياليدنې_وخت_ټاپه','بياليدنې‌وخت‌ټاپه','REVISIONTIMESTAMP' ],
	'revisionuser'            => [ 1, 'کره_کتونکی_کارن','کره_کتونکی','کره‌کتونکی‌کارن','کره‌کتونکی','بياليدونکی_کارن','بياليدونکی‌کارن','بياليدونکی','REVISIONUSER' ],
	'revisionyear'            => [ 1, 'کره_کتنې_کال','کره‌کتنې‌کال','بياليدنې_کال','بياليدنې‌کال','REVISIONYEAR' ],
	'rootpagename'            => [ 1, 'ريښه_لرونکي_مخ_نوم','ريښه‌لرونکي‌مخ‌نوم','ROOTPAGENAME' ],
	'rootpagenamee'           => [ 1, 'ريښه_لرونکي_مخ_نوم_نښه','ريښه‌لرونکي‌مخ‌نوم‌نښه','ROOTPAGENAMEE' ],
	'safesubst'               => [ 0, 'خوندي_بديل','خوندي‌بديل','خوندي_ځايناستی','خوندي‌ځايناستی:','SAFESUBST:' ],
	'scriptpath'              => [ 0, 'سکريپټ_لوری','سکريپټ‌لوری','لاسي_ليک_لور','لاسي‌ليک‌لوری','SCRIPTPATH' ],
	'server'                  => [ 0, 'پالنګر','پالنگر','SERVER' ],
	'servername'              => [ 0, 'پالنګر_نوم_نښه','پالنګرنوم‌نښه','پالنگر_نوم_نښه','پالنگرنوم‌نښه','SERVERNAME' ],
	'sitename'                => [ 1, 'وېبځي_نوم' ,'وېبځي‌نوم' ,'SITENAME' ],
	'special'                 => [ 0, 'ځانگړی' ,'ځانګړی' ,'special' ],
	'speciale'                => [ 0, 'ځانګړې_نښه' ,'ځانگړې_نښه' ,'ځانګړې‌نښه__' ,'ځانگړې‌نښه' ,'speciale' ],
	'staticredirect'          => [ 1, '__ثابت_مخگرځ__' ,'__ثابت‌مخگرځ__' ,'__جامدمخګرځ__' ,'__جامدمخگرځ__' ,'__STATICREDIRECT__' ],
	'stylepath'               => [ 0, 'ښودبڼې_لوری','ښودبڼې‌لوری','STYLEPATH' ],
	'subjectpagename'         => [ 1, 'ليکنې_مخ_نوم','ليکنې_مخنوم','سکالو_مخ_نوم','سکالو_مخنوم','ليکنې‌مخ‌نوم','ليکنې‌مخنوم','سکالو‌مخ‌نوم','سکالو‌مخنوم','SUBJECTPAGENAME', 'ARTICLEPAGENAME' ],
	'subjectpagenamee'        => [ 1, 'سکالو-مخنوم-نښه','ليکنې-مخنوم-نښه','ليکنې‌مخنوم‌نښه','سکالو-مخ-نوم-نښه','سکالومخ‌نوم‌نښه','ليکنې-مخ-نوم-نښه','ليکنې‌مخ‌نوم‌نښه','SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ],
	'subjectspace'            => [ 1, 'سکالو-تشيال','سکالوتشيال','ليکنې-تشيال','ليکنې‌تشيال','SUBJECTSPACE', 'ARTICLESPACE' ],
	'subjectspacee'           => [ 1, 'سکالو-تشيال-نښه' ,'سکالو‌تشيال‌نښه' ,'ليکنې-تشيال-نښه' ,'ليکنې‌تشيال‌نښه' ,'SUBJECTSPACEE', 'ARTICLESPACEE' ],
	'subpagename'             => [ 1, 'څېرمه_مخ_نوم' ,'څېرمه‌مخ‌نوم' ,'SUBPAGENAME' ],
	'subpagenamee'            => [ 1, 'څېرمه-مخ-نوم-نښه' ,'څېرمه‌مخ‌نښه' , 'SUBPAGENAMEE' ],
	'subst'                   => [ 0, 'ځايناستی' ,'بديل' , 'SUBST:' ],
	'tag'                     => [ 0, 'نښلن' ,'tag' ],
	'talkpagename'            => [ 1, 'خبرواتر_مخ_نوم' ,'خبرواترومخنوم' ,'خبرواترومخ‌نوم' ,'TALKPAGENAME' ],
	'talkpagenamee'           => [ 1, 'خبرواترو_مخنوم_نښه' ,'خبرواترو_مخ_نوم_نښه' ,'خبرواترومخنوم‌نښه' , 'خبرواترومخ‌نوم‌نښه' ,'TALKPAGENAMEE' ],
	'talkspace'               => [ 1, 'دخبرواترو_تشيال', 'TALKSPACE' ],
	'talkspacee'              => [ 1, 'دخبرواترو_تشيال_نښه','د_خبرو_اترو_تشيال_نښه', 'TALKSPACEE' ],
	'toc'                     => [ 0, '__نيوليک__' ],'__TOC__' ],
	'uc'                      => [ 0, 'ل' ,'غ:' ],'UC:' ],
	'ucfirst'                 => [ 0, 'پيل_لوی' ,'پيل‌لوی' ,'پيل_غټ' ,'پيل‌غټ:' ],'UCFIRST:' ],
	'urlencode'               => [ 0, 'وېبتړکوډ:' ],'URLENCODE:' ],
	'url_path'                => [ 0, 'وېبتړ_لوری','وېبتړلوری' ],'PATH' ],
	'url_query'               => [ 0, 'تپوس' ],'QUERY' ],
	'url_wiki'                => [ 0, 'ويکي' ],'WIKI' ],
	'userlanguage'            => [ 1, 'کارن‌ژبه' ,'کارن_ژبه' ],'USERLANGUAGE' ],
];

$digitTransformTable = [
	'0' => '۰', # U+06F0
	'1' => '۱', # U+06F1
	'2' => '۲', # U+06F2
	'3' => '۳', # U+06F3
	'4' => '۴', # U+06F4
	'5' => '۵', # U+06F5
	'6' => '۶', # U+06F6
	'7' => '۷', # U+06F7
	'8' => '۸', # U+06F8
	'9' => '۹', # U+06F9
	'%' => '٪', # U+066A
];

$separatorTransformTable = [
	'.' => '٫', # U+066B
	',' => '٬', # U+066C
];

$numberingSystem = 'arabext';


/**
 * A list of date format preference keys which can be selected in user
 * preferences. New preference keys can be added, provided they are supported
 * by the language class's timeanddate(). Only the 5 keys listed below are
 * supported by the wikitext converter (DateFormatter.php).
 *
 * The special key "default" is an alias for either dmy or mdy depending on
 * $wgAmericanDates
 */
 $datePreferences = [
 	'default',
	'mdy',
	'dmy',
	'ymd',
	'ISO 8601',
	'persian',
	'hijri',
	'hebrew',
];

/**
 * The date format to use for generated dates in the user interface.
 * This may be one of the above date preferences, or the special value
 * "dmy or mdy", which uses mdy if $wgAmericanDates is true, and dmy
 * if $wgAmericanDates is false.
 */
$defaultDateFormat = 'dmy or mdy';

/**
 * Associative array mapping old numeric date formats, which may still be
 * stored in user preferences, to the new string formats.
 */
 $datePreferenceMigrationMap = [
	'default',
	'mdy',
	'dmy',
	'ymd'
];

/**
 * These are formats for dates generated by MediaWiki (as opposed to the wikitext
 * DateFormatter). Documentation for the format string can be found in
 * Language.php, search for sprintfDate.
 *
 * This array is automatically inherited by all subclasses. Individual keys can be
 * overridden.
 */
$dateFormats = [
	'mdy time' => 'H:i',
	'mdy date' => 'n/j/Y زېږديز',
	'mdy both' => 'n/j/Y زېږديز، گړۍ H:i',

	'dmy time' => 'H:i',
	'dmy date' => 'j xg Y',
	'dmy both' => 'j xg Y، گړۍ H:i',

	'ymd time' => 'H:i',
	'ymd date' => 'Y/n/j زېږديز',
	'ymd both' => 'Y/n/j زېږديز، گړۍ H:i',

	'persian time' => 'H:i',
	'persian date' => 'xij xiF xiY',
	'persian both' => 'xij xiF xiY، گړۍ H:i',

	'hijri time' => 'H:i',
	'hijri date' => 'xmj xmF xmY',
	'hijri both' => 'xmj xmF xmY، گړۍ H:i',

	'hebrew time' => 'H:i',
	'hebrew date' => 'xij xjF xjY',
	'hebrew both' => 'xij xjF xjY، گړۍ H:i',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
];

// Use Gregorian calendar, where appropriate, override ps browser locale
$jsDateFormats = [
	'mdy date' => [ 'options' => [ 'calendar' => 'gregory' ] ],
	'mdy both' => [ 'options' => [ 'calendar' => 'gregory' ] ],
	'mdy pretty' => [ 'options' => [ 'calendar' => 'gregory' ] ],
	'dmy date' => [ 'options' => [ 'calendar' => 'gregory' ] ],
	'dmy both' => [ 'options' => [ 'calendar' => 'gregory' ] ],
	'dmy pretty' => [ 'options' => [ 'calendar' => 'gregory' ] ],
	'ymd date' => [ 'options' => [ 'calendar' => 'gregory' ] ],
	'ymd both' => [ 'options' => [ 'calendar' => 'gregory' ] ],
	'ymd pretty' => [ 'options' => [ 'calendar' => 'gregory' ] ],
];

# Harakat are intentionally not included in the linkTrail. Their addition should
# take place after enough tests.
$linkTrail = "/^([ابپتټثجچحخځڅدډذرړږژزسښشصضطظعغفقکګگلمنڼوهءیيېۍئ‌]+)(.*)$/sDu";
