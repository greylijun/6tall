<?php

namespace com\nlf\calendar;

class ShenSha
{
    /** @var array[]   天乙贵人 */
    private static $TYGR = [
        'name' => '天乙贵人',
        'data' => [
            '甲' => ['丑', '未'],
            '乙' => ['申', '子'],
            '丙' => ['酉', '亥'],
            '丁' => ['酉', '亥'],
            '戊' => ['丑', '未'],
            '己' => ['申', '子'],
            '庚' => ['寅', '午'],
            '辛' => ['寅', '午'],
            '壬' => ['卯', '巳'],
            '癸' => ['卯', '巳'],
        ],
    ];

    /** @var array[] 太极贵人 */
    private static $TJGR = [
        'name' => '太极贵人',
        'data' => [
            '甲' => ['子', '午'],
            '乙' => ['子', '午'],
            '丙' => ['卯', '酉'],
            '丁' => ['卯', '酉'],
            '戊' => ['辰', '戌', '丑', '未'],
            '己' => ['辰', '戌', '丑', '未'],
            '庚' => ['寅', '亥'],
            '辛' => ['寅', '亥'],
            '壬' => ['巳', '申'],
            '癸' => ['巳', '申'],
        ]
    ];

    /** @var array[] 文昌贵人 */
    private static $WCGR = [
        'name' => '文昌贵人',
        'data' => [
            '甲' => ['巳'],
            '乙' => ['午'],
            '丙' => ['申'],
            '丁' => ['酉'],
            '戊' => ['申'],
            '己' => ['酉'],
            '庚' => ['亥'],
            '辛' => ['子'],
            '壬' => ['寅'],
            '癸' => ['卯'],
        ]
    ];

    /** @var array 国印贵人 */
    private static $GYGR = [
        'name' => '国印贵人',
        'data' => [
            '甲' => ['戌'],
            '乙' => ['亥'],
            '丙' => ['丑'],
            '丁' => ['寅'],
            '戊' => ['丑'],
            '己' => ['寅'],
            '庚' => ['辰'],
            '辛' => ['巳'],
            '壬' => ['未'],
            '癸' => ['申'],
        ]
    ];

    /** @var array 月支查四柱干支 */
    private static $TDGR = [
        'name' => '天德贵人',
        'data' => [
            '寅' => ['丁'],
            '卯' => ['申'],
            '辰' => ['壬'],
            '巳' => ['辛'],
            '午' => ['亥'],
            '未' => ['甲'],
            '申' => ['癸'],
            '酉' => ['寅'],
            '戌' => ['丙'],
            '亥' => ['乙'],
            '子' => ['巳'],
            '丑' => ['庚'],
        ],
    ];

    /** @var array 月支查四柱干支 */
    private static $YDGR = [
        'name' => '月德贵人',
        'data' => [
            '寅' => ['丙'],
            '卯' => ['甲'],
            '辰' => ['壬'],
            '巳' => ['庚'],
            '午' => ['丙'],
            '未' => ['甲'],
            '申' => ['壬'],
            '酉' => ['庚'],
            '戌' => ['丙'],
            '亥' => ['甲'],
            '子' => ['壬'],
            '丑' => ['庚'],
        ],
    ];

    /** @var array 日干查其余三支 */
    private static $JYGR = [
        'name' => '金舆贵人',
        'data' => [
            '甲' => ['辰'],
            '乙' => ['巳'],
            '丙' => ['未'],
            '丁' => ['申'],
            '戊' => ['未'],
            '己' => ['申'],
            '庚' => ['戌'],
            '辛' => ['亥'],
            '壬' => ['丑'],
            '癸' => ['寅'],
        ]
    ];

    /** @var array 日干查四地支 */
    private static $LS = [
        'name' => '禄神',
        'data' => [
            '甲' => ['寅'],
            '乙' => ['卯'],
            '丙' => ['巳'],
            '丁' => ['午'],
            '戊' => ['巳'],
            '己' => ['午'],
            '庚' => ['申'],
            '辛' => ['酉'],
            '壬' => ['亥'],
            '癸' => ['子'],
        ]
    ];

