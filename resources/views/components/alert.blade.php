@if (session('success'))
                    <script>
                        swal("Good job!", "{{ session('success') }}", "success")
                    </script>
                @endif

                @if (session('error'))
                    <script>
                        swal("Oops...!", "{{ session('error') }}", "error")
                    </script>
                @endif