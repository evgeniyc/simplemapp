<?php

return [
    'sourcePath' => __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR, // Путь к корневой директории твоего приложения (frm)
    'languages' => ['ru-RU', 'uk-UA'], // Языки, для которых будут генерироваться переводы
    'messagePath' => __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'messages', // Путь, куда будут сохраняться файлы переводов
    'translator' => 'Yii::t', // Функция, используемая для перевода сообщений
    'sort' => true, // Сортировать сообщения в файле переводов
    'overwrite' => true, // Перезаписывать существующие файлы переводов (добавляя новые, не удаляя старые)
    'removeUnused' => false, // Удалять неиспользуемые сообщения из файлов переводов
    'markUnused' => true, // Помечать неиспользуемые сообщения (как '@@message@@')
    'except' => [ // Исключить директории и файлы из сканирования
        '.svn',
        '.git',
        '.gitignore',
        '.gitkeep',
        '.hgignore',
        '.hgkeep',
        '/messages',
        '/vendor',
        '/node_modules',
        '/web', // Обычно не содержит PHP-файлов с Yii::t()
        '/runtime',
        '/web/assets',
    ],
    'only' => [ // Сканировать только указанные типы файлов
        '*.php',
    ],
    'format' => 'php', // Формат файла переводов
    //'db' => 'db', // Если используешь перевод из базы данных, укажи компонент БД
    //'sourceMessageTable' => '{{%source_message}}', // Таблица с исходными сообщениями для БД
    //'messageTable' => '{{%message}}', // Таблица с переводами для БД
];