    /** @var array 日干查四地支 */
    private static $YR = [
        'name' => '羊刃',
        'data' => [
            '甲' => ['卯'],
            '乙' => ['寅'],
            '丙' => ['午'],
            '丁' => ['巳'],
            '戊' => ['午'],
            '己' => ['巳'],
            '庚' => ['酉'],
            '辛' => ['申'],
            '壬' => ['子'],
            '癸' => ['亥'],
        ]
    ];

    /** @var array 日干查日支 */
    private static $KRX = [
        'name' => '魁罡日',
        'data' => [
            '戊' => ['戌'],
            '庚' => ['辰', '戌'],
            '壬' => ['辰'],
        ]
    ];

    /** @var array 日干查日支 */
    private static $YCYCR = [
        'name' => '阴差阳错日',
        'data' => [
            '丙' => ['子', '午'],
            '丁' => ['丑', '未'],
            '戊' => ['寅', '申'],
            '辛' => ['卯', '酉'],
            '壬' => ['辰', '戌'],
            '癸' => ['巳', '亥'],
        ]
    ];

    /** @var array 日干查日支 */
    private static $GRS = [
        'name' => '孤鸾煞',
        'data' => [
            '甲' => ['寅'],
            '乙' => ['巳'],
            '丙' => ['午'],
            '丁' => ['巳'],
            '戊' => ['午', '申'],
            '辛' => ['亥'],
            '壬' => ['子'],
        ]
    ];

    /** @var array 日干查日支 */
    private static $SEDBR = [
        'name' => '十恶大败日',
        'data' => [
            '甲' => ['辰'],
            '乙' => ['巳'],
            '丙' => ['申'],
            '丁' => ['亥'],
            '戊' => ['戌'],
            '己' => ['丑'],
            '庚' => ['辰'],
            '辛' => ['巳'],
            '壬' => ['申'],
            '癸' => ['亥'],
        ]
    ];

    /** @var array 日干查日支 */
    private static $SLR = [
        'name' => '十灵日',
        'data' => [
            '甲' => ['辰'],
            '乙' => ['亥'],
            '丙' => ['辰'],
            '丁' => ['酉'],
            '戊' => ['午'],
            '庚' => ['戌', '寅'],
            '辛' => ['亥'],
            '壬' => ['寅'],
            '癸' => ['未'],
        ]
    ];

    /** @var array 年支/日支查其余三地支 */
    private static $JX = [
        'name' => '将星',
        'data' => [
            '寅' => ['午'],
            '卯' => ['卯'],
            '辰' => ['子'],
            '巳' => ['酉'],
            '午' => ['午'],
            '未' => ['卯'],
            '申' => ['子'],
            '酉' => ['酉'],
            '戌' => ['午'],
            '亥' => ['卯'],
            '子' => ['子'],
            '丑' => ['酉'],
        ]
    ];

    /** @var array 年支/日支查其余三地支 */
    private static $YMX = [
        'name' => '驿马星',
        'data' => [
            '寅' => ['申'],
            '卯' => ['巳'],
            '辰' => ['寅'],
            '巳' => ['亥'],
            '午' => ['申'],
            '未' => ['巳'],
            '申' => ['寅'],
            '酉' => ['亥'],
            '戌' => ['申'],
            '亥' => ['巳'],
            '子' => ['寅'],
            '丑' => ['亥'],
        ]
    ];

    /** @var array 年支/日支查其余三地支 */
    private static $HGX = [
        'name' => '华盖星',
        'data' => [
            '寅' => ['戌'],
            '卯' => ['未'],
            '辰' => ['辰'],
            '巳' => ['丑'],
            '午' => ['戌'],
            '未' => ['未'],
            '申' => ['辰'],
            '酉' => ['丑'],
            '戌' => ['戌'],
            '亥' => ['未'],
            '子' => ['辰'],
            '丑' => ['丑'],
        ]
    ];

