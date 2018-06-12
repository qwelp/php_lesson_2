<?php

    function task1($array, $r = false)
    {
        if ($r) {
            echo implode(", ", $array);
        } else {
            foreach ($array as $str) {
                echo "<p>$str</p>";
            }
        }
    }

    function task2($arg)
    {
        $numargs = func_num_args();
        $arg_list = func_get_args();
        $total = 0;

        for ($i = 0; $i < $numargs; $i++) {
            if ($i === 0) {
                continue;
            }
            switch ($arg_list[0]) {
                case '-':
                    $total = $total - $arg_list[$i];
                    break;
                case '+':
                    $total = $total + $arg_list[$i];
                    break;
                case '*':
                    $total = $total * $arg_list[$i];
                    break;
                case '/':
                    $total = $total / $arg_list[$i];
                    break;
            }
        }
        unset($arg_list[0]);
        echo implode(" $arg ", $arg_list) . " = $total";
    }

    function task3($int_1, $int_2)
    {
        if(is_int($int_1) && is_int($int_2)) {
            $tb = '';
            $tb .= "<table border='1'>";
            for ($i = 1; $i <= $int_1; $i++) {
                $tb .= "<tr>";
                for ($ii = 1; $ii <= $int_2; $ii++) {
                    $int = $i * $ii;
                    $tb .= "<td>$int</td>";
                }
                $tb .= "</tr>";
            }
            $tb .= "</table>";
            echo $tb;
        } else {
            echo 'Числа должны быть целочисленным';
        }
    }

    function task4()
    {
        echo date('d.m.Y H:i', time()).'<br>';
        echo mktime(00, 00, 00, 02, 24, 2016);
    }

    function task5()
    {
        echo str_replace('К', '', 'Карл у Клары украл Кораллы').'<br>';
        echo str_replace(array('Две', 'лимонада'), array('Три', 'водки'), 'Две бутылки лимонада');
    }

    function task6()
    {
        $file = 'test.txt';
        file_put_contents($file, 'Hello again!');
        echo file_get_contents($file);

    }