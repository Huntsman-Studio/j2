<?php

    add_shortcode('navigation', 'navigation');

    function navigation($atts){
        ?>
            <script>
                // Check if element is hidden or visible and toggle
                $(document).ready( function(){
                    $('#collection').click( function(){
                        if($('.submenu').is(':hidden')){
                            $('.submenu').removeClass('hide');
                            $('#collection').addClass('active');
                            $('#sales').addClass('act');
                            $('#about-us').addClass('act');
                            $('.nav').css('background-color','black');
                        } else{
                            $('.submenu').addClass('hide');
                            $('#collection').removeClass('active');
                            $('#sales').removeClass('act');
                            $('#about-us').removeClass('act');
                            $('.nav').css('background-color','transparent');
                        }
                    });
                });
                // Close button
                $(document).ready(function(){
                    $('.close').click(function(){
                        $('.submenu').addClass('hide');
                        $('#collection').removeClass('active');
                        $('#sales').removeClass('act');
                        $('#about-us').removeClass('act');
                        $('.nav').css('background-color','transparent');
                    });
                });
            </script>

            <style>
                nav{
                    display: grid;
                    justify-items: center;
                }
                /* Navigation  */
                div.nav{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 80%;
                }
                /* Navigation items */
                ul.menu{
                    list-style-type: none;
                }
                /* li */
                ul.menu > li{
                    float: left;
                    font-size: 18px;
                    color: #000;
                    padding: 13px 33px 13px 33px;
                    border: 2px solid transparent;
                }
                /* hover */
                ul.menu > li:hover{
                    border: 2px solid black;
                    border-radius: 5pt;
                    cursor: pointer;
                }
                /* active li */
                ul.menu > li.active{
                    background-color: #fff;
                    font-size: 18px;
                    border-radius: 5px;
                    color: #000;
                    padding: 13px 33px 13px 33px;
                    border: 2px solid #fff;
                }
                ul.menu > li.act{
                    color: #fff;
                }
                /* hover */
                ul.menu > li.act:hover{
                    border: 2px solid #fff;
                }

                /* submenu */
                div.submenu{
                    display: grid;
                    /* flex-direction: row; */
                    justify-content: center;
                    /* align-items: center; */
                    background-color: black;
                    width: 80%;
                    height: 80vh;
                    padding-bottom: 42px;
                }
                div.hide{
                    display: none;
                }
                /* submenu items */
                ul.submenu{
                    list-style-type: none;
                }
                /* li */
                ul.submenu > li{
                    float: left;
                    gap: 32px;
                    padding: 8px;
                    border: 2px solid transparent;
                }
                /* hover */
                ul.submenu > li:hover{
                    border: 2px solid white;
                    border-radius: 5pt;
                    cursor: pointer;
                }

                /* tees item */
                div#tees{
                    width: 292px;
                    background-image: url('http://j-2.gr/wp-content/uploads/2021/10/tshirts-scaled.jpg');
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-position: center;
                    text-align: center;
                    padding-top: 280px;
                    padding-bottom: 16px;
                    color: #fff;
                    font-size: 22px;
                }

                /* close button */
                div.close{
                    align-self: flex-end;
                    text-align: center;
                }
                /* button */
                div.close > button{
                    font-size: 18px;
                    padding: 13px 57px 13px 57px;
                    color: #fff;
                    border-radius: 5pt;
                    border: 2px solid #e5e5e5;
                    background-color: transparent;
                    font-weight: bold;
                }
                /* hover */
                div.close > button:hover{
                    cursor: pointer;
                    background-color: #e5e5e5;
                    color: #000;
                }
                /* focus */
                div.close > button:focus{
                    background-color: #dedede;
                    /* border-inline: 2px solid black; */
                }
            </style>
            <nav>
                <div class="nav">
                    <ul class="menu">
                        <li id="collection" style="margin-right: 32px;">????????????????</li>
                        <li id="sales" style="margin-right: 32px;">??????????????????</li>
                        <li id="about-us">?????????????? ???? ????????</li>
                    </ul>
                </div>
                <div class="submenu hide">
                    <ul class="submenu">
                        <li style="margin-right: 32px;"><div id="tees">????????????????</div></li>
                        <li style="margin-right: 32px;"><div id="tees">????????????????????</div></li>
                        <li style="margin-right: 32px;"><div id="tees">??????????????????</div></li>
                    </ul>
                    <div class="close">
                        <button class="close"><div>????????????????</div></button>
                    </div>
                </div>
            </nav>
            
        <?php
    }
?>