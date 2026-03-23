<?php

return [
    '~^articles$~' => [\src\controllers\ArticlesController::class, 'index'],
    '~^article/(\d+)$~'=> [\src\controllers\ArticlesController::class, 'view'],
    '~^hello/(.*)$~' => [src\controllers\MainController::class, 'sayHello'],
    '~^$~' => [src\controllers\MainController::class, 'main'],
];