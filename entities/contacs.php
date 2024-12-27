<?php

class Contact {
    private $link;
    public function __construct($conn)  {
        $this->link = $conn;
    }

    public function create($fname, $lname, $email, $phone){
        $sql = "INSERT into contact (first_name, last_name, email, phone) values(:fname, :lname, :email, :phone)";
        $stmt = $this->link->prepare($sql);
        $stmt->execute(["fname" => $fname, "lname" => $lname, "email" => $email, "phone" => $phone]);
        return true;
    }

    public function read(){
        $contacts = [];
        $sql = "select * from contact";
        $stmt = $this->link->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $contact) {
            $contacts[] = $contact;
        }

        return $contacts;
    }

    public function update($id, $fname, $lname, $email, $phone){
        $sql = "UPDATE contact set first_name = :fname, last_name = :lname, email = :email, phone = :phone where id = :id";
        $stmt =  $this->link-prepare($sql);
        $stmt->execute(["fname" => $fname, "lname" => $lname, "email" => $email, "phone" => $phone, "id" => $id]);
    }

    public function delete($id){
        $sql = "DELETE from contac where id = :id";
        $stmt = $this->link->prepare($sql);
        $stmt->execute(["id" => $id]);
    }
}

?>