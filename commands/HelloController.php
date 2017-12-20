<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use yii\console\Controller;
use yii\helpers\Console;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller
{
    const NEGATIVE = 1;
    const OK = 2;
    const Z = 3;

    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */
    public function actionIndex($message = 'hello world')
    {
        echo $message . "\n";
    }

    public function actionQwe()
    {
        $arr = [
            [1,2,3,4,5],
            [3,4,5,1,2],
            [5,1,2,3,4],
            [2,2,4,5,1],
            [4,5,1,2,3],
        ];

        $j = [
            [0,2,0,5,0],
            [1,0,5,0,0],
            [0,1,2,0,0],
            [0,5,0,0,0],
            [3,0,0,2,0],
        ];

        $c = [];

        $i = $arr[0][4] + $arr[1][3] + $arr[2][2] + $arr[3][1] + $arr[4][0];

        $mass = "\n\n                        {$this->if_($i)}\n";
        $mass .= "                       /\n";
        foreach ($arr as $key => $col){
            $sum = array_sum($col);
            $mass .= "   [ ";

            foreach ($col as $keyy => $o){
                if($j[$key][$keyy]){
                    $o = $this->mess($o, self::Z);
                }
                $mass .= $o . ($keyy < 4 ? ' - ' : '');
            }

            $mass .= " ] - {$this->if_($sum)}\n";

            $c[0] += $col[0];
            $c[1] += $col[1];
            $c[2] += $col[2];
            $c[3] += $col[3];
            $c[4] += $col[4];
        }
        $i = $arr[0][0] + $arr[1][1] + $arr[2][2] + $arr[3][3] + $arr[4][4];
        $mass .= "     |   |   |   |   |  \\\n";
        $mass .= "     {$this->if_($c[0])}  {$this->if_($c[1])}  {$this->if_($c[2])}  {$this->if_($c[3])}  {$this->if_($c[4])}   {$this->if_($i)}\n\n";

        echo $mass;
    }

    private function if_($sum)
    {
        $cod = $sum == 15 ? self::OK : self::NEGATIVE;
        return $this->mess($sum, $cod);
    }

    private function mess($mess, $code = false)
    {
        if(!$code) {
            echo "$mess \n";
        } elseif($code == self::NEGATIVE) {
            return $this->ansiFormat($mess, Console::FG_RED);
        } elseif($code == self::OK){
            return $this->ansiFormat($mess, Console::BG_GREEN);
        } elseif($code == self::Z){
            return $this->ansiFormat($mess, Console::NEGATIVE);
        }
    }
}
