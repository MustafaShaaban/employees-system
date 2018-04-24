<?php
namespace PHPMVC\MODELS;
use PHPMVC\LIB\DatabaseHandler;

$db = new DatabaseHandler();
class DatabaseModel
{
    // Data types
    CONST DATA_TYPE_BOOL    = \PDO::PARAM_BOOL;
    CONST DATA_TYPE_STR     = \PDO::PARAM_STR;
    CONST DATA_TYPE_INT     = \PDO::PARAM_INT;

    // Database info
    protected static $tableName;
    protected static $tableSchema;
    protected static $primaryKey;

    private static function buildNameParametersSQL() {
        $namedParams = '';
        foreach (static::$tableSchema as $item => $value) {
            $namedParams .= $item . " = :" . $item . ", ";
        }
        return trim($namedParams, ', ');
    }

    private function prepareValues($stmt) {
        foreach (static::$tableSchema as $item => $value) {
            $stmt->bindValue(":{$item}", $this->$item, $value);
        }
    }


    /**
     * @return bool
     * (TRUE) When you have a successfully record Inserted
     * (FALSE) When your query doesn't execute successfully
     */
    public function create() {
        $sql = "INSERT INTO " . static::$tableName . " SET " . self::buildNameParametersSQL();
        $stmt = DatabaseHandler::$conn->prepare($sql);
        $this->prepareValues($stmt);
        return $stmt->execute();
    }

    /**
     * @return bool
     * (TRUE) When you have a successfully record Updated
     * (FALSE) When your query doesn't execute successfully
     */
    public function update() {
        $sql = "UPDATE " . static::$tableName . " SET " . self::buildNameParametersSQL() . " WHERE " . static::$primaryKey . " = " . $this->ID;
        $stmt = DatabaseHandler::$conn->prepare($sql);
        $this->prepareValues($stmt);
        return $stmt->execute();
    }

    /**
     * @return bool
     * (TRUE) When you have Deleted data successfully
     * (FALSE) When your query doesn't execute successfully
     */
    public function delete($PK) {
        $sql = "DELETE FROM " . static::$tableName . " WHERE " . static::$primaryKey . " = " . $PK;
        $stmt = DatabaseHandler::$conn->prepare($sql);
        return $stmt->execute();
    }

    /**
     * @return bool
     * (TRUE) When you have Deleted data successfully
     * (FALSE) When your query doesn't execute successfully
     */
    public static function getAll() {

        $sql = "SELECT * FROM " . static::$tableName;
        $stmt = DatabaseHandler::$conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, get_called_class());
    }

    /**
     * @param $PK value that you want to use to select specific result
     * @return Object of current class
     */
    public static function getByPK($PK) {
        $sql = "SELECT * FROM " . static::$tableName . " WHERE " . static::$primaryKey . " = " . "$PK";
        $stmt = DatabaseHandler::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_CLASS, get_called_class());
        return array_shift($result);
    }


}