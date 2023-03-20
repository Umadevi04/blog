<!-- jQuery -->
<script src="{{ asset('webadmin/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('webadmin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
{{-- <script>
    $(document).ready(function() {
        $('#category').on('change', function(e) {
            console.log(e);
            var cat_id = e.target.value;
            //console.log(cat_id);
            //ajax
            $.ajax({
                url: 'get_subcat',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'POST',
                data: {
                    cat_id: cat_id
                },
                success: function(data) {
                    console.log('succes: ' + data);
                    // $('select[name="subcategory"]').append('<option value=" ' + key + '">' + value + '</option>');
                    $('#subcategory').html(
                        '<option value="">Select a subcategory</option>');
                    $.each(data, function(index, subcategory) {
                        $('#subcategory').append('<option value="' + subcategory
                            .id + '">' + subcategory.name + '</option>');
                    });
                }
            });

        });

        $('#comment-form').on('click', function (e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: '/comments',
                type: 'POST',
                data: formData,
                success: function(response) {
                // Do something with the response
                }
            });
        });
        // $('#comment-form').submit(function(e) {
        //     e.preventDefault();
        //     var formData = $(this).serialize();
        //     $.ajax({
        //         url: '/comments',
        //         type: 'POST',
        //         data: formData,
        //         success: function(response) {
        //             // Do something with the response
        //         }
        //     });
        // });
        $.ajax({
            url: '/posts/{{ $post->id }}/comments',
            type: 'GET',
            success: function(response) {
                $('#comments').html(response);
            }
        });
    });
</script> --}}
<!-- DataTables  & Plugins -->
<script src="{{ asset('webadmin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('webadmin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('webadmin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('webadmin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('webadmin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('webadmin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('webadmin/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('webadmin/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('webadmin/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('webadmin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('webadmin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('webadmin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
    $(function() {
        //   $("#example1").DataTable({
        //     "responsive": true, "lengthChange": false, "autoWidth": false,
        //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        //   }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        // $('#example2').DataTable({
        //   "paging": true,
        //   "lengthChange": false,
        //   "searching": false,
        //   "ordering": true,
        //   "info": true,
        //   "autoWidth": false,
        //   "responsive": true,
        // });
    });
</script>
