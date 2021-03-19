<?php
class DBPDO
{
    private $handler;

    public function getAll($sqlQuery, $params = null, $fetchStyle = PDO::FETCH_OBJ)
    {
        $result = null;
        try {
            $databaseHandler = $this->getHandler();
            $statementHandler = $databaseHandler->prepare($sqlQuery);
            $statementHandler->execute($params);
            $result = $statementHandler->fetchAll($fetchStyle);
        } catch(PDOException $e) {
            $this->close();
            trigger_error($e->getMessage(), E_USER_ERROR);
        }
        return $result;
    }

    public function getRow($sqlQuery, $params = null, $fetchStyle = PDO::FETCH_OBJ)
    {
        $result = null;
        try {
            $databaseHandler = $this->getHandler();
            $statementHandler = $databaseHandler->prepare($sqlQuery);
            $statementHandler->execute($params);
            $result = $statementHandler->fetch($fetchStyle);
        } catch(PDOException $e) {
            $this->close();
            trigger_error($e->getMessage(), E_USER_ERROR);
        }
        return $result;
    }

    public function executeQuery($sqlQuery, $params = null)
    {
        try {
            $databaseHandler = $this->getHandler();
            $statementHandler = $databaseHandler->prepare($sqlQuery);
            $statementHandler->execute($params);
        } catch(PDOException $e) {
            $this->close();
            trigger_error($e->getMessage(), E_USER_ERROR);
        }
    }

    private function getHandler()
    {
        if (!isset($this->handler)) {
            try {
                $this->handler = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD, [
                    PDO::ATTR_PERSISTENT => DB_PERSISTENCY]);
                $this->handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $this->close();
                trigger_error($e->getMessage(), E_USER_ERROR);
            }
        }
        return $this->handler;
    }

    private function close()
    {
        $this->handler = null;
    }
}
