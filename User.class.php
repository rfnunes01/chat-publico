<?php
/**
 * Utilizador do chat
 */

class User extends DbConnPDO {
    /** @var string|null Query SQL */
    private $_sql;

    /**
     * Construtor
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Verifica se um determinado nickname existe.
     *
     * @param string $nickname	Nickname do utilizador
     *
     * @return boolean Devolve 'true' se o nickname já existir.
     */
    public function checkNicknameExists($nickname) {
        try {
            $this->_sql = '
                SELECT
                    NIckname
                FROM
                    `'. USERS .'`
                WHERE
                    `Nickname`=:nickname
                LIMIT 1
            ';
            $stmt = $this->prepare($this->_sql);
            $stmt->bindParam(':nickname', $nickname, PDO::PARAM_STR);
            $stmt->execute();
            $num_rows = $stmt->rowCount();
            if ($num_rows == 0) {
                return false;
            }
            return true;
        } catch (Exception $e) {
            throw $e;
        }
    }

    /**
     * Insere um utilizador da base de dados.
     *
     * @param string $nickname Nickname
     *
     * @return boolean Devolve 'true' em caso de sucesso ou 'false' em caso de erro.
     */
    public function insert($nickname) {
        $this->_sql = 'INSERT INTO `'.USERS.'`
            (Nickname)
            VALUES
            (:nickname)
            ';
        try {
            $stmt = $this->prepare($this->_sql);
            $stmt->bindParam(':nickname', $nickname, PDO::PARAM_STR);
            if ($stmt->execute()) {
                $stmt->closeCursor();
                return true;
            }
            $stmt->closeCursor();
            return false;
        } catch (Exception $e) {
            throw $e;
        }
    }

    /**
     * @return string Devolve a query SQL.
     */
    public function __toString() {
        if (is_null($this->_sql)) {
            return 'NULL';
        }
        return $this->_sql;
    }
}

