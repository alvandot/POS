
<script src="{{ asset('assets/js/plugins/sweetalert.min.js') }}"></script>

@if($errors->any())
@php
    $error = $errors->all();
@endphp
    <script type="text/javascript">
        swal.fire({
            icon: "error",
            title: 'Error',
            text: '{{$error[0]}}'
        })
    </script>
@elseif (isset($success))
    <script type="text/javascript">
        swal.fire({
            icon: "success",
            title: 'Success',
            text: '{{$success}}'
        })
    </script>
@endif
