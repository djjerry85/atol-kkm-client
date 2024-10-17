<?php

namespace KKMClient\Models\Queries\Enums;


class CommandStatuses
{
    const OK        = 0;  // Ok = 0,         - выполнено без ошибок
    CONST RUNNING   = 1;  // Run = 1,        - команда запущена на выполнение но еще не выполнена
    const ERROR     = 2;  // Error = 2,      - команда выполнена, есть ошибка
    const NOT_FOUND = 3; // NotFound = 3,   - не найдена ранее запущенная команда команда (для асинхронного режима при выполнении команды GetRezult)
    const WAITING   = 4; // NotRun = 4      - команда еще не запущена на выполнение (ожидание готовности устройства)
}
