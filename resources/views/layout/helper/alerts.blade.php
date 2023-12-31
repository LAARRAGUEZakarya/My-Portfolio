@php
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');
@endphp

{{-- Swal --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    window.Toast = Swal.mixin({
        toast: true,
        position: 'top',

        iconColor: 'white',
        customClass: {
            popup: 'colored-toast'
        },
        showConfirmButton: false,
        timer: 4000,
        timerProgressBar: true
    });
</script>


{{-- test --}}


@if (session()->has('success'))
    <script>
        window.Toast.fire({
            icon: "success",
            background:'#695AA6',
            color:'white',
            text: "{!! session()->get('success') !!}",
        });
    </script>
@endif

@if (session()->has('error'))
    <script>
        window.Toast.fire({
            background:'#FF0F0F',
            color:'white',
            icon: "error",
            text: "{!! session()->get('error') !!}",
        });
    </script>
@endif
@if (count($errors) > 0)
    <script type="text/javascript">
        window.Toast.fire({
            background:'#FF0F0F',
            color:'white',
            icon: 'error',
            text: "Something went wrong",
        })
    </script>
@endif
