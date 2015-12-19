<?php

class Ajax extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->ajaxCall();
    }

    public function ajaxCall() {
        //session güvenlik kontrolü
        $form = $this->load->otherClasses('Form');
        if ($_POST && $_SERVER["HTTP_X_REQUESTED_WITH"] == "XMLHttpRequest") {
            $sonuc = array();
            //model bağlantısı
            $Panel_Model = $this->load->model("Panel_Model");

            $form->post("tip", true);
            $tip = $form->values['tip'];
            Switch ($tip) {

                case "userrequest":
                    $form->post("username", true);
                    $form->post("sifre", true);
                    $username = $form->values['username'];
                    $sifre = $form->values['sifre'];

                    if ($username != "") {
                        if ($sifre != "") {
                            $result = $Panel_Model->userselect($username, $sifre);
                            if ($result[0]['id'] > 0) {
                                
                            } else {
                                $sonuc["hata"] = "Tekrar deneyiniz.";
                            }
                        } else {
                            $sonuc["hata"] = "Lütfen Kullanıcı Şifrenizi Giriniz.";
                        }
                    } else {
                        $sonuc["hata"] = "Lütfen Kullanıcı Adınızı Giriniz.";
                    }
                    break;
                default :
                    header("Location:" . SITE_URL);
                    break;
            }
            echo json_encode($sonuc);
        } else {
            header("Location:" . SITE_URL);
        }
    }

}
?>