    /** @var array 年支/日支查其余三地支 */
    private static $THX = [
        'name' => '桃花星',
        'data' => [
            '寅' => ['卯'],
            '卯' => ['子'],
            '辰' => ['酉'],
            '巳' => ['午'],
            '午' => ['卯'],
            '未' => ['子'],
            '申' => ['酉'],
            '酉' => ['午'],
            '戌' => ['卯'],
            '亥' => ['子'],
            '子' => ['酉'],
            '丑' => ['午'],
        ]
    ];

    /** @var array 年支/日支查其余三地支 */
    private static $TL = [
        'name' => '天罗',
        'data' => [
            '戌' => ['亥'],
            '亥' => ['戌'],
        ]
    ];

    /** @var array 年支/日支查其余三地支 */
    private static $DW = [
        'name' => '地网',
        'data' => [
            '辰' => ['巳'],
            '巳' => ['辰'],
        ]
    ];

    /** @var array 年支/日支查其余三地支 */
    private static $JS = [
        'name' => '劫煞',
        'data' => [
            '寅' => ['亥'],
            '卯' => ['申'],
            '辰' => ['巳'],
            '巳' => ['寅'],
            '午' => ['亥'],
            '未' => ['申'],
            '申' => ['巳'],
            '酉' => ['寅'],
            '戌' => ['亥'],
            '亥' => ['申'],
            '子' => ['巳'],
            '丑' => ['寅'],
        ]
    ];

    /** @var array 年支/日支查其余三地支 */
    private static $WS = [
        'name' => '亡神',
        'data' => [
            '寅' => ['巳'],
            '卯' => ['寅'],
            '辰' => ['亥'],
            '巳' => ['申'],
            '午' => ['巳'],
            '未' => ['寅'],
            '申' => ['亥'],
            '酉' => ['申'],
            '戌' => ['巳'],
            '亥' => ['寅'],
            '子' => ['亥'],
            '丑' => ['申'],
        ]
    ];

    /** @var array 年支查其余三支 男命 */
    private static $GC = [
        'name' => '孤辰',
        'data' => [
            '寅' => ['巳'],
            '卯' => ['巳'],
            '辰' => ['巳'],
            '巳' => ['申'],
            '午' => ['申'],
            '未' => ['申'],
            '申' => ['亥'],
            '酉' => ['亥'],
            '戌' => ['亥'],
            '亥' => ['寅'],
            '子' => ['寅'],
            '丑' => ['寅'],
        ]
    ];

    /** @var array 年支查其余三支 女命 */
    private static $GS = [
        'name' => '寡宿',
        'data' => [
            '寅' => ['丑'],
            '卯' => ['丑'],
            '辰' => ['丑'],
            '巳' => ['辰'],
            '午' => ['辰'],
            '未' => ['辰'],
            '申' => ['未'],
            '酉' => ['未'],
            '戌' => ['未'],
            '亥' => ['戌'],
            '子' => ['戌'],
            '丑' => ['戌'],
        ]
    ];

    /** @var array 年支查其余三支 */
    private static $ZS = [
        'name' => '灾煞',
        'data' => [
            '寅' => ['子'],
            '卯' => ['酉'],
            '辰' => ['午'],
            '巳' => ['卯'],
            '午' => ['子'],
            '未' => ['酉'],
            '申' => ['午'],
            '酉' => ['卯'],
            '戌' => ['子'],
            '亥' => ['酉'],
            '子' => ['午'],
            '丑' => ['卯'],
        ]
    ];

    /** @var array 年支查其余三支 */
    private static $HY = [
        'name' => '红鸾',
        'data' => [
            '寅' => ['丑'],
            '卯' => ['子'],
            '辰' => ['亥'],
            '巳' => ['戌'],
            '午' => ['酉'],
            '未' => ['申'],
            '申' => ['未'],
            '酉' => ['午'],
            '戌' => ['巳'],
            '亥' => ['辰'],
            '子' => ['卯'],
            '丑' => ['寅'],
        ]
    ];

    /** @var array 年支查其余三支 */
    private static $TX = [
        'name' => '天喜',
        'data' => [
            '寅' => ['未'],
            '卯' => ['午'],
            '辰' => ['巳'],
            '巳' => ['辰'],
            '午' => ['卯'],
            '未' => ['寅'],
            '申' => ['丑'],
            '酉' => ['子'],
            '戌' => ['亥'],
            '亥' => ['戌'],
            '子' => ['酉'],
            '丑' => ['申'],
        ]
    ];

