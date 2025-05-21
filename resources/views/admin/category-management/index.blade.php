@extends('layout.app')

@section('title', $title)

@section('content')
    <main>

        <div class="p-top-90 p-bottom-90 bg-gray-gradient aos-init aos-animate" data-aos="fade">

            <!-- Title -->
            <section class="container">
                <div class="d-lg-flex align-items-lg-end pb-4">
                    <div class="block-title me-auto">
                        <small class="sub-title">Category</small>
                        <h1 class="display-5 title">Management</h1>
                    </div>
                </div>
            </section>
            <!-- /Title -->

            <!-- Dashboard -->
            <section class="container">
                <div class="row g-0 g-xl-8">
                    <div class="col-12 col-xl-9">
                        <div class="pe-xl-4 me-xl-2">
                            <!-- user list -->
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between border-bottom pb-4 mb-4">
                                        <div>
                                            <h2 class="h3 ff-primary mb-0 text-body-emphasis">Resent Categrory</h2>
                                            @if (session('success'))
                                                <small class="text-danger">{{ session('success') }}</small>
                                            @endif
                                        </div>
                                        <btn class="btn btn-primary btn-uppercase mnw-180" data-bs-toggle="modal"
                                            data-bs-target="#categoryModal">
                                            <span>Add New Category</span>
                                        </btn>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-center">
                                                <tr class="table-light">
                                                    <th scope="col">
                                                        <strong>NO</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Name</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Slug</strong>
                                                    </th>
                                                    <th scope="col">
                                                        <strong>Action</strong>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = $all->firstItem(); @endphp
                                                @foreach ($all as $single)
                                                    <tr>
                                                        <td class="text-center">
                                                            <span>{{ $no++ }}</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <small class="text-nowrap">{{ $single->nama_kategori }}</small>
                                                        </td>
                                                        <td class="text-center">
                                                            <small class="text-nowrap">{{ $single->slug }}</small>
                                                        </td>
                                                        <td class="text-center">
                                                            <form
                                                                action="{{ route('admin.category.delete', ['id' => $single->id]) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                <button type="submit"
                                                                    onclick="return confirm('Are you sure you want to delete this category?')"
                                                                    class="circle-icon circle-icon-link circle-icon-sm"
                                                                    title="hapus">
                                                                    <i class="hicon hicon-trash"></i>
                                                                </button>
                                                            </form>
                                                            <button
                                                                class="circle-icon circle-icon-link circle-icon-sm mt-2 mt-md-0 btn-edit"
                                                                title="edit" data-nama="{{ $single->nama_kategori }}"
                                                                data-id="{{ $single->id }}" data-bs-toggle="modal"
                                                                data-bs-target="#editCategoryModal">
                                                                <i class="hicon hicon-mmb-reviews-b"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{ $all->links('vendor.pagination.bootstrap-5') }}
                                </div>
                            </div>
                            <!-- /Booking list -->
                        </div>
                    </div>

                    @include('admin.account-menu')
                </div>
            </section>
            <!-- /Dashboard -->
        </div>

    </main>

    {{-- add category modal --}}
    <div class="modal fade" id="categoryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('admin.category.submit') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">New Category
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-4">
                            <label class="form-label" for="nama_kategori">Category Name<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control shadow-sm" id="nama_kategori" name="nama_kategori"
                                required placeholder="Pantai">
                            @error('nama_kategori')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end add category modal --}}

    {{-- update category modal --}}
    <div class="modal fade" id="editCategoryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="" method="POST" id="editForm">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Category
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-4">
                            <label class="form-label" for="edit_nama_kategori">Category Name<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control shadow-sm" id="edit_nama_kategori"
                                name="edit_nama_kategori" required placeholder="Pantai">
                            @error('edit_nama_kategori')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end update category modal --}}

<script>
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.btn-edit');
    const input = document.getElementById('edit_nama_kategori');
    const form = document.getElementById('editForm');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const id = this.dataset.id;
            const nama = this.dataset.nama;

            input.value = nama;
            form.action = `/admin/category/update/${id}`;
        });
    });
});
</script>


@endsection
