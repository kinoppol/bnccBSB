<?php

helper('menu');
$menuData=array(
    array(
    'text'=>'หน้าหลัก',
    'bullet'=>'home',
    'url'=>site_url(),
    'cond'=>true,
    'items'=>array(
        'main1'=>array(
            'text'=>'หน้าหลัก 1',
            'url'=>site_url(),
            'cond'=>true,
        ),
            'main2'=>array(
                'text'=>'หน้าหลัก 2',
                'url'=>site_url('home/adminlte'),
                'cond'=>true,
            )
        ),
    ),
    array(
        'text'=>'ตั้งค่า',
        'bullet'=>'settings',
        'url'=>'./setting',
        'cond'=>true,
        'items'=>array(
                'general'=>array(
                    'text'=>'ตั้งค่าทั่วไป',
                    'url'=>site_url('setting/general'),
                    'cond'=>true,
                ),
                'display'=>array(
                    'text'=>'ตั้งค่าการแสดงผล',
                    'url'=>site_url('setting/display'),
                    'cond'=>true,
                ),
            ),
        ),
);

print genMainMenu($menuData,$def=site_url($_SERVER['PATH_INFO']));
