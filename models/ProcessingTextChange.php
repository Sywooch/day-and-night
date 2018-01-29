<?php
namespace app\models;

/**
 * Class ProcessingTextChange
 */

class ProcessingTextChange
{
    /**
     * @param $text
     * @param $countWords
     * @return string
     */

    static public function shorteningText($text, $countWords){

        //объявляем переменную для изменееного текста
        $modifyText = '';

        //разделение текста
        $words = explode(' ', $text);

        //формирование текста по заданному условию
        foreach ($words as $key => $val) {

            //изменяемый текст
            $modifyText .= $val . ' ';

            /**
             * @var int $countWords - ограничение по максимальному ко-ву слов
             * @var int $key - порядковый номер слова
             *
             * условие - если номер тек.слова больше либо равно ограничению к-ву слов,
             * выходим из цикла
             */
            if ($key >= $countWords) {
                break;
            }
        }

        // Удаление тегов HTML и PHP из строки
        $modifyText = strip_tags($modifyText . ($countWords < count($words) ? ' ...' : ''), ENT_QUOTES);

        /**
         *  Возврат текста после обработки
         *  Преобразование специальные символы в HTML-сущности
         */
        return htmlspecialchars($modifyText);
    }

}
