@extends('layouts.dashboard')

@section('title')
    Store Dashboard Product Detail
@endsection

@section('content')
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Create New Product</h2>
    <p class="dashboard-subtitle">Create your own product</p>
    </div>
    <div class="dashboard-content">
    <div class="row">
        <div class="col-12">
        <form action="">
            <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" />
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                    <label>Kategori</label>
                    <select name="category" class="form-control">
                        <option value="" disabled>
                        Select Category
                        </option>
                    </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                    <label>Description</label>
                    <textarea
                        class="form-control"
                        style="resize: none; height: 130px"
                    ></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                    <label>Thumbnails</label>
                    <input type="file" class="form-control" />
                    <p class="text-muted">
                        You can select more than one file
                    </p>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col text-right">
                    <button
                    type="submit"
                    class="btn btn-success px-5"
                    >
                    Save Now
                    </button>
                </div>
                </div>
            </div>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>
</div>
@endsection

@push('addon-script')
    <script>
      function thisFileUpload() {
        document.getElementById("file").click();
      }
    </script>
@endpush