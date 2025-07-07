<h1>Разворачивание проекта</h1>
<ul>
<li>Сделать <b>git clone git@github.com:SdykovIgor/test_task.git</b> в папку сайта</li>
<li>Установить зависимости - Composer update</li>
<li>Выполнить <b>php init</b></li>
<li>Скопировать файл индекса с шаблона <b>cp index_temp.php index.php</b></li>
<li>Настроить окружение - common/config/main-local.php, как минимум настройки подключения к БД</li>
<li>Применить миграции: php yii migrate</li>
</ul>