    /** @var array 月支查其余三支 */
    private static $TYX = [
        'name' => '天医星',
        'data' => [
            '寅' => ['丑'],
            '卯' => ['寅'],
            '辰' => ['卯'],
            '巳' => ['辰'],
            '午' => ['巳'],
            '未' => ['午'],
            '申' => ['未'],
            '酉' => ['申'],
            '戌' => ['酉'],
            '亥' => ['戌'],
            '子' => ['亥'],
            '丑' => ['子'],
        ]
    ];

    /** @var array 月支查日柱干支 */
    private static $TSR = [
        'name' => '天赦日',
        'data' => [
            '寅' => ['戊', '寅'],
            '卯' => ['戊', '寅'],
            '辰' => ['戊', '寅'],
            '巳' => ['甲', '午'],
            '午' => ['甲', '午'],
            '未' => ['甲', '午'],
            '申' => ['戊', '申'],
            '酉' => ['戊', '申'],
            '戌' => ['戊', '申'],
            '亥' => ['甲', '子'],
            '子' => ['甲', '子'],
            '丑' => ['甲', '子'],
        ]
    ];

    /** @var array 年柱/日柱查其余三柱，六十甲子 */
    private static $KW = [
        'name' => '空亡',
        'data' => [
            '甲子' => ['戌', '亥'],
            '乙丑' => ['戌', '亥'],
            '丙寅' => ['戌', '亥'],
            '丁卯' => ['戌', '亥'],
            '戊辰' => ['戌', '亥'],
            '己巳' => ['戌', '亥'],
            '庚午' => ['戌', '亥'],
            '辛未' => ['戌', '亥'],
            '壬申' => ['戌', '亥'],
            '癸酉' => ['戌', '亥'],
            '甲戌' => ['申', '酉'],
            '乙亥' => ['申', '酉'],
            '丙子' => ['申', '酉'],
            '丁丑' => ['申', '酉'],
            '戊寅' => ['申', '酉'],
            '己卯' => ['申', '酉'],
            '庚辰' => ['申', '酉'],
            '辛巳' => ['申', '酉'],
            '壬午' => ['申', '酉'],
            '癸未' => ['申', '酉'],
            '甲申' => ['午', '未'],
            '乙酉' => ['午', '未'],
            '丙戌' => ['午', '未'],
            '丁亥' => ['午', '未'],
            '戊子' => ['午', '未'],
            '己丑' => ['午', '未'],
            '庚寅' => ['午', '未'],
            '辛卯' => ['午', '未'],
            '壬辰' => ['午', '未'],
            '癸巳' => ['午', '未'],
            '甲午' => ['辰', '巳'],
            '乙未' => ['辰', '巳'],
            '丙申' => ['辰', '巳'],
            '丁酉' => ['辰', '巳'],
            '戊戌' => ['辰', '巳'],
            '己亥' => ['辰', '巳'],
            '庚子' => ['辰', '巳'],
            '辛丑' => ['辰', '巳'],
            '壬寅' => ['辰', '巳'],
            '癸卯' => ['辰', '巳'],
            '甲辰' => ['寅', '卯'],
            '乙巳' => ['寅', '卯'],
            '丙午' => ['寅', '卯'],
            '丁未' => ['寅', '卯'],
            '戊申' => ['寅', '卯'],
            '己酉' => ['寅', '卯'],
            '庚戌' => ['寅', '卯'],
            '辛亥' => ['寅', '卯'],
            '壬子' => ['寅', '卯'],
            '癸丑' => ['寅', '卯'],
            '甲寅' => ['子', '丑'],
            '乙卯' => ['子', '丑'],
            '丙辰' => ['子', '丑'],
            '丁巳' => ['子', '丑'],
            '戊午' => ['子', '丑'],
            '己未' => ['子', '丑'],
            '庚申' => ['子', '丑'],
            '辛酉' => ['子', '丑'],
            '壬戌' => ['子', '丑'],
            '癸亥' => ['子', '丑'],
        ]
    ];

