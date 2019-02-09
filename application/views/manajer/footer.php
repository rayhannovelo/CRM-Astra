            <div class="footer">
                <div class="pull-right">
                    <strong>{elapsed_time} detik</strong>
                </div>
                <div>
                    <strong>Copyright</strong> Astra Motor © 2018
                </div>
            </div>

        </div>
    </div>

    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe. 
             It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. 
                PhotoSwipe keeps only 3 of them in the DOM to save memory.
                Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader->active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                          <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div> 
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.1.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/slimscroll/jquery.slimscroll.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/dataTables/datatables.min.js')?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url('assets/js/inspinia.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/pace/pace.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/jsKnob/jquery.knob.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/datapicker/bootstrap-datepicker.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/jasny/jasny-bootstrap.min.js')?>" rel="stylesheet"></script>

    <!-- Core Photo Swipe JS file -->
    <script src='<?php echo base_url(); ?>assets/js/plugins/photoswipe/photoswipe.min.js'></script>
    <script src='<?php echo base_url(); ?>assets/js/plugins/photoswipe/photoswipe-ui-default.min.js'></script> 
    <script src="<?php echo base_url(); ?>assets/js/plugins/photoswipe/index.js"></script>

    <!-- Flot -->
    <script src="<?php echo base_url('assets/js/plugins/flot/jquery.flot.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/flot/jquery.flot.tooltip.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/flot/jquery.flot.resize.js')?>"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.rangking').DataTable({
                "order": [3, "asc"],
                "iDisplayLength": 25,
                "paging":   false,
                "searching": false,
                "info":     false,
                "columnDefs": [ {
                    "targets"  : [0,1,2,3]
                    // "orderable": false,
                }]
            });

            $('.topsis').DataTable({
                "order": [2, "asc"],
                "iDisplayLength": 25,
                "paging":   false,
                "searching": false,
                "info":     false,
                "columnDefs": [ {
                    "targets"  : [0,1,2]
                    // "orderable": false,
                }]
            });

            $('table#mytable').DataTable();

            $('#laporan_komentar').DataTable({
                "pageLength": 50,
                "order": [0, "asc"],
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                        {
                          extend: 'excel', 
                          title: 'Laporan Komentar',
                          exportOptions: {
                            columns: [0,1,2]
                          }
                        },
                        {
                          extend: 'pdf', 
                          title: 'Laporan Komentar',
                          exportOptions: {
                            columns: [0,1,2]
                          }
                        },
                        {
                          extend: 'print',
                          title: '<center>Laporan Komentar</center>',
                          exportOptions: {
                            columns: [0,1,2]
                          },
                          customize: function (win){
                            $(win.document.body)
                                .css( 'font-size', '10pt' )
                                .css( 'background-color', 'white')
         
                            $(win.document.body).find( 'table' )
                                .addClass( 'compact' )
                                .css( 'font-size', 'inherit' );
                          }
                        }
                    ]

            });

            $('#laporan_pembayaran').DataTable({
                "pageLength": 50,
                "order": [0, "asc"],
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                        {
                          extend: 'excel', 
                          title: 'Laporan Pembayaran',
                          exportOptions: {
                            columns: [0,1,3,4,5,6,7,8,9]
                          }
                        },
                        {
                          extend: 'pdf', 
                          title: 'Laporan Pembayaran',
                          exportOptions: {
                            columns: [0,1,3,4,5,6,7,8,9]
                          }
                        },
                        {
                          extend: 'print',
                          title: '<center>Laporan Pembayaran</center>',
                          exportOptions: {
                            columns: [0,1,3,4,5,6,7,8,9]
                          },
                          customize: function (win){
                            $(win.document.body)
                                .css( 'font-size', '10pt' )
                                .css( 'background-color', 'white')
         
                            $(win.document.body).find( 'table' )
                                .addClass( 'compact' )
                                .css( 'font-size', 'inherit' );
                          }
                        }
                    ]

            });

            $('#laporan_transaksi').DataTable({
                "pageLength": 50,
                "order": [0, "asc"],
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                        {
                          extend: 'excel', 
                          title: 'Laporan Transaksi',
                          exportOptions: {
                            columns: [0,1,2,3,4,5,6]
                          }
                        },
                        {
                          extend: 'pdf', 
                          title: 'Laporan Transaksi',
                          exportOptions: {
                            columns: [0,1,2,3,4,5,6]
                          }
                        },
                        {
                          extend: 'print',
                          title: '<center>Laporan Transaksi</center>',
                          exportOptions: {
                            columns: [0,1,2,3,4,5,6]
                          },
                          customize: function (win){
                            $(win.document.body)
                                .css( 'font-size', '10pt' )
                                .css( 'background-color', 'white')
         
                            $(win.document.body).find( 'table' )
                                .addClass( 'compact' )
                                .css( 'font-size', 'inherit' );
                          }
                        }
                    ]

            });
        });
    </script>

</body>

</html>