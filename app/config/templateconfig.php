<?php

return [
  'template'    => [
      'navbar'              => TMP_PATH . DS . 'navbar.php',
      'asideMenu'           => TMP_PATH . DS . 'aside-menu.php',
      'asideController'     => TMP_PATH . DS . 'aside-controller.php',
      'contentStart'        => TMP_PATH . DS . 'content-start.php',
      ':view'               => 'viewPath',
      'contentEnd'          => TMP_PATH . DS . 'content-end.php'
  ],
  'header_resources' => [
        'css'  => [
            'bootstrap'         => CSS . 'bootstrap.min.css',               // Basic
            'fontawesome'       => CSS . 'font-awesome.min.css',            // Basic
            'ionicons'          => CSS . 'ionicons.min.css',                // Basic
            'dataTables'        => CSS . 'dataTables.bootstrap.min.css',    // Basic
            'AdminLTE'          => CSS . 'AdminLTE.min.css',                // Basic
            'skins'             => CSS . '_all-skins.min.css',              // Basic
            'all'               => CSS . 'all.css',                         // I check
            'morris'            => CSS . 'morris.css',                      // Map
            'jvectormap'        => CSS . 'jquery-jvectormap.css',           // Map
            'datepicker'        => CSS . 'bootstrap-datepicker.min.css',    // Date picker - Basic
            'daterangepicker'   => CSS . 'daterangepicker.css',             // Date picker - Basic
            'wysihtml5'         => CSS . 'bootstrap3-wysihtml5.min.css',    // Text Editor
            'googleapis'        => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic', // Basic
            'custom'            => CSS . 'custom.css',                      // Basic
        ],
  ],
  'footer_resources' => [
      'js' => [
          'jquery'            => JS . 'jquery.min.js',                          // Basic
          'jqueryUI'          => JS . 'jquery-ui.min.js',                       // Basic
          'jqueryUIFIX'       => JS . 'jqueryfix.js',                           // Basic
          'bootstrap'         => JS . 'bootstrap.min.js',                       // Basic
          'dataTables'        => JS . 'jquery.dataTables.min.js',               // Basic
          'dataTables-B'      => JS . 'dataTables.bootstrap.min.js',            // Basic
          'raphael'           => JS . 'raphael.min.js',                         // Charts Graphic
          'morris'            => JS . 'morris.min.js',                          // Charts Graphic
          'sparkline'         => JS . 'jquery.sparkline.min.js',                // Charts Graphic
          'jvectormap'        => JS . 'jquery-jvectormap-1.2.2.min.js',         // Maps
          'jvectormapWorld'   => JS . 'jquery-jvectormap-world-mill-en.js',     // Maps
          'knob'              => JS . 'jquery.knob.min.js',                     // js Circles lib
          'moment'            => JS . 'moment.min.js',                          // Dates Sit
          'daterangepicker'   => JS . 'daterangepicker.js',                     // Basic
          'datepicker'        => JS . 'bootstrap-datepicker.min.js',            // Basic
          'inputmask'         => JS . 'jquery.inputmask.js',                    // input style
          'icheck'            => JS . 'icheck.min.js',                          // i check
          'wysihtml5'         => JS . 'bootstrap3-wysihtml5.all.min.js',        // Text editors
          'slimscroll'        => JS . 'jquery.slimscroll.min.js',               // Scroll - Basic
          'fastclick'         => JS . 'fastclick.js',                           // For mobiles - Basic
          'adminlte'          => JS . 'adminlte.min.js',                        // Basic
          'dashboard'         => JS . 'dashboard.js',                           // Basic
          'demo'              => JS . 'demo.js',                                // Basic
          'custom'            => JS . 'custom.js'                               // Basic
      ]
  ],
];
/*
'js' => [
    'jquery'            => JS . 'jquery.min.js',
    'jqueryUI'          => JS . 'jquery-ui.min.js',
    'jqueryUIFIX'       => JS . 'jqueryfix.js',
    'bootstrap'         => JS . 'bootstrap.min.js',
    'dataTablesBS'      => JS . 'dataTables.bootstrap.min.js',
    'dataTablesJQ'      => JS . 'jquery.dataTables.min.js',
    'raphael'           => JS . 'raphael.min.js',
    'morris'            => JS . 'morris.min.js',
    'sparkline'         => JS . 'jquery.sparkline.min.js',
    'jvectormap'        => JS . 'jquery-jvectormap-1.2.2.min.js',
    'jvectormapWorld'   => JS . 'jquery-jvectormap-world-mill-en.js',
    'knob'              => JS . 'jquery.knob.min.js',
    'moment'            => JS . 'moment.min.js',
    'daterangepicker'   => JS . 'daterangepicker.js',
    'datepicker'        => JS . 'bootstrap-datepicker.min.js',
    'wysihtml5'         => JS . 'bootstrap3-wysihtml5.all.min.js',
    'slimscroll'        => JS . 'jquery.slimscroll.min.js',
    'fastclick'         => JS . 'fastclick.js',
    'adminlte'          => JS . 'adminlte.min.js',
    'dashboard'         => JS . 'dashboard.js',
    'demo'              => JS . 'demo.js',
    'custom'            => JS . 'custom.js'
]*/