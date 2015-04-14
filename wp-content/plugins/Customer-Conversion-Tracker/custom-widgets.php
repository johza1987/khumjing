<?php
session_start();
$remove_defaults_widgets = array(
    'dashboard_incoming_links' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    ),
    'dashboard_right_now' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    ),
    'dashboard_recent_drafts' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_quick_press' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_plugins' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    ),
    'dashboard_primary' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_secondary' => array(
        'page'    => 'dashboard',
        'context' => 'side'
    ),
    'dashboard_recent_comments' => array(
        'page'    => 'dashboard',
        'context' => 'normal'
    )
);

$custom_dashboard_widgets = array(
    
    'Customer-Conversion-Tracker-widget ' => array(
        'title' => 'Customer Conversion Tracker',
        'callback' => 'dashboardWidgetContent'
    )
   
);

  function dashboardWidgetContent()
{
 $wdw = new Wptuts_Dashboard_Widgets();
 echo '<div id="tabs">';
 echo '<strong><span class="blue">Last Updates: </span>'.get_option('last_updated_tracker').'</strong>';
 
 $wdw->output_report();
 echo '</div>';
 ?>

<?php
      if(is_admin()) { ?>
            <style>
                    strong{font-size:14px;}
                    .blue{color:rgb(0, 116, 162);}
                    .purchased img{border-radius:28px;border:none;height:50px;width:50px;background-color:rgba(0,153,0,<?php echo $_SESSION['opacity_purchased']/100; ?>);}
                    .checkout img{border-radius:28px;border:none;height:50px;width:50px;background-color:rgba(0,153,0,<?php echo $_SESSION['opacity_checkout']/100; ?>);}    
                    .cart img{border-radius:28px;height:50px;width:50px;border:none;background-color:rgba(0,153,0,<?php echo $_SESSION['opacity_cart']/100; ?>);}
                    .checkout .line_connector{top: -42px;left:27px;width:75%;float:right;position:relative;height:6px;margin:0 auto;float:none; 
            <?php if($_SESSION['opacity_checkout']/100=='0'){ ?> background-color:rgba(0,153,0,0.1); 
            <?php }else{ ?>
            background-color:rgba(0,153,0,<?php echo $_SESSION['opacity_checkout']/100; ?>);
            <?php } ?>
            } 
            .checkout .line_connector {
                background-color: rgb(0, 153, 0);
                float: none;
                height: 6px;
                left: 49%;
                margin: 0 auto;
                position: relative;
                top: -42px;
                width: 76%;
              }
/*            .cart .line_connector{top:23px;left:27px;width:75%;float:right;position:relative;height:6px;margin:0 auto;float:none;background-color:rgba(0,153,0,<?php //echo $_SESSION['opacity_cart']/100; ?>);}*/
            .cart .line_connector {
               <?php if($_SESSION['opacity_cart']/100=='0'){ ?> background-color:rgba(0,153,0,0.5); <?php }else{ ?>
               background-color:rgba(0,153,0,<?php echo $_SESSION['opacity_cart']/100; ?>);
               <?php } ?>
                float: none;
                height: 6px;
                left: 58%;
                margin: 0 auto;
                position: absolute;
                top: 16%;
                width: 76%;
              }
            .range{float:right;}   
            #poststuff{min-width:100%;padding-top:10px;}
            .left{float:left;width:50%;}
            .right{float:right;width:50%;}
            .woocommerce-reports-wide .postbox .chart-legend li:hover, .woocommerce-reports-wrap .postbox .chart-legend li:hover{width:31%;font-size:13.9px}
            .chart-legend .highlight_series > strong{position:relative;font-size:14px;display:block;}
            .chart-legend .highlight_series > strong>span{font-size:16px;}
            li.highlight_series{line-height:3;position:relative;font-size:14px;height:auto;margin-top:12px !important;font-weight:bold;
/*                                overflow:hidden;*/
            }
           .postbox.tabs .tab_menu li{
/*             box-shadow: inset 0px 0px 10px 0px #ABABAB,5px 5px 5px 1px #f1f1f1;
            -webkit-box-shadow: inset 0px 0px 10px 0px #ABABAB,5px 5px 5px 1px #f1f1f1;
            -moz-box-shadow: inset 0px 0px 10px 0px #ABABAB,5px 5px 5px 1px #f1f1f1;
            -o-box-shadow: inset 0px 0px 10px 0px #ABABAB,5px 5px 5px 1px #f1f1f1;*/
            border-image: none;
            border-style: solid;
            border-width: 1px;
            color: rgb(85, 85, 85);
            display: inline-block;
            font-size: 15px;
            font-weight: 700;
            line-height: 24px;
            margin:0px 0px 4px;
            padding: 4px 6px 6px;
            text-decoration: none;
            background:#DDDDDD;
            border-color:#ececec;
             }
            .tab_menu{float:left;padding-left:12px;}
            .postbox.tabs .tab_menu li.active, .postbox.tabs .tab_menu li:hover {
              background:white;
              border-bottom: 1px solid rgb(241, 241, 241);
              color: rgb(0, 0, 0);
/*                box-shadow: inset 0px 0px 10px 0px #ABABAB;
               -webkit-box-shadow: inset 0px 0px 10px 0px #ABABAB;
               -moz-box-shadow: inset 0px 0px 10px 0px #ABABAB;
               -o-box-shadow: inset 0px 0px 10px 0px #ABABAB;*/
             }
            .postbox.tabs ul.tab_menu {overflow:hidden;}
            .postbox.tabs ul.tab_menu li.custom{width: auto;}
            .postbox.tabs ul.tab_menu :before, .postbox.tabs ul.tab_menu :after{border-collapse:collapse;content:"";display:table;}
            #graph_show_hide{font-size:18px;font-weight:bold;text-align:center;padding:10px;cursor:pointer;}
            .chart-legend,.chart-wrapper{margin-top:15px;width:98%;min-width:320px;display:block;overflow:hidden;height:auto;background:white;}
            .chart-container{text-align:center;width:auto;display:table;margin:0 auto;float:none;}
            .postbox.tabs{overflow:hidden;}
            .purchased{background-repeat:no-repeat;height:150px;width:auto;} 
            .range{float:left;height:65px;width: 99%;}
/*            .cart img{float:left;}*/
            li.highlight_series{float:left;height:auto;width:32%;padding:0 !important;border:0 !important;margin-top:10px;text-align:center;}
            li.highlight_series:first-child{margin-left:12px !important;}
/*            li.highlight_series:last-child{width:auto;}*/
            .highlight_series img{position:relative;left:0px;}
            </style>
    <?php } ?>
<?php
}


