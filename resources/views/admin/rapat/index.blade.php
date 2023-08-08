@extends('admin.layouts.main')
@section('content2')
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#table-rapat').DataTable();
        });
    </script>
@endpush
