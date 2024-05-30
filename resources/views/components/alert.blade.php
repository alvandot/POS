
<script src="{{ asset('assets/js/plugins/sweetalert.min.js') }}"></script>

@push('scripts')

@endpush
@if(session('errors'))
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
@elseif(session('success'))
    <script type="text/javascript">
        swal.fire({
            icon: "success",
            title: 'Success',
            text: '{{ session('success') }}'
        })
    </script>
@endif

