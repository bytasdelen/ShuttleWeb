<?php

/*
 * Config kısmı genel sabitleri tanımlaya yaramaktadır.Buradan tanımladığımız define ları framework dosyalarımızın
 * istenilen her yerinden ulaşabiliriz.Bu kısma aşağıdaki gibi bir tanımalam yeterli gelecektir.
 */
//sitenin url bilgisi
define("SITE_URL", "https://localhost/ShuttleWeb");
//Tempalte Back end Url yapılandırılması
define("SITE_URL_BCSS", "https://localhost/ShuttleWeb/app/views/Template_BackEnd/assets/css");
define("SITE_URL_BDIST", "https://localhost/ShuttleWeb/app/views/Template_BackEnd/assets/dist");
define("SITE_URL_BPLUGINS", "https://localhost/ShuttleWeb/app/views/Template_BackEnd/assets/plugins");
define("SITE_URL_BBOOTSTRAP", "https://localhost/ShuttleWeb/app/views/Template_BackEnd/assets/bootstrap");
//Tempalte Front end Url yapılandırılması
define("SITE_URL_FASSET", "https://localhost/ShuttleWeb/app/views/Template_FrontEnd/assets/asset");
define("SITE_URL_FCSS", "https://localhost/ShuttleWeb/app/views/Template_FrontEnd/assets/css");
define("SITE_URL_FFONTS", "https://localhost/ShuttleWeb/app/views/Template_FrontEnd/assets/fonts");
define("SITE_URL_FIMAGES", "https://localhost/ShuttleWeb/app/views/Template_FrontEnd/assets/images");
define("SITE_URL_FJS", "https://localhost/ShuttleWeb/app/views/Template_FrontEnd/assets/js");
//entry
define("SITE_URL_EJS", "https://localhost/ShuttleWeb/app/views/Entry/js");
?>