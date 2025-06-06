<?php

/**
 * Contains a set of useful methods that helps and simplify the execution of the Control Panel
 */
class ControlPanel {

    private $siteTitle;
    private $siteSubTitle;
    private $siteLogo;
    private $siteTheme;
    private $logged;

    /**
     * Build a new ControlPanel class
     * 
     * @param String $siteTitle    The site main title
     * @param String $siteSubTitle The site subtitle
     * @param String $siteLogo     The site logo URL
     * @param String $siteTheme       The control panel theme
     */
    public function __construct($siteTitle, $siteSubTitle, $siteLogo, $siteTheme)
    {
        $this->siteTitle = $siteTitle;
        $this->siteSubTitle = $siteSubTitle;
        $this->siteLogo = $siteLogo;
        $this->siteTheme = $siteTheme;
        $logged = false;
    }

    /**
     * Get the url basing on the values of the $dataArray parameter
     *
     * @param array $dataArray The data array being parsed
     * 
     * @return mixed The url string or false on error
     */
    public function getRedirectFromArray($dataArray)
    {
        if (isset($dataArray['redirect'])) {
            switch ($dataArray['redirect']) {
                case "cart-order": return "cart-order.php?id=" . $dataArray['order_id'];
                case "cart-low-stock": return "cart-availability.php";
                case "blog-comment": return "blog.php?category=" . urlencode(str_replace(' ', '_', $dataArray['category'])) . "&post=" . $dataArray['post'];
                case "guestbook-comment": return "guestbook.php?post=" . $dataArray['post'];
                case "user": return "privatearea.php";
            }
        }
        return false;
    }

    /**
     * Enter the page if the login is ok, otherwise redirect to the login page
     * 
     * @return Void
     */
    public function accessOrRedirect()
    {
        // Login check
        $this->logged = false;
        $login = Configuration::getPrivateArea();
        // If this is not the login page, let's check if the session is ready
        if ($login->checkAccess("admin/" . basename($_SERVER['PHP_SELF'])) !== 0) {
            $login->savePage();
            if (isset($_SERVER['HTTP_REFERER']) && basename($_SERVER['HTTP_REFERER']) == "login.php") {
                header("Location: login.php?error");
                exit;
            }
            header("Location: login.php");
            exit;
        }
        $this->logged = true;
    }

    /**
     * Try to login to the control panel if the session is already set
     * 
     * @return Void
     */
    public function attemptAutoLogin()
    {
        $login = Configuration::getPrivateArea();
        // If this is the login page, let's do the redirect if the session is already set
        if ($login->checkAccess("admin/index.php") === 0) {
            header("Location: " . ($login->getSavedPage() ? $login->getSavedPage() : "index.php"));
            exit;
        }
    }

