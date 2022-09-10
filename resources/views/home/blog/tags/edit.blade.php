@extends('home.template.main')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Blog Posts</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item"><a href="{{ url('/blog/tags') }}">Tags</a></li>
                    <li class="breadcrumb-item active"><a href="{{ url('/blog/tag/edit') }}">Edit</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Edit Tag</h5>
                            <a href="{{ url('/blog/tags') }}" role="button" class="btn btn-secondary mb-2">
                                <i class="bi bi-arrow-left-circle"></i> Back
                            </a>
                        </div>
                        <div class="card-body">
                            {{-- Form --}}
                            <!-- Custom Styled Validation -->
                            <form class="row g-3 needs-validation {{ $errors->any() ? 'was-validated' : '' }}"
                                action="{{ url('/blog/tag/update') . '/' . $data->id }}" method="POST">
                                @method('patch')
                                @csrf
                                <div class="col-md-6">
                                    <label for="name_tag" class="form-label">Tag Name</label>
                                    <input type="text" class="form-control @error('name_tag') is-invalid @enderror"
                                        id="name_tag" name="name_tag" value="{{ $data->name_tag }}" required>
                                    @error('name_tag')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="slug_tag" class="form-label">Tag Slug</label>
                                    <input type="text" class="form-control @error('slug_tag') is-invalid @enderror"
                                        id="slug_tag" name="slug_tag" value="{{ $data->slug_tag }}" required>
                                    @error('slug_tag')
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
        document.getElementById('name_tag').onkeyup = function(){
            let name = document.getElementById('name_tag');
            let slug = document.getElementById('slug_tag');
            slug.value = name.value.toLowerCase().replaceAll(' ', '-');
        }
    </script>
@endpush