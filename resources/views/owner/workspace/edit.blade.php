@extends('layouts.dashboard_owner')

@section('page_title', 'edit workspace')
@section('breadcramp_title', 'Edit Workspace')
@section('content')
    <!-- form start here -->
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Edit Workspace</h4>

                <form action="{{ route('workspace.update',$workspace->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="put">

                    <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Desktop Name</label>
                        <input class="form-control" type="text" name="name" value="{{ $workspace->name }}" placeholder="Recall the previously Name"
                            id="example-text-input">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Description</span>
                        </div>
                        <textarea class="form-control" name="description" placeholder=" Recall the previously written text "
                            aria-label="With textarea">
                            {{$workspace->description}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">City</label>
                        <select name="city_id" class="form-control">
                            {{-- <option>{{ $workspace->city->city_name }}</option> --}}
                            @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">
                                        {{ $city->city_name }}
                                    </option>
                                @endforeach
                        </select>
                    </div>
                      {{-- Workspace Type --}}
                      <div class="form-group">
                        <label class="col-form-label">type</label>
                        <select class="form-control" name="type" >
                            <option>{{ $workspace->type }}</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" name="price" value="{{ $workspace->price }}"
                            aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text">$</span>
                            <span class="input-group-text">{{ $workspace->price }}</span>
                        </div>
                    </div>
                    <br>

                    {{-- Workspace size --}}
                    <div class="form-group">
                        <label for="example-text-input" class="col-form-label">WorkSpace Width - in meter</label>
                        <input class="form-control" type="text" name="width" value="{{ $workspace->width }}"
                            id="example-text-input">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input" class="col-form-label">WorkSpace height  - in meter</label>
                        <input class="form-control" type="text" name="height" value="{{ $workspace->height }}"
                            id="example-text-input">
                    </div>

                    <br>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="gallery[]" accept="image/*" class="custom-file-input" id="inputGroupFile01" multiple>
                            <label class="custom-file-label" for="inputGroupFile01">Workspace Image</label>
                        </div>
                    </div>
                    <div>
                        <label class="col-form-label">Available features :</label>

                        @foreach (config('features') as $key => $value)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="features[]"
                                    id="{{ $key }}" value="{{ $value }}"
                                    @if (in_array($value, $workspace->features))
                                        checked
                                    @endif>
                                <label class="custom-control-label" for="{{ $key }}">
                                    {{ $value }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save</button>
                </form>
            </div>
        </div>
    </div>
    <!-- form end here-->
@endsection
