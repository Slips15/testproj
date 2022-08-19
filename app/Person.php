<?php

class Person {

    const TABLE = 'info';

    protected $db;

    function __construct() {
        $this->db = new Db();
    }

    public function index() {
        return $this->db->select('SELECT * FROM ' . self::TABLE);
    }
   
    public function form(int $id) {
        return $this->db->select('SELECT * FROM ' . self::TABLE . ' WHERE id = ' . $id)->fetch(PDO::FETCH_BOTH);
    }

    public function store(array $data) {
        $name = $data['name'] ?? '';
        $surname = $data['surname'] ?? '';
        $patronymic = $data['patronymic'] ?? '';
        $age = $data['age'] ?? '';
        $this->db->insert('INSERT INTO ' . self::TABLE . ' SET name = "'.$name.'", surname = "'.$surname.'", patronymic = "'.$patronymic.'", age = "'.$age.'"');
    }

    public function update(int $userId, array $data) {
        $name = $data['name'] ?? '';
        $surname = $data['surname'] ?? '';
        $patronymic = $data['patronymic'] ?? '';
        $age = $data['age'] ?? '';
        $this->db->update('UPDATE ' . self::TABLE . ' SET name = "'.$name.'", surname = "'.$surname.'", patronymic = "'.$patronymic.'", age = "'.$age.'" WHERE id = '.$userId);
    }

    public function delete(int $id) {
        return $this->db->delete('DELETE FROM ' . self::TABLE . ' WHERE id = ' . $id);
    }

}
