<?php
// Определяем путь к локальному конфигу
$localConfig = __DIR__ . '/db.local.php';

if (file_exists($localConfig)) {
    // Если db.local.php есть — используем его (локально)
    return require $localConfig;
} else {
    return [
        'class' => yii\db\Connection::class,
        'dsn' => 'mysql:host=localhost;dbname=egewe258_simplemapp',
        'username' => 'egewe258_admin ',
        'password' => '',
        'charset' => 'utf8mb4',

        // Schema cache options (for production environment)
        //'enableSchemaCache' => true,
        //'schemaCacheDuration' => 60,
        //'schemaCache' => 'cache',
    ];
}
