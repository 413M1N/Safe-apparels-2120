<?php

class Pages extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    // Load form validation library
    $this->load->library('form_validation');
  }
  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   *	- or -
   * 		http://example.com/index.php/welcome/index
   *	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  public function index()
  {
    $data = array(
      'title' => 'Home | Safe Apparel',
      'view' => 'pages/index',
    );
    $data['all_product'] = $this->ProductModel->get_all_product();
    $this->load->view('template', $data);
  }

  public function home()
  {
    $data = array(
      'title' => 'Home | Safe Apparel',
      'view' => 'pages/index',
    );
    $data['all_product'] = $this->ProductModel->get_all_product();
    $this->load->view('template', $data);
  }

  public function products()
  {
    $data = array(
      'title' => 'Products | Safe Apparel',
      'view' => 'pages/products',
    );
    $data['all_product'] = $this->ProductModel->get_all_product();
    $this->load->view('template', $data);
  }

  public function category($name)
  {
    $data = array(
      'view' => 'pages/category',
    );
    $data['category'] = $this->CategoryModel->get_category_by_name($name);
    $data['title'] = ucfirst($data['category']->category_name) . ' | Safe Apparel';
    $data['all_product'] = $this->ProductModel->get_product_category($data['category']->category_id);
    $this->load->view('template', $data);
  }

  public function contact()
  {
    $data = array(
      'title' => 'Contact Us | Safe Apparel',
      'view' => 'pages/contact',
    );
    $data['all_product'] = $this->ProductModel->get_all_product();

    $this->load->view('template', $data);
  }

  public function submitRequest()
  {
    $errorMSG = "";

    if (empty($_POST["name"])) {
      $errorMSG = "Name is required ";
    } else {
      $name = $_POST["name"];
    }
    if (empty($_POST["phone"])) {
      $errorMSG = "Phone is required ";
    } else {
      $phone = $_POST["phone"];
    }
    if (empty($_POST["product"])) {
      $errorMSG = "Product is required ";
    } else {
      $product = $_POST["product"];
    }
    if (empty($_POST["quantity"])) {
      $errorMSG = "Quantity is required ";
    } else {
      $quantity = $_POST["quantity"];
    }
    if (empty($_POST["country"])) {
      $errorMSG = "Country is required ";
    } else {
      $country = $_POST["country"];
    }
    if (empty($_POST["email"])) {
      $errorMSG = "Email is required ";
    } else {
      $email = $_POST["email"];
    }

    if (empty($_POST["message"])) {
      $errorMSG = "Message is required ";
    } else {
      $message = $_POST["message"];
    }

    if (empty($_POST["terms"])) {
      $errorMSG = "Terms is required ";
    } else {
      $terms = $_POST["terms"];
    }

    $EmailTo = "info@safeapparels.com";
    $Subject = $name + "new message from Safe Apparel";

    // prepare email body text
    $Body = "";
    $Body .= "Name: ";
    $Body .= $name;
    $Body .= "\n";
    $Body .= "Product: ";
    $Body .= $product;
    $Body .= "\n";
    $Body .= "Quantity: ";
    $Body .= $quantity;
    $Body .= "\n";
    $Body .= "Country: ";
    $Body .= $country;
    $Body .= "\n";
    $Body .= "Email: ";
    $Body .= $email;
    $Body .= "\n";
    $Body .= "Phone: ";
    $Body .= $phone;
    $Body .= "\n";
    $Body .= "Message: ";
    $Body .= $message;
    $Body .= "\n";
    $Body .= "Terms: ";
    $Body .= $terms;
    $Body .= "\n";

    // send email
    $success = mail($EmailTo, $name, $Body, "From:" . $email);

    // redirect to success page
    if ($success && $errorMSG == "") {
      echo "Successfully sent email. We will get back to you soon.";
    } else {
      if ($errorMSG == "") {
        echo "Something went wrong :(";
      } else {
        echo $errorMSG;
      }
    }
  }
}