    /**
     * Get the main template object already populated with the main vars
     * 
     * @return Template
     */
    public function getMainTemplate()
    {
        $loc = Configuration::getLocalizations();
        $settings = Configuration::getSettings();

        // Create the menu
        $menu = array();
        $menu[] = array(
            "url" => "index.php",
            "image" => "images/dashboard_white.png",
            "text" => $loc->get("dashboard_title", "Dashboard"),
            "selected" => isset($_SERVER['PHP_SELF']) && basename($_SERVER['PHP_SELF']) == "index.php"
        );
         if (isset($settings['access']['entrancepage'])) {
            $menu[] = array(
                "url" => "privatearea.php",
                "image" => "images/access_white.png",
                "text" => $loc->get("private_area_title", "Access Management"),
                "selected" => isset($_SERVER['PHP_SELF']) && basename($_SERVER['PHP_SELF']) == "privatearea.php"
            );
        }
        $menu[] = array(
            "url" => "news.php",
            "image" => "images/news.png",
            "text" => $loc->get("Noticias", "Noticias"),
            "selected" => isset($_SERVER['PHP_SELF']) && basename($_SERVER['PHP_SELF']) == "news.php"
        );
        // $menu[] = array(
        //     "url" => "videos.php",
        //     "image" => "images/dashboard_white.png",
        //     "text" => $loc->get("Videos", "Videos"),
        //     "selected" => isset($_SERVER['PHP_SELF']) && basename($_SERVER['PHP_SELF']) == "videos.php"
        // );
        //  $menu[] = array(
        //     "url" => "archivos.php",
        //     "image" => "images/files.png",
        //     "text" => $loc->get("Archivos", "Archivos"),
        //     "selected" => isset($_SERVER['PHP_SELF']) && basename($_SERVER['PHP_SELF']) == "archivos.php"
        // );
        // $menu[] = array(
        //     "url" => "roles.php",
        //     "image" => "images/roles.png",
        //     "text" => $loc->get("Roles", "Roles"),
        //     "selected" => isset($_SERVER['PHP_SELF']) && basename($_SERVER['PHP_SELF']) == "roles.php"
        // );
        $menu[] = array(
            "url" => "socios.php",
            "image" => "images/socios.png",
            "text" => $loc->get("Socios", "Socios"),
            "selected" => isset($_SERVER['PHP_SELF']) && basename($_SERVER['PHP_SELF']) == "socios.php"
        );
        if (isset($settings['blog']) && $settings['blog']['comments_source'] == 'wsx5') {
            $menu[] = array(
                "url" => "blog.php",
                "image" => "images/blog_white.png",
                "text" => $loc->get("blog_title", "Blog"),
                "selected" => isset($_SERVER['PHP_SELF']) && basename($_SERVER['PHP_SELF']) == "blog.php"
            );
        }
        if (isset($settings['guestbooks']) && count($settings['guestbooks'])) {
            $menu[] = array(
                "url" => "guestbook.php",
                "image" => "images/guestbook_white.png",
                "text" => $loc->get("admin_guestbook", "Guestbook"),
                "selected" => isset($_SERVER['PHP_SELF']) && basename($_SERVER['PHP_SELF']) == "guestbook.php"
            );
        }
       
        if (isset($settings['ecommerce']) && isset($settings['ecommerce']['database'])) {
            $menu[] = array(
                "url" => "cart-orders.php",
                "image" => "images/shop_white.png",
                "text" => $loc->get("admin_cart_title", "E-Commerce: Cart"),
                "selected" => isset($_SERVER['PHP_SELF']) && substr(basename($_SERVER['PHP_SELF']), 0, 11) == "cart-orders"
            );
        }
        if (Configuration::getCart()->getCommentsData()['enabled'] && Configuration::getCart()->getCommentsData()['type'] == 'websitex5') {
            $menu[] = array(
                "url" => "cart-comments.php",
                "image" => "images/guestbook_white.png",
                "text" => $loc->get("admin_cart_comments_title", "E-Commerce: Comments"),
                "selected" => isset($_SERVER['PHP_SELF']) && basename($_SERVER['PHP_SELF']) == "cart-comments.php"
            );
        }
        // if (isset($settings['dynamicobjects']) && (count($settings['dynamicobjects']['pages']) || count($settings['dynamicobjects']['template']))) {
        //     $menu[] = array(
        //         "url" => "dynamicobjects.php",
        //         "image" => "images/dynamic_white.png",
        //         "text" => $loc->get("dynamicobj_name", "Dynamic objects"),
        //         "selected" => isset($_SERVER['PHP_SELF']) && basename($_SERVER['PHP_SELF']) == "dynamicobjects.php"
        //     );
        // }
        if (isset($settings['admin']) && isset($settings['admin']['enable_notifications']) && $settings['admin']['enable_notifications'] === true) {
            $menu[] = array(
                "url" => "notifications.php",
                "image" => "images/notifications_white.png",
                "text" => $loc->get("notifications_name", "Notifications"),
                "selected" => isset($_SERVER['PHP_SELF']) && basename($_SERVER['PHP_SELF']) == "notifications.php"
            );
        }
        if (isset($settings['analytics']) && $settings['analytics']['type'] == "wsx5analytics") {
            $menu[] = array(
                "url" => "analytics.php",
                "image" => "images/analytics_white.png",
                "text" => $loc->get("admin_analytics_title", "Statistics"),
                "selected" => isset($_SERVER['PHP_SELF']) && basename($_SERVER['PHP_SELF']) == "analytics.php"
            );
        }
        // $menu[] = array(
        //     "url" => "sitetest.php",
        //     "image" => "images/test_white.png",
        //     "text" => $loc->get("admin_test", "Website Test"),
        //     "selected" => isset($_SERVER['PHP_SELF']) && basename($_SERVER['PHP_SELF']) == "sitetest.php"
        // );

        // Add the plugin apps pages if available
        foreach ($settings['admin']['extra-links'] as $entry) {
            $menu[] = array(
                "url" => $entry['url'],
                "image" => "../" . $entry['icon'],
                "text" => $entry['title'],
                "selected" => isset($_SERVER['REQUEST_URI']) && basename($_SERVER['REQUEST_URI']) == $entry['url']
            );  
        }

        $template = $this->getTemplate("templates/common/main.php");
        $template->menu = $menu;
        // Set the theme
        $template->theme = $this->siteTheme;

        // Get the username
        $user = Configuration::getPrivateArea()->whoIsLogged();
        if ($user !== false) {
            $template->username = $user['username'];
        } else {
            $template->username = "";
        }

        return $template;
    }

    /**
     * Get a template object already populated with the main vars
     *
     * @param  String $templatePath The path to the template file
     * 
     * @return Template
     */
    public function getTemplate($templatePath)
    {
        global $imSettings;

        $template = new Template($templatePath);

        // ImSettings
        $template->imSettings = $imSettings;

        // Generic data
        $template->sitetitle = $this->siteTitle;
        $template->sitesubtitle = $this->siteSubTitle;
        $template->logo = $this->siteLogo;

        return $template;
    }
}