    /**
     * 农历
     * @var Lunar
     */
    private $lunar;

    private $yearGan;

    private $monthGan;

    private $dayGan;

    private $timeGan;

    private $yearZhi;

    private $monthZhi;

    private $dayZhi;

    private $timeZhi;

    private $yearShenSha = [];

    private $monthShenSha = [];

    private $dayShenSha = [];

    private $timeShenSha = [];

    function __construct($lunar, $sex)
    {
        $this->lunar = $lunar;
        $this->yearGan = $this->lunar->getYearGanByLiChun();
        $this->monthGan = $this->lunar->getMonthGan();
        $this->dayGan = $this->lunar->getDayGan();
        $this->timeGan = $this->lunar->getTimeGan();
        $this->yearZhi = $this->lunar->getYearZhi();
        $this->monthZhi = $this->lunar->getMonthZhi();
        $this->dayZhi = $this->lunar->getDayZhi();
        $this->timeZhi = $this->lunar->getTimeZhi();
        // 年干/日干查地支
        $this->yGanDGanSearchZhi();
        // 月支查四柱干支
        $this->mSearch4Gan();
        // 年支查其余三地支
        $this->yZhiSearch3Zhi($sex);
        // 日支查其余三地支
        $this->dZhiSearch3Zhi();
        // 日干查其余三地支
        $this->dGanSearch3Zhi();
        // 日干查四地支
        $this->dGanSearch4Zhi();
        // 日干查日支
        $this->dGanSerchDzhi();
        // 月支查其余三地支
        $this->mZhiSearch3Zhi();
        // 月支查日干支
        $this->mZhiSearchDGanZHi();
        $this->yGanZhiSearch3Zhi();
        $this->dGanZhiSearch3Zhi();
    }

    /**
     * 年神煞
     * @return array
     */
    public function getYearShenSha()
    {
        return array_filter(array_unique($this->yearShenSha));
    }

    /**
     * 月神煞
     * @return array
     */
    public function getMonthShenSha()
    {
        return array_filter(array_unique($this->monthShenSha));
    }

    /**
     * 日神煞
     * @return array
     */
    public function getDayShenSha()
    {
        return array_filter(array_unique($this->dayShenSha));
    }

    /**
     * 时神煞
     * @return array
     */
    public function getTimeShenSha()
    {
        return array_filter(array_unique($this->timeShenSha));
    }

    /**
     * 年干/日干查地支
     * @return void
     */
    private function yGanDGanSearchZhi()
    {
        $zhi = [
            'yearShenSha' => $this->yearZhi,
            'monthShenSha' => $this->monthZhi,
            'dayShenSha' => $this->dayZhi,
            'timeShenSha' => $this->timeZhi,
        ];
        $data = [];
        foreach ($zhi as $key => $row) {
            $this->$key[] = (in_array($row, self::$TYGR['data'][$this->yearGan]) or in_array($row, self::$TYGR['data'][$this->dayGan])) ? self::$TYGR['name'] : '';
            $this->$key[] = (in_array($row, self::$TJGR['data'][$this->yearGan]) or in_array($row, self::$TJGR['data'][$this->dayGan])) ? self::$TJGR['name'] : '';
            $this->$key[] = (in_array($row, self::$WCGR['data'][$this->yearGan]) or in_array($row, self::$WCGR['data'][$this->dayGan])) ? self::$WCGR['name'] : '';
            $this->$key[] = (in_array($row, self::$GYGR['data'][$this->yearGan]) or in_array($row, self::$GYGR['data'][$this->dayGan])) ? self::$GYGR['name'] : '';
        }
    }

    /**
     * 月支查四柱干支
     * @return void
     */
    private function mSearch4Gan()
    {
        $gan = [
            'yearShenSha' => $this->yearGan,
            'monthShenSha' => $this->monthGan,
            'dayShenSha' => $this->dayGan,
            'timeShenSha' => $this->timeGan,
        ];
        foreach ($gan as $key => $row) {
            $this->$key[] = in_array($row, self::$TDGR['data'][$this->monthZhi]) ? self::$TDGR['name'] : '';
            $this->$key[] = in_array($row, self::$YDGR['data'][$this->monthZhi]) ? self::$YDGR['name'] : '';
        }
    }

