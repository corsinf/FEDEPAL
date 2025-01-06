function loginlogout_imHeader_pluginAppObj_04() {

    var isUIPreview = "online";
    var typeSetting = "logout";
    var logoutLabelExist = true;
          
    x5engine.boot.push(function(){
        
        var imLogoutAnchor = $("#imHeader_pluginAppObj_04 .imLogoutAnchor");
        
        if(isUIPreview === "uipreview"){
            setLogoutVisibile();
        }
        else if (typeSetting == 'logout' && logoutLabelExist) {
            if (x5engine.utils.isOnline()) {
                if($.imCookie("im_access_cookie_uid") !== null && $.imCookie("im_access_cookie_uid") !== ""){
                    setLogoutVisibile();
                    imLogoutAnchor.attr("href", x5engine.settings.currentPath + "res/imlogout.php");
                }
                else{
                    setLogoutInvisibile();
                }
            } 
            else {
                 setLogoutVisibile();
                 imLogoutAnchor.attr("href", "#");
            }
        }     
    
        function setLogoutVisibile(){
            imLogoutAnchor.css("opacity", "1");
        }
    
        function setLogoutInvisibile(){
            imLogoutAnchor.css("opacity", "0");
        }
    
    }); //close ready or push
}