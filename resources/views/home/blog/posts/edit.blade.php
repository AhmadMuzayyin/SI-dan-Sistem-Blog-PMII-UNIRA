@extends('home.template.main')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Blog Posts</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item"><a href="{{ url('/blog/posts') }}">Posts</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    {{-- Form --}}
                    <form class="row g-3 needs-validation{{ $errors->any() ? 'was-validated' : '' }}" id="form"
                        action="{{ url('/blog/post/update') . '/' . $data->id }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Edit Post</h5>
                                    <a href="{{ url('/blog/posts') }}" role="button" class="btn btn-secondary mb-2">
                                        <i class="bi bi-arrow-left-circle"></i> Back
                                    </a>
                                    <div class="row g-3">
                                        <div class="col-lg-8 col-md-8 col-sm-12">
                                            <label for="title" class="visually-hidden">Title</label>
                                            <input type="text"
                                                class="form-control @error('title_post') is-invalid @enderror"
                                                id="title" name="title_post" placeholder="Title"
                                                value="{{ $data->title_post ?? '' }}" required>
                                            @error('title_post')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <button type="submit" class="btn btn-sm btn-warning mb-3" name="publish_status" value="0">
                                                <i class="bi bi-file-earmark-font"></i> Draft
                                            </button>
                                            <button type="submit" class="btn btn-sm btn-primary mb-3" name="publish_status" value="1">
                                                <i class="bi bi-globe"></i> Publish
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-2">
                                        <div class="col-lg-8 col-md-8 col-sm-12">
                                            <label for="image" class="visually-hidden">Image/Tumbnail</label>
                                            <input type="file"
                                                class="form-control @error('image_post') is-invalid @enderror"
                                                id="image" name="image_post">
                                            <small class="text-danger" style="font-style: italic; font-size: 80%">
                                                Only image with extension .jpg .jpeg .png &
                                                Max 5Mb.
                                            </small>
                                            @error('image_post')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Trix Editor -->
                                    <input id="body" type="hidden" name="body_post"
                                        value="{{ $data->body_post ?? 'Write your idea in here' }}" required>
                                    <trix-editor input="body"></trix-editor>
                                    <!-- End Trix Editor Default -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <label for="validationCustom03" class="form-label">Categories</label>
                                    <select class="form-select @error('category') is-invalid @enderror"
                                        aria-label="category blog" name="category" required>
                                        <option>Select your content category</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $data->category_id == $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <label for="tags" class="my-2">Select you content tags</label>
                                    @foreach ($tags as $key => $item)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="tag[]"
                                                value="{{ $item->id }}" id="{{ $item->slug_tag }}"
                                                <?php
                                                foreach ($post_tag as $key => $value) {
                                                    echo $key == $item->id ? 'checked' : '';
                                                }
                                                ?>>
                                            <label class="form-check-label" for="{{ $item->slug_tag }}">
                                                {{ $item->name_tag }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div>
                                <img src="{{ url('storage/uploads/images') . '/' . $data->images }}" alt="{{ $data->images }}"
                                    width="100%">
                            </div>
                        </div>
                    </form><!-- End Custom Styled Validation -->
                    {{-- End Form --}}

                </div>
            </div>
        </section>

    </main>
@endsection
@push('script')
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }

        trix-toolbar [data-trix-button-group="history-tools"] {
            display: none;
        }

        trix-toolbar [data-trix-action="decreaseNestingLevel"] {
            display: none;
        }

        trix-toolbar [data-trix-action="increaseNestingLevel"] {
            display: none;
        }
    </style>
@endpush