    /**
     * 年支查其余三地支
     * @return void
     */
    private function yZhiSearch3Zhi($sex)
    {
        $yzhi = [
            'monthShenSha' => $this->monthZhi,
            'dayShenSha' => $this->dayZhi,
            'timeShenSha' => $this->timeZhi,
        ];
        foreach ($yzhi as $key => $row) {
            $this->$key[] = in_array($row, self::$JX['data'][$this->yearZhi]) ? self::$JX['name'] : '';
            $this->$key[] = in_array($row, self::$YMX['data'][$this->yearZhi]) ? self::$YMX['name'] : '';
            $this->$key[] = in_array($row, self::$HGX['data'][$this->yearZhi]) ? self::$HGX['name'] : '';
            $this->$key[] = in_array($row, self::$THX['data'][$this->yearZhi]) ? self::$THX['name'] : '';
            $this->$key[] = (isset(self::$TL['data'][$this->yearZhi]) and in_array($row, self::$TL['data'][$this->yearZhi])) ? self::$TL['name'] : '';
            $this->$key[] = (isset(self::$DW['data'][$this->yearZhi]) and in_array($row, self::$DW['data'][$this->yearZhi])) ? self::$DW['name'] : '';
            if ($sex == 1) {
                $this->$key[] = in_array($row, self::$GC['data'][$this->yearZhi]) ? self::$GC['name'] : '';
            } else {
                $this->$key[] = in_array($row, self::$GS['data'][$this->yearZhi]) ? self::$GS['name'] : '';
            }
            $this->$key[] = in_array($row, self::$JS['data'][$this->yearZhi]) ? self::$JS['name'] : '';
            $this->$key[] = in_array($row, self::$ZS['data'][$this->yearZhi]) ? self::$ZS['name'] : '';
            $this->$key[] = in_array($row, self::$WS['data'][$this->yearZhi]) ? self::$WS['name'] : '';
            $this->$key[] = in_array($row, self::$HY['data'][$this->yearZhi]) ? self::$HY['name'] : '';
            $this->$key[] = in_array($row, self::$TX['data'][$this->yearZhi]) ? self::$TX['name'] : '';
        }
    }

    /**
     * 日支查其余三地支
     * @return void
     */
    private function dZhiSearch3Zhi()
    {
        $dzhi = [
            'yearShenSha' => $this->yearZhi,
            'monthShenSha' => $this->monthZhi,
            'timeShenSha' => $this->timeZhi,
        ];

        foreach ($dzhi as $key => $row) {
            $this->$key[] = in_array($row, self::$JX['data'][$this->dayZhi]) ? self::$JX['name'] : '';
            $this->$key[] = in_array($row, self::$YMX['data'][$this->dayZhi]) ? self::$YMX['name'] : '';
            $this->$key[] = in_array($row, self::$HGX['data'][$this->dayZhi]) ? self::$HGX['name'] : '';
            $this->$key[] = in_array($row, self::$THX['data'][$this->dayZhi]) ? self::$THX['name'] : '';
            $this->$key[] = (isset(self::$TL['data'][$this->dayZhi]) and in_array($row, self::$TL['data'][$this->dayZhi])) ? self::$TL['name'] : '';
            $this->$key[] = (isset(self::$DW['data'][$this->dayZhi]) and in_array($row, self::$DW['data'][$this->dayZhi])) ? self::$DW['name'] : '';
            $this->$key[] = in_array($row, self::$JS['data'][$this->dayZhi]) ? self::$JS['name'] : '';
            $this->$key[] = in_array($row, self::$WS['data'][$this->dayZhi]) ? self::$WS['name'] : '';
        }
    }

    /**
     * 日干查其余三地支
     * @return void
     */
    private function dGanSearch3Zhi()
    {
        $dzhi = [
            'yearShenSha' => $this->yearZhi,
            'monthShenSha' => $this->monthZhi,
            'timeShenSha' => $this->timeZhi,
        ];
        foreach ($dzhi as $key => $row) {
            $this->$key[] = in_array($row, self::$JYGR['data'][$this->dayGan]) ? self::$JYGR['name'] : '';
        }
    }

