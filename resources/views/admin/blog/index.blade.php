@extends('admin.layouts.main')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <button class="btn btn-primary mt-2" type="button" data-bs-toggle="modal" data-bs-target="#addNew">
                tambah blog baru</button>
        </div>
        <div class="table mt-2">
            <table class="table table-bordered table-striped" id="table-blog">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tanggal Post</th>
                        <th>Foto</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->tanggal_post }}</td>
                            <td><img src="{{ url('storage/' . $item->foto) }}"
                                    style="width: 50px; height: 50px; object-fit: cover;" alt="gambar"></td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                <div class="d-flex align-items-center gap-1">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#edit{{ $item->id }}"
                                        class="btn btn-warning">Edit</button>
                                    <form action="/blog/{{ $item->id }}" method="post" class="delete-form">
                                        @method('DELETE')
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <button class="btn btn-danger" type="submit">
                                            <i class="fa-solid fa-trash-can"></i> Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <script>
                        const deleteButtons = document.querySelectorAll('.delete-button');

                        deleteButtons.forEach(button => {
                            button.addEventListener('click', function(event) {
                                event.preventDefault();

                                const id = this.parentNode.querySelector('input[name="id"]').value;

                                Swal.fire({
                                    title: 'Hapus Data?',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#d33',
                                    cancelButtonColor: '#3085d6',
                                    confirmButtonText: 'Hapus',
                                    cancelButtonText: 'Batal',
                                    showCloseButton: false,
                                    allowOutsideClick: false,
                                    allowEscapeKey: false,
                                    customClass: {
                                        container: 'my-swal'
                                    }
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        this.parentNode.action = '/blog/' + id;
                                        this.parentNode.submit();
                                    }
                                });
                            });
                        });
                    </script>
                </tbody>
            </table>
        </div>
    </div>
@endsection
{{-- modal add new blog --}}
<div class="modal fade" id="addNew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Blog Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/save" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_post">Tanggal Post</label>
                        <input type="date" class="form-control" id="tanggal_post" name="tanggal_post" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        $(document).ready(function() {
            $('#table-blog').DataTable();
        });
    </script>
@endpush