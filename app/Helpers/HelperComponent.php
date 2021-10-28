<?php
namespace App\Helpers;

class HelperComponent {

    public static function SideBar(){
        return [
                [
                    "heading"=>"Menu",
                ],
                [
                    "single_link" => setSingleLink( "dashboard", "home","dashboard-view","/"),
                ],
                [
                    "heading" => "Apps",
                ],

                [

                    "menu"=>[
                        "title"=>'User Management',
                        "icon"=>"user",
                        "sub_menu"=>[
                            setSubMenu(
                              "Users",
                                null,
                                "users-view",
                                 "/users",
                            ),
                            setSubMenu(
                                "Roles",
                                  null,
                                  "roles-view",
                                   "/roles",
                            ),
                            setSubMenu(
                                "Permissions",
                                  null,
                            "permissions-view",
                                   "/permissions",
                              ),

                        ]

                    ],

                ],

     ];
    }
}
