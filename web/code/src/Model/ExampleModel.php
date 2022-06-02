<?php

declare(strict_types = 1);

namespace Example\Model;

use Mini\Model\Model;

/**
 * Example data.
 */
class ExampleModel extends Model
{
    protected $id;
    protected $code;
    protected $description;
    protected $created;

    /**
     * set
     * 
     * A way to set table record data on the object
     * 
     * @param string $code
     * @param string $description
     * @param string $created
     * 
     * @return void
     * 
     */ 
    public function set(string $code, string $description, string $created){
        $this->code = $code;
        $this->description = $description;
        $this->created = $created;
    }

    /**
     * setId
     * 
     * A way to set id created from table on the object
     * 
     * @param int $id
     * 
     * @return void
     * 
     */ 
    public function setId(int $id) {
        $this->id = $id;
    }

    /**
     * getId
     * 
     * A way to get object's id value
     * 
     * No param
     * 
     * @return int id
     * 
     */ 
    public function getId() {
        return $this->id;
    }

    /**
     * getCode
     * 
     * A way to get object's code value
     * 
     * No param
     * 
     * @return string code
     * 
     */ 
    public function getCode() {
        return $this->code;
    }

    /**
     * getDescription
     * 
     * A way to get object's description value
     * 
     * No param
     * 
     * @return string description
     * 
     */ 
    public function getDescription() {
        return $this->description;
    }

    /**
     * getCreated
     * 
     * A way to get object's created value
     * 
     * No param
     * 
     * @return string created
     * 
     */ 
    public function getCreated() {
        return $this->created;
    }

    /**
     * Get example data by ID.
     * 
     * No param
     *  
     * @return array example data
     */
    // A way to get table record data from the object
    public function getExampleModel(){
        return [
            'id' => $this->getId(),
            'createdOn' => $this->getCreated(),
            'code' => $this->getCode(),
            'description' => $this->getDescription()
        ];
    }

    /**
     * Create an example.
     * 
     * No param
     *  
     * @return ExampleModel object
     */

    // A way to create a record using the data set on the object
    public function create(){
        $sql = '
            INSERT INTO
                ' . getenv('DB_SCHEMA') . '.master_example
            (
                created,
                code,
                description       
            )
            VALUES
            (?,?,?)';

        $id = $this->db->statement([
            'title'  => 'Create example',
            'sql'    => $sql,
            'inputs' => [
                $this->created,
                $this->code,
                $this->description
            ]
        ]);

        $this->db->validateAffected();  

        $this->setId($id);

        return $this;
    }

}
