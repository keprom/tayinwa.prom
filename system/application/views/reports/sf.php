<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>СФ #<?php echo $firm->dogovor; ?></title>
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png">
    <link href="/css/fullpage.css" rel="stylesheet">
    <style>
        body {
            margin-left: auto;
            margin-right: auto;
        }

        .page-break-always {
            page-break-after: always;
        }

        @media print {
            .x-small {
                font-size: x-small;
            }

            .smaller {
                font-size: smaller;
            }
        }
    </style>
</head>
<body class="portrait">
<div class="x-small" id="sf">
    <a href="#nakl" class="hide-on-print">К накладной</a>
    <table class="block border-collapse">
        <tbody>
        <tr>
            <td colspan="10" align="center">
                <?php
                $schet = strlen($schet2) == 0 ? "0" . $schetfactura_date->schet_new : $schet2;
                $data_schet = strlen($data_schet) == 0 ? date("d.m.Y", strtotime($schetfactura_date->date)) : $data_schet;
                ?>
                <h2 class="no-margin"><b>Есеп шот-фактура / Счет-фактура №<?php echo $schet; ?>
                        от <?php echo $data_schet; ?></b></h2>
            </td>
            <td align="right"> (1)</td>
        </tr>
        <tr class="border-bottom">
            <td colspan="10">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr class="border-bottom">
            <td colspan="10"><b>Жеткiзyші <br/>Поставщик:</b> <?php echo $org->org_name; ?>
            </td>
            <td align="right"> (2)</td>
        </tr>
        <tr class="border-bottom">
            <td colspan="10">
                Жеткізушінің БСН мен мекенжайы<br/>БИН и адрес поставщика:
                <?php echo "БИН " . $org->bin . ", " . $org->address.", ".$org->svidetelstvo_nds; ?>
            </td>
            <td align="right">(2а)</td>
        </tr>
        <tr class="border-bottom">
            <td colspan="10">Жеткізушінің ЖСК<br/>ИИК поставщика: <?php echo $org->IIK; ?>
                КБЕ-<?php echo $org->Bank_kbe; ?> КНП-<?php echo $org->bank_knp; ?> <?php echo $org->bank_name; ?>
                БИК <?php echo $org->bank_bik; ?></td>
            <td align="right"> (2б)</td>
        </tr>
        <tr class="border-bottom">
            <?php
            $d = explode("-", $firm->dogovor_date);
            $firm->dogovor_date = $d['2'] . '.' . $d['1'] . '.' . $d['0'];
            $schet_dog = strlen($schet_dog) == 0 ? $firm->dogovor . " от " . $firm->dogovor_date : $schet_dog;
            ?>
            <td colspan="10">Тауарлар (жұмыстар, қызметтер) жеткізуге арналған шарт (келісім-шарт)<br/>Договор(контракт)
                на поставку товаров (работ, услуг) №: <?php echo $schet_dog; ?></td>
            <td align="right"> (3)</td>
        </tr>
        <tr class="border-bottom">
            <td colspan="10">Шарт (келісім-шарт) бойынша төлем шарттары<br/>Условия оплаты по договору
                (контракту): <?php echo $edit1; ?>
            </td>
            <td align="right"> (4)</td>
        </tr>
        <tr class="border-bottom">
            <td colspan="10">Жеткізілетін тауарларды (жұмыстар,құзметтерді) белгіленген пункті<br/>Пункт назначения
                поставляемых товаров (работ,
                услуг): <?php echo $edit2; ?>
            </td>
            <td></td>
        </tr>
        <tr align="center">
            <td colspan="10"><i>(мемлекет,өңір,облыс,қала,аудан/государство, регион, область, город,
                    район)</i></td>
            <td></td>
        </tr>
        <tr class="border-bottom">
            <td colspan="10">Тауарды жеткізу (қызметтерді, жұмыстарды) келесі сенімхат бойынша жүзеге асырылды<br/>
                Поставка товаров (работ,услуг) осуществлена по доверенности №: <?php echo $edit3; ?> </td>
            <td align="right">(5)</td>
        </tr>

        <tr class="border-bottom">
            <td colspan="10">Жіберу тәсілі<br/>Способ отправления: <?php echo $edit4; ?>
            </td>
            <td align="right">(6)</td>
        </tr>
        <tr class="border-bottom">
            <td colspan="10">Тауар-көлік жөнелтпе құжатты <br/>Товарно-транспортная накладная №<?php echo $schet; ?>
                от <?php echo $data_schet; ?></td>
            <td align="right"> (7)</td>
        </tr>
        <tr class="border-bottom">
            <?php $gruzooptravitel = strlen($edit5) == 0 ? "БИН " . $org->bin . ", " . $org->org_name . ", " . $org->address : $edit5; ?>
            <td colspan="10">Жүк жіберуші<br/> Грузоотправитель: <?php echo $gruzooptravitel; ?>
            </td>
            <td align="right"> (8)</td>
        </tr>
        <tr align="center">
            <td colspan="10"><i>(БСН, атауы және мекенжайы/БИН, наименование и адрес)</i></td>
            <td></td>
        </tr>
        <tr class="border-bottom">
            <td colspan="10"><b>Жүк алушы БСН<br/>Грузополучатель:</b>
                БИН <?php echo strlen($edit6) == 0 ? $firm->bin . ", " . $firm->name . ", " . $firm->address : $edit6; ?>
            </td>
            <td align="right"> (9)</td>
        </tr>
        <tr align=right>
            <td colspan="10" align="center"><i>(СТН,атауы және мекенжайы/РНН, наименование и адрес)</i></td>
            <td></td>
        </tr>

        <tr class="border-bottom">
            <td colspan="10"><b>Сатып алушы<br/>Покупатель: <?php echo $firm->name; ?></b></td>
            <td align="right"> (10)</td>
        </tr>
        <tr class="border-bottom">
            <td colspan="10">Сатып алушының БСН<br/>БИН и адрес нахождения покупателя:
                БИН<?php echo $firm->bin . ", " . $firm->address; ?>
            </td>
            <td>(10а)</td>
        </tr>
        <tr class="border-bottom">
            <td colspan="10">Алушының ЖСК<br/> ИИК получателя: <?php echo $firm->raschetnyy_schet; ?> в банке
                <?php echo $bank->name; ?></td>
            <td align="right"> (10б)</td>
        </tr>
        </tbody>
    </table>

    <br>

    <table class="border-table block">
        <thead>
        <tr>
            <th rowspan="2">№<br/>Р/с</th>
            <th rowspan="2">Тауарлар (жұмыстар,<br/>қызметтер)<br/>атауы/Наименование<br/> товаров(работ,
                услуг)
            </th>
            <th rowspan="2">Өлшем<br/>бірлігі/<br/>Ед.<br/>изм.</th>
            <th rowspan="2">Саны/Кол-<br/>во(обьем)</th>
            <th rowspan="2">Бағасы/Цена<br/>тенге</th>
            <th rowspan="2">ҚҚС-сыз <br/>құны/Стоимость<br/> без НДС</th>
            <th colspan="2">ҚҚС/НДС</th>
            <th rowspan="2">Cатудың<br/>барлық құны<br/>құны/Всего<br/>стоимость<br/>реализации</th>
            <th colspan="2">Акциз</th>
        </tr>
        <tr>
            <th>Cтавкасы<br/>Ставка</th>
            <th>Сомасы<br/>Сумма</th>
            <th>Cтавкасы<br/>Ставка</th>
            <th>Сомасы<br/>Сумма</th>
        </tr>
        </thead>
        <tbody>
        <tr align="center">
            <td width="60px">1</td>
            <td width="400px">2</td>
            <td width="100px">3</td>
            <td width="150px">4</td>
            <td width="200px">5</td>
            <td width="320px">6</td>
            <td width="110px">7</td>
            <td width="200px">8</td>
            <td width="480px">9</td>
            <td width="110px">10</td>
            <td width="100px">11</td>
        </tr>
        <?php
        $i = 1;
        $sum_kvt = 0;
        $fine_value = isset($fine_value) ? $fine_value : 0;
        $itog_tenge = $itog_nds = 0;
        ?>
        <?php foreach ($s as $ss): ?>
            <tr>
                <td align="center"><?php echo $i++; ?></td>
                <?php $electric = strlen($electric) == '' ? "Электроэнергия" : $electric; ?>
                <td align="center"><?php echo $electric; ?> за
                    <br/> <?php echo get_month_title($schetfactura_date->date) . ' ' . get_year_number($schetfactura_date->date); ?>
                    года
                </td>
                <td align="center">КВТ.Ч</td>
                <td align="center"><?php echo prettify_number($ss->kvt, 0); ?></td>
                <td class="td-number"><?php echo prettify_number($ss->tariff_value); ?></td>
                <td class="td-number"><?php echo prettify_number($ss->tenge); ?></td>
                <td align="center"><?php echo prettify_number($period->nds); ?>%</td>
                <td class="td-number"><?php echo prettify_number($period->nds * $ss->tenge / 100); ?></td>
                <td class="td-number"><?php echo prettify_number(($period->nds / 100 + 1) * $ss->tenge); ?></td>
                <td></td>
                <td></td>
                <?php
                $sum_kvt += $ss->kvt;
                $itog_tenge += $ss->tenge;
                $itog_nds += $period->nds * $ss->tenge / 100;
                ?>
            </tr>
        <?php endforeach; ?>

        <?php if ($fine_value > 0): ?>
            <tr>
                <td align="center"><?php echo $i++; ?></td>
                <td align="center">Пеня</td>
                <td align="center">тенге</td>
                <td align="center">1</td>
                <td align="right"><?php echo prettify_number($fine_value); ?></td>
                <td align="right"><?php echo prettify_number($fine_value); ?></td>
                <td align="center">Без НДС</td>
                <td></td>
                <td align="right"><?php echo prettify_number($fine_value); ?></td>
                <td align="center"></td>
                <td align="center"></td>
            </tr>
        <?php endif; ?>

        <tr>
            <td colspan="5"><b>Барлыгы шот бойынша<br/>Всего по счету</b></td>
            <td class="td-number"><?php echo prettify_number($itog_tenge + $fine_value); ?></td>
            <td class="gray-cube"></td>
            <td class="td-number"><?php echo prettify_number($itog_nds); ?></td>
            <td class="td-number"><?php echo prettify_number($itog_nds + $itog_tenge + $fine_value); ?></td>
            <td class="gray-cube"></td>
            <td></td>
        </tr>
        </tbody>
    </table>

    <br>

    <table class="block">
        <tr>
            <td>Всего отпущено запасов (количество прописью): <?php echo kvt2str($sum_kvt); ?></td>
        </tr>
        <tr>
            <td>Всего отпущено на сумму (прописью), в
                KZT: <?php echo num2str($itog->itogo_with_nds + $fine_value); ?></td>
        </tr>
    </table>
    <br>
    <table class="block">
        <tbody>
        <tr>
            <td colspan="5" width="40%"><b>Ұйымның басшысы<br>Руководитель:</b> <?php echo trim($org->director); ?></td>
            <td></td>
            <td colspan="5" width="40%">
                <b>
                    БЕРДІ (жеткізушінің жауапты тұлғасы)<br>
                    ВЫДАЛ (ответственное лицо поставщика)<br>
                </b>
                Инженер Иваницкий А.П.

            </td>
        </tr>
        <tr>
            <td colspan="5" class="border-bottom-cell">&nbsp;</td>
            <td></td>
            <td colspan="5" align="center" class="border-bottom-cell"></td>
        </tr>
        <tr>
            <td colspan="5" align="center"><sup>(Ф.И.О., подпись)</sup></td>
            <td align="center"><b>М.О<br>М.П.</b></td>
            <td colspan="5" align="center"><sup>(должность)</sup></td>
        </tr>
        <tr>
            <td colspan="5"><b>Ұйымның бас есепшісі<br/>Главный бухгалтер:</b> <?php echo trim($org->glav_buh); ?></td>
            <td></td>
            <td colspan="5"></td>
        </tr>
        <tr>
            <td colspan="5" class="border-bottom-cell">&nbsp;</td>
            <td></td>
            <td colspan="5" class="border-bottom-cell">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="5" align="center"><sup>(Ф.И.О., подпись)</sup></td>
            <td></td>
            <td colspan="5" align="center"><sup>(Ф.И.О., подпись)</sup></td>
        </tr>
        <tr>
            <td colspan="5">&nbsp;</td>
            <td>&nbsp;</td>
            <td colspan="5">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="11">
                Ескерту: Мөрсіз жарамсыз. Түпнұсқа (бірінші данасы) - сатып алушыға. Көшірмесі (екінші
                дана) - жеткізушіге<br/>
                Примечание. Без печати недействительно. Оригинал (первый экземпляр)-покупателю. Копия (второй
                экземпляр)-поставщику.
            </td>
        </tr>
        </tbody>
    </table>
