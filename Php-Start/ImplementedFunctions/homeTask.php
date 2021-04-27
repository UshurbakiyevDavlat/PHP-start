<?php
    // Здесь не будет тасков лишь документация по этому занятию
        //Популярные функции по работе с переменными :
           /**
            * empty(); - проверяет пустая ли переменная, возвращает тру если да.
            * is_array(); - проверяет массив ли это,такие же функции есть на все типы.
            * gettype(); - возвращает тип переменной
            * isset(); - проверяет задана ли переменная
            * print_r(); - печатает удобно информацию о переменной
            * unset(); - удаляет переменную
            * var_dump(); - выводит информацию о переменной
            * serialize() - генерирует пригодное для хранение представление о переменной
            * unserialize() - создает пхп-значение из хранимого представления.
            * get_defined_vars() - отдает список всех переменных в скрипте.
            * strval() - возвращает строковое значение переменной
            */

        //Популярные функции по работе со строками и форматирование строк,а также конструкции:

            //Пример использования форматирования строк:
                    $name = "Давлат";
                    $age = 21;
                    $temperature = 38.92;
                    $str = "Меня зовут %s, мне %d , у меня температура %.2f";
                    printf($str,$name,$age,$temperature);

            /**
             * echo & print() - печатают строку в браузер.
             * explode() - разделяет строку на части по делиметру
             * implode() & join() - обьединяют части в строку по делиметру
             * htmlspecialchars() - преобразуют спец-символы в хтмл сущность
             * md5() - зашифровывает строку в мд5-хеш эквивалент
             * rtrim() - удаляет пробелы или другие пространственные символы с конца строки
             * trim() - удаляет пробелы или другие пространственные символы
             * setlocale() - устанавливает настройки локали в скрипте
             * parse_str() - разделяет строку в переменные
             * printf() - выовод форматированной строки
             * sprintf() - возврат форматированной строки
             * substr() - возвращает подстроку
             * str_repeat() - повторяет строку
             * str_replace() - заменяет вхождения строки поиска на строки замены
             * str_split() - разделяет строку на массив
             * strcmp() - бинарное безопасное сравнение строк
             * strlen() - возвращает длинну строки
             * strpos() - возвращает первое вхождение строки
             * wordwrap() - переносит строку по указанному кол-ву символов
             * strtolower() - возводит в верхний регистр
             * strtoupper() - возводит в нижний регистр
             */

         // Популярные математические функции
            /**
             * abs() - возвращает абсолютное значение
             * ceil() - округляет в потолок
             * floor() - округляет в пол
             * getrandmax() - возвращает максимально возможное случайное число
             * max() - возвращает максимальное значение
             * min() - возвращает минимальное значение
             * round() - округляет по правилам округления
             * decbin() - преобразует десятичное число в бинарное
             * dechex() - преобразует десятичное число в гексадесимальное
             * decoct() - преобразует десятичное числов в октодесимальное
             * bindec() - преобразует бинарное в десимальное
             * hexdec() - преобразует гексадесимальное в десимальное
             * octdec() - преобразует октодесимальное в десимальное
             * is_nan() - проверяет нан или нет
             * log() - натуральныый логорифм
             * mt_rand() - генерирует случайное число с помощью генератора на базе Вихря Мерсенна
             * mt_srand() - проинициализирует случайное число на базе Вихря Мерсенна
             * pow() - возводит в степень
             */


        // Популярные функции по работе с массивами
            /**
             * array_diff() - вычисляет расхождение массивов
             * array_fill() - заполняет массив
             * array_flip() - меняет местами ключи и значения
             * array_filter() - фильтрует массив на базе калбек функции пользователя
             * array_intersect() - вычисляет пересечение массивов
             * array_keys() - возвращает ключи массива
             * array_map() - применяет калбек функцию ко всем элементам массива
             * array_merge() - обьединяет массивы
             * array_pop()  - извлекает последний элемент массива
             * array_push() - добавляет элемент в конец массива
             * array_replace() - заменяет элементы массива на элементы других переданных массивов
             * array_shift() - извлекает первый элемент массива
             * array_slice() - выбирает срез массива
             * array_sum() - возвращает сумму всех значений массива
             * array_splice() - удаляет часть массива и заменяет ее чем нибудь еще
             * array() - создает массив
             * array_walk() - применяет заданную пользователем функцию ко всем элементам массива
             * array_unshift() - добавляет элементы в начало массива
             * array_unique() - делает значения массива уникальными
             * in_array() - проверяет есть ли значение внутри массива
             * list() - присваевает переменным из списка значения подобно массиву
             * range() - создает массив содержащий диапазон элементов
             * shuffle() - перемешивает массив
             * count() - возвращает кол-во элементов в массиве
             * array_reverse() - переворачивает массив
             * array_search() - осуществляет поиск данного значения и возвращает ключ первого найденного
             * array_combine() - создает новый массив используя первый массив в качестве ключа, а другой
             *                                                                      в качестве значений.
             *
             */

        //Популярные функции по сортировке массива
            /**
             * sort() - сортирует массив по значениям и возрастанию, но не сохраняет связь ключ-значения.
             * asort() - сортирует массив по значениям возрастанию ,и сохраняет связь ключ-значение.
             * arsort() - тот же что и asort() только по убыванию
             * ksort() - сортирует по ключам и возрастанию
             * krsort() - тот же что ksort только по убыванию
             * natcasesort() - сортирует по алгоритму естества,только нечувствителен к регистру
             * natsort() - сортирует по значению в естественном порядке
             * uasort() - сортирует по значению , порядок определяется пользователем
             * uksort() - сортирует по ключам, порядок определяется пользователем
             * usort() - сортирует по значению, порядок определяется пользователем, не сохраняет связь
             *                                                                          ключ-значение
             * shuffle() - случайно перемешивает массив.
             */

?>