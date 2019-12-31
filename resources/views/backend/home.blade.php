@extends('master')
@section('title', 'Admin Control Panel')

@section('content')

    <div class="container">
        <div class="row">

            <div class="card-columns mt-5">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Manage User</h5>
                    <p class="card-text">{!! link_to_action('Admin\UsersController@index', 'All Users', null, ['class' => 'btn btn-warning']) !!}</p>
                    <p class="card-text"><small class="text-muted">-0-</small></p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Manage Roles</h5>
                    <p class="card-text">{!! link_to_action('Admin\RolesController@index', 'All Roles', null, ['class' => 'btn btn-warning']) !!}</p>
                    <p class="card-text">{!! link_to_action('Admin\RolesController@create', 'Create a Role', null, ['class' => 'btn btn-success']) !!}</p>
                    <p class="card-text"><small class="text-muted">-0-</small></p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Manage Posts</h5>
                    <p class="card-text">{!! link_to_action('Admin\PostsController@index', 'All Posts', null, ['class' => 'btn btn-warning']) !!}</p>
                    <p class="card-text">{!! link_to_action('Admin\PostsController@create', 'Create a Post', null, ['class' => 'btn btn-success']) !!}</p>
                    <p class="card-text"><small class="text-muted">-0-</small></p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Manage Categories</h5>
                    <p class="card-text">{!! link_to_action('Admin\CategoriesController@index', 'All Categoryies', null, ['class' => 'btn btn-warning']) !!}</p>
                    <p class="card-text">{!! link_to_action('Admin\CategoriesController@create', 'Create a Category', null, ['class' => 'btn btn-success']) !!}</p>
                    <p class="card-text"><small class="text-muted">-0-</small></p>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