</div>
<br>
<div class="page-break-always">
    <hr>
</div>
<br>
<div class="smaller" id="nakl">
    <a href="#sf" class="hide-on-print">К счет-фактуре</a>
    <table class="block border-collapse">
        <tbody>
        <tr>
            <td align="center" width="65%"><h4 class="no-margin"><?php echo $org->org_name; ?></h4></td>
            <td align="right" rowspan="2">
                <i style="font-size: x-small">Приложение 26<br>
                    к приказу Министра финансов Республики Казахстан<br>
                    от 20 декабря 2012 года № 562 </i>
            </td>
        </tr>
        <tr>
            <td align="center">
                <hr>
                <i>организация (индивидуальный предприниматель)</i></td>
        </tr>
        <tr>
            <td colspan="2" align="right">Форма З-2</td>
        </tr>
        </tbody>
    </table>
    <br>
    <table class="block border-collapse">
        <tbody>
        <tr>
        <tr>
            <td></td>
            <td class="border-td" align="center" style="width: 10%">БИН</td>
            <td class="border-td" align="center" style="width: 15%"><?php echo $org->bin; ?></td>
        </tr>
        </tr>
        </tbody>
    </table>
    <br>
    <table class="block border-table">
        <tr>
            <td style="width: 70%;" align="center" rowspan="2"><h3 class="no-margin">Накладная на отпуск запасов на
                    сторону</h3></td>
            <td align="center">Номер документа</td>
            <td align="center">Дата составления</td>
        </tr>
        <tr>
            <?php $data_schet = strlen($data_schet) == 0 ? date("d.m.Y", strtotime($schetfactura_date->date)) : $data_schet; ?>
            <td align="center"><?php echo "0" . ($schetfactura_date->schet_new); ?></td>
            <td align="center"><?php echo $data_schet; ?></td>
        </tr>
    </table>
    <br>
    <table class="block border-table">
        <thead>
        <tr>
            <th>Организация (индивидуальный предприниматель) - отправитель</th>
            <th>Организация (индивидуальный предприниматель) - получатель</th>
            <th>Ответственный за поставку (Ф.И.О.)</th>
            <th>Транспортная организация</th>
            <th>Товарно - транспортная накладная (номер, дата)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $org->org_name; ?></td>
            <td><?php echo $firm->name; ?></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <br>
    <table class="block border-table">
        <thead>
        <tr>
            <th rowspan=2 align=center>№ п./п.</th>
            <th rowspan=2 align=center>Наименование, характеристика</th>
            <th rowspan=2 align=center>Номенклатурный номер</th>
            <th rowspan=2 align=center>Единица измерения</th>
            <th colspan=2 align=center>Количество</th>
            <th rowspan=2 align=center>Цена, в тенге</th>
            <th rowspan=2 align=center>Сумма с НДС,<br> в тенге</th>
            <th rowspan=2 align=center>Сумма НДС,<br> в тенге</th>
        </tr>
        <tr>
            <th align=center>Подлежит отпуску</th>
            <th align=center>Отпущено</th>
        </tr>
        <tr>
            <th align=center>1</th>
            <th align=center>2</th>
            <th align=center>3</th>
            <th align=center>4</th>
            <th align=center>5</th>
            <th align=center>6</th>
            <th align=center>7</th>
            <th align=center>8</th>
            <th align=center>9</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = 1;
        $itog_nds = $itog_with_nds = $itog_kvt = 0;
        ?>
        <?php foreach ($s as $ss): ?>
            <tr>
                <td align="center"><?php echo $i++; ?></td>
                <td align="center">Электроэнергия</td>
                <td></td>
                <td align="center">кВт*ч</td>
                <td align="center"><?php echo prettify_number($ss->kvt, 0); ?></td>
                <td align="center"><?php echo prettify_number($ss->kvt, 0); ?></td>
                <td align="center"><?php echo prettify_number($ss->tariff_value, 2); ?></td>
                <td align="center"><?php echo prettify_number(($period->nds / 100 + 1) * $ss->tenge, 2); ?></td>
                <td align="center"><?php echo prettify_number($period->nds * $ss->tenge / 100, 2); ?></td>
                <?php
                $itog_kvt += $ss->kvt;
                $itog_nds += $period->nds * $ss->tenge / 100;
                $itog_with_nds += ($period->nds / 100 + 1) * $ss->tenge;
                ?>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="6"></td>
            <td class="nowrap" align="center"><b>Итого</b></td>
            <td class="nowrap" align="center"><b><?php echo prettify_number($itog_with_nds); ?></b></td>
            <td class="nowrap" align="center"><b><?php echo prettify_number($itog_nds); ?></b></td>
        </tr>
        </tbody>
    </table>
    <br>
    <table>
        <tbody>
        <tr>
            <td>Всего отпущено запасов (количество прописью): <?php echo kvt2str($itog_kvt); ?></td>
        </tr>
        <tr>
            <td>Всего отпущено на сумму (прописью), в KZT: <?php echo num2str($itog->itogo_with_nds); ?></td>
        </tr>
        </tbody>
    </table>
    <br>

    <table class="block">
        <tbody>
        <tr>
            <td>Отпуск разрешил</td>
            <td align="center">Директор <?php echo $org->director; ?> ______________</td>
            <td width="20%"></td>
            <td>По доверенности №</td>
            <td><?php echo $edit3; ?></td>
        </tr>
        <tr>
            <td></td>
            <td align="center"><i>(должность)(Ф.И.О.)(подпись)</i></td>
            <td></td>
            <td>выданной</td>
            <td align="center">____________________</td>
        </tr>
        <tr>
            <td colspan="5">&nbsp;</td>
        </tr>
        <tr>
            <td>Главный бухгалтер</td>
            <td align="center"><?php echo $org->glav_buh; ?> ______________</td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td></td>
            <td align="center"><i>(Ф.И.О.)(подпись)</i></td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td align="center">М.П.</td>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td colspan="5"><br></td>
        </tr>
        <tr>
            <td>Отпустил</td>
            <td align="center">____________________</td>
            <td></td>
            <td>Запасы получил</td>
            <td align="center">____________________</td>
        </tr>
        <tr>
            <td></td>
            <td align="center"><sup><i>(Ф.И.О.)(подпись)</i></sup></td>
            <td></td>
            <td align="center"></td>
            <td align="center"><sup><i>(Ф.И.О.)(подпись)</i></sup></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>