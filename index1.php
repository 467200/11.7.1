<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index1.css" />
    <title>Таблицы PHP</title>
</head>
<body>
    <h2>Таблицы истинности и сравнения PHP</h2>
    <br>
    <table>
        <caption><strong>Таблица истинности PHP</strong></caption>
        <tr>
            <td><strong> A </strong></td> 
            <td><strong> B </strong></td> 
            <td><strong> !A </strong></td> 
            <td><strong> A || B </strong></td> 
            <td><strong> A && B </strong></td> 
            <td><strong> A xor B </strong></td> 
        </tr>
        <tr>
            <td><?php echo $a = 0; ?></td> 
            <td><?php echo $b = 0; ?></td> 
            <td><?php echo var_dump(!$a); ?></td> 
            <td><?php echo var_dump($a || $b); ?></td> 
            <td><?php echo var_dump($a && $b); ?></td> 
            <td><?php echo var_dump($a xor $b); ?></td> 
        </tr>
        <tr>
            <td><?php echo $a; ?></td> 
            <td><?php echo ++$b; ?></td> 
            <td><?php echo var_dump(!$a); ?></td> 
            <td><?php echo var_dump($a || $b); ?></td> 
            <td><?php echo var_dump($a && $b); ?></td> 
            <td><?php echo var_dump($a xor $b); ?></td>
        </tr> 
        <tr>
            <td><?php echo ++$a; ?></td> 
            <td><?php echo --$b; ?></td> 
            <td><?php echo var_dump(!$a); ?></td> 
            <td><?php echo var_dump($a || $b); ?></td> 
            <td><?php echo var_dump($a && $b); ?></td> 
            <td><?php echo var_dump($a xor $b); ?></td>
        </tr>
        <tr>
            <td><?php echo $a; ?></td> 
            <td><?php echo ++$b; ?></td> 
            <td><?php echo var_dump(!$a); ?></td> 
            <td><?php echo var_dump($a || $b); ?></td> 
            <td><?php echo var_dump($a && $b); ?></td> 
            <td><?php echo var_dump($a xor $b); ?></td>
        </tr>
    </table>
    <br>
    <br>
    <table>
        <caption><strong>Гибкое сравнение в PHP</strong></caption>
        <tr>
            <td><strong> </strong></td> 
            <td><strong> true </strong></td> 
            <td><strong> false </strong></td> 
            <td><strong> 1 </strong></td> 
            <td><strong> 0 </strong></td> 
            <td><strong> -1 </strong></td> 
            <td><strong> "1" </strong></td> 
            <td><strong> null </strong></td> 
            <td><strong> "php" </strong></td> 
        </tr>
        <tr>
            <td><strong> true </strong></td> 
            <td><?php echo var_dump(true == true); ?></td> 
            <td><?php echo var_dump(true == false); ?></td> 
            <td><?php echo var_dump(true == 1); ?></td> 
            <td><?php echo var_dump(true == 0); ?></td> 
            <td><?php echo var_dump(true == -1); ?></td>
            <td><?php echo var_dump(true == "1"); ?></td> 
            <td><?php echo var_dump(true == null); ?></td> 
            <td><?php echo var_dump(true == "php"); ?></td> 
        </tr>
        <tr>
            <td><strong> false </strong></td> 
            <td><?php echo var_dump(false == true); ?></td> 
            <td><?php echo var_dump(false == false); ?></td> 
            <td><?php echo var_dump(false == 1); ?></td> 
            <td><?php echo var_dump(false == 0); ?></td> 
            <td><?php echo var_dump(false == -1); ?></td>
            <td><?php echo var_dump(false == "1"); ?></td> 
            <td><?php echo var_dump(false == null); ?></td> 
            <td><?php echo var_dump(false == "php"); ?></td> 
        </tr>
        <tr>
            <td><strong> 1 </strong></td> 
            <td><?php echo var_dump(1 == true); ?></td> 
            <td><?php echo var_dump(1 == false); ?></td> 
            <td><?php echo var_dump(1 == 1); ?></td> 
            <td><?php echo var_dump(1 == 0); ?></td> 
            <td><?php echo var_dump(1 == -1); ?></td>
            <td><?php echo var_dump(1 == "1"); ?></td> 
            <td><?php echo var_dump(1 == null); ?></td> 
            <td><?php echo var_dump(1 == "php"); ?></td> 
        </tr>
        <tr>
            <td><strong> 0 </strong></td> 
            <td><?php echo var_dump(0 == true); ?></td> 
            <td><?php echo var_dump(0 == false); ?></td> 
            <td><?php echo var_dump(0 == 1); ?></td> 
            <td><?php echo var_dump(0 == 0); ?></td> 
            <td><?php echo var_dump(0 == -1); ?></td>
            <td><?php echo var_dump(0 == "1"); ?></td> 
            <td><?php echo var_dump(0 == null); ?></td> 
            <td><?php echo var_dump(0 == "php"); ?></td> 
        </tr>
        <tr>
            <td><strong> -1 </strong></td> 
            <td><?php echo var_dump(-1 == true); ?></td> 
            <td><?php echo var_dump(-1 == false); ?></td> 
            <td><?php echo var_dump(-1 == 1); ?></td> 
            <td><?php echo var_dump(-1 == 0); ?></td> 
            <td><?php echo var_dump(-1 == -1); ?></td>
            <td><?php echo var_dump(-1 == "1"); ?></td> 
            <td><?php echo var_dump(-1 == null); ?></td> 
            <td><?php echo var_dump(-1 == "php"); ?></td> 
        </tr>
        <tr>
            <td><strong> "1" </strong></td> 
            <td><?php echo var_dump("1" == true); ?></td> 
            <td><?php echo var_dump("1" == false); ?></td> 
            <td><?php echo var_dump("1" == 1); ?></td> 
            <td><?php echo var_dump("1" == 0); ?></td> 
            <td><?php echo var_dump("1" == -1); ?></td>
            <td><?php echo var_dump("1" == "1"); ?></td> 
            <td><?php echo var_dump("1" == null); ?></td> 
            <td><?php echo var_dump("1" == "php"); ?></td> 
        </tr>
        <tr>
            <td><strong> null </strong></td> 
            <td><?php echo var_dump(null == true); ?></td> 
            <td><?php echo var_dump(null == false); ?></td> 
            <td><?php echo var_dump(null == 1); ?></td> 
            <td><?php echo var_dump(null == 0); ?></td> 
            <td><?php echo var_dump(null == -1); ?></td>
            <td><?php echo var_dump(null == "1"); ?></td> 
            <td><?php echo var_dump(null == null); ?></td> 
            <td><?php echo var_dump(null == "php"); ?></td> 
        </tr>
        <tr>
            <td><strong> "php" </strong></td> 
            <td><?php echo var_dump("php"  == true); ?></td> 
            <td><?php echo var_dump("php"  == false); ?></td> 
            <td><?php echo var_dump("php"  == 1); ?></td> 
            <td><?php echo var_dump("php"  == 0); ?></td> 
            <td><?php echo var_dump("php"  == -1); ?></td>
            <td><?php echo var_dump("php"  == "1"); ?></td> 
            <td><?php echo var_dump("php"  == null); ?></td> 
            <td><?php echo var_dump("php"  == "php"); ?></td> 
        </tr>
        </table>
        <br>
        <br>
        <table>
        <caption><strong>Жесткое сравнение в PHP</strong></caption>
        <tr>
            <td><strong> </strong></td> 
            <td><strong> true </strong></td> 
            <td><strong> false </strong></td> 
            <td><strong> 1 </strong></td> 
            <td><strong> 0 </strong></td> 
            <td><strong> -1 </strong></td> 
            <td><strong> "1" </strong></td> 
            <td><strong> null </strong></td> 
            <td><strong> "php" </strong></td> 
        </tr>
        <tr>
            <td><strong> true </strong></td> 
            <td><?php echo var_dump(true === true); ?></td> 
            <td><?php echo var_dump(true === false); ?></td> 
            <td><?php echo var_dump(true === 1); ?></td> 
            <td><?php echo var_dump(true === 0); ?></td> 
            <td><?php echo var_dump(true === -1); ?></td>
            <td><?php echo var_dump(true === "1"); ?></td> 
            <td><?php echo var_dump(true === null); ?></td> 
            <td><?php echo var_dump(true === "php"); ?></td> 
        </tr>
        <tr>
            <td><strong> false </strong></td> 
            <td><?php echo var_dump(false === true); ?></td> 
            <td><?php echo var_dump(false === false); ?></td> 
            <td><?php echo var_dump(false === 1); ?></td> 
            <td><?php echo var_dump(false === 0); ?></td> 
            <td><?php echo var_dump(false === -1); ?></td>
            <td><?php echo var_dump(false === "1"); ?></td> 
            <td><?php echo var_dump(false === null); ?></td> 
            <td><?php echo var_dump(false === "php"); ?></td> 
        </tr>
        <tr>
            <td><strong> 1 </strong></td> 
            <td><?php echo var_dump(1 === true); ?></td> 
            <td><?php echo var_dump(1 === false); ?></td> 
            <td><?php echo var_dump(1 === 1); ?></td> 
            <td><?php echo var_dump(1 === 0); ?></td> 
            <td><?php echo var_dump(1 === -1); ?></td>
            <td><?php echo var_dump(1 === "1"); ?></td> 
            <td><?php echo var_dump(1 === null); ?></td> 
            <td><?php echo var_dump(1 === "php"); ?></td> 
        </tr>
        <tr>
            <td><strong> 0 </strong></td> 
            <td><?php echo var_dump(0 === true); ?></td> 
            <td><?php echo var_dump(0 === false); ?></td> 
            <td><?php echo var_dump(0 === 1); ?></td> 
            <td><?php echo var_dump(0 === 0); ?></td> 
            <td><?php echo var_dump(0 === -1); ?></td>
            <td><?php echo var_dump(0 === "1"); ?></td> 
            <td><?php echo var_dump(0 === null); ?></td> 
            <td><?php echo var_dump(0 === "php"); ?></td> 
        </tr>
        <tr>
            <td><strong> -1 </strong></td> 
            <td><?php echo var_dump(-1 === true); ?></td> 
            <td><?php echo var_dump(-1 === false); ?></td> 
            <td><?php echo var_dump(-1 === 1); ?></td> 
            <td><?php echo var_dump(-1 === 0); ?></td> 
            <td><?php echo var_dump(-1 === -1); ?></td>
            <td><?php echo var_dump(-1 === "1"); ?></td> 
            <td><?php echo var_dump(-1 === null); ?></td> 
            <td><?php echo var_dump(-1 === "php"); ?></td> 
        </tr>
        <tr>
            <td><strong> "1" </strong></td> 
            <td><?php echo var_dump("1" === true); ?></td> 
            <td><?php echo var_dump("1" === false); ?></td> 
            <td><?php echo var_dump("1" === 1); ?></td> 
            <td><?php echo var_dump("1" === 0); ?></td> 
            <td><?php echo var_dump("1" === -1); ?></td>
            <td><?php echo var_dump("1" === "1"); ?></td> 
            <td><?php echo var_dump("1" === null); ?></td> 
            <td><?php echo var_dump("1" === "php"); ?></td> 
        </tr>
        <tr>
            <td><strong> null </strong></td> 
            <td><?php echo var_dump(null === true); ?></td> 
            <td><?php echo var_dump(null === false); ?></td> 
            <td><?php echo var_dump(null === 1); ?></td> 
            <td><?php echo var_dump(null === 0); ?></td> 
            <td><?php echo var_dump(null === -1); ?></td>
            <td><?php echo var_dump(null === "1"); ?></td> 
            <td><?php echo var_dump(null === null); ?></td> 
            <td><?php echo var_dump(null === "php"); ?></td> 
        </tr>
        <tr>
            <td><strong> "php" </strong></td> 
            <td><?php echo var_dump("php"  === true); ?></td> 
            <td><?php echo var_dump("php"  === false); ?></td> 
            <td><?php echo var_dump("php"  === 1); ?></td> 
            <td><?php echo var_dump("php"  === 0); ?></td> 
            <td><?php echo var_dump("php"  === -1); ?></td>
            <td><?php echo var_dump("php"  === "1"); ?></td> 
            <td><?php echo var_dump("php"  === null); ?></td> 
            <td><?php echo var_dump("php"  === "php"); ?></td> 
        </tr>
    </table>
    <br>
    <br>
    <h2>Выводы</h2>
    <p style= "font-size: 120%; color: rgb(75, 12, 12); text-align: center">
                    В PHP существуют два оператора сравнения: жесткое сравнение и гибкое сравнение. </br> 
                    Оператор гибкого сравнения ( == ) сравнивает значения с приведением типов, тогда как оператор жесткого сравнения ( === ) сравнивает значения без приведения типов.
    </p>
    <ul>
        <li style= "font-size: 110%; color: rgb(75, 12, 12)"><strong>Жесткое сравнение (===) :</strong><br>
                    Возвращает <strong>true</strong> только если значения и типы обоих операндов идентичны.
                    Жесткое сравнение (===) учитывает и значения, и типы данных при сравнении, что делает его более точным и предсказуемым.</li>
        <br>
        <br>
        <li style= "font-size: 110%; color: rgb(75, 12, 12)"><strong>Гибкое сравнение (==) :</strong><br>
                    Производит сравнение значений операндов, преобразуя их типы при необходимости.
                    Если типы операндов отличаются, PHP пытается преобразовать один или оба операнда, чтобы сравнить их значения.
                    Гибкое сравнение (==) может выполнять неявное преобразование типов данных, что может привести к неожиданным результатам сравнения.</li>
        <br>
        <br>
        <li style= "font-size: 110%; color: rgb(75, 12, 12)"><strong>Главный вывод :</strong><br>
                   Использование жесткого сравнения применяется, когда важно проверить идентичность и типы данных, чтобы избежать ошибок из-за неявного преобразования типов.
                   Поэтому, для большей надежности и ясности в коде рекомендуется использовать жесткое сравнение (===), чтобы быть уверенным в сравнении и значений, и типов данных.</li>
    </ul>
</body>
</html>