    /**
     * 日干查四地支
     * @return void
     */
    private function dGanSearch4Zhi()
    {
        $dzhi = [
            'yearShenSha' => $this->yearZhi,
            'monthShenSha' => $this->monthZhi,
            'dayShenSha' => $this->dayZhi,
            'timeShenSha' => $this->timeZhi,
        ];
        foreach ($dzhi as $key => $row) {
            $this->$key[] = in_array($row, self::$LS['data'][$this->dayGan]) ? self::$LS['name'] : '';
            $this->$key[] = in_array($row, self::$YR['data'][$this->dayGan]) ? self::$YR['name'] : '';
        }
    }

    /**
     * 日干查日支
     * @return void
     */
    private function dGanSerchDzhi()
    {
        $dzhi = [
            'dayShenSha' => $this->dayZhi,
        ];
        foreach ($dzhi as $key => $row) {
            $this->$key[] = (isset(self::$KRX['data'][$this->dayGan]) and in_array($row, self::$KRX['data'][$this->dayGan])) ? self::$KRX['name'] : '';
            $this->$key[] = (isset(self::$YCYCR['data'][$this->dayGan]) and in_array($row, self::$YCYCR['data'][$this->dayGan])) ? self::$YCYCR['name'] : '';
            $this->$key[] = (isset(self::$GRS['data'][$this->dayGan]) and in_array($row, self::$GRS['data'][$this->dayGan])) ? self::$GRS['name'] : '';
            $this->$key[] = (isset(self::$SEDBR['data'][$this->dayGan]) and in_array($row, self::$SEDBR['data'][$this->dayGan])) ? self::$SEDBR['name'] : '';
            $this->$key[] = (isset(self::$SLR['data'][$this->dayGan]) and in_array($row, self::$SLR['data'][$this->dayGan])) ? self::$SLR['name'] : '';
        }
    }

    /**
     * 月支查其余三地支
     * @return void
     */
    private function mZhiSearch3Zhi()
    {
        $mZhi = [
            'yearShenSha' => $this->yearZhi,
            'dayShenSha' => $this->dayZhi,
            'timeShenSha' => $this->timeZhi,
        ];
        foreach ($mZhi as $key => $row) {
            $this->$key[] = in_array($row, self::$TYX['data'][$this->monthZhi]) ? self::$TYX['name'] : '';
        }
    }

    /**
     * 月支查日干支
     * @return void
     */
    private function mZhiSearchDGanZHi()
    {
        $mzhi = [
            'dayShenSha' => $this->dayZhi,
            'dayShenSha' => $this->dayGan,
        ];
        foreach ($mzhi as $key => $row) {
            $this->$key[] = in_array($row, self::$TSR['data'][$this->monthZhi]) ? self::$TSR['name'] : '';
        }
    }

    /**
     * 年柱查其余三柱
     * @return void
     */
    private function yGanZhiSearch3Zhi()
    {
        $yGanZhi = [
            'monthShenSha' => $this->monthZhi,
            'dayShenSha' => $this->dayZhi,
            'timeShenSha' => $this->timeZhi,
        ];
        $yGZ = $this->yearGan . $this->yearZhi;
        foreach ($yGanZhi as $key => $row) {
            $this->$key[] = (isset(self::$KW['data'][$yGZ]) and in_array($row, self::$KW['data'][$yGZ])) ? self::$KW['name'] : '';
        }
    }

    /**
     * 日柱查其余三柱
     * @return void
     */
    private function dGanZhiSearch3Zhi()
    {
        $dGanZhi = [
            'yearShenSha' => $this->yearZhi,
            'monthShenSha' => $this->monthZhi,
            'timeShenSha' => $this->timeZhi,
        ];
        $dGZ = $this->dayGan . $this->dayZhi;
        foreach ($dGanZhi as $key => $row) {
            $this->$key[] = (isset(self::$KW['data'][$dGZ]) and in_array($row, self::$KW['data'][$dGZ])) ? self::$KW['name'] : '';
        }
    }
}
