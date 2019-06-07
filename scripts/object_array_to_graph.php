<?php

$file = file_get_contents('input.json');
$outputCsv = fopen('output.csv', 'w');

$json = json_decode($file, true);

$header = [
    "from|to",
    "北海道（札幌）",
    "北海道（函館）",
    "北海道（苫小牧）",
    "北海道（帯広）",
    "北海道（釧路）",
    "北海道（旭川）",
    "北海道（北見）",
    "北海道（稚内）",
    "青森県",
    "岩手県",
    "宮城県",
    "秋田県",
    "山形県",
    "福島県",
    "茨城県",
    "栃木県",
    "群馬県",
    "埼玉県",
    "千葉県",
    "東京都",
    "神奈川県",
    "新潟県",
    "山梨県",
    "長野県",
    "富山県",
    "石川県",
    "福井県",
    "岐阜県",
    "静岡県",
    "愛知県",
    "三重県",
    "滋賀県",
    "京都府",
    "大阪府",
    "兵庫県",
    "奈良県",
    "和歌山県",
    "鳥取県",
    "島根県",
    "岡山県",
    "広島県",
    "山口県",
    "徳島県",
    "香川県",
    "愛媛県",
    "高知県",
    "福岡県",
    "佐賀県",
    "長崎県",
    "熊本県",
    "大分県",
    "宮崎県",
    "鹿児島県",
    "沖縄県"
];

fputcsv($outputCsv, $header);
foreach ($json as $fromPrefecture => $toPrefectures) {
    $row = [];
    $row[] = $fromPrefecture;
    var_dump($fromPrefecture);
    foreach($toPrefectures as $toPrefecture => $transportCost) {
        $row[] = $transportCost;
    }
    fputcsv($outputCsv, $row);
}

// ファイルを閉じる
fclose($file);