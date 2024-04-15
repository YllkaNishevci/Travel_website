<?php
class Page
{
    public $titulli = "Titulli i faqes";
    public $keywords = "Php, Login, Mysql";
    public $menyja = array("Home" => "home.php", "Services" => "services.php", "Contact" => "contact.php", "About" => "about.php");
    public $pageContent = "";
    public $user = "";

    // Constructor method
    public function __construct($user)
    {
        $this->user = $user;
    }

    public function permbajtja()
    {
        echo '<h1 align="center" id="logo">Hug The World</h1>
        <div class="login">
            <h1 align="center" style="background-color:rgba(255, 255, 255, 0);font-family:"Script MT Bold"; opacity:0.6;color:black">Welcome</h1>
            <form action="" method="post" style="text-align:center; background-color:rgba(255, 255, 255, 0);opacity:0.7;">
                <input type="text" placeholder="Username" id="user" name="user" style="background-color:rgba(255, 255, 255, 0.1);border-color:grey; border-radius: 8px"><br/><br/>
                <input type="password" placeholder="Password" id="pass" name="pass" style="background-color:rgba(255, 255, 255, 0.1);border-color:grey; border-radius:8px"><br/><br/>
                <input type="submit" value="Login" name="submit">
                <span><?php echo $error; ?></span>';
    }

    public function get_user()
    {
        return $this->user;
    }

    public function ShfaqTitullin()
    {
        echo "<title> $this->titulli</title>";
    }

    public function ShfaqKeywords()
    {
        echo "<meta name='keywords' content='" . $this->keywords . "'/>";
    }

    public function ShfaqCss()
    {
?>
        <link href="css/login.css" type="text/css" rel="stylesheet" media="screen" />
<?php
    }

    public function ShfaqPermbajtjen()
    {
        echo "<html> <head>";
        $this->ShfaqTitullin();
        $this->ShfaqKeywords();
        $this->ShfaqCss();
        $this->permbajtja();
        echo "</head><body>";
        echo "$this->pageContent";

        echo "</body></html>";
    }
}
?>
