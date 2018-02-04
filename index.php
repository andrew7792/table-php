<?php
$staff = [
    [
        "first_name" => "Иван",
        "last_name" => "Васильев",
        "born" => 1996,
        "hired" => 2017,
        "job" => "Программист",
        "salary" => 1500,
        "experience" => 3, 5
    ],
    [
        "first_name" => "Артем",
        "last_name" => "Васильев",
        "born" => 1990,
        "hired" => 2015,
        "job" => "Программист",
        "salary" => 2500,
        "experience" => 6, 5
    ],
    [
        "first_name" => "Иллья",
        "last_name" => "Моргунов",
        "born" => 1999,
        "hired" => 2017,
        "job" => "Стажер",
        "salary" => 200,
        "experience" => 0, 3
    ],
    [
        "first_name" => "Александр",
        "last_name" => "Мищенко",
        "born" => 1982,
        "hired" => 2013,
        "job" => "СТО",
        "salary" => 3500,
        "experience" => 8
    ],
    [
        "first_name" => "Анна",
        "last_name" => "Герасимова",
        "born" => 1978,
        "hired" => 2013,
        "job" => "Бухгалтер",
        "salary" => 800,
        "experience" => 12
    ],
    [
        "first_name" => "Ирина",
        "last_name" => "Фролова",
        "born" => 1998,
        "hired" => 2016,
        "job" => "Дизайнер",
        "salary" => 850,
        "experience" => 2
    ],
    [
        "first_name" => "Евдокия",
        "last_name" => "Стоянова",
        "born" => 1965,
        "hired" => 2014,
        "job" => "Уборщица",
        "salary" => 250,
        "experience" => ""
    ],
    [
        "first_name" => "Игорь",
        "last_name" => "Артюхов",
        "born" => 1980,
        "hired" => 2013,
        "job" => "Директор",
        "salary" => 3250,
        "experience" => 10
    ],
];
?>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php
            $header = ["first_name" => "Name",
                "last_name" => "surname",
                "born" => "birthday",
                "hired" => 2016,
                "job" => "years",
                "salary" => "how_much",
                "experience" => "years"
            ];
            $html = <<<HTML
<table class="table table-striped">
    <thead>
        <tr>
            <th>{$header['first_name']}</th>
            <th>{$header['last_name']}</th>
            <th>{$header['born']}</th>
            <th>{$header['hired']}</th>
            <th>{$header['job']}</th>
            <th>{$header['salary']}</th>
            <th>{$header['experience']}</th>
        </tr>
</thead>
<tbody>
HTML;
foreach($staff as $item){
    $html = <<<HTML

        <tr>
        //Почему ты работаешт с переменной $header??? Ведь ты перебираешь $staff и должен работать с $item
            <th>{$header['first_name']}</th>
            <th>{$header['last_name']}</th>
            <th>{$header['born']}</th>
            <th>{$header['hired']}</th>
            <th>{$header['job']}</th>
            <th>{$header['salary']}</th>
            <th>{$header['experience']}</th>
        </tr>

HTML;
}
$html .= "</tbody>\n
</table>";
            echo $html;

            ?>
        </div>
    </div>
</div>
</body>
