@extends('admin.layouts.app')

@section('title')
    <title>{{ trans('message.edit_book') }}</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card card-primary mt-5">
                        <div class="card-header">
                            <h3 class="card-title">{{ trans('message.edit_book') }}</h3>
                        </div>

                        <form method="POST" action="">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>{{ trans('message.title') }}</label>
                                    <input type="text" class="form-control" name="name" value="">
                                </div>

                                <div class="form-group">
                                    <label>{{ trans('message.description') }}</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>{{ trans('message.image') }}</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                                        <label class="custom-file-label"
                                            for="inputGroupFile02"></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>{{ trans('message.pages') }}</label>
                                    <input type="text" class="form-control" name="name" value="">
                                </div>

                                <div class="form-group">
                                    <label>{{ trans('message.available_books') }}</label>
                                    <input type="text" class="form-control" name="name" value="">
                                </div>

                                <div class="form-group">
                                    <label>{{ trans('message.category') }}</label>
                                    <select class="form-control select2">
                                        <option selected="selected"></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>{{ trans('message.author') }}</label>
                                    <select class="form-control select2">
                                        <option selected="selected"></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>{{ trans('message.publisher') }}</label>
                                    <select class="form-control select2">
                                        <option selected="selected"></option>
                                    </select>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">{{ trans('message.submit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
