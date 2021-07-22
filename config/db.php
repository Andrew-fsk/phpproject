<?php

/**
 * Синглтон базы данных
 */
class db
{

    /**
     * Содержит экземпляр DB
     * @var DB
     */
    private static $_instance;

    /**
     *
     */
    private function __clone()
    {
    }

    /**
     * @return DB
     */
    public static function getInstance()
    {
        if (self::$_instance === null)
            self::$_instance = new self(SQL_HOST, SQL_LOGIN, SQL_PWD, SQL_BASE);
        return self::$_instance;
    }

    /**
     * Содержит список значений для запроса.
     * @var null
     */
    private $_query_array = null;

    /**
     * Инициализирует подключение к базе данных
     * DB constructor.
     * @param $host
     * @param $user
     * @param $password
     * @param $base
     * @param string $charset
     */
    private function __construct($host, $user, $password, $base, $charset = 'utf8')
    {
        $dsn = "mysql:host=$host;dbname=$base;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->db = new PDO($dsn, $user, $password, $opt);
        } catch (PDOException $e) {
            die('DB connection fail!');
        }

        $p = $this->db->prepare("set names 'utf8mb4'");
        $p->execute();
    }

    /**
     *
     */
    public function __destruct()
    {
        $this->db = null;
    }


    /**
     * Возвращает результат выполнения произвольного запроса к базе данных.
     * @return array
     */
    public static function query()
    {
        $params = func_get_args();
        $query = $params[0];
        unset($params[0]);

        $sth = self::getInstance()->db->prepare("set group_concat_max_len = 10000000");
        $sth->execute();

        $sth = self::getInstance()->db->prepare($query);

        if (!empty($params)) {
            foreach ($params as $key => $val)
                if ($val !== '') {
                    if (is_int($val))
                        $sth->bindValue($key, $val, PDO::PARAM_INT);
                    else $sth->bindValue($key, $val, PDO::PARAM_STR);
                }

        }

        $sth->execute();

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    /**
     * Возвращает результат выполнения выборки из базы данных.
     * @param string $table имя таблицы
     * @param array $columns имена полей
     * @param array|null $parameters значения уточнений
     * @param int|null $fetch_type тип форматирования PDO
     * @param array|null $limit грани выборки [from, to]
     * @return array
     */
    public static function select(string $table, array $columns, array $parameters = null, int $fetch_type = null, array $limit = null)
    {

        if (isset($parameters))
            $params_string = 'where ' . self::getInstance()->implodeQuery($parameters, ' and ');
        else $params_string = '';

        $stmt = self::getInstance()->db->prepare("select $table." . implode(", $table.", $columns) . " from `$table` $params_string" . (isset($limit) ? " LIMIT " . implode(',', $limit) : ''));

        if (isset($parameters))
            $stmt->execute(array_values($parameters));
        else $stmt->execute();

        if (isset($fetch_type))
            $result = $stmt->fetchAll($fetch_type);
        else
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    /**
     * Возвращает ID записаной строки базы данных.
     * @param string $table имя таблицы
     * @param array $values значения полей
     * @return int
     */
    public static function insert(string $table, array $values)
    {
        $values_string = self::getInstance()->implodeQuery($values);

        $stmt = self::getInstance()->db->prepare("insert into `$table` set $values_string");

        $stmt->execute(array_values($values));

        return self::getInstance()->db->lastInsertId('id');
    }

    /**
     * Производит обновление строки базы данных.
     * @param string $table имя таблицы
     * @param array $values значения полей
     * @param array $parameters значения уточнений
     * @return bool
     */
    public static function update(string $table, array $values, array $parameters)
    {
        $values_string = self::getInstance()->implodeQuery($values);

        if ($parameters)
            $params_string = self::getInstance()->implodeQuery($parameters, ' and ');

        $stmt = self::getInstance()->db->prepare("update `$table` set $values_string WHERE $params_string");

        $stmt->execute(array_values(array_merge($values, $parameters)));

        return true;
    }

    /**
     * Удаляет строки базы данных.
     * @param string $table имя таблицы
     * @param array $parameters значения уточнений
     * @return bool
     */
    public static function delete(string $table, array $parameters)
    {
        $params_string = self::getInstance()->implodeQuery($parameters, ' and ');

        $stmt = self::getInstance()->db->prepare("delete from `$table` where $params_string");

        $stmt->execute(array_values($parameters));

        return true;
    }


    /**
     * Добавляет значения к списку для запроса
     * @param array $values
     */
    public static function bind(array $values)
    {
        self::getInstance()->_query_array[] = $values;
    }

    /**
     * Сохраняет или обновляет строки значениями из списка запроса.
     * @param string $table
     * @param string $_id_name
     * @param int|null $_id
     * @return int|mixed
     */
    public static function execute(string $table, string $_id_name, int $_id = null)
    {
        $values_string = self::getInstance()->implodeQuery(self::getInstance()->_query_array[0]);

        $insert = self::getInstance()->db->prepare("insert into `$table` set $values_string");

        if (!empty($_id) && $existing_lang = self::getInstance()->db->query("select `lang` from `$table` where `$_id_name` = $_id")->fetchAll(PDO::FETCH_COLUMN)) {
            foreach (self::getInstance()->_query_array as $val) {
                if (in_array($val['lang'], $existing_lang)) {
                    $update = self::getInstance()->db->prepare("update `$table` set $values_string where `$_id_name` = $_id and `lang` = '" . $val['lang'] . "'");
                    $update->execute(array_values($val));
                } else {
                    $insert->execute(array_values($val));
                    $new_id = self::getInstance()->db->lastInsertId('id');
                    $upd = self::getInstance()->db->prepare("update `$table` set `$_id_name` = $_id where `id` = $new_id");
                    $upd->execute();
                }
            }
        } else {
            $ids_array = [];

            foreach (self::getInstance()->_query_array as $val) {
                $insert->execute(array_values($val));
                $ids_array[] = self::getInstance()->db->lastInsertId('id');
            }

            $upd = self::getInstance()->db->prepare("update `$table` set `$_id_name` = $ids_array[0] where `id` in (" . implode(',', $ids_array) . ")");
            $upd->execute();
        }

        self::getInstance()->_query_array = null;

        return $_id ?? $ids_array[0];
    }

    /**
     * Возвращает список доступных полей таблицы.
     * @param string $table имя таблицы
     * @return array
     */
    public static function columns(string $table)
    {
        return array_column(self::query("show columns from `$table`"), 'Field');
    }

    /**
     * Форирует строку параметров
     * @param array $parameters параметры
     * @param string $glue промежуточный символ
     * @return string
     */
    private function implodeQuery($parameters, string $glue = ', ')
    {
        return '`' . implode("`=?$glue`", array_keys($parameters)) . '`=?';
    }

    /**
     * Пересчитывает значения вложеных множеств для сущностей поддерживающих вложеность.
     * @param string $table имя таблицы
     */
    public static function rebuildTaxonomy(string $table)
    {
        $data = self::rebuildGetTreeWithChildren($table);

        $n = 0;

        self::rebuildGenerateTreeData($data, 0, 0, $n);

        foreach ($data as $id => $row) {
            if ($id == '0') {
                continue;
            }

            $sql = 'UPDATE `' . $table . '`';
            $sql .= ' SET';
            $sql .= ' `level` = :level,';
            $sql .= ' `lft` = :left,';
            $sql .= ' `rgt` = :right';
            $sql .= ' WHERE `section_id` = :section_id';

            $stmt = self::getInstance()->db->prepare($sql);
            $stmt->bindValue(':level', $row['level'], \PDO::PARAM_INT);
            $stmt->bindValue(':left', $row['lft'], \PDO::PARAM_INT);
            $stmt->bindValue(':right', $row['rgt'], \PDO::PARAM_INT);
            $stmt->bindValue(':section_id', $row['section_id'], \PDO::PARAM_INT);
            $stmt->execute();
            unset($sql, $stmt);
        }

        unset($data, $id, $row);
    }

    /**
     * Формирует дерево разделов.
     * @param string $table имя таблицы
     * @return array
     */
    private static function rebuildGetTreeWithChildren(string $table)
    {
        $result = DB::query("select `section_id`, `parent_id`, `level`, `lft`, `rgt` from `$table` where `lang` = ? order by `id`", DEFAULT_LANG);

        $arr = [];

        foreach ($result as $row) {
            $arr[$row['section_id']] = $row;
            $arr[$row['section_id']]['children'] = [];
        }

        foreach ($arr as $id => $row) {
            if (isset($row['parent_id'])) {
                $arr[$row['parent_id']]['children'][$id] = $id;
            }
        }

        return $arr;
    }

    /**
     * Просчитывает уровель вложености и левую границу множетсва
     * @param $arr
     * @param $section_id
     * @param $level
     * @param $n
     */
    private static function rebuildGenerateTreeData(&$arr, $section_id, $level, &$n)
    {
        $arr[$section_id]['level'] = $level;
        $arr[$section_id]['lft'] = $n++;

        if (isset($arr[$section_id]['children']) && is_array($arr[$section_id]['children']) && !empty($arr[$section_id]['children']))
            foreach ($arr[$section_id]['children'] as $child_id) {
                self::rebuildGenerateTreeData($arr, $child_id, $level + 1, $n);
            }

        $arr[$section_id]['rgt'] = $n++;
    }

}