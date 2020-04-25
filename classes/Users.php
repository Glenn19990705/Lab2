class User{
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $interests;
    private $error;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}