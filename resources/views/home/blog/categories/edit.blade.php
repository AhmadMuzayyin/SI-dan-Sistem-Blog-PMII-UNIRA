@extends('home.template.main')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Blog Posts</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item"><a href="{{ url('/blog/categories') }}">Categories</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Edit Category</h5>
                            <a href="{{ url('/blog/categories') }}" role="button" class="btn btn-secondary mb-2">
                                <i class="bi bi-arrow-left-circle"></i> Back
                            </a>
                        </div>
                        <div class="card-body">
                            {{-- Form --}}
                            <!-- Custom Styled Validation -->
                            <form class="row g-3 needs-validation {{ $errors->any() ? 'was-validated' : '' }}"
                                action="{{ url('/blog/category/update') . '/' . $data->id }}" method="POST">
                                @method('patch')
                                @csrf
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Category Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ $data->name }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="slug" class="form-label">Category Slug</label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                        id="slug" name="slug" value="{{ $data->slug }}" required>
                                    @error('slug')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form><!-- End Custom Styled Validation -->
                            {{-- End Form --}}
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
@push('script')
    <script>
        document.getElementById('name').onkeyup = function(){
            let name = document.getElementById('name');
            let slug = document.getElementById('slug');
            slug.value = name.value.toLowerCase().replaceAll(' ', '-');
        }
    </script>
@endpush